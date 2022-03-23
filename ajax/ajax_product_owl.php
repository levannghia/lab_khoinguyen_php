<?php 
	include "ajax_config.php";
	$idList = (isset($_GET['idList']) && $_GET['idList'] > 0) ? htmlspecialchars($_GET['idList']) : 0;
	$idCat = (isset($_GET['idCat']) && $_GET['idCat'] > 0) ? htmlspecialchars($_GET['idCat']) : 0;

	/* Math url */
	if($idList)
	{
		$where .= " and id_list = ".$idList;
	}
	if($idCat)
	{
		$where .= " and id_cat = ".$idCat;
	}

	/* Get data */
	$sql = "select * from #_product where type='san-pham' $where and hienthi > 0 order by stt,id desc";
    $product = $cache->getCache($sql,'result',7200);

	/* Count all data */
	$countItems = count($cache->getCache($sql,'result',7200));
?>
<?php if($countItems) { ?>
	<div class="owl-carousel owl-theme owl__spnb-<?=$idList?>">
		<?php for($i=0;$i<count($product);$i++) { ?>
			<a href="<?=$product[$i][$sluglang]?>" class="sanpham__items" title="<?=$product[$i]['tenvi']?>">
				<div class="sanpham__img img_hover scale-img">
					<img width="280" height="320" src="<?=THUMBS?>/280x320x1/<?=UPLOAD_PRODUCT_L.$product[$i]['photo']?>" alt="<?=$product[$i]['ten'.$lang]?>" onerror="this.src='<?=THUMBS?>/280x320x1/assets/images/noimage.png';" width="100%">
				</div>
				<div class="sanpham__title"><span class="text-split-2"><?=$product[$i]['tenvi']?></span></div>
				<div class="sanpham__price"> Giá: 
					<?php if($product[$i]['giamoi']) { ?>
                        <span class="sanpham__price_new"><?=$func->format_money($product[$i]['giamoi'])?></span>
                        <span class="sanpham__price_old"><?=$func->format_money($product[$i]['gia'])?></span>
                    <?php } else { ?>
                        <span class="sanpham__price_new"><?=($product[$i]['gia']) ? $func->format_money($product[$i]['gia']) : lienhe?></span>
                    <?php } ?>
				</div>
			</a>
		<?php } ?>
		</div>
	</div>
	
	<script>
        if($(".owl__spnb-<?=$idList?>").exists())
		{
			$('.owl__spnb-<?=$idList?>').owlCarousel({
				rewind: true,
				autoplay: true,
				loop: false,
				lazyLoad: true,
				mouseDrag: true,
				touchDrag: true,
				smartSpeed: 600,
				autoplaySpeed: 600,
            	autoplayTimeout: 3000,
				nav: false,
				dots: false,
				responsiveClass:true,
				responsiveRefreshRate: 200,
				responsive: {
					0:{
						items: 2,
						margin: 10,
						dots: true,
					},
					600:{
						items: 2,
						margin: 10,
						dots: true,
					},
					1000:{
						items: 4,
						margin: 18,
					}
				}
			});
			$('.bnt_prev-<?=$idList?>').click(function() {
				$('.owl__spnb-<?=$idList?>').trigger('prev.owl.carousel');
			});
			$('.bnt_next-<?=$idList?>').click(function() {
				$('.owl__spnb-<?=$idList?>').trigger('next.owl.carousel');
			});
		}
	</script>
<?php } else {?>
	<i class="d-block text-center py-3">Nội dung đang cập nhật!</i>
<?php } ?>
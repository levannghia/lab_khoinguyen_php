<?php 
	include "ajax_config.php";

	/* Paginations */
	include LIBRARIES."class/class.PaginationsAjax.php";
	$pagingAjax = new PaginationsAjax();
	$pagingAjax->perpage = (htmlspecialchars($_GET['perpage']) && $_GET['perpage'] > 0) ? htmlspecialchars($_GET['perpage']) : 1;
	$eShow = htmlspecialchars($_GET['eShow']);
	$idList = (isset($_GET['idList']) && $_GET['idList'] > 0) ? htmlspecialchars($_GET['idList']) : 0;
	$idCat = (isset($_GET['idCat']) && $_GET['idCat'] > 0) ? htmlspecialchars($_GET['idCat']) : 0;
	$p = (isset($_GET['p']) && $_GET['p'] > 0) ? htmlspecialchars($_GET['p']) : 1;
	$start = ($p-1) * $pagingAjax->perpage;
	$pageLink = "ajax/ajax_product.php?perpage=".$pagingAjax->perpage;
	$tempLink = "";
	$where = "";

	/* Math url */
	if($idList)
	{
		$tempLink .= "&idList=".$idList;
		$where .= " and id_list = ".$idList;
	}
	if($idCat)
	{
		$tempLink .= "&idCat=".$idCat;
		$where .= " and id_cat = ".$idCat;
	}
	$tempLink .= "&p=";
	$pageLink .= $tempLink;

	/* Get data */
	$sql = "select * from #_product where type='san-pham' $where and hienthi > 0 and noibat > 0 order by stt,id desc";
	// dd($sql);
	$sqlCache = $sql." limit $start, $pagingAjax->perpage";
    $product = $cache->getCache($sqlCache,'result',7200);

	/* Count all data */
	$countItems = count($cache->getCache($sql,'result',7200));

	/* Get page result */
	$pagingItems = $pagingAjax->getAllPageLinks($countItems, $pageLink, $eShow);

	/* Setting */
	$setting = $d->rawQueryOne("select * from #_setting limit 0,1");
	$optsetting = (isset($setting['options']) && $setting['options'] != '') ? json_decode($setting['options'],true) : null;
	
	$row_detail = $d->rawQueryOne("select tenkhongdauvi from #_product_list where type = ? and id = ? and hienthi > 0", array('san-pham',$idList));

?>
<?php if($countItems) { ?>
	<div class="grid_product">
		<?php for($i=0;$i<count($product);$i++) { ?>
			<div class="spnb__item" title="<?=$product[$i]['ten'.$lang]?>">
				<div class="spnb__img_sp">
					<a href="<?=$product[$i][$sluglang]?>" class="img_hover scale-img">
						<img width="275" height="300" src="<?=WATERMARK?>/product/275x300x1/<?=UPLOAD_PRODUCT_L.$product[$i]['photo'] ?>" onerror="this.src='<?=THUMBS?>/275x300x2/assets/images/noimage.png';">
					</a>
				</div>
				<a href="<?=$product[$i][$sluglang]?>" class="spnb__title"><span class="text-split-1"><?=$product[$i]['ten'.$lang]?></span></a>
				<a title="Gọi ngay" href="tel:<?=preg_replace('/[^0-9]/','',$optsetting['hotline']);?>" class="spnb__call">Liên hệ: <span><?=$optsetting['hotline']?></span></a>
			</div>
		<?php } ?>
		</div>
	</div>
	<?php if($pagingItems){?>
		<a href="<?=$row_detail[$sluglang]?>" class="view_more">Xem tất cả</a>
	<?php }?>
<?php } else {?>
	<i class="d-block text-center py-3">Nội dung đang cập nhật!</i>
<?php } ?>
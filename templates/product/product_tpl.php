<div class="container">
    <div class="wrap_title page">
        <div class="title_main"><?=(@$title_cat!='')?$title_cat:@$title_crumb?></div>
    </div>
</div>
<div class="container content-main w-clear">
    <div class="grid_product">
        <?php if(isset($product) && count($product) > 0) { for($i=0;$i<count($product);$i++) { ?>
            <a href="<?=$product[$i][$sluglang]?>" class="spnb__item" title="<?=$product[$i]['ten'.$lang]?>">
				<div class="spnb__img_sp img_hover scale-img">
                    <img width="375" height="335" src="<?=THUMBS?>/375x335x1/<?=UPLOAD_PRODUCT_L.$product[$i]['photo'] ?>" onerror="this.src='<?=THUMBS?>/375x335x2/assets/images/noimage.png';">
				</div>
				<div class="spnb__title"><span class="text-split-2"><?=$product[$i]['ten'.$lang]?></span></div>
				<div class="spnb__price">Giá: 
                    <?php if($product[$i]['giamoi']) { ?>
                        <span class="spnb__price_new"><?=$func->format_money($product[$i]['giamoi'])?></span>
                        <span class="spnb__price_old"><?=$func->format_money($product[$i]['gia'])?></span>
                    <?php } else { ?>
                        <span class="spnb__price_new"><?=($product[$i]['gia']) ? $func->format_money($product[$i]['gia']) : lienhe?></span>
                    <?php } ?>
                </div>
			</a>
        <?php } } else { ?>
            <div class="alert alert-warning" role="alert">
                <strong><?=khongtimthayketqua?></strong>
            </div>
        <?php } ?>
    </div>
    <div class="clear"></div>
    <div class="pagination-home py-5"><?=(isset($paging) && $paging != '') ? $paging : ''?></div>
</div>
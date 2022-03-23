<div class="container">
    <div class="wrap_title page">
        <div class="title_main"><?=(@$title_cat!='')?$title_cat:@$title_crumb?></div>
    </div>
</div>

<div class="container">
    <div class="content-main w-clear">
        <div class="grid_sanpham">
            <?php if(count($product)>0) { for($i=0;$i<count($product);$i++) { ?>
                <a href="<?=$product[$i][$sluglang]?>" class="sanpham__items" title="<?=$product[$i]['tenvi']?>">
                    <div class="sanpham__img img_hover scale-img">
                        <img onerror="this.src='<?=THUMBS?>/275x275x1/assets/images/noimage.png';" src="<?=THUMBS?>/275x275x1/<?=UPLOAD_PRODUCT_L.$product[$i]['photo']?>" alt="<?=$items[$i]['ten'.$lang]?>" width="100%">
                    </div>
                    <div class="sanpham__title"><span class="text-split-2"><?=$product[$i]['tenvi']?></span></div>
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
</div>
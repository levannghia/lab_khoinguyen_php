<div class="container grid-pro-detail w-clear mt-4">
    <div class="left-pro-detail w-clear">
        <a id="Zoom-1" class="MagicZoom" data-options="zoomMode: off; hint: off; rightClick: true; selectorTrigger: hover; expandCaption: false; history: false;" href="<?=THUMBS?>/550x600x1/<?=UPLOAD_PRODUCT_L.$row_detail['photo']?>" title="<?=$row_detail['ten'.$lang]?>"><img onerror="this.src='<?=THUMBS?>/550x600x2/assets/images/noimage.png';" src="<?=THUMBS?>/550x600x1/<?=UPLOAD_PRODUCT_L.$row_detail['photo']?>" alt="<?=$row_detail['ten'.$lang]?>"></a>
        <?php if($hinhanhsp) { if(count($hinhanhsp) > 0) { ?>
            <div class="gallery-thumb-pro">
                <p class="control-carousel prev-carousel prev-thumb-pro transition"><i class="fas fa-chevron-left"></i></p>
                <div class="owl-carousel owl-theme owl-thumb-pro">
                    <a class="thumb-pro-detail" data-zoom-id="Zoom-1" href="<?=THUMBS?>/550x600x1/<?=UPLOAD_PRODUCT_L.$row_detail['photo']?>" title="<?=$row_detail['ten'.$lang]?>"><img onerror="this.src='<?=THUMBS?>/550x600x2/assets/images/noimage.png';" src="<?=THUMBS?>/550x600x1/<?=UPLOAD_PRODUCT_L.$row_detail['photo']?>" alt="<?=$row_detail['ten'.$lang]?>"></a>
                    <?php foreach($hinhanhsp as $v) { ?>
                        <a class="thumb-pro-detail" data-zoom-id="Zoom-1" href="<?=THUMBS?>/550x600x1/<?=UPLOAD_PRODUCT_L.$v['photo']?>" title="<?=$row_detail['ten'.$lang]?>">
                            <img onerror="this.src='<?=THUMBS?>/550x600x2/assets/images/noimage.png';" src="<?=THUMBS?>/550x600x1/<?=UPLOAD_PRODUCT_L.$v['photo']?>" alt="<?=$row_detail['ten'.$lang]?>">
                        </a>
                    <?php } ?>
                </div>
                <p class="control-carousel next-carousel next-thumb-pro transition"><i class="fas fa-chevron-right"></i></p>
            </div>
        <?php } } ?>
    </div>

    <div class="right-pro-detail w-clear">
        <p class="title-pro-detail"><?=$row_detail['ten'.$lang]?></p>
        <div class="social-plugin social-plugin-pro-detail w-clear">
            <div class="addthis_inline_share_toolbox_qj48"></div>
            <div class="zalo-share-button" data-href="<?=$func->getCurrentPageURL()?>" data-oaid="<?=($optsetting['oaidzalo']!='')?$optsetting['oaidzalo']:'579745863508352884'?>" data-layout="1" data-color="blue" data-customize=false></div>
        </div>
        <div class="desc-pro-detail"><?=(isset($row_detail['mota'.$lang]) && $row_detail['mota'.$lang] != '') ? htmlspecialchars_decode($row_detail['mota'.$lang]) : ''?></div>
        <ul class="attr-pro-detail">
            <li class="w-clear"> 
                <label class="attr-label-pro-detail"><?=masp?>:</label>
                <div class="attr-content-pro-detail"><?=(isset($row_detail['masp']) && $row_detail['masp'] != '') ? $row_detail['masp'] : 0?></div>
            </li>
            <li class="w-clear">
                <label class="attr-label-pro-detail"><?=gia?>:</label>
                <div class="attr-content-pro-detail">
                    <?php if($row_detail['giamoi']) { ?>
                        <span class="price-new-pro-detail"><?=$func->format_money($row_detail['giamoi'])?></span>
                        <span class="price-old-pro-detail"><?=$func->format_money($row_detail['gia'])?></span>
                    <?php } else { ?>
                        <span class="price-new-pro-detail"><?=($row_detail['gia']) ? $func->format_money($row_detail['gia']) : lienhe?></span>
                    <?php } ?>
                </div>
            </li>
            <li class="w-clear"> 
                <label class="attr-label-pro-detail"><?=luotxem?>:</label>
                <div class="attr-content-pro-detail"><?=$row_detail['luotxem']?></div>
            </li>
        </ul>
    </div>

    <div class="clear"></div>

    <div class="tabs-pro-detail mt-4">
        <ul class="ul-tabs-pro-detail w-clear">
            <li class="active transition" data-tabs="info-pro-detail"><?=thongtinsanpham?></li>
            <li class="transition" data-tabs="commentfb-pro-detail"><?=binhluan?></li>
        </ul>
        <div class="content-tabs-pro-detail info-pro-detail active"><?=(isset($row_detail['noidung'.$lang]) && $row_detail['noidung'.$lang] != '') ? htmlspecialchars_decode($row_detail['noidung'.$lang]) : ''?></div>
        <div class="content-tabs-pro-detail commentfb-pro-detail"><div class="fb-comments" data-href="<?=$func->getCurrentPageURL()?>" data-numposts="3" data-colorscheme="light" data-width="100%"></div></div>
    </div>
</div>

<div class="container">
    <div class="wrap_title page">
        <div class="title_main"><?=sanphamcungloai?></div>
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
<div class="container">
    <div class="title_main page mt-2 py-4"><?=$row_detail['ten'.$lang]?></div>
</div>
<div class="container">
    <?php if($row_detail['noidungvi'] != "") { ?>
        <div class="album_contntet">
            <?=htmlspecialchars_decode($row_detail['noidungvi'])?>
        </div>
    <?php }?>
    <div class="content-main album-gallery w-clear">
        <div class="wrap_news_cat">
            <?php if(count($hinhanhsp)>0) { for($i=0;$i<count($hinhanhsp);$i++) { ?>
                <a class="album text-decoration-none" rel="album-<?=$row_detail['id']?>" href="<?=UPLOAD_PRODUCT_L.$hinhanhsp[$i]['photo']?>" title="<?=$row_detail['ten'.$lang]?>">
                    <p class="pic-album scale-img img_hover"><img onerror="this.src='<?=THUMBS?>/590x515x2/assets/images/noimage.png';" src="<?=THUMBS?>/590x515x1/<?=UPLOAD_PRODUCT_L.$hinhanhsp[$i]['photo']?>" alt="<?=$row_detail['ten'.$lang]?>"/></p>
                </a>
            <?php } } else { ?>
                <div class="alert alert-warning" role="alert">
                    <strong><?=khongtimthayketqua?></strong>
                </div>
            <?php } ?>
        </div>
    </div>
    <div class="share mb-5">
        <b><?=chiase?>:</b>
        <div class="social-plugin w-clear">
            <div class="addthis_inline_share_toolbox_qj48"></div>
            <div class="zalo-share-button" data-href="<?=$func->getCurrentPageURL()?>" data-oaid="<?=($optsetting['oaidzalo']!='')?$optsetting['oaidzalo']:'579745863508352884'?>" data-layout="1" data-color="blue" data-customize=false></div>
        </div>
    </div>
    <?php if(isset($product) && count($product) > 0) { ?>
        <div class="share othernews mb-5">
            <b><?=baivietkhac?>:</b>
            <ul class="list-news-other">
                <?php if(isset($product) && count($product) > 0) { for($i=0;$i<count($product);$i++) { ?>
                    <li><a class="text-decoration-none" href="<?=($product[$i]['link']) ? $product[$i]['link'] : $product[$i][$sluglang]?>" title="<?=$product[$i]['ten'.$lang]?>">
                        <?=$product[$i]['ten'.$lang]?>
                    </a></li>
                <?php } } ?>
            </ul>
            <div class="pagination-home"><?=(isset($paging) && $paging != '') ? $paging : ''?></div>
        </div>
    <?php } ?>
</div>
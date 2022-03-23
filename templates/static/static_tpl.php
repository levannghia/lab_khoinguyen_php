<div class="container">
    <div class="wrap_title page">
        <div class="title_main"><?=$static['ten'.$lang]?></div>
    </div>
</div>

<div class="container content-main w-clear">
    <?=(isset($static['noidung'.$lang]) && $static['noidung'.$lang] != '') ? htmlspecialchars_decode($static['noidung'.$lang]) : ''?>
</div>
<div class="container mb-4">
    <div class="share">
        <div class="container">
            <b><?=chiase?>:</b>
            <div class="social-plugin w-clear">
                <div class="addthis_inline_share_toolbox_qj48"></div>
                <div class="zalo-share-button" data-href="<?=$func->getCurrentPageURL()?>" data-oaid="<?=($optsetting['oaidzalo']!='')?$optsetting['oaidzalo']:'579745863508352884'?>" data-layout="1" data-color="blue" data-customize=false></div>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="wrap_title page">
	    <div class="title_main"><?=(@$title_cat!='')?$title_cat:@$title_crumb?></div>
    </div>
</div>
<div class="container content-main w-clear mb-5">
    <?php if(isset($video) && count($video) > 0) { for($i=0;$i<count($video);$i++) { ?>
        <a class="video text-decoration-none" data-fancybox="video" data-src="<?=$video[$i]['link_video']?>" title="<?=$video[$i]['ten'.$lang]?>">
            <p class="pic-video scale-img"><img onerror="this.src='<?=THUMBS?>/480x360x2/assets/images/noimage.png';" src="https://img.youtube.com/vi/<?=$func->getYoutube($video[$i]['link_video'])?>/0.jpg" alt="<?=$video[$i]['ten'.$lang]?>"/></p>
            <h3 class="name-video text-split"><?=$video[$i]['ten'.$lang]?></h3>
        </a>
    <?php } } else { ?>
        <div class="alert alert-warning" role="alert">
            <strong><?=khongtimthayketqua?></strong>
        </div>
    <?php } ?>
    <div class="clear"></div>
    <div class="pagination-home"><?=(isset($paging) && $paging != '') ? $paging : ''?></div>
</div>
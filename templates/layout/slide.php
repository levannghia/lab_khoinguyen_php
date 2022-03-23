<?php
	$slideShow = $d->rawQuery("select link,photo from #_photo where type = ? and hienthi = ?",array('slide',1));
?>
<div class="wrap_slidershow">
    <div class="slide_btn slide_prev">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-left" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M11.354 1.646a.5.5 0 0 1 0 .708L5.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0z"/>
        </svg>
    </div>
    <div class="slide__slideshow">
        <?php foreach($slideShow as $sl){?>
            <a href="<?=$sl['link']?>" class="item">
                <img width="1366" height="505" src="<?=THUMBS?>/1366x505x1/<?=UPLOAD_PHOTO_L.$sl['photo']?>" onerror="this.src='<?=THUMBS?>/1366x505x2/assets/images/noimage.png';">
            </a>
        <?php } ?>
    </div>
    <div class="slide_btn slide_next">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-right" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"/>
        </svg>
    </div>
</div>
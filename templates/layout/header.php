<header>
    <div class="container">
        <div class="flex_header">
            <div class="header_slogan"><marquee><?=$optsetting['slogan']?></marquee></div>
                      
        </div>
    </div>
    <div class="header_logo">
        <a href="index">
            <img width="140" height="120" src="<?= UPLOAD_PHOTO_L.$logo['photo'] ?>" onerror="this.src='<?=THUMBS?>/220x140x2/assets/images/noimage.png';">
        </a>
    </div>
</header>
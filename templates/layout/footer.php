<footer>
<!--
    <div class="footer_main">
        <div class="container">
            <div class="footer_main_flex">
                <div class="footer_col1">
                    <div class="footer_name"><?=$footer['ten'.$lang]?></div>
                    <div class="footer__noidung">
                        <?=htmlspecialchars_decode($footer['noidung'.$lang])?>
                    </div>
                </div>
                <div class="footer_col2">
                    <div class="footer_maps">
                        <?=$addons->setAddons('footer_map', 'footer-map', 10);?>
                    </div>
                </div>
                <div class="footer_col3">
                    <?=$addons->setAddons('fanpage_facebook', 'fanpage-facebook', 10);?>
                </div>
            </div>
        </div>
    </div> -->
    <div id="bottom">
        <div class="container">
            <div class="flex_bottom">
                <div class="copyright">Copyright © 2022 <span class="copyright_name"><?=$optsetting['copyright']?></span>. Design by Sotagroup.vn</div>
                <div class="footer_mxh">
                    <?php foreach($social as $s) { ?>
                        <a href="<?=$s['link']?>">
                            <img width="40" height="40" src="<?=UPLOAD_PHOTO_L.$s['photo']?>" onerror="this.src='<?=THUMBS?>/40x40x2/assets/images/noimage.png';">
                        </a>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</footer>

<?=$addons->setAddons('messages-facebook', 'messages-facebook', 10);?>

<?php if($optsetting['toado'] != ""){?>
    <a class="btn-google_map btn-frame text-decoration-none mobile_none" target="_blank"
        href="<?=$optsetting['toado']?>">
        <div class="animated infinite zoomIn kenit-alo-circle"></div>
        <div class="animated infinite pulse kenit-alo-circle-fill"></div>
        <i><img src="assets/images/google-map.png" alt="Google Map"></i>
    </a>
<?php }?>

<a class="btn-zalo btn-frame text-decoration-none" target="_blank" href="https://zalo.me/<?=preg_replace('/[^0-9]/','',$optsetting['zalo']);?>">
    <div class="animated infinite zoomIn kenit-alo-circle"></div>
    <div class="animated infinite pulse kenit-alo-circle-fill"></div>
    <i><img src="assets/images/zl.png" alt="Zalo"></i>
</a>
<a class="btn-phone btn-frame text-decoration-none" href="tel:<?=preg_replace('/[^0-9]/','',$optsetting['hotline']);?>">
    <div class="animated infinite zoomIn kenit-alo-circle"></div>
    <div class="animated infinite pulse kenit-alo-circle-fill"></div>
    <i><img src="assets/images/hl.png" alt="Hotline"></i>
</a>

<!-- Css Files -->
<?php if($source=='index'){
    $css->setCache("cached");
    $css->setCss("./assets/css/animate.compat.min.css");
    $css->setCss("./assets/bootstrap/bootstrap.css");
    $css->setCss("./assets/mmenu/mmenu.css");
    $css->setCss("./assets/tiny-slider/tiny-slider.css");
    $css->setCss("./assets/flipster/jquery.flipster.min.css");
    $css->setCss("./assets/fancybox3/jquery.fancybox.css");
    $css->setCss("./assets/fancybox3/jquery.fancybox.style.css");
    $css->setCss("./assets/css/fonts.css");
    $css->setCss("./assets/css/style.css");
    $css->setCss("./assets/css/media.css");
    $css->setCss("./assets/fontawesome512/all.css");
    echo $css->getCss();
}else {
    $css->setCache("cached2");
    $css->setCss("./assets/css/animate.compat.min.css");
    $css->setCss("./assets/bootstrap/bootstrap.css");
    $css->setCss("./assets/fontawesome512/all.css");
    $css->setCss("./assets/mmenu/mmenu.css");
    $css->setCss("./assets/owlcarousel2/owl.carousel.css");
    $css->setCss("./assets/owlcarousel2/owl.theme.default.css");
    $css->setCss("./assets/magiczoomplus/magiczoomplus.css");
    $css->setCss("./assets/photobox/photobox.css");
    $css->setCss("./assets/css/fonts.css");
    $css->setCss("./assets/css/style.css");
    $css->setCss("./assets/css/media.css");
    echo $css->getCss();
}?>
<!-- Js Google Analytic -->
<?=htmlspecialchars_decode($setting['analytics'])?>

<!-- Js Head -->
<?=htmlspecialchars_decode($setting['headjs'])?>
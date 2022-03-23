<!-- Js Config -->
<script type="text/javascript">
    var NN_FRAMEWORK = NN_FRAMEWORK || {};
    var CONFIG_BASE = '<?=$config_base?>';
    var WEBSITE_NAME = '<?=(isset($setting['ten'.$lang]) && $setting['ten'.$lang] != '') ? addslashes($setting['ten'.$lang]) : ''?>';
    var TIMENOW = '<?=date("d/m/Y",time())?>';
    var SHIP_CART = <?=(isset($config['order']['ship']) && $config['order']['ship'] == true) ? 'true' : 'false'?>;
    var GOTOP = 'assets/images/top.png';
    var LANG = {
        'no_keywords': '<?=chuanhaptukhoatimkiem?>',
        'delete_product_from_cart': '<?=banmuonxoasanphamnay?>',
        'no_products_in_cart': '<?=khongtontaisanphamtronggiohang?>',
        'wards': '<?=phuongxa?>',
        'back_to_home': '<?=vetrangchu?>',
    };
</script>

<!-- Js Files -->
<?php if($source=='index'){
    $js->setCache("cached");
    $js->setJs("./assets/js/jquery.min.js");
    $js->setJs("./assets/bootstrap/bootstrap.js");
    $js->setJs("./assets/mmenu/mmenu.js");
    $js->setJs("./assets/fancybox3/jquery.fancybox.js");
    $js->setJs("./assets/tiny-slider/tiny-slider.js");
    $js->setJs("./assets/flipster/jquery.flipster.min.js");
    $js->setJs("./assets/js/functions.js");
    $js->setJs("./assets/js/apps.js");
    echo $js->getJs();
}else {
    $js->setCache("cached2");
    $js->setJs("./assets/js/jquery.min.js");
    $js->setJs("./assets/bootstrap/bootstrap.js");
    $js->setJs("./assets/mmenu/mmenu.js");
    $js->setJs("./assets/owlcarousel2/owl.carousel.js");
    $js->setJs("./assets/magiczoomplus/magiczoomplus.js");
    $js->setJs("./assets/fancybox3/jquery.fancybox.js");
    $js->setJs("./assets/photobox/photobox.js");
    $js->setJs("./assets/js/functions.js");
    $js->setJs("./assets/js/apps.js");
    echo $js->getJs();
}?>

<!-- GOOGLE RECAPCHA -->
<?php if(isset($config['googleAPI']['recaptcha']['active']) && $config['googleAPI']['recaptcha']['active'] == true) {
    if($source=='contact') { ?>
        <script src="https://www.google.com/recaptcha/api.js?render=<?=$config['googleAPI']['recaptcha']['sitekey']?>"></script>
        <script type="text/javascript">
            grecaptcha.ready(function () {
                grecaptcha.execute('<?=$config['googleAPI']['recaptcha']['sitekey']?>', { action: 'contact' }).then(function (token) {
                    var recaptchaResponseContact = document.getElementById('recaptchaResponseContact');
                    recaptchaResponseContact.value = token;
                });
            });
        </script>
    <?php } else { ?>
        <script type="text/javascript" >
        $(document).ready(function($) {
            $('#input_ten').click(function(event) {
                $.getScript('https://www.google.com/recaptcha/api.js?render=<?=$config['googleAPI']['recaptcha']['sitekey']?>', function() {
                  grecaptcha.ready(function () {
                     grecaptcha.execute('<?=$config['googleAPI']['recaptcha']['sitekey']?>', { action: 'Newsletter' }).then(function (token) {
                         var recaptchaResponseNewsletter = document.getElementById('recaptchaResponseNewsletter');
                         recaptchaResponseNewsletter.value = token;
                     });
                  });
                });
              });
            });

            $('#input_baogia').click(function(event) {
                $.getScript('https://www.google.com/recaptcha/api.js?render=<?=$config['googleAPI']['recaptcha']['sitekey']?>', function() {
                  grecaptcha.ready(function () {
                     grecaptcha.execute('<?=$config['googleAPI']['recaptcha']['sitekey']?>', { action: 'Newsletter' }).then(function (token) {
                         var recaptchaResponsebaogia = document.getElementById('recaptchaResponsebaogia');
                         recaptchaResponsebaogia.value = token;
                     });
                  });
                });
              });
            });
        </script>
<?php }} ?>
<script>
    $(document).ready(function(){
        $('.btn-show').click(function(){
            $("#menuHeader").hide(); $("#menuHeader").fadeIn(1000);
            //document.getElementById("menuHeader").style.display = "block";
            $('#menuHeader').removeClass('test-suong')
            $(this).html('<i class="fa fa-times an" aria-hidden="true"></i>');
            $('#btn_men').removeClass('btn-show').addClass('btn-hide');
        });

        $(document).on("click",".an",function(){
            // document.getElementById("menuHeader").style.display = "";
            // document.getElementById("btn_men").style.margin = "auto";
            $('.btn-hide').html('<i class="fa fa-bars" aria-hidden="true"></i>');
            $('#btn_men').removeClass('btn-hide').addClass('btn-show');
            $('#menuHeader').addClass('test-suong');
        });
     
    }); 
</script>
<!-- Js Structdata -->
<?php include TEMPLATE.LAYOUT."strucdata.php"; ?>

<!-- Js Addons -->
<?=$addons->setAddons('script-main', 'script-main', 0.5);?>
<?=$addons->getAddons();?>

<!-- Js Body -->
<?=htmlspecialchars_decode($setting['bodyjs'])?>
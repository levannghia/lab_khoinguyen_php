<!DOCTYPE html>
<html lang="<?=$config['website']['lang-doc']?>">
<head>
    <?php include TEMPLATE.LAYOUT."head.php"; ?>
    <?php include TEMPLATE.LAYOUT."css.php"; ?>
</head>
<body>
    <div id="wrap_full" class="wrap-main wrap-home my-0">
        <?php
            include TEMPLATE.LAYOUT."seo.php";
            include TEMPLATE.LAYOUT."header.php";
            include TEMPLATE.LAYOUT."menu.php";
            include TEMPLATE.LAYOUT."mmenu.php";
            //if($source=='index') include TEMPLATE.LAYOUT."slide.php";
            //else include TEMPLATE.LAYOUT."breadcrumb.php";

            include TEMPLATE.$template."_tpl.php";
            
            include TEMPLATE.LAYOUT."footer.php";
            include TEMPLATE.LAYOUT."modal.php";
        ?>
    </div>
    <?php
        include TEMPLATE.LAYOUT."js.php";
        if($deviceType=='mobile') include TEMPLATE.LAYOUT."phone.php";
    ?>
</body>
</html>
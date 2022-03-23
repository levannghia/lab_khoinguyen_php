<?php
$erro = '';
if (!empty($_POST)) {
	$erro = '<div><h2>* Mã số thẻ chưa tồn tại</h2></div>';
}
?>
<div id="warranty_menu">

    <div class="warranty_container">
        <div class="container steps">
            <div class="warranty_step on">
                <div class="warranty_radio on"><span>1</span>
                </div>
                <div class="warranty_col on">
                    BƯỚC 1 <span>Nhập mã số thẻ</span>
                </div>
            </div>
            <div class="warranty_next"></div>
            <div class="warranty_step">
                <div class="warranty_radio"><span>2</span>
                </div>
                <div class="warranty_col">
                    BƯỚC 2 <span>Xác nhận thông tin</span>
                </div>
            </div>
            <div class="warranty_next"></div>
            <div class="warranty_step">
                <div class="warranty_radio"><span>3</span>
                </div>
                <div class="warranty_col">
                    BƯỚC 3 <span>Thông tin bảo hành</span>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="warranty_body">
    <div class="warranty_container">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div style="float: left;">
                        <?php if ($com == 'bao-hanh-lava' && $baohanh_img_lava) { ?>
                        <div class="baohanh_image mb-5">
                            <div class="container">

                                <div class="flex_hinhanhnb">

                                    <?php for ($b = 0; $b < count($baohanh_img_lava); $b++) { ?>

                                    <div class="hinhanhnb__item img_hover"
                                        title="<?= $baohanh_img_lava[$b]['ten' . $lang] ?>">
                                        <img src="<?= UPLOAD_PHOTO_L . $baohanh_img_lava[$b]['photo'] ?>"
                                            onerror="this.src='<?= THUMBS ?>/500x300x2/assets/images/noimage.png';">
                                    </div>

                                    <?php } ?>

                                </div>
                            </div>
                        </div>
                        <?php } ?>
                    </div>
                </div>
                <div class="col-md-6">
                    <div id="warranty_card">
                        <div id="warranty_card_title">
                            Phần kiểm tra thẻ bảo hành &nbsp;
                            <img src="assets/images/lava_premium.png" alt="" style="">
                        </div>

                        <form role="form" data-toggle="validator" name="frm" method="post" action=""
                            enctype="multipart/form-data" class="form-horizontal">
                            <div
                                style="text-align: right; line-height: 35px; color: #6d6e71; font-size: 18px; width: 100%; font-size: 16px;">

                                <div>Chọn vị trí
                                    <select id="warranty_opt_location" name="location">
                                        <option value="1">Hồ Chí Minh</option>
                                        <option value="2">Hà Nội</option>
                                    </select>
                                </div>
                                <div class="code-input">Nhập mã số thẻ
                                    <input id="warranty_input" type="text" value="" name="code">
                                </div>

                                <?php echo $erro; ?>
                                <input name="comit" id="comit" class="warranty_btn" type="submit" value="Kiểm tra">
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="wrap_checknb <?= ($com == "bao-hanh") ? "mb-5" : "" ?>">
    <div class="container">
        <div class="wrap_title bh">
            <div class="title_main text-white">Tra cứu thẻ bảo hành</div>
            <div class="title_detail text-white">Nhập thông tin đầy đủ để tra cứu nhanh nhất</div>
        </div>
        <div class="box_check_baohanh">
            <div class="flex_searchbh">
                <div class="col_input">
                    <div class="searchbh_img">
                        <img width="26" height="19" src="assets/imgs/id_card.png">
                    </div>
                    <div class="searchbh_input">
                        <input type="text" name="mathe" id="mathe" placeholder="Nhận mã thẻ" value="<?= ($id_card != "") ? $id_card : "" ?>" required>
                    </div>
                </div>
                <div class="col_input">
                    <div class="searchbh_img">
                        <img width="33" height="31" src="assets/imgs/id_user.png">
                    </div>
                    <div class="searchbh_input">
                        <input type="text" name="tenkh" id="tenkh" placeholder="Nhận tên khách hành" value="<?= ($tenkh_vi != "") ? $tenkh_vi : "" ?>" required>
                    </div>
                </div>
                <div class="col_input submit" id="btn_checknb">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-send-fill" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M15.964.686a.5.5 0 0 0-.65-.65L.767 5.855H.766l-.452.18a.5.5 0 0 0-.082.887l.41.26.001.002 4.995 3.178 3.178 4.995.002.002.26.41a.5.5 0 0 0 .886-.083l6-15Zm-1.833 1.89.471-1.178-1.178.471L5.93 9.363l.338.215a.5.5 0 0 1 .154.154l.215.338 7.494-7.494Z" />
                    </svg>
                    <span>Gửi</span>
                </div>
            </div>
        </div>
        
            <div class="baohanh_image mt-5">
                <div class="container">
                    <div class="flex_hinhanhnb">
                        <?php for ($b = 0; $b < count($baohanh_img); $b++) { ?>
                            <div class="hinhanhnb__item img_hover" title="<?= $baohanh_img[$b]['ten' . $lang] ?>">
                                <img width="500" height="300" src="<?= THUMBS ?>/500x300x2/<?= UPLOAD_PHOTO_L . $baohanh_img[$b]['photo'] ?>" onerror="this.src='<?= THUMBS ?>/500x300x2/assets/images/noimage.png';">
                            </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        
    </div>

</div>
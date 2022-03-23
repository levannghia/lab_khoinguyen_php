<?php if ($com == "bao-hanh") {
    include TEMPLATE . LAYOUT . "search_baohanh.php";
} else { ?>
    <div class="container">
        <div class="wrap_title page">
            <div class="title_main"><?= (@$title_cat != '') ? $title_cat : @$title_crumb ?></div>
        </div>
    </div>
<?php } ?>

<?php if ($checkingnb) { ?>
    <div class="checkbh_ketqua">
        <div class="container">
            <?php if ($card_baohanh) { ?>
                <div class="table_ketqua">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th scope="col" colspan="2" class="baohanh_header">Thông tin thẻ: <span>Khách hàng <i><?=$card_baohanh[0]['ten'.$lang]?></i></span></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">Tên khách hàng</th>
                                <td><strong><?=$card_baohanh[0]['ten'.$lang]?></strong></td>
                            </tr>
                            <tr>
                                <th scope="row">Mã thẻ</th>
                                <td><strong><?=$card_baohanh[0]['mathe']?></strong></td>
                            </tr>
                            <tr>
                                <th scope="row">Loại thẻ</th>
                                <td><?=$card_baohanh[0]['loaithe']?></td>
                            </tr>
                            <tr>
                                <th scope="row">Ngày kích hoạt</th>
                                <td><?=$card_baohanh[0]['ngaykichhoat']?></td>
                            </tr>
                            <tr>
                                <th scope="row">Hạn bảo hành</th>
                                <td><?=$card_baohanh[0]['hanbaohanh']?></td>
                            </tr>
                            <tr>
                                <th scope="row">Điện thoại</th>
                                <td><?=$card_baohanh[0]['dienthoai']?></td>
                            </tr>
                            <tr>
                                <th scope="row">Bác sĩ</th>
                                <td><?=$card_baohanh[0]['bacsi']?></td>
                            </tr>
                            <tr>
                                <th scope="row">Nha khoa</th>
                                <td><?=$card_baohanh[0]['nhakhoa']?></td>
                            </tr>
                            <tr>
                                <th scope="row">Labo</th>
                                <td><?=$card_baohanh[0]['labo']?></td>
                            </tr>
                            <tr>
                                <th scope="row">Labo</th>
                                <td><?=$card_baohanh[0]['soluongrang']?></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            <?php } else { ?>
                <div class="table_ketqua">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th scope="col" colspan="2" class="baohanh_header"><span class="baohanh_canhbao">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-exclamation-diamond mr-1" viewBox="0 0 16 16">
                                        <path d="M6.95.435c.58-.58 1.52-.58 2.1 0l6.515 6.516c.58.58.58 1.519 0 2.098L9.05 15.565c-.58.58-1.519.58-2.098 0L.435 9.05a1.482 1.482 0 0 1 0-2.098L6.95.435zm1.4.7a.495.495 0 0 0-.7 0L1.134 7.65a.495.495 0 0 0 0 .7l6.516 6.516a.495.495 0 0 0 .7 0l6.516-6.516a.495.495 0 0 0 0-.7L8.35 1.134z"/>
                                        <path d="M7.002 11a1 1 0 1 1 2 0 1 1 0 0 1-2 0zM7.1 4.995a.905.905 0 1 1 1.8 0l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 4.995z"/>
                                    </svg>
                                    Không có kết quả.</span></th>
                            </tr>
                        </thead>
                    </table>
                </div>
            <?php } ?>
        </div>
    </div>
<?php } ?>

<!-- <?php if ($com == 'bao-hanh' && $baohanh_img) { ?>
    <div class="baohanh_image mb-5">
        <div class="container">
            <div class="flex_hinhanhnb">
                <?php for ($b = 0; $b < count($baohanh_img); $b++) { ?>
                    <div class="hinhanhnb__item img_hover" title="<?=$baohanh_img[$b]['ten'.$lang]?>">
                        <img width="500" height="300" src="<?= THUMBS ?>/500x300x2/<?= UPLOAD_PHOTO_L . $baohanh_img[$b]['photo'] ?>" onerror="this.src='<?= THUMBS ?>/500x300x2/assets/images/noimage.png';">
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
<?php } ?> -->

<?php if ($com == 'bao-hanh' && $baohanh_static) { ?>
    <div class="baohanh_noidung mt-3 mb-5">
        <div class="container">
            <?= htmlspecialchars_decode($baohanh_static['noidung' . $lang]) ?>
        </div>
    </div>
<?php } ?>

<!-- <div class="container content-main w-clear">
    <?php if (count($news) > 0) {
        for ($i = 0; $i < count($news); $i++) { ?>
            <a class="news text-decoration-none w-clear" href="<?=($news[$i]['link']) ? $news[$i]['link'] : $news[$i][$sluglang]?>" title="<?= $news[$i]['ten' . $lang] ?>">
                <p class="pic-news scale-img">
                    <?php if ($com == 'bao-hanh' && $baohanh_static) { ?>
                        <img onerror="this.src='<?= THUMBS ?>/160x120x2/assets/images/noimage.png';" src="<?= THUMBS ?>/500x300x2/<?= UPLOAD_NEWS_L . $news[$i]['photo'] ?>" alt="<?= $news[$i]['ten' . $lang] ?>">
                    <?php } else { ?>
                        <img onerror="this.src='<?= THUMBS ?>/160x120x2/assets/images/noimage.png';" src="<?= THUMBS ?>/500x300x1/<?= UPLOAD_NEWS_L . $news[$i]['photo'] ?>" alt="<?= $news[$i]['ten' . $lang] ?>">
                    <?php } ?>
                </p>
                <div class="info-news">
                    <h3 class="name-news"><?= $news[$i]['ten' . $lang] ?></h3>
                    <p class="time-news"><?= ngaydang ?>: <?= date("d/m/Y h:i A", $news[$i]['ngaytao']) ?></p>
                    <div class="desc-news text-split"><?= $news[$i]['mota' . $lang] ?></div>
                </div>
            </a>
        <?php }
    } else { ?>
        <div class="alert alert-warning" role="alert">
            <strong><?= khongtimthayketqua ?></strong>
        </div>
    <?php } ?>
    <div class="clear"></div>
    <div class="pagination-home py-4"><?= (isset($paging) && $paging != '') ? $paging : '' ?></div> -->
</div>
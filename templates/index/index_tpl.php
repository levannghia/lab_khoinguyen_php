<?php include TEMPLATE.LAYOUT."search_baohanh.php"; ?>

<?php /* if($gioithieu_static) { ?>
    <div class="wrap_gioithieu">
        <div class="container">
            <div class="flex_gioithieu">
                <div class="gioithieu_img">
                    <a href="gioi-thieu" class="img_hover scale-img">
                        <img width="540" height="390" src="<?=THUMBS?>/540x390x1/<?=UPLOAD_NEWS_L.$gioithieu_static['photo'] ?>" onerror="this.src='<?=THUMBS?>/540x390x2/assets/images/noimage.png';">            
                    </a>
                </div>
                <div class="gioithieu_txt">
                    <div class="gioithieu_title">
                        <div class="gioithieu__wc">giới thiệu về</div>
                        <div class="gioithieu__title"><?=$gioithieu_static['ten'.$lang]?></div>
                    </div>
                    <div class="gioithieu_mota"><?=htmlspecialchars_decode($gioithieu_static['mota'.$lang])?></div>
                    <a href="gioi-thieu" class="gioithieu_link">Xem thêm</a>
                </div>
            </div>
        </div>
    </div>
<?php } */ ?>

<?php /* if($kinhnghiem) { ?>
    <div class="wrap_kinhnghiem">
        <div class="container">
            <div class="flex_kinhnghiem" id="counter">
                <?php for($k=0;$k<count($kinhnghiem);$k++) { ?>
                    <div class="kinhnghiem__item">
                        <div class="kinhnghiem__img">
                            <img width="85" height="85" src="<?=THUMBS?>/85x85x2/<?=UPLOAD_PHOTO_L.$kinhnghiem[$k]['photo'] ?>" onerror="this.src='<?=THUMBS?>/85x85x2/assets/images/noimage.png';">            
                        </div>
                        <div class="kinhnghiem__count"><span class="counter-value" data-count="<?=$kinhnghiem[$k]['mota'.$lang]?>">0</span>+</div>
                        <div class="kinhnghiem__title"><?=$kinhnghiem[$k]['ten'.$lang]?></div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
<?php } */?>

<?php /* if($dichvunb) { ?>
    <div class="wrap_dichvu">
        <div class="container">
            <div class="wrap_title">
                <div class="title_main">Sản phẩm dịch vụ</div>
                <div class="title_detail"><?=$optsetting['slogan_title']?></div>
            </div>
            <div class="grid_dichvu">
                <?php for($d=0;$d<count($dichvunb);$d++) { ?>
                    <a href="<?=$dichvunb[$d][$sluglang]?>" class="dichvu__item<?=($d==6)?" d-none":""?>" title="<?=$dichvunb[$d]['ten'.$lang]?>">
                        <div class="dichvu__img img_hover scale-img">
                            <img width="375" height="335" src="<?=THUMBS?>/375x335x1/<?=UPLOAD_NEWS_L.$dichvunb[$d]['photo'] ?>" onerror="this.src='<?=THUMBS?>/375x335x2/assets/images/noimage.png';">            
                        </div>
                        <div class="dichvu__txt">
                            <div class="dichvu__title"><span class="text-split-1"><?=$dichvunb[$d]['ten'.$lang]?></span></div>
                            <div class="dichvu__mota"><span class="text-split-4"><?=$dichvunb[$d]['mota'.$lang]?></span></div>
                        </div>
                    </a>
                <?php } ?>
            </div>
            <?php if($dichvunb[6]){?>
                <a href="dich-vu" class="btn_viewmore">Xem thêm</a>
            <?php }?>
        </div>
    </div>
<?php } */?>

<?php /* if($thuvienanh) { ?>
    <div class="wrap_thuvien">
        <div class="container">
            <div class="wrap_title">
                <div class="title_main">Thư viện ảnh Labo</div>
                <div class="title_detail"><?=$optsetting['slogan_title']?></div>
            </div>
            <div class="grid_thuvien">
                <?php for($a=0;$a<count($thuvienanh);$a++) { ?>
                    <a href="<?=$thuvienanh[$a][$sluglang]?>" class="thuvien__item<?=($a==8)?" d-none":""?>" title="<?=$thuvienanh[$a]['ten'.$lang]?>">
                        <div class="thuvien__img img_hover scale-img">
                            <img width="290" height="280" src="<?=THUMBS?>/290x280x1/<?=UPLOAD_PRODUCT_L.$thuvienanh[$a]['photo'] ?>" onerror="this.src='<?=THUMBS?>/290x280x2/assets/images/noimage.png';">            
                        </div>
                        <div class="thuvien__bg"></div>
                        <div class="thuvien__txt">
                            <div class="thuvien__title"><span class="text-split"><?=$thuvienanh[$a]['ten'.$lang]?></span></div>
                        </div>
                    </a>
                <?php } ?>
            </div>
            <?php if($thuvienanh[8]){?>
                <a href="thu-vien-anh" class="btn_viewmore">Xem thêm</a>
            <?php }?>
        </div>
    </div>
<?php } */?>

<?php /* if($videonb) {?>
    <div class="wrap_videonb">
        <div class="container">
            <div class="wrap_title">
                <div class="title_main text-white">Video - Clip</div>
                <div class="title_detail text-white"><?=$optsetting['slogan_title']?></div>
            </div>
            <div class="flipster my-5">
                <ul class="flip-items">
                    <?php for($v=0;$v<count($videonb);$v++) { ?>
                        <li data-flip-title="<?=$videonb[$v]['ten'.$lang]?>" id="<?=$v?>">
                            <a class="video__items" data-fancybox="video" data-src="<?=$videonb[$v]['link_video']?>" title="<?=$videonb[$v]['ten'.$lang]?>">
                                <div class="video__img img_hover scale-img">
                                    <img width="510" height="400" src="<?=THUMBS?>/510x400x1/<?=UPLOAD_PHOTO_L.$videonb[$v]['photo'] ?>" onerror="this.src='<?=THUMBS?>/510x400x2/assets/images/noimage.png';">
                                </div>
                                <div class="video__title"><span class="text-split-2"><?=$videonb[$v]['ten'.$lang]?></span></div>
                            </a>
                        </li>
                    <?php } ?>
                </ul>
            </div>
        </div>
    </div>
<?php } */?>
<!--
<div class="wrap_media">
    <div class="container">
        <div class="flex_media">
            <?php if($newsnb) {?>
                <div class="wrap_news">
                    <div class="wrap_title">
                        <div class="title_main">Tin tức Labo</div>
                        <div class="title_detail"><?=$optsetting['slogan_title']?></div>
                    </div>
                    <div class="slide__news">
                        <?php for($n=0;$n<count($newsnb);$n++) { ?>
                            <div>
                                <a href="<?=$newsnb[$n][$sluglang]?>" class="news__item" title="<?=$newsnb[$n]['ten'.$lang]?>">
                                    <div class="news__img img_hover scale-img">
                                        <img width="215" height="155" src="<?=THUMBS?>/215x155x1/<?=UPLOAD_NEWS_L.$newsnb[$n]['photo'] ?>" onerror="this.src='<?=THUMBS?>/215x155x2/assets/images/noimage.png';">
                                    </div>
                                    <div class="news__txt">
                                        <div class="news__title"><span class="news__time"><?=date("d",$newsnb[$n]['ngaytao'])?> / <i><?=date("m",$newsnb[$n]['ngaytao'])?></i></span><span class="text-split-2"><?=$newsnb[$n]['ten'.$lang]?></span></div>
                                        <div class="news__detail"><span class="text-split-4"><?=$newsnb[$n]['mota'.$lang]?></span></div>
                                    </div>
                                </a>
                            </div>
                        <?php } ?>
                    </div>
                </div>
            <?php } ?>
            <?php if($feedback) {?>
                <div class="wrap_feedback">
                    <div class="wrap_title">
                        <div class="title_main">Ý kiến khách hàng</div>
                        <div class="title_detail"><?=$optsetting['slogan_title']?></div>
                    </div>
                    <div class="wrap_feedback_list">
                        <div class="slide__feedback">
                            <?php for($f=0;$f<count($feedback);$f++) { ?>
                                <div>
                                    <a href="<?=$feedback[$f][$sluglang]?>" class="feedback__item" title="<?=$feedback[$f]['ten'.$lang]?>">
                                        <div class="feedback__img">
                                            <span class="img_hover scale-img">
                                                <img width="150" height="150" src="<?=THUMBS?>/150x150x1/<?=UPLOAD_PHOTO_L.$feedback[$f]['photo'] ?>" onerror="this.src='<?=THUMBS?>/150x150x2/assets/images/noimage.png';">
                                            </span>
                                        </div>
                                        <div class="feedback__txt">
                                            <div class="feedback__detail"><span class="text-split-5"><?=$feedback[$f]['mota'.$lang]?></span></div>
                                            <div class="feedback__title"><?=$feedback[$f]['ten'.$lang]?></div>
                                        </div>
                                    </a>
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</div>

<?php if($partner) {?>
    <div class="wrap_doitac">
        <div class="container">
            <div class="flex_doitac">
                <div class="doitac_txt">
                    <div class="doitac_txt__title">Đối tác</div>
                    <div class="doitac_txt__detail">Khách hàng</div>
                </div>
                <div class="doitac_list">
                    <?php for($p=0;$p<count($partner);$p++) { ?>
                        <div>
                            <a href="<?=$partner[$p]['link']?>" class="partner__item img_hover scale-img" title="<?=$partner[$p]['ten'.$lang]?>">
                                <img width="175" height="115" src="<?=THUMBS?>/175x115x1/<?=UPLOAD_PHOTO_L.$partner[$p]['photo'] ?>" onerror="this.src='<?=THUMBS?>/175x115x2/assets/images/noimage.png';">
                            </a>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
<?php } ?>
-->
<div class="menu">
    <div class="container">
        <div class="flex_menu">
            <div class="menu_logo">
                <a href="index">
                    <img width="140" height="120" src="<?= UPLOAD_PHOTO_L.$logo['photo'] ?>" onerror="this.src='<?=THUMBS?>/220x140x2/assets/images/noimage.png';">
                </a>
            </div>

            <div class="btn-btn btn-show" id="btn_men">
                <i class="fa fa-bars" aria-hidden="true"></i>
            </div>
            <ul class="bg_menu d-flex align-items-center test-suong wrap-content" id="menuHeader">
                <!--<li><a class="transition <?php if($com=='' || $com=='index') echo 'active'; ?>" href="" title="<?=trangchu?>">
                    <h2>Trang chủ</h2>
                </a></li>
                <li><a class="transition <?php if($com=='gioi-thieu') echo 'active'; ?>" href="gioi-thieu" title="Giới thiệu"><h2>Giới thiệu</h2></a></li>
                <li>
                    <a class="transition <?php if($com=='san-pham') echo 'active'; ?>" href="san-pham" title="Sản phẩm"><h2>Sản phẩm</h2></a>
                    <?php if(count($sp_menu)) { ?>
                        <ul>
                            <?php for($i=0;$i<count($sp_menu); $i++) {
                                $spcatmenu = $d->rawQuery("select ten$lang, tenkhongdauvi, tenkhongdauen, id from #_product_cat where id_list = ? and hienthi > 0 order by stt,id desc",array($sp_menu[$i]['id'])); ?>
                                <li>
                                    <a class="transition" title="<?=$sp_menu[$i]['ten'.$lang]?>" href="<?=$sp_menu[$i][$sluglang]?>"><h2><?=$sp_menu[$i]['ten'.$lang]?></h2></a>
                                    <?php if(count($spcatmenu)>0) { ?>
                                        <ul>
                                            <?php for($j=0;$j<count($spcatmenu);$j++) {
                                                $spitemmenu = $d->rawQuery("select ten$lang, tenkhongdauvi, tenkhongdauen, id from #_product_item where id_cat = ? and hienthi > 0 order by stt,id desc",array($spcatmenu[$j]['id'])); ?>
                                                <li>
                                                    <a class="transition" title="<?=$spcatmenu[$j]['ten'.$lang]?>" href="<?=$spcatmenu[$j][$sluglang]?>"><h2><?=$spcatmenu[$j]['ten'.$lang]?></h2></a>
                                                    <?php if(count($spitemmenu)) { ?>
                                                        <ul>
                                                            <?php for($u=0;$u<count($spitemmenu);$u++) {?>
                                                                <li>
                                                                    <a class="transition" title="<?=$spitemmenu[$u]['ten'.$lang]?>" href="<?=$spitemmenu[$u][$sluglang]?>"><h2><?=$spitemmenu[$u]['ten'.$lang]?></h2></a>
                                                                </li>
                                                            <?php } ?>
                                                        </ul>
                                                    <?php } ?>
                                                </li>
                                            <?php } ?>
                                        </ul>
                                    <?php } ?>
                                </li>
                            <?php } ?>
                        </ul>
                    <?php } ?>
                </li>-->
                <li><a class="transition <?php if($com=='bao-hanh') echo 'active'; ?>" href="bao-hanh" title="Bảo hành"><h2>Bảo hành</h2></a></li>
				<li><a class="transition <?php if($com=='bao-hanh-lava') echo 'active'; ?>" href="bao-hanh-lava" title="Bảo hành Lava"><h2>Bảo hành Lava</h2></a></li>
				<li><a class="transition <?php if($com=='bao-hanh-cercon') echo 'active'; ?>" href="bao-hanh-cercon" title="Bảo hành Cercon"><h2>Bảo hành Cercon</h2></a></li>
                <!--<li><a class="transition <?php if($com=='tin-tuc') echo 'active'; ?>" href="tin-tuc" title="Tin tức"><h2>Tin tức</h2></a></li>
                <li><a class="transition <?php if($com=='video') echo 'active'; ?>" href="video" title="Video"><h2>Video</h2></a></li>
                <li><a class="transition <?php if($com=='lien-he') echo 'active'; ?>" href="lien-he" title="<?=lienhe?>"><h2><?=lienhe?></h2></a></li>
                <li>
                    <div class="search w-clear">
                        <input type="text" id="keyword2" placeholder="" onkeypress="doEnter(event,'keyword2');"/>
                        <p onclick="onSearch('keyword2');">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                                <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
                            </svg>
                        </p>
                    </div>
                </li>-->
            </ul>
        </div>
    </div>
</div>


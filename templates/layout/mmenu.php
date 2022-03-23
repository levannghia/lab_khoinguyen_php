<div class="menu-res">
    <div class="menu-bar-res">
        <a id="hamburger" href="#menu_bootstrap" title="Menu"><span></span></a>
        <div class="mmenu_right">
            <div class="mmenu_google">
                <div id="google_translate_element2"></div>
            </div>
            <div class="search-res ml-2">
                <p class="icon-search transition">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                        <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
                    </svg>
                </p>
                <div class="search-grid w-clear">
                    <input type="text" name="keyword2" id="keyword2" placeholder="<?=nhaptukhoatimkiem?>" onkeypress="doEnter(event,'keyword2');"/>
                    <p onclick="onSearch('keyword2');">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                            <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
                        </svg>
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="fix_mmenu_mob">
        <nav id="menu_bootstrap">
            <ul>
                <li><a class="transition <?php if($com=='' || $com=='index') echo 'active'; ?>" href="" title="<?=trangchu?>">
                    Trang chủ
                </a></li>
                <li><a class="transition <?php if($com=='gioi-thieu') echo 'active'; ?>" href="gioi-thieu" title="Giới thiệu">Giới thiệu</a></li>
                <li>
                    <a class="transition <?php if($com=='san-pham') echo 'active'; ?>" href="san-pham" title="Sản phẩm">Sản phẩm</a>
                    <?php if(count($sp_menu)) { ?>
                        <ul>
                            <?php for($i=0;$i<count($sp_menu); $i++) {
                                $spcatmenu = $d->rawQuery("select ten$lang, tenkhongdauvi, tenkhongdauen, id from #_product_cat where id_list = ? and hienthi > 0 order by stt,id desc",array($sp_menu[$i]['id'])); ?>
                                <li>
                                    <a class="transition" title="<?=$sp_menu[$i]['ten'.$lang]?>" href="<?=$sp_menu[$i][$sluglang]?>"><?=$sp_menu[$i]['ten'.$lang]?></a>
                                    <?php if(count($spcatmenu)>0) { ?>
                                        <ul>
                                            <?php for($j=0;$j<count($spcatmenu);$j++) {
                                                $spitemmenu = $d->rawQuery("select ten$lang, tenkhongdauvi, tenkhongdauen, id from #_product_item where id_cat = ? and hienthi > 0 order by stt,id desc",array($spcatmenu[$j]['id'])); ?>
                                                <li>
                                                    <a class="transition" title="<?=$spcatmenu[$j]['ten'.$lang]?>" href="<?=$spcatmenu[$j][$sluglang]?>"><?=$spcatmenu[$j]['ten'.$lang]?></a>
                                                    <?php if(count($spitemmenu)) { ?>
                                                        <ul>
                                                            <?php for($u=0;$u<count($spitemmenu);$u++) {?>
                                                                <li>
                                                                    <a class="transition" title="<?=$spitemmenu[$u]['ten'.$lang]?>" href="<?=$spitemmenu[$u][$sluglang]?>"><?=$spitemmenu[$u]['ten'.$lang]?></a>
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
                </li>
                <li><a class="transition <?php if($com=='bao-hanh') echo 'active'; ?>" href="bao-hanh" title="Bảo hành">Bảo hành</a></li>
                <li><a class="transition <?php if($com=='bao-hanh-lava') echo 'active'; ?>" href="bao-hanh-lava" title="Bảo hành Lava">Bảo hành Lava</a></li>
                <li><a class="transition <?php if($com=='bao-hanh-cercon') echo 'active'; ?>" href="bao-hanh-cercon" title="Bảo hành Cercon">Bảo hành Cercon</a></li>
                <li><a class="transition <?php if($com=='tin-tuc') echo 'active'; ?>" href="tin-tuc" title="Tin tức">Tin tức</a></li>
                <li><a class="transition <?php if($com=='video') echo 'active'; ?>" href="video" title="Video">Video</a></li>
                <li><a class="transition <?php if($com=='lien-he') echo 'active'; ?>" href="lien-he" title="<?=lienhe?>"><?=lienhe?></a></li>
            </ul>
        </nav>
    </div>
</div>
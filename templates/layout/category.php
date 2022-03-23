<?php 
$sp_list = $d->rawQuery("select tenkhongdauvi,tenvi,id from #_product_list where type = ? and hienthi > 0 order by stt,id asc", array('san-pham'));
if(isset($sp_list) && count($sp_list) > 0) {?>
    <div class="sp_category">
        <div class="sp_category_title">Danh mục nổi bật</div>
        <div class="sp_category_list">
            <ul class="category_items"> 
                <?php for($l=0;$l<count($sp_list);$l++) {
                        $sp_cat = $d->rawQuery("select tenkhongdauvi,tenvi from #_product_cat where type = ? and id_list = ? and hienthi > 0 order by stt,id asc", array('san-pham',$sp_list[$l]['id'])); 
                        ?>
                        <li class="category_li<?=(count($sp_cat)?' active':'')?>"><a href="<?=$sp_list[$l]['tenkhongdauvi']?>" title="<?=$sp_list[$l]['tenvi']?>"><?=$sp_list[$l]['tenvi']?></a>
                            <?php if(isset($sp_cat) && count($sp_cat) > 0) { ?>
                                <ul class="category_drop">
                                    <?php for($c=0;$c<count($sp_cat);$c++) { ?>
                                        <li><a href="<?=$sp_cat[$c]['tenkhongdauvi']?>" title="<?=$sp_cat[$c]['tenvi']?>"><?=$sp_cat[$c]['tenvi']?></a>
                                    <?php }?>    
                                </ul>  
                            <?php }?>    
                        </li>
                <?php }?>
            </ul>
        </div>
    </div>
<?php }?>
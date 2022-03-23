<div class="toolbar">
    <ul>
        <?php if($optsetting['hotline'] != ""){?>
        <li>
            <a id="goidien" href="tel:<?=preg_replace('/[^0-9]/','',$optsetting['hotline']);?>" title="title">
                <img src="assets/images/icon-t1.png" alt="images"><br>
                <span>Gọi điện</span>
            </a>
        </li>
        <?php }?>
        <?php if($optsetting['dienthoai'] != ""){?>
        <li>
            <a id="goidien" href="tel:<?=preg_replace('/[^0-9]/','',$optsetting['dienthoai']);?>" title="title">
                <img src="assets/images/icon-t1.png" alt="images"><br>
                <span>Gọi điện</span>
            </a>
        </li>
        <?php }?>
        <?php if($optsetting['toado'] != ""){?>
            <li>
                <a id="googlemap" href="<?=$optsetting['toado']?>" title="title">
                    <img src="assets/images/google-map.png" alt="images"><br>
                    <span>Google Map</span>
                </a>
            </li>
        <?php }?>
        <li>
            <a id="chatzalo" href="https://zalo.me/<?=preg_replace('/[^0-9]/','',$optsetting['zalo']);?>" title="title">
                <img src="assets/images/icon-t3.png" alt="images"><br>
                <span>Chat zalo</span>
            </a>
        </li>
        <li>
            <a id="chatfb" href="<?=$optsetting['fanpage']?>" title="title">
                <img src="assets/images/icon-t4.png" alt="images"><br>
                <span>Chat facebook</span>
            </a>
        </li>
    </ul>
</div>
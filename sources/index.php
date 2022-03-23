<?php  
	if(!defined('SOURCES')) die("Error");
    $gioithieu_img = $d->rawQuery("select photo from #_photo where type = ? and hienthi > 0 order by stt, id desc limit 0,2",array('gioi-thieu'));
    $splistnb = $d->rawQuery("select ten$lang, mota$lang, tenkhongdauvi, photo, id from #_product_list where type = ? and noibat > 0 and hienthi > 0 order by stt,id desc",array('san-pham'));
    $why = $d->rawQuery("select ten$lang, photo from #_photo where type = ? and hienthi > 0 order by stt, id desc",array('why'));
    $why_img = $d->rawQueryOne("select * from #_photo where type = ? and hienthi = ?", array('why_banner', 1));
    $blognb = $d->rawQuery("select ten$lang, tenkhongdauvi, tenkhongdauen, mota$lang, ngaytao, id, photo from #_news where type = ? and noibat > 0 and hienthi > 0 order by stt,id desc",array('ban-nha-nong'));
    $chungnhan = $d->rawQuery("select * from #_photo where type = ? and hienthi > 0 order by stt, id desc",array('chung-nhan'));
    $chungnhan_static = $d->rawQueryOne("select mota$lang from #_static where type = ? limit 0,1",array('chung-chi-static'));
    $splistgt = $d->rawQuery("select ten$lang, mota$lang, tenkhongdauvi, photo, id from #_product_list where type = ? and gt > 0 and hienthi > 0 order by stt,id desc",array('san-pham'));
    $baogianb = $d->rawQuery("select ten$lang, tenkhongdauvi, mota$lang, id, photo, photo2 from #_news where type = ? and noibat > 0 and hienthi > 0 order by stt,id desc",array('bao-gia'));
    $newsnb = $d->rawQuery("select ten$lang, tenkhongdauvi, tenkhongdauen, mota$lang, ngaytao, id, photo from #_news where type = ? and noibat > 0 and hienthi > 0 order by stt,id desc limit 0,5",array('tin-tuc'));
    $spnb = $d->rawQuery("select * from #_product where type = ? and noibat > 0 and hienthi > 0 order by stt,id desc",array('san-pham'));
    $banner_qc = $d->rawQuery("select photo, link from #_photo where type = ? and hienthi = ?", array('banner', 1));


    $gioithieu_static = $d->rawQueryOne("select ten$lang, mota$lang, photo from #_static where type = ? limit 0,1",array('gioi-thieu'));
    $kinhnghiem = $d->rawQuery("select ten$lang, mota$lang, photo from #_photo where type = ? and hienthi > 0 order by stt, id desc",array('kinh-nghiem'));
    $dichvunb = $d->rawQuery("select * from #_news where type = ? and noibat > 0 and hienthi > 0 order by stt, id desc limit 0,7",array('dich-vu'));
    $thuvienanh = $d->rawQuery("select * from #_product where type = ? and noibat > 0 and hienthi > 0 order by stt,id desc limit 0,9",array('thu-vien-anh'));
    $newsnb = $d->rawQuery("select ten$lang, tenkhongdauvi, tenkhongdauen, mota$lang, ngaytao, id, photo from #_news where type = ? and noibat > 0 and hienthi > 0 order by stt,id desc",array('tin-tuc'));
    $feedback = $d->rawQuery("select ten$lang, mota$lang, photo from #_photo where type = ? and hienthi > 0 order by stt, id desc",array('feedback'));
    $partner = $d->rawQuery("select ten$lang, link, photo from #_photo where type = ? and hienthi > 0 order by stt, id desc",array('doitac'));
	$videonb = $d->rawQuery("select link_video, id, ten$lang, photo from #_photo where type = ? and act <> ? and noibat > 0 and hienthi > 0 order by stt, id desc",array('video','photo_static'));


    /* SEO */
    $seoDB = $seo->getSeoDB(0,'setting','capnhat','setting');
    if(!empty($seoDB['title'.$seolang])) $seo->setSeo('h1',$seoDB['title'.$seolang]);
    if(!empty($seoDB['title'.$seolang])) $seo->setSeo('title',$seoDB['title'.$seolang]);
    if(!empty($seoDB['keywords'.$seolang])) $seo->setSeo('keywords',$seoDB['keywords'.$seolang]);
    if(!empty($seoDB['description'.$seolang])) $seo->setSeo('description',$seoDB['description'.$seolang]);
    $seo->setSeo('url',$func->getPageURL());
    $img_json_bar = (isset($logo['options']) && $logo['options'] != '') ? json_decode($logo['options'],true) : null;
    if($img_json_bar == null || ($img_json_bar['p'] != $logo['photo']))
    {
        $img_json_bar = $func->getImgSize($logo['photo'],UPLOAD_PHOTO_L.$logo['photo']);
        $seo->updateSeoDB(json_encode($img_json_bar),'photo',$logo['id']);
    }
    if(count($img_json_bar) > 0)
    {
        $seo->setSeo('photo',$config_base.THUMBS.'/'.$img_json_bar['w'].'x'.$img_json_bar['h'].'x2/'.UPLOAD_PHOTO_L.$logo['photo']);
        $seo->setSeo('photo:width',$img_json_bar['w']);
        $seo->setSeo('photo:height',$img_json_bar['h']);
        $seo->setSeo('photo:type',$img_json_bar['m']);
    }
?>
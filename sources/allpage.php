<?php
    if(!defined('SOURCES')) die("Error");

    /* Query allpage */
    $favicon = $d->rawQueryOne("select photo from #_photo where type = ? and act = ? and hienthi > 0 limit 0,1",array('favicon','photo_static'));
    $logo = $d->rawQueryOne("select * from #_photo where type = ? and hienthi = ?", array('logo', 1));
    $footer = $d->rawQueryOne("select ten$lang, noidung$lang, mota$lang, photo from #_static where type = ? limit 0,1",array('footer'));
    $cs = $d->rawQuery("select ten$lang, tenkhongdauvi, tenkhongdauen, id, photo from #_news where type = ? and hienthi > 0 and noibat > 0 order by stt,id desc",array('chinh-sach'));
    $sp_menu = $d->rawQuery("select ten$lang, tenkhongdauvi, tenkhongdauen, id from #_product_list where type = ? and hienthi > 0 order by stt,id desc",array('san-pham'));
    $dichvu_menu = $d->rawQuery("select ten$lang, tenkhongdauvi, tenkhongdauen, id from #_news where type = ? and noibat > 0 and hienthi > 0 order by stt,id desc",array('dich-vu'));
    $header = $d->rawQueryOne("select photo from #_photo where type = ? and hienthi = ?", array('header', 1));
    
    $slogan = $d->rawQueryOne("select ten$lang from #_static where type = ? limit 0,1",array('slogan'));

    $social_header = $d->rawQuery("select ten$lang, mota$lang, photo, link from #_photo where type = ? and hienthi > 0 order by stt,id desc",array('mangxahoi2'));
    $social = $d->rawQuery("select ten$lang, mota$lang, photo, link from #_photo where type = ? and hienthi > 0 order by stt,id desc",array('mangxahoi'));
    $baohanh_img = $d->rawQuery("select ten$lang, link, photo from #_photo where type = ? and hienthi > 0 order by stt, id desc",array('bao-hanh'));
    $baohanh_static = $d->rawQueryOne("select noidung$lang from #_static where type = ? limit 0,1",array('bao-hanh'));

	$baohanh_img_lava = $d->rawQuery("select ten$lang, link, photo from #_photo where type = ? and hienthi > 0 order by stt, id desc",array('bao-hanh-lava'));
    
	$baohanh_img_cercon = $d->rawQuery("select ten$lang, link, photo from #_photo where type = ? and hienthi > 0 order by stt, id desc",array('bao-hanh-cercon'));
    
    /* Get statistic */
    $counter = $statistic->getCounter();
    $online = $statistic->getOnline();

    /* Newsletter */
    if(isset($_POST['submit-newsletter']))
    {
        $responseCaptcha = $_POST['recaptcha_response_newsletter'];
        $resultCaptcha = $func->checkRecaptcha($responseCaptcha);
        $scoreCaptcha = (isset($resultCaptcha['score'])) ? $resultCaptcha['score'] : 0;
        $actionCaptcha = (isset($resultCaptcha['action'])) ? $resultCaptcha['action'] : '';
        $testCaptcha = (isset($resultCaptcha['test'])) ? $resultCaptcha['test'] : false;

        if(($scoreCaptcha >= 0.5 && $actionCaptcha == 'Newsletter') || $testCaptcha == true)
        {
            $data = array();
            $data['ten'] = (isset($_POST['ten']) && $_POST['ten'] != '') ? htmlspecialchars($_POST['ten']) : '';
            $data['email'] = (isset($_POST['email']) && $_POST['email'] != '') ? htmlspecialchars($_POST['email']) : '';
            $data['dienthoai'] = (isset($_POST['dienthoai']) && $_POST['dienthoai'] != '') ? htmlspecialchars($_POST['dienthoai']) : '';
            $data['diachi'] = (isset($_POST['diachi']) && $_POST['diachi'] != '') ? htmlspecialchars($_POST['diachi']) : '';
            $data['noidung'] = (isset($_POST['noidung']) && $_POST['noidung'] != '') ? htmlspecialchars($_POST['noidung']) : '';
            $data['ngaytao'] = time();
            $data['isBaogia'] = 0;
            $data['type'] = 'dangkynhantin';

            if($d->insert('newsletter',$data))
            {
                $func->transfer("Đăng ký nhận tin thành công. Chúng tôi sẽ liên hệ với bạn sớm.",$config_base);
            }
            else
            {
                $func->transfer("Đăng ký nhận tin thất bại. Vui lòng thử lại sau.",$config_base, false);
            }
        }
        else
        {
            $func->transfer("Đăng ký nhận tin thất bại. Vui lòng thử lại sau.",$config_base, false);
        }
    }

    /* Báo giá */
    if(isset($_POST['submit-baogia']))
    {
        $responseCaptcha = $_POST['recaptcha_response_baogia'];
        $resultCaptcha = $func->checkRecaptcha($responseCaptcha);
        $scoreCaptcha = (isset($resultCaptcha['score'])) ? $resultCaptcha['score'] : 0;
        $actionCaptcha = (isset($resultCaptcha['action'])) ? $resultCaptcha['action'] : '';
        $testCaptcha = (isset($resultCaptcha['test'])) ? $resultCaptcha['test'] : false;

        if(($scoreCaptcha >= 0.5 && $actionCaptcha == 'Newsletter') || $testCaptcha == true)
        {
            $data = array();
            $data['ten'] = (isset($_POST['ten']) && $_POST['ten'] != '') ? htmlspecialchars($_POST['ten']) : '';
            $data['email'] = (isset($_POST['email']) && $_POST['email'] != '') ? htmlspecialchars($_POST['email']) : '';
            $data['dienthoai'] = (isset($_POST['dienthoai']) && $_POST['dienthoai'] != '') ? htmlspecialchars($_POST['dienthoai']) : '';
            $data['ghichu'] = (isset($_POST['diachi']) && $_POST['diachi'] != '') ? htmlspecialchars($_POST['diachi']) : '';
            $data['noidung'] = (isset($_POST['noidung']) && $_POST['noidung'] != '') ? htmlspecialchars($_POST['noidung']) : '';
            $data['kichthuoc'] = (isset($_POST['kichthuoc']) && $_POST['kichthuoc'] != '') ? htmlspecialchars($_POST['kichthuoc']) : '';
            $data['soluong'] = (isset($_POST['soluong']) && $_POST['soluong'] != '') ? htmlspecialchars($_POST['soluong']) : '';
            $data['ngaytao'] = time();
            $data['chude'] = 'Đăng kí nhận báo giá';
            $data['isBaogia'] = 1;
            $data['type'] = 'dangkynhantin';

            if($d->insert('newsletter',$data))
            {
                $func->transfer("Đăng ký nhận báo giá thành công. Chúng tôi sẽ liên hệ với bạn sớm.",$config_base);
            }
            else
            {
                $func->transfer("Đăng ký nhận tin thất bại. Vui lòng thử lại sau.",$config_base, false);
            }
        }
        else
        {
            $func->transfer("Đăng ký nhận tin thất bại. Vui lòng thử lại sau.",$config_base, false);
        }
    }
?>
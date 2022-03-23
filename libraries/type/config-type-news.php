<?php
    /* Dịch vụ */
    $nametype = "dich-vu";
    $config['news'][$nametype]['title_main'] = "Dịch vụ";
    $config['news'][$nametype]['view'] = true;
    $config['news'][$nametype]['copy'] = false;
    $config['news'][$nametype]['copy_image'] = true;
    $config['news'][$nametype]['slug'] = true;
    $config['news'][$nametype]['check'] = array("noibat" => "Nổi bật");
    $config['news'][$nametype]['images'] = true;
    $config['news'][$nametype]['show_images'] = true;
    $config['news'][$nametype]['mota'] = true;
    $config['news'][$nametype]['noidung'] = true;
    $config['news'][$nametype]['noidung_cke'] = true;
    $config['news'][$nametype]['schema'] = true;
    $config['news'][$nametype]['seo'] = true;
    $config['news'][$nametype]['width'] = 375;
    $config['news'][$nametype]['height'] = 335;
    $config['news'][$nametype]['thumb'] = '100x100x1';
    $config['news'][$nametype]['img_type'] = '.jpg|.gif|.png|.jpeg|.gif|.JPG|.PNG|.JPEG|.Png|.GIF';

    /* Bài viết bảo hành */
    $nametype = "bao-hanh";
    $config['news'][$nametype]['title_main'] = "Bài viết bảo hành";
    $config['news'][$nametype]['view'] = true;
    $config['news'][$nametype]['copy'] = false;
    $config['news'][$nametype]['copy_image'] = true;
    $config['news'][$nametype]['slug'] = true;
    // $config['news'][$nametype]['check'] = array("noibat" => "Nổi bật");
    $config['news'][$nametype]['images'] = true;
    $config['news'][$nametype]['gallery'] = array
    (
        $nametype => array
        (
            "title_main_photo" => "Hình ảnh Tin tức",
            "title_sub_photo" => "Hình ảnh",
            "number_photo" => 3,
            "images_photo" => true,
            "avatar_photo" => true,
            "tieude_photo" => true,
            "width_photo" => 540,
            "height_photo" => 540,
            "thumb_photo" => '100x100x2',
            "img_type_photo" => '.jpg|.gif|.png|.jpeg|.gif|.JPG|.PNG|.JPEG|.Png|.GIF'
        )
    );
    $config['news'][$nametype]['show_images'] = true;
    $config['news'][$nametype]['link'] = true;
    $config['news'][$nametype]['mota'] = true;
    $config['news'][$nametype]['noidung'] = true;
    $config['news'][$nametype]['noidung_cke'] = true;
    $config['news'][$nametype]['schema'] = true;
    $config['news'][$nametype]['seo'] = true;
    $config['news'][$nametype]['width'] = 500;
    $config['news'][$nametype]['height'] = 300;
    $config['news'][$nametype]['thumb'] = '200x200x2';
    $config['news'][$nametype]['img_type'] = '.jpg|.gif|.png|.jpeg|.gif|.JPG|.PNG|.JPEG|.Png|.GIF';

    /* Thẻ bảo hành */
    $nametype = "the-bao-hanh";
    $config['news'][$nametype]['title_main'] = "Thẻ bảo hành";
    // $config['news'][$nametype]['slug'] = true;
    $config['news'][$nametype]['name'] = true;
    $config['news'][$nametype]['mathe'] = true;
    $config['news'][$nametype]['loaithe'] = true;
    $config['news'][$nametype]['ngaykichhoat'] = true;
    $config['news'][$nametype]['hanbaohanh'] = true;
    $config['news'][$nametype]['dienthoai'] = true;
    $config['news'][$nametype]['bacsi'] = true;
    $config['news'][$nametype]['nhakhoa'] = true;
    $config['news'][$nametype]['labo'] = true;
    $config['news'][$nametype]['soluongrang'] = true;
    $config['news'][$nametype]['ghichu'] = true;
	
	
	
    // $config['news'][$nametype]['gallery'] = array
    // (
    //     $nametype => array
    //     (
    //         "title_main_photo" => "Hình ảnh Tin tức",
    //         "title_sub_photo" => "Hình ảnh",
    //         "number_photo" => 3,
    //         "images_photo" => true,
    //         "avatar_photo" => true,
    //         "tieude_photo" => true,
    //         "width_photo" => 540,
    //         "height_photo" => 540,
    //         "thumb_photo" => '100x100x2',
    //         "img_type_photo" => '.jpg|.gif|.png|.jpeg|.gif|.JPG|.PNG|.JPEG|.Png|.GIF'
    //     )
    // );
    // $config['news'][$nametype]['img_type'] = '.jpg|.gif|.png|.jpeg|.gif|.JPG|.PNG|.JPEG|.Png|.GIF';

    
    /* Thẻ bảo hành */
    $nametype = "the-bao-hanh-lava";
    $config['news'][$nametype]['title_main'] = "Thẻ Bảo Hành Lava";
    // $config['news'][$nametype]['slug'] = true;
	$config['news'][$nametype]['vitri'] = true;
	$config['news'][$nametype]['lava_milling'] = true;
	$config['news'][$nametype]['nha_san_xuat'] = true;
	$config['news'][$nametype]['thoi_gian_bao_hanh'] = true;
    $config['news'][$nametype]['name'] = true;
    $config['news'][$nametype]['mathe'] = true;
    $config['news'][$nametype]['loaithe'] = true;
    $config['news'][$nametype]['ngaykichhoat'] = true;
    $config['news'][$nametype]['hanbaohanh'] = true;
    $config['news'][$nametype]['bacsi'] = true;
    $config['news'][$nametype]['nhakhoa'] = true;
    $config['news'][$nametype]['labo'] = true;
    $config['news'][$nametype]['soluongrang'] = true;
    $config['news'][$nametype]['ghichu'] = true;

	$nametype = "the-bao-hanh-cercon";
    $config['news'][$nametype]['title_main'] = "Thẻ Bảo Hành Cercon";
    // $config['news'][$nametype]['slug'] = true;
    $config['news'][$nametype]['name'] = true;
	$config['news'][$nametype]['dienthoai'] = true;
    $config['news'][$nametype]['mathe'] = true;
    $config['news'][$nametype]['ngaykichhoat'] = true;
    $config['news'][$nametype]['bacsi'] = true;
    $config['news'][$nametype]['nhakhoa'] = true;
    $config['news'][$nametype]['labo'] = true;
    $config['news'][$nametype]['soluongrang'] = true;
	$config['news'][$nametype]['loai_dia'] = true;
    $config['news'][$nametype]['vi_tri_rang'] = true;
	$config['news'][$nametype]['namsinh'] = true;
    /* Tin tức */
    $nametype = "tin-tuc";
    $config['news'][$nametype]['title_main'] = "Tin tức";
    $config['news'][$nametype]['view'] = true;
    $config['news'][$nametype]['copy'] = false;
    $config['news'][$nametype]['copy_image'] = true;
    $config['news'][$nametype]['slug'] = true;
    $config['news'][$nametype]['check'] = array("noibat" => "Nổi bật");
    $config['news'][$nametype]['images'] = true;
    $config['news'][$nametype]['show_images'] = true;
    $config['news'][$nametype]['mota'] = true;
    $config['news'][$nametype]['noidung'] = true;
    $config['news'][$nametype]['noidung_cke'] = true;
    $config['news'][$nametype]['schema'] = true;
    $config['news'][$nametype]['seo'] = true;
    $config['news'][$nametype]['width'] = 300;
    $config['news'][$nametype]['height'] = 300;
    $config['news'][$nametype]['thumb'] = '100x100x1';
    $config['news'][$nametype]['img_type'] = '.jpg|.gif|.png|.jpeg|.gif|.JPG|.PNG|.JPEG|.Png|.GIF';

    /* Quản lý mục (Không cấp) */
    if(isset($config['news']))
    {
        foreach($config['news'] as $key => $value)
        {
            if(!isset($value['dropdown']) || (isset($value['dropdown']) && $value['dropdown'] == false))
            { 
                $config['shownews'] = 1;
                break;
            }
        }
    }
?>
<?php
    /* Sản phẩm */
    $nametype = "san-pham";
    $config['product'][$nametype]['title_main'] = "Sản phẩm";
    $config['product'][$nametype]['dropdown'] = true;
    $config['product'][$nametype]['list'] = true;
    $config['product'][$nametype]['cat'] = true;
    // $config['product'][$nametype]['check'] = array("noibat" => "Nổi bật");
    $config['product'][$nametype]['view'] = true;
    $config['product'][$nametype]['slug'] = true;
    $config['product'][$nametype]['images'] = true;
    $config['product'][$nametype]['show_images'] = true;
    $config['product'][$nametype]['copy'] = false;
    $config['product'][$nametype]['copy_image'] = true;
    $config['product'][$nametype]['mota'] = true;
    $config['product'][$nametype]['mota_cke'] = true;
    $config['product'][$nametype]['noidung'] = true;
    $config['product'][$nametype]['noidung_cke'] = true;
    $config['product'][$nametype]['schema'] = true;
    $config['product'][$nametype]['gallery'] = array
    (
        $nametype => array
        (
            "title_main_photo" => "Hình ảnh Sản phẩm",
            "title_sub_photo" => "Hình ảnh",
            "number_photo" => 2,
            "images_photo" => true,
            "avatar_photo" => true,
            "tieude_photo" => true,
            "width_photo" => 540,
            "height_photo" => 540,
            "thumb_photo" => '100x100x1',
            "img_type_photo" => '.jpg|.gif|.png|.jpeg|.gif|.JPG|.PNG|.JPEG|.Png|.GIF'
        )
    );
    $config['product'][$nametype]['ma'] = true;
    $config['product'][$nametype]['gia'] = true;
    $config['product'][$nametype]['giamoi'] = true;
    $config['product'][$nametype]['giakm'] = false;
    $config['product'][$nametype]['mota'] = true;
    $config['product'][$nametype]['mota_cke'] = true;
    $config['product'][$nametype]['noidung'] = true;
    $config['product'][$nametype]['noidung_cke'] = true;
    $config['product'][$nametype]['seo'] = true;
    $config['product'][$nametype]['width'] = 375;
    $config['product'][$nametype]['height'] = 335;
    $config['product'][$nametype]['thumb'] = '100x100x1';
    $config['product'][$nametype]['img_type'] = '.jpg|.gif|.png|.jpeg|.gif|.JPG|.PNG|.JPEG|.Png|.GIF';
    
    /* Sản phẩm (List) */
    $config['product'][$nametype]['title_main_list'] = "Sản phẩm cấp 1";
    $config['product'][$nametype]['slug_list'] = true;
    // $config['product'][$nametype]['check_list'] = array("noibat" => "Nổi bật");
    $config['product'][$nametype]['mota_list'] = true;
    $config['product'][$nametype]['seo_list'] = true;
    
    /* Sản phẩm (Cat) */
    $config['product'][$nametype]['title_main_cat'] = "Sản phẩm cấp 2";
    $config['product'][$nametype]['slug_cat'] = true;
    $config['product'][$nametype]['mota_cat'] = true;
    $config['product'][$nametype]['seo_cat'] = true;

    /* Thư viện ảnh */
    $nametype = "thu-vien-anh";
    $config['product'][$nametype]['title_main'] = "Thư viện ảnh";
    $config['product'][$nametype]['check'] = array("noibat" => "Nổi bật");
    $config['product'][$nametype]['view'] = true;
    $config['product'][$nametype]['slug'] = true;
    $config['product'][$nametype]['images'] = true;
    $config['product'][$nametype]['show_images'] = true;
    $config['product'][$nametype]['copy'] = false;
    $config['product'][$nametype]['copy_image'] = true;
    $config['product'][$nametype]['gallery'] = array
    (
        $nametype => array
        (
            "title_main_photo" => "Hình ảnh thư viện ảnh",
            "title_sub_photo" => "Hình ảnh",
            "number_photo" => 2,
            "images_photo" => true,
            "avatar_photo" => true,
            "tieude_photo" => true,
            "width_photo" => 540,
            "height_photo" => 540,
            "thumb_photo" => '100x100x1',
            "img_type_photo" => '.jpg|.gif|.png|.jpeg|.gif|.JPG|.PNG|.JPEG|.Png|.GIF'
        )
    );
    $config['product'][$nametype]['seo'] = true;
    $config['product'][$nametype]['noidung'] = true;
    $config['product'][$nametype]['noidung_cke'] = true;
    $config['product'][$nametype]['schema'] = true;
    $config['product'][$nametype]['width'] = 280;
    $config['product'][$nametype]['height'] = 280;
    $config['product'][$nametype]['thumb'] = '100x100x1';
    $config['product'][$nametype]['img_type'] = '.jpg|.gif|.png|.jpeg|.gif|.JPG|.PNG|.JPEG|.Png|.GIF';
?>
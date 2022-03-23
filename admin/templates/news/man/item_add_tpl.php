<?php
	if($act=="add") $labelAct = "Thêm mới";
	else if($act=="edit") $labelAct = "Chỉnh sửa";
	else if($act=="copy")  $labelAct = "Sao chép";

	$linkMan = "index.php?com=news&act=man&type=".$type."&p=".$curPage;
	if($act=='add') $linkFilter = "index.php?com=news&act=add&type=".$type."&p=".$curPage;
	else if($act=='edit') $linkFilter = "index.php?com=news&act=edit&type=".$type."&p=".$curPage."&id=".$id;
    if($act=="copy") $linkSave = "index.php?com=news&act=save_copy&type=".$type."&p=".$curPage;
    else $linkSave = "index.php?com=news&act=save&type=".$type."&p=".$curPage;

    /* Check cols */
    if(isset($config['news'][$type]['gallery']) && count($config['news'][$type]['gallery']) > 0)
    {
        foreach($config['news'][$type]['gallery'] as $key => $value)
        {
            if($key == $type)
            {
                $flagGallery = true;
                break;
            }
        }
    }

    if(
        (isset($config['news'][$type]['dropdown']) && $config['news'][$type]['dropdown'] == true) || 
        (isset($config['news'][$type]['tags']) && $config['news'][$type]['tags'] == true) || 
        (isset($config['news'][$type]['images']) && $config['news'][$type]['images'] == true))
    {
        $colLeft = "col-xl-8";
        $colRight = "col-xl-4";
    }
    else
    {
        $colLeft = "col-12";
        $colRight = "d-none";   
    }
?>
<!-- Content Header -->
<section class="content-header text-sm">
    <div class="container-fluid">
        <div class="row">
            <ol class="breadcrumb float-sm-left">
                <li class="breadcrumb-item"><a href="index.php" title="Bảng điều khiển">Bảng điều khiển</a></li>
                <li class="breadcrumb-item active"><?=$labelAct?> <?=$config['news'][$type]['title_main']?></li>
            </ol>
        </div>
    </div>
</section>

<!-- Main content -->
<section class="content">
    <form class="validation-form" novalidate method="post" action="<?=$linkSave?>" enctype="multipart/form-data">
        <div class="card-footer text-sm sticky-top">
            <button type="submit" class="btn btn-sm bg-gradient-primary submit-check"><i class="far fa-save mr-2"></i>Lưu</button>
            <button type="submit" class="btn btn-sm bg-gradient-success submit-check" name="save-here"><i class="far fa-save mr-2"></i>Lưu tại trang</button>
            <button type="reset" class="btn btn-sm bg-gradient-secondary"><i class="fas fa-redo mr-2"></i>Làm lại</button>
            <a class="btn btn-sm bg-gradient-danger" href="<?=$linkMan?>" title="Thoát"><i class="fas fa-sign-out-alt mr-2"></i>Thoát</a>
        </div>
        <div class="row">
            <div class="<?=$colLeft?>">
                <?php
                    if(isset($config['news'][$type]['slug']) && $config['news'][$type]['slug'] == true)
                    {
                        $slugchange = ($act=='edit') ? 1 : 0;
                        $copy = ($act!='copy') ? 0 : 1;
                        include TEMPLATE.LAYOUT."slug.php";
                    }
                ?>
                <div class="card card-primary card-outline text-sm">
                    <div class="card-header">
                        <h3 class="card-title">Nội dung <?=$config['news'][$type]['title_main']?></h3>
                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="card card-primary card-outline card-outline-tabs">
                            <div class="card-header p-0 border-bottom-0">
                                <ul class="nav nav-tabs" id="custom-tabs-three-tab-lang" role="tablist">
                                    <?php foreach($config['website']['lang'] as $k => $v) { ?>
                                        <li class="nav-item">
                                            <a class="nav-link <?=($k=='vi')?'active':''?>" id="tabs-lang" data-toggle="pill" href="#tabs-lang-<?=$k?>" role="tab" aria-controls="tabs-lang-<?=$k?>" aria-selected="true"><?=$v?></a>
                                        </li>
                                    <?php } ?>
                                </ul>
                            </div>
                            <div class="card-body card-article">
                                <div class="tab-content" id="custom-tabs-three-tabContent-lang">
                                    <?php foreach($config['website']['lang'] as $k => $v) { ?>
                                        <div class="tab-pane fade show <?=($k=='vi')?'active':''?>" id="tabs-lang-<?=$k?>" role="tabpanel" aria-labelledby="tabs-lang">
                                            <?php if(isset($config['news'][$type]['link']) && $config['news'][$type]['link'] == true) { ?>
                                                <div class="form-group">
                                                    <label for="link">Liên kết ngoài:</label>
                                                    <input type="text" class="form-control for-seo" name="data[link]" id="link" placeholder="Tiêu đề (<?=$k?>)" value="<?=@$item['link']?>">
                                                </div>
                                            <?php } ?>
                                            <div class="row">
                                                <?php if(isset($config['news'][$type]['mathe']) && $config['news'][$type]['mathe'] == true) { ?>
                                                    <div class="form-group col-md-12">
                                                        <label class="d-block" for="mathe">Mã thẻ:</label>
                                                        <input type="text" class="form-control" name="data[mathe]" id="mathe" placeholder="Mã thẻ" value="<?=@$item['mathe']?>" required>
                                                    </div>
                                                <?php } ?>
                                            <div class="form-group  col-md-12">
                                            <?php if(isset($config['news'][$type]['name']) && $config['news'][$type]['name'] == true) { ?>
                                                <label for="ten<?=$k?>">Tên khách hàng:</label>
                                                <input type="text" class="form-control for-seo" name="data[ten<?=$k?>]" id="ten<?=$k?>" placeholder="Tên khách hàng" value="<?=@$item['ten'.$k]?>" <?=($k=='vi')?'required':''?>>
                                            <?php }else{ ?>
                                                <label for="ten<?=$k?>">Tiêu đề (<?=$k?>):</label>
                                                <input type="text" class="form-control for-seo" name="data[ten<?=$k?>]" id="ten<?=$k?>" placeholder="Tiêu đề (<?=$k?>)" value="<?=@$item['ten'.$k]?>" <?=($k=='vi')?'required':''?>>
                                            <?php } ?>
                                            </div>
                                            <?php if(isset($config['news'][$type]['mota']) && $config['news'][$type]['mota'] == true) { ?>
                                                <div class="form-group">
                                                    <label for="mota<?=$k?>">Mô tả (<?=$k?>):</label>
                                                    <textarea class="form-control for-seo <?=(isset($config['news'][$type]['mota_cke']) && $config['news'][$type]['mota_cke'] == true)?'form-control-ckeditor':''?>" name="data[mota<?=$k?>]" id="mota<?=$k?>" rows="5" placeholder="Mô tả (<?=$k?>)"><?=htmlspecialchars_decode(@$item['mota'.$k])?></textarea>
                                                </div>
                                            <?php } ?>
                                            <?php if(isset($config['news'][$type]['noidung']) && $config['news'][$type]['noidung'] == true) { ?>
                                                <div class="form-group col-md-12">
                                                    <label for="noidung<?=$k?>">Nội dung (<?=$k?>):</label>
                                                    <textarea class="form-control for-seo <?=(isset($config['news'][$type]['noidung_cke']) && $config['news'][$type]['noidung_cke'] == true)?'form-control-ckeditor':''?>" name="data[noidung<?=$k?>]" id="noidung<?=$k?>" rows="5" placeholder="Nội dung (<?=$k?>)"><?=htmlspecialchars_decode(@$item['noidung'.$k])?></textarea>
                                                </div>
                                            <?php } ?>
                                                </div>  
                                            <div class="row">
												<?php if(isset($config['news'][$type]['vitri']) && $config['news'][$type]['vitri'] == true) { ?>
                                                    <div class="form-group col-md-4">
                                                        <label class="d-block" for="vitri">Vị trí:</label>
                                                        <input type="text" class="form-control" name="data[vitri]" id="vitri" placeholder="Vị trí" value="<?=@$item['vitri']?>">
                                                    </div>
                                                <?php } ?>
                                                <?php if(isset($config['news'][$type]['loaithe']) && $config['news'][$type]['loaithe'] == true) { ?>
                                                    <div class="form-group col-md-4">
                                                        <label class="d-block" for="loaithe">Loại thẻ:</label>
                                                        <input type="text" class="form-control" name="data[loaithe]" id="loaithe" placeholder="Loại thẻ" value="<?=@$item['loaithe']?>">
                                                    </div>
                                                <?php } ?>
                                                <?php if(isset($config['news'][$type]['ngaykichhoat']) && $config['news'][$type]['ngaykichhoat'] == true) { ?>
                                                    <div class="form-group col-md-4">
                                                        <label class="d-block" for="ngaykichhoat">Ngày kích hoạt:</label>
                                                        <input type="text" class="form-control" name="data[ngaykichhoat]" id="ngaykichhoat" placeholder="Ngày kích hoạt" value="<?=@$item['ngaykichhoat']?>">
                                                    </div>
                                                <?php } ?>
                                                <?php if(isset($config['news'][$type]['hanbaohanh']) && $config['news'][$type]['hanbaohanh'] == true) { ?>
                                                    <div class="form-group col-md-4">
                                                        <label class="d-block" for="hanbaohanh">Hạn bảo hành:</label>
                                                        <input type="text" class="form-control" name="data[hanbaohanh]" id="hanbaohanh" placeholder="Hạn bảo hành" value="<?=@$item['hanbaohanh']?>">
                                                    </div>
                                                <?php } ?>
                                                <?php if(isset($config['news'][$type]['dienthoai']) && $config['news'][$type]['dienthoai'] == true) { ?>
                                                    <div class="form-group col-md-4">
                                                        <label class="d-block" for="dienthoai">Điện thoại:</label>
                                                        <input type="text" class="form-control" name="data[dienthoai]" id="dienthoai" placeholder="Điện thoại" value="<?=@$item['dienthoai']?>">
                                                    </div>
                                                <?php } ?>
                                                <?php if(isset($config['news'][$type]['bacsi']) && $config['news'][$type]['bacsi'] == true) { ?>
                                                    <div class="form-group col-md-4">
                                                        <label class="d-block" for="bacsi">Bác sĩ:</label>
                                                        <input type="text" class="form-control" name="data[bacsi]" id="bacsi" placeholder="Bác sĩ" value="<?=@$item['bacsi']?>">
                                                    </div>
                                                <?php } ?>
                                                <?php if(isset($config['news'][$type]['nhakhoa']) && $config['news'][$type]['nhakhoa'] == true) { ?>
                                                    <div class="form-group col-md-4">
                                                        <label class="d-block" for="nhakhoa">Nha khoa:</label>
                                                        <input type="text" class="form-control" name="data[nhakhoa]" id="nhakhoa" placeholder="Nha khoa" value="<?=@$item['nhakhoa']?>">
                                                    </div>
                                                <?php } ?>
                                                <?php if(isset($config['news'][$type]['labo']) && $config['news'][$type]['labo'] == true) { ?>
                                                    <div class="form-group col-md-4">
                                                        <label class="d-block" for="labo">Labo:</label>
                                                        <input type="text" class="form-control" name="data[labo]" id="labo" placeholder="Labo" value="<?=@$item['labo']?>">
                                                    </div>
                                                <?php } ?>
												<?php if(isset($config['news'][$type]['lava_milling']) && $config['news'][$type]['lava_milling'] == true) { ?>
                                                    <div class="form-group col-md-4">
                                                        <label class="d-block" for="lava_milling">Lava milling center:</label>
                                                        <input type="text" class="form-control" name="data[lava_milling]" id="lava_milling" placeholder="LAVA MILLING CENTER" value="<?=@$item['lava_milling']?>">
                                                    </div>
                                                <?php } ?>
												<?php if(isset($config['news'][$type]['nha_san_xuat']) && $config['news'][$type]['nha_san_xuat'] == true) { ?>
                                                    <div class="form-group col-md-4">
                                                        <label class="d-block" for="nha_san_xuat">Nhà sản xuất:</label>
                                                        <input type="text" class="form-control" name="data[nha_san_xuat]" id="nha_san_xuat" placeholder="NHÀ SẢN XUẤT" value="<?=@$item['nha_san_xuat']?>">
                                                    </div>
                                                <?php } ?>
												<?php if(isset($config['news'][$type]['thoi_gian_bao_hanh']) && $config['news'][$type]['thoi_gian_bao_hanh'] == true) { ?>
                                                    <div class="form-group col-md-4">
                                                        <label class="d-block" for="thoi_gian_bao_hanh">Thời gian bảo hành:</label>
                                                        <input type="text" class="form-control" name="data[thoi_gian_bao_hanh]" id="thoi_gian_bao_hanh" placeholder="Thời gian bảo hành" value="<?=@$item['thoi_gian_bao_hanh']?>">
                                                    </div>
                                                <?php } ?>
                                                <?php if(isset($config['news'][$type]['soluongrang']) && $config['news'][$type]['soluongrang'] == true) { ?>
                                                    <div class="form-group col-md-4">
                                                        <label class="d-block" for="soluongrang">Số lượng răng:</label>
                                                        <input type="text" class="form-control" name="data[soluongrang]" id="soluongrang" placeholder="Số lượng răng" value="<?=@$item['soluongrang']?>">
                                                    </div>
                                                <?php } ?>
												<?php if(isset($config['news'][$type]['loai_dia']) && $config['news'][$type]['loai_dia'] == true) { ?>
                                                    <div class="form-group col-md-4">
                                                        <label class="d-block" for="loai_dia">Loại đĩa::</label>
                                                        <input type="text" class="form-control" name="data[loai_dia]" id="loai_dia" placeholder="Loại đĩa:" value="<?=@$item['loai_dia']?>">
                                                    </div>
                                                <?php } ?>
												<?php if(isset($config['news'][$type]['vi_tri_rang']) && $config['news'][$type]['vi_tri_rang'] == true) { ?>
                                                    <div class="form-group col-md-4">
                                                        <label class="d-block" for="vi_tri_rang">Vị trí răng:</label>
                                                        <input type="text" class="form-control" name="data[vi_tri_rang]" id="vi_tri_rang" placeholder="Vị trí răng" value="<?=@$item['vi_tri_rang']?>">
                                                    </div>
                                                <?php } ?>
												<?php if(isset($config['news'][$type]['namsinh']) && $config['news'][$type]['namsinh'] == true) { ?>
                                                    <div class="form-group col-md-4">
                                                        <label class="d-block" for="namsinh">Năm sinh:</label>
                                                        <input type="number" class="form-control" name="data[namsinh]" id="namsinh" placeholder="Năm sinh" value="<?=@$item['namsinh']?>">
                                                    </div>
                                                <?php } ?>
                                            </div>
                                            <?php if(isset($config['news'][$type]['ghichu']) && $config['news'][$type]['ghichu'] == true) { ?>
                                                <div class="form-group">
                                                    <label for="ghichu">Ghi chú:</label>
                                                    <textarea class="form-control for-seo" name="data[ghichu]" id="ghichu" rows="3" placeholder="Ghi chú"><?=htmlspecialchars_decode(@$item['ghichu'])?></textarea>
                                                </div>
                                            <?php } ?>
                                        </div>
                                    <?php } ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="<?=$colRight?>">
                <?php if(
                    (isset($config['news'][$type]['dropdown']) && $config['news'][$type]['dropdown'] == true) || 
                    (isset($config['news'][$type]['tags']) && $config['news'][$type]['tags'] == true)
                ) { ?>
                    <div class="card card-primary card-outline text-sm">
                        <div class="card-header">
                            <h3 class="card-title">Danh mục <?=$config['news'][$type]['title_main']?></h3>
                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="form-group-category row">
                                <?php if(isset($config['news'][$type]['dropdown']) && $config['news'][$type]['dropdown'] == true) { ?>
                                    <?php if(isset($config['news'][$type]['list']) && $config['news'][$type]['list'] == true) { ?>
                                        <div class="form-group col-xl-6 col-sm-4">
                                            <label class="d-block" for="id_list">Danh mục cấp 1:</label>
                                            <?=$func->get_ajax_category('news', 'list', $type)?>
                                        </div>
                                    <?php } ?>
                                    <?php if(isset($config['news'][$type]['cat']) && $config['news'][$type]['cat'] == true) { ?>
                                        <div class="form-group col-xl-6 col-sm-4">
                                            <label class="d-block" for="id_cat">Danh mục cấp 2:</label>
                                            <?=$func->get_ajax_category('news', 'cat', $type)?>
                                        </div>
                                    <?php } ?>
                                    <?php if(isset($config['news'][$type]['item']) && $config['news'][$type]['item'] == true) { ?>
                                        <div class="form-group col-xl-6 col-sm-4">
                                            <label class="d-block" for="id_item">Danh mục cấp 3:</label>
                                            <?=$func->get_ajax_category('news', 'item', $type)?>
                                        </div>
                                    <?php } ?>
                                    <?php if(isset($config['news'][$type]['sub']) && $config['news'][$type]['sub'] == true) { ?>
                                        <div class="form-group col-xl-6 col-sm-4">
                                            <label class="d-block" for="id_sub">Danh mục cấp 4:</label>
                                            <?=$func->get_ajax_category('news', 'sub', $type)?>
                                        </div>
                                    <?php } ?>
                                <?php } ?>
                                <?php if(isset($config['news'][$type]['tags']) && $config['news'][$type]['tags'] == true) { ?>
                                    <div class="form-group col-xl-6 col-sm-4">
                                        <label class="d-block" for="id_tags">Danh mục tags:</label>
                                        <?=$func->get_tags(@$item['id'], 'tags_group', 'news', $type)?>
                                    </div>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                <?php } ?>
                
                <?php if(isset($config['news'][$type]['images']) && $config['news'][$type]['images'] == true) { ?>
                    <div class="card card-primary card-outline text-sm">
                        <div class="card-header">
                            <h3 class="card-title">Hình ảnh <?=$config['news'][$type]['title_main']?></h3>
                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
                            </div>
                        </div>
                        <div class="card-body">
                            <?php
                                $photoDetail = ($act != 'copy') ? UPLOAD_NEWS.@$item['photo'] : '';
                                $dimension = "Width: ".$config['news'][$type]['width']." px - Height: ".$config['news'][$type]['height']." px (".$config['news'][$type]['img_type'].")";
                                include TEMPLATE.LAYOUT."image.php";
                            ?>
                        </div>
                    </div>
                <?php } ?>

                <?php if(isset($config['news'][$type]['images2']) && $config['news'][$type]['images2'] == true) { ?>
                    <div class="card card-primary card-outline text-sm">
                        <div class="card-header">
                            <h3 class="card-title">Hình ảnh <?=$config['news'][$type]['images2_title']?></h3>
                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
                            </div>
                        </div>
                        <div class="card-body">
                            <?php
                                $photoDetail2 = ($act != 'copy') ? UPLOAD_NEWS.@$item['photo2'] : '';
                                $dimension = "Width: ".$config['news'][$type]['width2']." px - Height: ".$config['news'][$type]['height2']." px (".$config['news'][$type]['img_type'].")";
                                include TEMPLATE.LAYOUT."image2.php";
                            ?>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
        <div class="card card-primary card-outline text-sm">
            <div class="card-header">
                <h3 class="card-title">Thông tin <?=$config['news'][$type]['title_main']?></h3>
                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
                </div>
            </div>
            <div class="card-body">
                <div class="form-group">
                    <label for="hienthi" class="d-inline-block align-middle mb-0 mr-2">Hiển thị:</label>
                    <div class="custom-control custom-checkbox d-inline-block align-middle">
                        <input type="checkbox" class="custom-control-input hienthi-checkbox" name="data[hienthi]" id="hienthi-checkbox" <?=(!isset($item['hienthi']) || $item['hienthi']==1)?'checked':''?>>
                        <label for="hienthi-checkbox" class="custom-control-label"></label>
                    </div>
                </div>
                <div class="form-group">
                    <label for="stt" class="d-inline-block align-middle mb-0 mr-2">Số thứ tự:</label>
                    <input type="number" class="form-control form-control-mini d-inline-block align-middle" min="0" name="data[stt]" id="stt" placeholder="Số thứ tự" value="<?=isset($item['stt']) ? $item['stt'] : 1?>">
                </div>
            </div>
        </div>
        <?php if(isset($flagGallery) && $flagGallery == true) { ?>
            <div class="card card-primary card-outline text-sm">
                <div class="card-header">
                    <h3 class="card-title">Bộ sưu tập <?=$config['news'][$type]['title_main']?></h3>
                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
                    </div>
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <label for="filer-gallery" class="label-filer-gallery mb-3">Album hình: (<?=$config['news'][$type]['gallery'][$key]['img_type_photo']?>)</label>
                        <input type="file" name="files[]" id="filer-gallery" multiple="multiple">
                        <input type="hidden" class="col-filer" value="col-xl-2 col-lg-3 col-md-3 col-sm-4 col-6">
                        <input type="hidden" class="act-filer" value="man">
                        <input type="hidden" class="folder-filer" value="news">
                    </div>
                    <?php if(isset($gallery) && count($gallery) > 0) { ?>
                        <div class="form-group form-group-gallery">
                            <label class="label-filer">Album hiện tại:</label>
                            <div class="action-filer mb-3">
                                <a class="btn btn-sm bg-gradient-primary text-white check-all-filer mr-1"><i class="far fa-square mr-2"></i>Chọn tất cả</a>
                                <button type="button" class="btn btn-sm bg-gradient-success text-white sort-filer mr-1"><i class="fas fa-random mr-2"></i>Sắp xếp</button>
                                <a class="btn btn-sm bg-gradient-danger text-white delete-all-filer"><i class="far fa-trash-alt mr-2"></i>Xóa tất cả</a>
                            </div>
                            <div class="alert my-alert alert-sort-filer alert-info text-sm text-white bg-gradient-info"><i class="fas fa-info-circle mr-2"></i>Có thể chọn nhiều hình để di chuyển</div>
                            <div class="jFiler-items my-jFiler-items jFiler-row">
                                <ul class="jFiler-items-list jFiler-items-grid row scroll-bar" id="jFilerSortable">
                                    <?php foreach($gallery as $v) echo $func->galleryFiler($v['stt'],$v['id'],$v['photo'],$v['tenvi'],'news','col-xl-2 col-lg-3 col-md-3 col-sm-4 col-6'); ?>
                                </ul>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>
        <?php } ?>
        <?php if(isset($config['news'][$type]['seo']) && $config['news'][$type]['seo'] == true) { ?>
            <div class="card card-primary card-outline text-sm">
                <div class="card-header">
                    <h3 class="card-title">Nội dung SEO</h3>
                    <a class="btn btn-sm bg-gradient-success d-inline-block text-white float-right create-seo" title="Tạo SEO">Tạo SEO</a>
                </div>
                <div class="card-body">
                    <?php
                        $seoDB = $seo->getSeoDB($id,$com,'man',$type);
                        include TEMPLATE.LAYOUT."seo.php";
                    ?>
                </div>
            </div>
        <?php } ?>
        <?php if(isset($config['news'][$type]['schema']) && $config['news'][$type]['schema'] == true) { ?>
            <div class="card card-primary card-outline text-sm">
                <div class="card-header">
                    <h3 class="card-title">Schema JSON Article</h3>
                    <button type="submit" class="btn btn-sm bg-gradient-success float-right submit-check" name="build-schema"><i class="far fa-save mr-2"></i>Lưu và tạo tự động Schema</button>
                </div>
                <div class="card-body">
                    <?php
                        $seoDB = $seo->getSeoDB($id,$com,'man',$type);
                        include TEMPLATE.LAYOUT."schema.php";
                    ?>
                    <input type="hidden" id="schema-type" value="news">
                </div>
            </div>
        <?php } ?>
        <div class="card-footer text-sm">
            <button type="submit" class="btn btn-sm bg-gradient-primary submit-check"><i class="far fa-save mr-2"></i>Lưu</button>
            <button type="submit" class="btn btn-sm bg-gradient-success submit-check" name="save-here"><i class="far fa-save mr-2"></i>Lưu tại trang</button>
            <button type="reset" class="btn btn-sm bg-gradient-secondary"><i class="fas fa-redo mr-2"></i>Làm lại</button>
            <a class="btn btn-sm bg-gradient-danger" href="<?=$linkMan?>" title="Thoát"><i class="fas fa-sign-out-alt mr-2"></i>Thoát</a>
            <input type="hidden" name="id" value="<?=(isset($item['id']) && $item['id'] > 0) ? $item['id'] : ''?>">
        </div>
    </form>
</section>
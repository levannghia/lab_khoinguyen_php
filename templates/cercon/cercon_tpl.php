<?php
$data = array();
$data['code'] = (isset($_POST['code']) && $_POST['code'] != '') ? htmlspecialchars($_POST['code']) : '';
$data['date'] = (isset($_POST['date']) && $_POST['date'] != '') ? htmlspecialchars($_POST['date']) : '';
$code = $data['code'];
$date = $data['date'];
$html = '';
$content = $d->rawQueryOne("select noidungvi from #_static where type = 'bao-hanh-cercon' and hienthi > 0 limit 0,1");
if (!empty($_POST)) {
	
	$row_detail = $d->rawQueryOne("select mathe,ngaykichhoat,soluongrang,tenvi,nhakhoa,dienthoai,bacsi,labo,loai_dia,vi_tri_rang from #_news where mathe = '" . $code . "' and namsinh = '" . $date . "' and type = 'the-bao-hanh-cercon' and hienthi > 0 limit 0,1");
	if ($row_detail != '') {
		$html = '<div class="row" ng-show="ShowKetQua">

				<div class="col-md-6 col-centered">

					<div class="list-group viewsearch">
						<a href="#" class="list-group-item active text-center" style="background: #0075be !important;border: #ccc;font-size: 20px;">
							<i class="fa fa-info-circle" aria-hidden="true"></i> Thông tin nguồn gốc vật liệu Cercon
						</a>
					
						<a href="#" class="list-group-item list-group-item-action ng-binding">
							<b class="title_with_100">Mã thẻ: </b>' . $row_detail['mathe'] . '
						</a>

						<a href="#" class="list-group-item list-group-item-action ng-binding">
							<b class="title_with_100">
                                        Ngày kích hoạt:
                                    </b> ' . $row_detail['ngaykichhoat'] . '
						</a>
						
						<a href="#" class="list-group-item list-group-item-action ng-binding">
							<b class="title_with_100">
                                        Bệnh nhân:
                                    </b> ' . $row_detail['tenvi'] . '
						</a>

						<a href="#" class="list-group-item list-group-item-action ng-binding">
							<b class="title_with_100">
                                        Điện thoại:
                                    </b> ' . $row_detail['dienthoai'] . '
						</a>
						<a href="#" class="list-group-item list-group-item-action ng-binding">
							<b class="title_with_100">
                                        Bác sỹ:
                                    </b> ' . $row_detail['bacsi'] . '
						</a>
						<a href="#" class="list-group-item list-group-item-action ng-binding">
							<b class="title_with_100">
                                       Nha khoa:
                                    </b> ' . $row_detail['nhakhoa'] . '

						</a>
						<a href="#" class="list-group-item list-group-item-action ng-binding">
							<b class="title_with_100">
                                        Labo:
                                    </b> ' . $row_detail['labo'] . '
						</a>
						<a href="#" class="list-group-item list-group-item-action ng-binding">
							<b class="title_with_100">
                                        Loại đĩa: 
                                    </b> ' . $row_detail['loai_dia'] . '
						</a>
						<a href="#" class="list-group-item list-group-item-action ng-binding">
							<b class="title_with_100">
                                        Số lượng răng:
                                    </b> ' . $row_detail['soluongrang'] . '
						</a>
						<a href="#" class="list-group-item list-group-item-action ng-binding">
							<b class="title_with_100">
                                        Vị trí răng:
                                    </b> ' . $row_detail['vi_tri_rang'] . '
						</a>


					</div>
				</div>
			</div>

		';
	} else {
		$html = '<div class="row text-center" ng-show="ShowError">
                        <div class="col-md-12">
                            <p class="_str_error ng-binding" ng-bind="Message">Vui lòng nhập đẩy đủ thông tin trước khi tra cứu</p>
                        </div>
                    </div>';
	}
}
?>
<div class="bg-xam">
<div class="container cercon">
	<h3 class="card-title my-4 text-center color_blue_1">
		TRUY XUẤT NGUỒN GỐC XUẤT XỨ VẬT LIỆU
	</h3>
	<div class="img-card">
		<?php for ($b = 0; $b < count($baohanh_img_cercon); $b++) { ?>
			<div class="hinhanhnb__item img_hover" title="<?= $baohanh_img_cercon[$b]['ten' . $lang] ?>">
				<img src="<?= UPLOAD_PHOTO_L . $baohanh_img_cercon[$b]['photo'] ?>" onerror="this.src='<?= THUMBS ?>/500x300x2/assets/images/noimage.png';">
			</div>
		<?php } ?>
	</div>
	<p class="card-text text-center color_blue_1">
		Vui lòng điền mã thẻ để tra cứu thông tin nguồn gốc xuất xứ vật liệu.
	</p>

	<!-- Features Section -->
	<div class="row">

		<div class="se-pre-con overlay ng-hide" ng-show="isViewLoading"></div>

		<div class="col-lg-12">
			<form role="form" data-toggle="validator" name="frm" method="post" action="" enctype="multipart/form-data" class="form-horizontal">
				<div class="row">

					<div class="col-md-4">
					</div>
					<div class="col-md-4">
						<div class="form-group">
							<div class="input-group  text-center">
								<input name="code" class="form-control ng-valid ng-valid-maxlength ng-touched ng-dirty ng-valid-parse" maxlength="80" placeholder="Nhập mã thẻ" type="text" value="">
							</div>
						</div>
					</div>
				</div>
				<div class="row">

					<div class="col-md-4">
					</div>
					<div class="col-md-4">
						<div class="form-group">
							<div class="input-group  text-center">
								<input name="date" class="form-control ng-valid ng-dirty ng-valid-parse ng-touched" id="datepickerbk" placeholder="Nhập năm sinh, ví dụ : 1969" ng-model="S_Model" type="text">
							</div>
						</div>
					</div>
				</div>

				<div class="row text-center">
					<div class="col-12 text-center checkbox">
						<input type="checkbox" checked="checked" id="Agree" ng-model="S_Agree" name="Agree" class="ng-pristine ng-untouched ng-valid">
						<label for="Agree">Tôi đồng ý việc sử dụng các thông tin cá nhân cung cấp trên website này cho mục đích truy xuất nguồn gốc xuất xứ vật liệu phục hình Cercon.</label>
					</div>



				</div>

				<div class="row  text-center">

					<div class="col-md-4">
					</div>
					<div class="col-md-4">
						<button ng-click="TraCuu()" class="btn btn-info pp_gold">

							Tra cứu
						</button>
					</div>
				</div>
			</form>
			<br>
			<?php echo $html; ?>
			<br>
		</div>

	</div>
</div>
</div>
<div class="container">
	<div class="row">
		<div class="col-lg-12" style="padding-top: 55px; padding-bottom: 50px;">
			<?= htmlspecialchars_decode($content['noidungvi']) ?>
		</div>
	</div>
</div>
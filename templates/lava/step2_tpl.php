<?php
$location = $_SESSION['location'];
$code = $_SESSION['code'];
$row_detail = $d->rawQueryOne("select mathe,vitri,soluongrang,tenvi,nhakhoa,hanbaohanh from #_news where mathe = '".$code."' and type = 'the-bao-hanh-lava' and hienthi > 0 limit 0,1");
?>
<div id="warranty_menu">
	<div class="warranty_container">
		<div class="warranty_step">
			<div class="warranty_radio"><span>1</span>
			</div>
			<div class="warranty_col">
				BƯỚC 1 <span>Nhập mã số thẻ</span>
			</div>
		</div>
		<div class="warranty_next"></div>
		<div class="warranty_step on">
			<div class="warranty_radio on"><span>2</span>
			</div>
			<div class="warranty_col on">
				BƯỚC 2 <span>Xác nhận thông tin</span>
			</div>
		</div>
		<div class="warranty_next"></div>
		<div class="warranty_step">
			<div class="warranty_radio"><span>3</span>
			</div>
			<div class="warranty_col">
				BƯỚC 3 <span>Thông tin bảo hành</span>
			</div>
		</div>
	</div>
</div>
<div id="warranty_body">
	<div class="warranty_container">
		<div style="float: left;">
			<?php if ($com == 'bao-hanh-lava' && $baohanh_img_lava) { ?>
			<div class="baohanh_image mb-5">
				<div class="container">
					<div class="flex_hinhanhnb">
						<?php for ($b = 0; $b < count($baohanh_img_lava); $b++) { ?>
							<div class="hinhanhnb__item img_hover" title="<?=$baohanh_img_lava[$b]['ten'.$lang]?>">
								<img src="<?= UPLOAD_PHOTO_L . $baohanh_img_lava[$b]['photo'] ?>" onerror="this.src='<?= THUMBS ?>/500x300x2/assets/images/noimage.png';">
							</div>
						<?php } ?>
					</div>
				</div>
			</div>
		<?php } ?>
		</div>
		<div id="warranty_card">
			<h3>Xác nhận thông tin </h3>
			<table id="warranty_table">
				<tbody>
					<tr>
						<td style="width: 120px;">Vị trí: </td>
						<td><b><?=$row_detail['vitri']?></b>
						</td>
					</tr>
					<tr>
						<td>Mã số thẻ: </td>
						<td><b><?=$row_detail['mathe']?></b>
						</td>
					</tr>
					<tr>
						<td>Chỉ số răng: </td>
						<td><b><?=$row_detail['soluongrang']?></b>
						</td>
					</tr>
					<tr>
						<td>Họ &amp; Tên: </td>
						<td><b><?=$row_detail['tenvi']?></b>
						</td>
					</tr>
					<tr>
						<td>Nha khoa: </td>
						<td><b><?=$row_detail['nhakhoa']?></b>
						</td>
					</tr>
					<tr>
						<td>Ngày hết hạn: &nbsp;&nbsp;&nbsp;</td>
						<td><b><?=$row_detail['hanbaohanh']?></b>
						</td>
					</tr>
				</tbody>
			</table>

			<div style="float: right;">
				<form name="_form" enctype="multipart/form-data" action="" method="post">
					<input type="hidden" value="<?=$code?>" name="code" id="code">
					<input type="hidden" value="<?=$location?>" name="id_location" id="id_location">
					<input name="xacnhan" id="xacnhan" class="warranty_btn" type="submit" value="Xác nhận">
				</form>
			</div>
			<div style="float: right; margin-right: 5px;">
				<form name="_form" enctype="multipart/form-data" action="" method="post">
					<input type="hidden" value="<?=$code?>" name="code" id="code">
					<input type="hidden" value="<?=$location?>" name="id_location" id="id_location">
					<input name="quaylai" id="quaylai" class="warranty_btn" type="submit" value="Quay lại">
				</form>
			</div>
		</div>
	</div>
</div>
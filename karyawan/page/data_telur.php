<?php if(empty($_GET['thisaction'])){header('location:../main.php');} require '../config/koneksi.php';?>
<div class="col-xs-10">
	<div class="page-header">
		<h1>Data Ayam</h1>
	</div>
	<div class="row">
		<div class="col-xs-11">
			<div class="posting">
				<form role="form" method="post" enctype="multipart/form-data" action="proscon/prosescon.php?thisposition=<?php echo base64_encode('data_telur'); ?>">
					<div class="box-body">
						<div class="form-group">
							<label>Jumlah telur</label>
							<input type="text" name="jml_telur" id="jml_telur" placeholder="Kg">
						</div>
						<div class="form-group">
							<label>Telur Sehat</label>
							<input type="text" name="tlr_sht" placeholder="Butir">
						</div>
						<div class="form-group">
							<label>Telur Cacat</label>
							<input type="text" name="tlr_cct" placeholder="Butir">
						</div>
						<div class="box-footer">
							<button type="submit" class="btn btn-primary btn-circle"><i class="glyphicon glyphicon-ok"></i> Simpan</button>&nbsp;&nbsp;<a href="main.php?thisaction=<?php echo base64_encode('data_telur'); ?>" class="btn btn-circle btn-success"><i class="glyphicon glyphicon-repeat"></i>  Batal</a>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
<div class="col-xs-10" style="padding-top: 5%;">
	<div class="page-header">
		<h1>Table Transaksi Pembelian Kebutuhan</h1>
	</div>
</div>
<div class="row">
	<div class="col-xs-12">
		<div class="box">
			<div class="box-body">
				<table id="example1" class="table table-bordered table-hover">
					<thead>
						<tr>
							<th>No</th>
							<th>Jumlah Telur</th>
							<th>Telur Sehat</th>
							<th>Telur Cacat</th>
							<th>Tanggal</th>
							<th>Opsi</th>
						</tr>
					</thead>
					<tb>
						<?php $pro=mysqli_query($con,"SELECT * FROM data_telur order by tanggal desc");$vr=1;while($duk=mysqli_fetch_array($pro)){ ?>
							<tr>
								<td><?php echo $vr; ?></td>
								<td><?php echo $duk['jumlah_telur']; ?> Kg</td>
								<td><?php echo $duk['telur_sehat']; ?> Butir</td>
								<td><?php echo $duk['telur_cacat']; ?> Butir</td>
								<td><?php echo $duk['tanggal']; ?></td>
								<td></td>
							</tr>
							<?php $vr++; } ?>
						</tb>
					</table>
				</div>
			</div>
		</div>
	</div>
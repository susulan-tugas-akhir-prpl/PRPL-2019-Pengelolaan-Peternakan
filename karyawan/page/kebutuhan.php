<?php if(empty($_GET['thisaction'])){header('location:../main.php');} require '../config/koneksi.php';?>
<div class="col-xs-10">
	<div class="page-header">
		<h1>Form Pembelian Kebutuhan</h1>
	</div>
	<div class="row">
		<div class="col-xs-11">
			<!-- PAGE CONTENT BEGINS -->
			<div class="posting">
				<form role="form" method="post" enctype="multipart/form-data" action="proscon/prosescon.php?thisposition=<?php echo base64_encode('kebutuhan'); ?>">
					<div class="box-body">
						<div class="form-group">
							<label>Modal</label>
							<input type="text" name="mdl" class="form-control" placeholder="Rp.xxxxxxx">
						</div>
					</div>
					<div class="col-xs-4">
						<div class="box-body">
							<div class="form-group">
								<label>Anak Ayam</label>
								<input type="text" name="an_ay" style="float: right;" placeholder="Ekor">
							</div>
							<div class="form-group">
								<label>Pakan</label>
								<input type="text" name="pkn" style="float: right;" placeholder="Kg">
							</div>
							<div class="form-group">
								<label>Air</label>
								<input type="text" name="air" style="float: right;" placeholder="Lt">
							</div>
							<div class="form-group">
								<label>Listrik</label>
								<input type="text" name="lsk" style="float: right;" placeholder="watt">
							</div>
							<div class="form-group">
								<label>Vaksin/ Vitamin</label>
								<input type="text" name="vkn" style="float: right;" placeholder="Kg">
							</div>
						</div>
						<!-- /.box-body -->
					</div>
					<div class="col-xs-4">
						<div class="box-body">
							<div class="form-group">
								<label>Rp.</label>
								<input type="text" name="rp_an" style="float: right;">
							</div>
							<div class="form-group">
								<label>Rp.</label>
								<input type="text" name="rp_pkn" style="float: right;">
							</div>
							<div class="form-group">
								<label>Rp.</label>
								<input type="text" name="rp_air" style="float: right;">
							</div>
							<div class="form-group">
								<label>Rp.</label>
								<input type="text" name="rp_lsk" style="float: right;">
							</div>
							<div class="form-group">
								<label>Rp.</label>
								<input type="text" name="rp_vkn" style="float: right;">
							</div>
						</div>
					</div>
					<div class="col-md-6" style="padding-top: 20px;">
						<div class="box-footer">
							<button type="submit" class="btn btn-primary btn-circle"><i class="glyphicon glyphicon-ok"></i> Simpan</button>&nbsp;&nbsp;<a href="main.php?thisaction=<?php echo base64_encode('kebutuhan'); ?>" class="btn btn-circle btn-success"><i class="glyphicon glyphicon-repeat"></i>  Batal</a>
						</div>
					</div>
				</form>
			</div>
			<!-- PAGE CONTENT ENDS -->
		</div><!-- /.col -->
	</div><!-- /.row -->
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
							<th>Modal</th>
							<th>Harga Ayam</th>
							<th>Jumlah Ayam(Ekor)</th>
							<th>Harga Pakan</th>
							<th>Jumlah Pakan(Kg)</th>
							<th>Harga Air</th>
							<th>Jumlah(Liter)</th>
							<th>Harga Listrik</th>
							<th>Jumlah(Watt)</th>
							<th>Harga Vaksin</th>
							<th>Jumlah Vaksin(Kg)</th>
							<th>Tanggal</th>
							<th>Opsi</th>
						</tr>
					</thead>
					<tb>
						<?php $pro=mysqli_query($con,"SELECT * FROM pem_keb order by tanggal desc");$vr=1;while($duk=mysqli_fetch_array($pro)){ ?>
							<tr>
								<td><?php echo $vr; ?></td>
								<td>Rp. <?php echo number_format($duk['modal']); ?></td>
								<td>Rp. <?php echo number_format($duk['harga_ayam']); ?></td>
								<td><?php echo $duk['jumlah_ayam']; ?> Ekor</td>
								<td>Rp. <?php echo number_format($duk['harga_pakan']); ?></td>
								<td><?php echo $duk['jumlah_pakan']; ?> Kg</td>
								<td>Rp. <?php echo number_format($duk['harga_air']); ?></td>
								<td><?php echo $duk['air_lt']; ?> Lt</td>
								<td>Rp. <?php echo number_format($duk['harga_listrik']); ?></td>
								<td><?php echo $duk['jumlah_watt']; ?> Watt</td>
								<td>Rp. <?php echo number_format($duk['harga_vaksin']); ?></td>
								<td><?php echo $duk['jmlh_vaksin']; ?> Kg</td>
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
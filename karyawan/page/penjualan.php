<?php if(empty($_GET['thisaction'])){header('location:../main.php');} require '../config/koneksi.php';?>
<div class="col-xs-10">
	<div class="page-header">
		<h1>Form Penjualan</h1>
	</div>
	<div class="row">
		<div class="col-xs-11">
			<!-- PAGE CONTENT BEGINS -->
			<div class="posting">
				<form role="form" method="post" enctype="multipart/form-data" action="proscon/prosescon.php?thisposition=<?php echo base64_encode('penjualan'); ?>">
					<div class="laku col-xs-10">
						<h2 style="padding-bottom: 10px;">Laku</h2>
						<div class="col-xs-4">
							<div class="box-body">
								<div class="form-group">
									<label>Ayam</label>
									<input type="text" name="an" style="float: right;" placeholder="Ekor">
								</div>
								<div class="form-group">
									<label>Telur</label>
									<input type="text" name="tlr" style="float: right;" placeholder="Kg">
								</div>
								<div class="form-group">
									<label>Kotoran</label>
									<input type="text" name="ktr" style="float: right;" placeholder="Kg">
								</div>
							</div>
							<!-- /.box-body -->
						</div>
						<div class="col-xs-4">
							<div class="box-body">
								<div class="form-group">
									<label>Rp.</label>
									<input type="text" name="an_lk" style="float: right;">
								</div>
								<div class="form-group">
									<label>Rp.</label>
									<input type="text" name="tlr_lk" style="float: right;">
								</div>
								<div class="form-group">
									<label>Rp.</label>
									<input type="text" name="ktr_lk" style="float: right;">
								</div>
							</div>
						</div>
					</div>
					<div class="tidak_laku col-xs-10" style="margin-top: 30px;">
						<h2 style="padding-bottom: 10px;">Tidak Laku</h2>
						<div class="col-xs-4">
							<div class="box-body">
								<div class="form-group">
									<label>Ayam</label>
									<input type="text" name="an_tlk" style="float: right;" placeholder="Ekor">
								</div>
								<div class="form-group">
									<label>Telur</label>
									<input type="text" name="tlr_tlk" style="float: right;" placeholder="Kg">
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-6" style="padding-top: 20px;">
						<div class="box-footer">
							<button type="submit" class="btn btn-primary btn-circle"><i class="glyphicon glyphicon-ok"></i> Simpan</button>&nbsp;&nbsp;<a href="main.php?thisaction=<?php echo base64_encode('penjualan'); ?>" class="btn btn-circle btn-success"><i class="glyphicon glyphicon-repeat"></i>  Batal</a>
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
		<h1>Tabel Data Penjualan</h1>
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
							<th>Tanggal</th>
							<th>Ayam Laku</th>
							<th>Telur Laku</th>
							<th>Kotoran Laku</th>
							<th>Total Harga Laku</th>
							<th>Ayam Tidak Laku</th>
							<th>Telur Tidak Laku</th>
							<th>Opsi</th>
						</tr>
					</thead>
					<tb>
						<?php $pro=mysqli_query($con,"SELECT * FROM penj_laku order by tanggal desc");$vr=1;while($duk=mysqli_fetch_array($pro)){ ?>
							<tr>
								<td><?php echo $vr; ?></td>
								<td><?php echo $duk['tanggal']; ?> Ekor</td>
								<td><?php echo $duk['jml_ayam']; ?> Ekor</td>
								<td><?php echo $duk['jml_telur']; ?> Ekor</td>
								<td><?php echo $duk['jml_kotoran']; ?> Kali</td>
								<td><?php echo $duk['total']; ?> Kali</td>
								<td><?php echo $duk['ayam_tlk']; ?> Kali</td>
								<td><?php echo $duk['telur_tlk']; ?></td>
								<td></td>
							</tr>
							<?php $vr++; } ?>
						</tb>
					</table>
				</div>
			</div>
		</div>
	</div>
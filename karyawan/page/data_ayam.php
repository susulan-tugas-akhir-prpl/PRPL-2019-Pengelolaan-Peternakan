<?php if(empty($_GET['thisaction'])){header('location:../main.php');} require '../config/koneksi.php';?>
<div class="col-xs-10">
	<div class="page-header">
		<h1>Data Ayam</h1>
	</div>
	<form role="form" method="post" enctype="multipart/form-data" action="proscon/prosescon.php?thisposition=<?php echo base64_encode('datayam'); ?>">		
		<div class="form-group">
			<label>Tanggal Pembelian</label>
			<select name="tgl" onchange="changeValue(this.value)" >
				<option>- Pilih -</option>
				<?php
				$dtAyam=mysqli_query($con, "SELECT * FROM pem_keb");
				$jsArray = "var dtAya = new Array();\n"; ?>
				<?php if(mysqli_num_rows($dtAyam)) {?>
					<?php while($row_dt= mysqli_fetch_array($dtAyam)) {?>
						<option value="<?php echo $row_dt["tanggal"]?>"> <?php echo $row_dt["tanggal"]?> </option>
						<?php $jsArray .= "dtAya['" . $row_dt['tanggal'] . "'] = {jumlah_ayam:'" . addslashes($row_dt['jumlah_ayam']) . "'};\n"; } ?>
					<?php } ?>
				</select>
			</div>
			<div class="form-group">
				<label>Jumlah Ayam</label>
				<input type="text" name="jumlah_ayam" id="jumlah_ayam" disabled="" placeholder="Ekor">
			</div>
			<!-- Script AJAX -->
			<script type="text/javascript">
				<?php echo $jsArray; ?>
				function changeValue(tanggal) {
					$dtt = document.getElementById("jumlah_ayam").value = dtAya[tanggal].jumlah_ayam;
				};
			</script>
			<div class="form-group">
				<label>Ayam Hidup</label>
				<input type="text" name="ay_hidup" placeholder="Ekor" value="">
			</div>
			<div class="form-group">
				<label>Ayam Mati</label>
				<input type="text" name="ay_mati" placeholder="Ekor">
			</div>
			<div class="form-group">
				<label>Pemberian Vaksin</label>
				<input type="text" name="p_vaksin" placeholder="Kali">
			</div>
			<div class="box-footer">
				<button type="submit" class="btn btn-primary btn-circle"><i class="glyphicon glyphicon-ok"></i> Simpan</button>&nbsp;&nbsp;<a href="main.php?thisaction=<?php echo base64_encode('datayam'); ?>" class="btn btn-circle btn-success"><i class="glyphicon glyphicon-repeat"></i>  Batal</a>
			</div>
		</form>
	</div>
	<div class="col-xs-10" style="padding-top: 5%;">
		<div class="page-header">
			<h1>Tabel Data Ayam</h1>
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
								<th>Jumlah Ayam</th>
								<th>Ayam Hidup</th>
								<th>Ayam Mati</th>
								<th>Pemberian Vaksin</th>
								<th>Tanggal</th>
								<th>Opsi</th>
							</tr>
						</thead>
						<tb>
							<?php $pro=mysqli_query($con,"SELECT * FROM data_ayam order by tgl_pem desc");$vr=1;while($duk=mysqli_fetch_array($pro)){ ?>
								<tr>
									<td><?php echo $vr; ?></td>
									<td><?php echo $duk['jml_ayam']; ?> Ekor</td>
									<td><?php echo $duk['ayam_hidup']; ?> Ekor</td>
									<td><?php echo $duk['ayam_mati']; ?> Ekor</td>
									<td><?php echo $duk['pemberian_vaksin']; ?> Kali</td>
									<td><?php echo $duk['tgl_pem']; ?></td>
									<td></td>
								</tr>
								<?php $vr++; } ?>
							</tb>
						</table>
					</div>
				</div>
			</div>
		</div>
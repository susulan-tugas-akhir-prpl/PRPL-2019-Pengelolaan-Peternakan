<?php if(empty($_GET['thisaction'])){header('location:../main.php');} require '../config/koneksi.php';?>
<div class="col-xs-10">
	<div class="page-header">
		<h1>Data Ayam</h1>
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
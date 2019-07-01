<?php if(empty($_GET['thisaction'])){header('location:../main.php');} require '../config/koneksi.php';?>
<div class="col-xs-10">
	<div class="page-header">
		<h1>Data Penjualan</h1>
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
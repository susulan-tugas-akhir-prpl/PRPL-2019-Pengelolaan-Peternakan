<?php if(empty($_GET['thisaction'])){header('location:../main.php');} require '../config/koneksi.php';?>
<div class="col-xs-10">
	<div class="page-header">
		<h1>Transaksi Pembelian Kebutuhan</h1>
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
<?php if(empty($_GET['thisaction'])){header('location:../main.php');} require '../config/koneksi.php';?>
<div class="col-xs-10">
	<div class="page-header">
		<h1>Data Telur</h1>
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
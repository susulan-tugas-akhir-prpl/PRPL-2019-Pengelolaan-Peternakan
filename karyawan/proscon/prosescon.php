<?php date_default_timezone_set('Asia/Jakarta');
if (empty($_GET['thisposition'])){
	echo "<script>Gagal Goblok</script";
}
else{
	require 'rootcon.php'; require '../../config/koneksi.php';
	$ru = new con();
	$to=base64_decode($_GET['thisposition']);
	if($to=='logincon') {
		$ru->logincon($con, $_POST['username'], $_POST['password']);
	}
	elseif($to=='logout'){
		$ru->logout();
	}
	elseif ($to=='kebutuhan') {
		$air = $_POST['air'];
		$pkn = $_POST['pkn'];
		$lsk = $_POST['lsk'];
		$vkn = $_POST['vkn'];
		$mdl = $_POST['mdl'];
		$an_ay = $_POST['an_ay'];
		$rp_an = $_POST['rp_an'];
		$rp_air = $_POST['rp_air'];
		$rp_pkn = $_POST['rp_pkn'];
		$rp_lsk = $_POST['rp_lsk'];
		$rp_vkn = $_POST['rp_vkn'];
		$tanggal = date("Y-m-d");

		// Olah Angka \\
		$ttl = ($air*$rp_air)+($pkn*$rp_pkn)+($lsk*$rp_lsk)+($vkn*$rp_vkn)+($an_ay*$rp_an);

		$sql = mysqli_query($con, "INSERT INTO pem_keb (modal, harga_ayam, jumlah_ayam, harga_pakan, jumlah_pakan, harga_air, air_lt, harga_listrik, jumlah_watt, harga_vaksin, jmlh_vaksin, total, tanggal) VALUES ('$mdl','$rp_an','$an_ay','$rp_pkn','$pkn','$rp_air','$air','$rp_lsk','$lsk','$rp_vkn','$vkn','$ttl','$tanggal') ");

		$ru->kebutuhan($con, $_POST['air'], $_POST['pkn'], $_POST['lsk'], $_POST['vkn'], $_POST['mdl'], $_POST['an_ay'], $_POST['rp_an'], $_POST['rp_air'], $_POST['rp_pkn'], $_POST['rp_lsk'], $_POST['rp_vkn']);
	}
	elseif ($to=='penjualan') {
		$an = $_POST['an'];
		$tlr = $_POST['tlr'];
		$ktr = $_POST['ktr'];
		$an_lk = $_POST['an_lk'];
		$tlr_lk = $_POST['tlr_lk'];
		$ktr_lk = $_POST['ktr_lk'];
		$an_tlk = $_POST['an_tlk'];
		$tlr_tlk = $_POST['tlr_tlk'];
		$tanggal = date("Y-m-d");

		// Olah Angka \\
		$tl = ($an*$an_lk)+($tlr*$tlr_lk)+($ktr*$ktr_lk);

		$sql = mysqli_query($con, "INSERT INTO penj_laku set jml_ayam = '$an', jml_telur = '$tlr', jml_kotoran = '$ktr', hrg_ayam = '$an_lk', hrg_telur = '$tlr_lk', hrg_kotoran = '$ktr_lk', ayam_tlk = '$an_tlk', telur_tlk = '$tlr_tlk', total = '$tl', tanggal = '$tanggal'");

		$ru->penjualan($con, $_POST['an'],$_POST['tlr'],$_POST['ktr'],$_POST['an_lk'],$_POST['tlr_lk'],$_POST['ktr_lk'],$_POST['an_tlk'],$_POST['tlr_tlk']);
	}
	elseif ($to=='datayam') {
		$ay_hidup = $_POST['ay_hidup'];
		$ay_mati = $_POST['ay_mati'];
		$p_vaksin = $_POST['p_vaksin'];
		$tgl = date('Y-m-d');
		$jm_ayam = $jsArray;

		$sql = mysqli_query($con, "INSERT INTO data_ayam set tgl_pem = '$tgl', jml_ayam = '$jm_ayam', ayam_hidup = '$ay_hidup', ayam_mati = '$ay_mati', pemberian_vaksin = '$p_vaksin'");

		$ru->datayam($con, $_POST['ay_hidup'], $_POST['ay_mati'], $_POST['p_vaksin'], $tgl, $jm_ayam);
	}
	elseif ($to=='data_telur') {
		$jml_telur = $_POST['jml_telur'];
		$tlr_sht = $_POST['tlr_sht'];
		$tlr_cct = $_POST['tlr_cct'];
		$tgl = date("Y-m-d");

		$sql = mysqli_query($con, "INSERT INTO data_telur set jumlah_telur = '$jml_telur', telur_sehat = '$tlr_sht', telur_cacat = '$tlr_cct', tanggal = '$tgl'");

		$ru->data_telur($con, $_POST['jml_telur'], $_POST['tlr_sht'], $_POST['tlr_cct']);
	}
}
?>
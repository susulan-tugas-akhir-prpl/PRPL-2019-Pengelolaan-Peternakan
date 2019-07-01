<?php
class con{
function loginadmin($con,$username,$password){
		$sql=mysqli_fetch_array(mysqli_query($con,"SELECT * from admin where user='$username' AND pass='$password' "));
		if($sql!=NULL){
			session_start();$_SESSION['id_admin']=$sql['id_admin'];;$_SESSION['user']=$sql['user'];;$_SESSION['pass']=$sql['pass'];
			header('location:../main');
		}
		else{
			header('location:../log');
		}
	}
	function logoutadmin(){
		session_start();unset($_SESSION['id_admin']);unset($_SESSION['user']);unset($_SESSION['pass']);session_destroy();header('location:../log.php');
	}
	function kebutuhan($con,$air,$pkn,$lsk,$vkn,$mdl,$an_ay,$rp_an,$rp_air,$rp_pkn,$rp_lsk,$rp_vkn)
	{
		header('location:../main.php?thisaction='.base64_encode('kebutuhan').'');
	}
	function penjualan($con,$an,$tlr,$ktr,$an_lk,$tlr_lk,$ktr_lk,$an_tlk,$tlr_tlk)
	{
		header('location:../main.php?thisaction='.base64_encode('penjualan').'');
	}
	function datayam($con,$ay_hidup,$ay_mati,$p_vaksin)
	{
		header('location:../main.php?thisaction='.base64_encode('data_ayam').'');
	}
	function data_telur($con,$jml_telur,$tlr_sht,$tlr_cct)
	{
		header('location:../main.php?thisaction='.base64_encode('data_telur').'');
	}
	function addkaryawan($con,$user,$pass,$nama,$alamat){
		$sql=mysqli_query($con,"INSERT INTO karyawan set user='$user',pass='$pass',nama='$nama',alamat='$alamat' ");
		header('location:../main.php?thisaction='.base64_encode('karyawan').'');
	}
	function deletekaryawan($con,$control){
		$sql=mysqli_query($con,"DELETE FROM karyawan where id_krw='$control' ");
		header('location:../main?thisaction='.base64_encode('karyawan').'');
	}
}
?>
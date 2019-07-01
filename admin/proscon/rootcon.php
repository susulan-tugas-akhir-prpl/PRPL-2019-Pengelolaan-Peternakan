<?php
class con{
	function logincon($con,$username,$password){
		$sql=mysqli_fetch_array(mysqli_query($con,"SELECT * from log where username='$username' AND password='$password' "));
		if($sql!=NULL){
			session_start();$_SESSION['id_control']=$sql['id_control'];;$_SESSION['username']=$sql['username'];;$_SESSION['password']=$sql['password'];
			header('location:../main.php');
		}
		else{
			header('location:../log.php');
		}
	}
	function logout(){
		session_start();unset($_SESSION['id_control']);unset($_SESSION['username']);unset($_SESSION['password']);session_destroy();header('location:../log.php');
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
}
?>
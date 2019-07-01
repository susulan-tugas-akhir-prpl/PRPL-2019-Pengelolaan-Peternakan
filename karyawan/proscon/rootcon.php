<?php
class con{
	function logincon($con,$username,$password){$pm=md5($password);
		$sql=mysqli_fetch_array(mysqli_query($con,"SELECT * from karyawan where user='$username' AND pass='$pm' "));
		if($sql!=NULL){
			session_start();$_SESSION['id_krw']=$sql['id_krw'];;$_SESSION['user']=$sql['user'];;$_SESSION['pass']=$sql['pass'];
			header('location:../main');
		}
		else{
			header('location:../log');
		}
	}
	function logout(){
		session_start();unset($_SESSION['id_krw']);unset($_SESSION['user']);unset($_SESSION['pass']);session_destroy();header('location:../log');
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
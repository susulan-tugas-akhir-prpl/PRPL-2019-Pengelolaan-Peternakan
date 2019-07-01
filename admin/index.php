<?php session_start(); if(empty($_SESSION['id_admin'])){ header('location:log.php'); }
else {header('location:main.php');} ?>
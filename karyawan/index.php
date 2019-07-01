<?php session_start(); if(empty($_SESSION['id_krw'])){ header('location:log.php'); }
else {header('location:main.php');} ?>
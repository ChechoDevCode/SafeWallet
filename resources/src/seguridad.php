<?php 
@session_start();
if (!isset($_SESSION['ID'])) {
	header('location: vistaLogin.blade.php');
	die();
}
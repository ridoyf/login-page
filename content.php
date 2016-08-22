<?php 
	session_start();

	if(!isset($_SESSION['username']) || $_SESSION['username'] != 'user'){
		header('Location: index.php');
	}
?>
<!--Content-->
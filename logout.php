<?php
	 session_start();
	 if (!isset($_SESSION['user'])) {
	 	header("Location: auth");
	 } else if(isset($_SESSION['user'])!="") {
	  	header("Location: home");
	 }
	 
	 if (isset($_GET['logout'])) {
	  	unset($_SESSION['user']);
	  	session_unset();
	  	session_destroy();
	  	header("Location: auth");
	  	exit;
	 }
?>
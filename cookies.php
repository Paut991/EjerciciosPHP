<?php

session_start();
	if(!isset($_SESSION["temps"])) {

		$_SESSION['temps'] = 0;
	} else {

		$_SESSION['temps'] = time();
		session_destroy();
	}

	echo $_SESSION['temps'];
?>
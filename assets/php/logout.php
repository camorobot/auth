<?php

	session_start();
	unset($_SESSION['loggedin']);
	header("location: https://www.boompje5.nl");
?>

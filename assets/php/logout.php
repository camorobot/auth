<?php

	session_start();
	unset($_SESSION['loggedin']);
	header("location: https://auth.boompje5.nl");
?>

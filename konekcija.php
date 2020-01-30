<?php
	$server = "localhost";
	$user = "root";
	$pass = "";
	$db = "domzdravlja";

	$conn = mysqli_connect($server, $user, $pass, $db);

	if (!$conn)
	{
		die("Konekcija nije uspela: " . mysqli_connect_error());
	}

	$za_utf8 = mysqli_query ($conn,"SET NAMES 'utf8' COLLATE 'utf8_unicode_ci'");
?>
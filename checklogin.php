<?php
	require_once "konekcija.php";

	$username = $_POST['username'];
	$password = $_POST['password'];

	$sql = "SELECT username, password FROM domzdravlja.admin WHERE username='$username' AND password='$password'";
	$res = mysqli_query($conn, $sql);

	if (mysqli_num_rows($res)>0)
	{
		while ($row = mysqli_fetch_assoc($res))
		{
			session_start();
			$_SESSION["username"] = $row["username"];
			header("location:adminpanel.php");
		}
	}
	else
	{
		echo $greska = "Doslo je do greske!";
	}

	mysqli_close($conn);
?>
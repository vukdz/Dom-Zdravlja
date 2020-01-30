<!DOCTYPE html>
<html lang="sr">
<body>
<form name="izmenalekara1" method="post" action="adminpanel.php">
<?php
	session_start();
	require_once("konekcija.php");

	$lekar = $_GET['q'];

	$sql = "SELECT id, ime, prezime, vremepoc, vremekraj FROM domzdravlja.lekari WHERE id='$lekar'";
	$res = mysqli_query($conn, $sql);

	while ($row = mysqli_fetch_array($res))
	{
		if ($lekar==="--Izaberite lekara--")
		{
			echo "Izaberite lekara";
		}
		else
		{
			?>
			<h4><?php echo $row['ime'] . " " . $row['prezime']; ?></h4>
			
			<input type="text" name="od1" id="od1" value="<?php echo $row['vremepoc']; ?>">
			<input type="text" name="do1" id="do1" value="<?php echo $row['vremekraj']; ?>"><br><br>
			<input type="submit" class="btn btn-primary" name="submit1" id="submit1" value="Izmeni">
			<?php
		}		
	}
	$_SESSION['lekarid'] = $lekar;
?>
</form>
</body>
</html>
<!DOCTYPE html>
<html lang="sr">
<body>
<form name="izmenavesti1" method="post" action="panelvesti.php">
<?php
	session_start();
	require_once("konekcija.php");

	$vest = $_GET['q'];

	$sql = "SELECT id, naslov, sadrzaj, slika FROM domzdravlja.vesti WHERE id='$vest'";
	$res = mysqli_query($conn, $sql);

	while ($row = mysqli_fetch_array($res))
	{
		if ($vest === "--Izaberite vest--")
		{
			echo "Izaberite vest";
		}
		else
		{
			?>
			<h4><?php echo $row['naslov']; ?></h4>

			<input type="text" name="naslov1" id="naslov1" value="<?php echo $row['naslov']; ?>"><br><br>
			<textarea rows="10" cols="50" name="sadrzaj1" id="sadrzaj1"><?php echo $row['sadrzaj']; ?></textarea>
			<input type="submit" class="btn btn-primary" name="submit1" id="submit1" value="Izmeni">
			<?php
		}
	}
	$_SESSION['vestid'] = $vest;
?>
</form>
</body>
</html>
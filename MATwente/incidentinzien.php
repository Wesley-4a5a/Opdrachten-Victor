<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>MA Twente Registratie Systeem</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<?php 
include 'header.php' ;
require('databaseHandlerClass.php');

$handler = new dbHandler('localhost', 'matwente', 'root', '');


?>

<center><div class="col-md-4 content-container-left">

<?php
		$limit = 0;
		//$limitMax = $limit+19;
		$sql = "SELECT `MeldingVraagBetrekkeningGebruikers`, `MeldingVraagAanmeldDag`, `MeldingVraagOmschrijving`, `MeldingVraagOmschrijvingDetails`, `MeldingVraagBinnenOfBuitenDienst` FROM `meldingenvragen` LIMIT $limit, 24";
		echo "<table id='tableuser' border='1'>";
		$res = $handler->readData($sql);
		foreach ($res as $row)
		{
			foreach ($row as $key => $val)
			{
				echo "<th>$key</th>";
			}
				echo "<th>Update</th>";
			break;
		}

		foreach ($res as $row)
		{
					echo "<form action='' method='POST'>";
					echo "<tr>";
		   foreach ($row as $key => $val)
			 {
		       echo "<td>$val</td>";
		   }
			 echo "<td><input type='submit' value='Update' /></td>";
		   echo "</tr>";
			 echo "</form>";
		}
		
//		echo '<div><form action="" method="REQUEST"><input type="submit" name="0" value="0"><input type="submit" name="25" value="25"><input type="submit" name="50" value="50"><input type="submit" name="75" value="75"></form></div>';
			
		
		if(ISSET($_POST['submit'])){
		$sql = "INSERT INTO `matwente`.`medewerkers`(`MedewerkerID`, `PCID`, `MedewerkerGeslacht`, `MedewerkerVoorletter`, `MedewerkerAchternaam`, `MedewerkerAfdeling`, `MedewerkerInternTelefoonNummer`, `MedewerkerBinnenOfBuitenDienst`) VALUES (NULL, 52, '" . $_POST['geslacht'] ."', '" . $_POST['voorletter'] ."', '" . $_POST['achternaam'] ."', '" . $_POST['afdeling'] ."', 252, 1)";
		echo $handler->CreateData($sql);
		echo " Nieuwe gebruiker toegevoegd!<br>";
		}
			 
?>			 
</div></center>

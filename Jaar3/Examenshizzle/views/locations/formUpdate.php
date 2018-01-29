<h1>Locatie Updaten</h1>
<hr>
<form action="index.php?controller=locations&action=updateLocation&id=<?php echo $_GET['id']?>" method='POST'>
	Naam locatie:<br>
	<input type="text" name="location" id="location"><br>

	<hr>
	<input type="submit" value="Update">
</form>

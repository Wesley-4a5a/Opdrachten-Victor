<h1>Category Updaten</h1>
<hr>
<form action="index.php?controller=categories&action=updateCategory&id=<?php echo $_GET['id']?>" method='POST'>
	Naam category:<br>
	<input type="text" name="product_category" id="product_category"><br>

	<hr>
	<input type="submit" value="Update">
</form>



<h1>Update Product</h1>
<hr />

<form action='index.php?controller=products&action=updateProduct&id=<?php echo $_GET["id"]?>' method='POST'>
Product naam:<br /> <input type='text' name='product' value="<?php echo $_GET['name'] ?>"/><br />
Voorraad:<br /> <input type='text' name='voorraad' value="<?php echo $_GET['voorraad'] ?>"/><br />
Prijs:<br /> <input type='text' name='prijs' value="<?php echo $_GET['prijs'] ?>"/><br />
<input type='submit' value='Update' name='Update' />
</form>

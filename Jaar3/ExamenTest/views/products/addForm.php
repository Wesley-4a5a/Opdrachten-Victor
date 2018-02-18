<h1>Product Toevoegen</h1>
<hr>

<form class="" action="index.html?controller=products&action=addProduct" method="POST">
Product naam:<br /> <input type='text' name='product' /><br />
Voorraad: <br /><input type='number' name='voorraad' /><br />
Product Prijs:<br /> <input type='number' name='prijs' /><br />
Fabriek:<br />
<select name='fabriek'>
    	<?php foreach ($fabriek as $row){
        echo '<option value="'.$row->id.'">' . $row->naam . '</option>';
      } ?>
</select><br />
<input type='submit'/>
</form>

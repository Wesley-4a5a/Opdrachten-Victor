<h1>Producten</h1>

<hr>

<p><a href='index.php?controller=Products&action=addForm'>Nieuwe Product Toevoegen</a></p>

<hr>

<table class='table table-striped table-bordered table-hover'>
	<thead>
		<tr>
			<th>Id</th>
			<th>Product</th>
			<th>Prijs</th>
			<th>Fabriek</th>
			<th></th>
			<th></th>
		</tr>
	</thead>
	<tbody>
		<?php
		foreach ($product as $row): ?>
		<tr>
			<td><?php echo $row->product_id ?></td>
			<td><a href='index.php?controller=products&action=productDetails&id=<?php echo $row->product_id ?>'><?php echo $row->product ?></a></td>
			<td><?php echo $row->prijs ?></td>
			<td><?php echo $row->naam ?></td>
			<td><a href='index.php?controller=products&action=update&id=<?php echo $row->product_id ?>&name=<?php echo $row->product ?>&voorraad=<?php echo $row->voorraad ?>&prijs=<?php echo $row->prijs ?>'>Verander mij!</a></td>
			<td><a href='index.php?controller=products&action=delete&id=<?php echo $row->product_id ?>'>Hang mij!</a></td>
		</tr>
		<?php endforeach; ?>
	</tbody>
</table>

<h1>Voorraad</h1>

<hr>

<p><a href='index.php?controller=Voorraad&action=addForm'>Nieuwe Product Toevoegen</a></p>

<hr>

<table class='table table-striped table-bordered table-hover'>
	<thead>
		<tr>
			<th>Id</th>
			<th>Product</th>
			<th>Locatie</th>
			<th>Voorraad</th>
		</tr>
	</thead>
	<tbody>
		<?php foreach ($voorraad as $row): ?>
		<tr>
			<td><?php echo $row->opslag_product_id ?></td>
			<td><?php echo $row->product ?></td>
			<td><?php echo $row->locatie ?></td>
			<td><?php echo $row->OPvoorraad ?></td>
		</tr>
		<?php endforeach; ?>
	</tbody>
</table>

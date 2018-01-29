<h1>Categories</h1>

<hr>

<p><a href='index.php?controller=categories&action=addForm'>Toevoegen</a></p>

<hr>

<table class='table table-striped table-bordered table-hover'>
	<thead>
		<tr>
			<th>Id</th>
			<th>Categorieen</th>
			<th></th>
			<th></th>
		</tr>
	</thead>
	<tbody>
		<?php foreach ($product_categories as $row): ?>
		<tr>
			<td><?php echo $row->id ?></td>
			<td><?php echo $row->category_name ?></td>
			<td><a href='index.php?controller=categories&action=updateForm&id=<?php echo $row->id ?>'>Verander mij!</a></td>
			<td><a href='index.php?controller=categories&action=delete&id=<?php echo $row->id ?>'>Hang mij!</a></td>
		</tr>
		<?php endforeach; ?>
	</tbody>
</table>

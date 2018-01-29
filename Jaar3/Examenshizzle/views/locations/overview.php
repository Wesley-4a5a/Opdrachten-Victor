<h1>Locations</h1>

<hr>

<p><a href='index.php?controller=locations&action=addForm'>Toevoegen</a></p>

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
		<?php foreach ($locations as $row): ?>
		<tr>
			<td><?php echo $row->id ?></td>
			<td><?php echo $row->location ?></td>
			<td><a href='index.php?controller=locations&action=updateForm&id=<?php echo $row->id ?>'>Verander mij!</a></td>
			<td><a href='index.php?controller=locations&action=delete&id=<?php echo $row->id ?>'>Hang mij!</a></td>
		</tr>
		<?php endforeach; ?>
	</tbody>
</table>

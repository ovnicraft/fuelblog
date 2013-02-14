<h2>Listing Uploads</h2>
<br>
<?php if ($uploads): ?>
<table class="table table-striped">
	<thead>
		<tr>
			<th>Id</th>
			<th>Name</th>
			<th>Location</th>
			<th>File name</th>
			<th>Type</th>
			<th>Created</th>
			<th></th>
		</tr>
	</thead>
	<tbody>
<?php foreach ($uploads as $upload): ?>		<tr>

			<td><?php echo $upload->id; ?></td>
			<td><?php echo $upload->name; ?></td>
			<td><?php echo $upload->location; ?></td>
			<td><?php echo $upload->file_name; ?></td>
			<td><?php echo $upload->type; ?></td>
			<td><?php echo date('Y-m-d',$upload->created_at); ?></td>
			<td>
				<?php echo Html::anchor('upload/view/'.$upload->id, 'View'); ?> |
				<?php echo Html::anchor('upload/edit/'.$upload->id, 'Edit'); ?> |
				<?php echo Html::anchor('upload/delete/'.$upload->id, 'Delete', array('onclick' => "return confirm('Are you sure?')")); ?>

			</td>
		</tr>
<?php endforeach; ?>	</tbody>
</table>

<?php else: ?>
<p>No Uploads.</p>

<?php endif; ?><p>
	<?php echo Html::anchor('upload/create', 'Add new Upload', array('class' => 'btn btn-success')); ?>

</p>

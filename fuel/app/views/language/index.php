<h2>Listing Languages</h2>
<br>
<?php if ($languages): ?>
<table class="table table-striped">
	<thead>
		<tr>
			<th>Id</th>
			<th>Name</th>
			<th>Status</th>
			<th></th>
		</tr>
	</thead>
	<tbody>
<?php foreach ($languages as $language): ?>		<tr>

			<td><?php echo $language->id; ?></td>
			<td><?php echo $language->name; ?></td>
			<td><?php echo $language->status; ?></td>
			<td>
				<?php echo Html::anchor('language/view/'.$language->id, 'View'); ?> |
				<?php echo Html::anchor('language/edit/'.$language->id, 'Edit'); ?> |
				<?php echo Html::anchor('language/delete/'.$language->id, 'Delete', array('onclick' => "return confirm('Are you sure?')")); ?>

			</td>
		</tr>
<?php endforeach; ?>	</tbody>
</table>

<?php else: ?>
<p>No Languages.</p>

<?php endif; ?><p>
	<?php echo Html::anchor('language/create', 'Add new Language', array('class' => 'btn btn-success')); ?>

</p>

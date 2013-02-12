<h2>Listing Categories</h2>
<br>
<?php if ($categories): ?>
<table class="table table-striped">
	<thead>
		<tr>
			<th>Name</th>
			<th>Title</th>
			<th>Parent id</th>
			<th>Lft</th>
			<th>Rght</th>
			<th>Status</th>
			<th></th>
		</tr>
	</thead>
	<tbody>
<?php foreach ($categories as $category): ?>		<tr>

			<td><?php echo $category->name; ?></td>
			<td><?php echo $category->title; ?></td>
			<td><?php echo $category->parent_id; ?></td>
			<td><?php echo $category->lft; ?></td>
			<td><?php echo $category->rght; ?></td>
			<td><?php echo $category->status; ?></td>
			<td>
				<?php echo Html::anchor('category/view/'.$category->id, 'View'); ?> |
				<?php echo Html::anchor('category/edit/'.$category->id, 'Edit'); ?> |
				<?php echo Html::anchor('category/delete/'.$category->id, 'Delete', array('onclick' => "return confirm('Are you sure?')")); ?>

			</td>
		</tr>
<?php endforeach; ?>	</tbody>
</table>

<?php else: ?>
<p>No Categories.</p>

<?php endif; ?><p>
	<?php echo Html::anchor('category/create', 'Add new Category', array('class' => 'btn btn-success')); ?>

</p>

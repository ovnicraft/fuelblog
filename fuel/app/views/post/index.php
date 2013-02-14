<h2>Listing Posts</h2>
<br>
<?php if ($posts): ?>
<table class="table table-striped">
	<thead>
		<tr>
			<th>Id</th>
			<th>Name</th>
			<th>Title</th>
			<th>Body short</th>
			<th>Body</th>
			<th>Status</th>
			<th>Category id</th>
			<th>Language id</th>
			<th></th>
		</tr>
	</thead>
	<tbody>
<?php foreach ($posts as $post): ?>		<tr>

			<td><?php echo $post->id; ?></td>
			<td><?php echo $post->name; ?></td>
			<td><?php echo $post->title; ?></td>
			<td><?php echo $post->body_short; ?></td>
			<td><?php echo $post->body; ?></td>
			<td><?php echo $post->status; ?></td>
			<td><?php echo $post->category_id; ?></td>
			<td><?php echo $post->language_id; ?></td>
			<td>
				<?php echo Html::anchor('post/view/'.$post->id, 'View'); ?> |
				<?php echo Html::anchor('post/edit/'.$post->id, 'Edit'); ?> |
				<?php echo Html::anchor('post/delete/'.$post->id, 'Delete', array('onclick' => "return confirm('Are you sure?')")); ?>

			</td>
		</tr>
<?php endforeach; ?>	</tbody>
</table>

<?php else: ?>
<p>No Posts.</p>

<?php endif; ?><p>
	<?php echo Html::anchor('post/create', 'Add new Post', array('class' => 'btn btn-success')); ?>

</p>

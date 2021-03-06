<h2>Listing Comments</h2>
<br>
<?php if ($comments): ?>
<table class="table table-striped">
	<thead>
		<tr>
			<th>Id</th>
			<th>User id</th>
			<th>Status</th>
			<th>Post id</th>
			<th>Language id</th>
			<th>Created</th>
			<th></th>
		</tr>
	</thead>
	<tbody>
<?php foreach ($comments as $comment): ?>		<tr>

			<td><?php echo $comment->id; ?></td>
			<td><?php echo $comment->user_id; ?></td>
			<td><?php echo $comment->status; ?></td>
			<td><?php echo $comment->post_id; ?></td>
			<td><?php echo $comment->language_id; ?></td>
			<td><?php echo date('Y-m-d',$comment->language_id); ?></td>
			<td>
				<?php echo Html::anchor('comment/view/'.$comment->id, 'View'); ?> |
				<?php echo Html::anchor('comment/edit/'.$comment->id, 'Edit'); ?> |
				<?php echo Html::anchor('comment/delete/'.$comment->id, 'Delete', array('onclick' => "return confirm('Are you sure?')")); ?>

			</td>
		</tr>
<?php endforeach; ?>	</tbody>
</table>

<?php else: ?>
<p>No Comments.</p>

<?php endif; ?><p>
	<?php echo Html::anchor('comment/create', 'Add new Comment', array('class' => 'btn btn-success')); ?>

</p>
<p>
	<?php echo $pagination; ?>
</p>

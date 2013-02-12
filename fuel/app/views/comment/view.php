<h2>Viewing #<?php echo $comment->id; ?></h2>

<p>
	<strong>User id:</strong>
	<?php echo $comment->user_id; ?></p>
<p>
	<strong>Status:</strong>
	<?php echo $comment->status; ?></p>
<p>
	<strong>Post id:</strong>
	<?php echo $comment->post_id; ?></p>
<p>
	<strong>Language id:</strong>
	<?php echo $comment->language_id; ?></p>

<?php echo Html::anchor('comment/edit/'.$comment->id, 'Edit'); ?> |
<?php echo Html::anchor('comment', 'Back'); ?>
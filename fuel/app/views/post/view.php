<h2>Viewing #<?php echo $post->id; ?></h2>
<p>
	<strong>Name:</strong>
	<?php echo $post->name; ?></p>
<p>
	<strong>Body short:</strong>
	<?php echo $post->body_short; ?></p>
<p>
	<strong>Body:</strong>
	<?php echo $post->body; ?></p>
<p>
	<strong>Status:</strong>
	<?php echo $post->status; ?></p>
<p>
	<strong>Category id:</strong>
	<?php echo $post->category_id; ?></p>
<p>
	<strong>Language id:</strong>
	<?php echo $post->language_id; ?></p>
<p>
	<strong>Upload id:</strong>
	<?php echo (count($post->uploads)) ? $post->uploads[1]->id : ''; ?></p>

<?php echo Html::anchor('post/edit/'.$post->id, 'Edit'); ?> |
<?php echo Html::anchor('post', 'Back'); ?>

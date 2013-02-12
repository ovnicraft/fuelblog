<h2>Viewing #<?php echo $upload->id; ?></h2>

<p>
	<strong>Name:</strong>
	<?php echo $upload->name; ?></p>
<p>
	<strong>Location:</strong>
	<?php echo $upload->location; ?></p>
<p>
	<strong>File name:</strong>
	<?php echo $upload->file_name; ?></p>
<p>
	<strong>Type:</strong>
	<?php echo $upload->type; ?></p>

<?php echo Html::anchor('upload/edit/'.$upload->id, 'Edit'); ?> |
<?php echo Html::anchor('upload', 'Back'); ?>
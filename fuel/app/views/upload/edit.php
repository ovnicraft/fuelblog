<h2>Editing Upload</h2>
<br>

<?php echo render('upload/_form'); ?>
<p>
	<?php echo Html::anchor('upload/view/'.$upload->id, 'View'); ?> |
	<?php echo Html::anchor('upload', 'Back'); ?></p>

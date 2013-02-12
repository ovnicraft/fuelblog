<h2>Viewing #<?php echo $language->id; ?></h2>

<p>
	<strong>Name:</strong>
	<?php echo $language->name; ?></p>
<p>
	<strong>Status:</strong>
	<?php echo $language->status; ?></p>

<?php echo Html::anchor('language/edit/'.$language->id, 'Edit'); ?> |
<?php echo Html::anchor('language', 'Back'); ?>
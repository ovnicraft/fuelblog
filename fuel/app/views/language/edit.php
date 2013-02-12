<h2>Editing Language</h2>
<br>

<?php echo render('language/_form'); ?>
<p>
	<?php echo Html::anchor('language/view/'.$language->id, 'View'); ?> |
	<?php echo Html::anchor('language', 'Back'); ?></p>

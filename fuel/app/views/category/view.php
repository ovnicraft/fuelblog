<h2>Viewing #<?php echo $category->id; ?></h2>

<p>
	<strong>Name:</strong>
	<?php echo $category->name; ?></p>
<p>
	<strong>Title:</strong>
	<?php echo $category->title; ?></p>
<p>
	<strong>Parent id:</strong>
	<?php echo $category->parent_id; ?></p>
<p>
	<strong>Lft:</strong>
	<?php echo $category->lft; ?></p>
<p>
	<strong>Rght:</strong>
	<?php echo $category->rght; ?></p>
<p>
	<strong>Status:</strong>
	<?php echo $category->status; ?></p>

<?php echo Html::anchor('category/edit/'.$category->id, 'Edit'); ?> |
<?php echo Html::anchor('category', 'Back'); ?>
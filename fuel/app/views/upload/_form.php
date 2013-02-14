<?php echo Form::open(array('enctype'=>'multipart/form-data')); ?>

	<fieldset>
		<div class="clearfix">
			<?php echo Form::label('Name', 'name'); ?>

			<div class="input">
				<?php echo Form::input('name', Input::post('name', isset($upload) ? $upload->name : ''), array('class' => 'span4')); ?>

			</div>
		</div>
		<div class="clearfix">
			<?php echo Form::label('Location', 'location'); ?>

			<div class="input">
				<?php echo Form::input('location', Input::post('location', isset($upload) ? $upload->location : ''), array('class' => 'span4')); ?>

			</div>
		</div>
		<div class="clearfix">
			<?php echo Form::label('File name', 'file_name'); ?>

			<div class="input">
				<?php echo Form::input('file_name', Input::post('file_name', isset($upload) ? $upload->file_name : ''), array('class' => 'span4')); ?>

			</div>
		</div>
		<div class="clearfix">
			<?php echo Form::label('Type', 'type'); ?>

			<div class="input">
				<?php echo Form::input('type', Input::post('type', isset($upload) ? $upload->type : ''), array('class' => 'span4')); ?>

			</div>
		</div>
		<div class="clearfix">
			<?php echo Form::label('File'); ?>
			<div class="input">
				<?php 
					echo Form::file('File', array(
						'name' => 'uploaded_file'
					));
				?>
			</div>
		</div>
		<div class="actions">
			<?php echo Form::submit('submit', 'Save', array('class' => 'btn btn-primary')); ?>

		</div>
	</fieldset>
<?php echo Form::close(); ?>

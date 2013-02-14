<?php echo Form::open(); ?>

	<fieldset>
		<div class="clearfix">
			<?php echo Form::label('Name', 'name'); ?>

			<div class="input">
				<?php echo Form::input('name', Input::post('name', isset($post) ? $post->name : ''), array('class' => 'span4')); ?>

			</div>
		</div>
		<div class="clearfix">
			<?php echo Form::label('Title', 'title'); ?>

			<div class="input">
				<?php echo Form::input('title', Input::post('title', isset($post) ? $post->title : ''), array('class' => 'span4')); ?>

			</div>
		</div>

		<div class="clearfix">
			<?php echo Form::label('Body short', 'body_short'); ?>

			<div class="input">
				<?php echo Form::textarea('body_short', Input::post('body_short', isset($post) ? $post->body_short : ''), array('class' => 'span8', 'rows' => 8)); ?>

			</div>
		</div>
		<div class="clearfix">
			<?php echo Form::label('Body', 'body'); ?>

			<div class="input">
				<?php echo Form::textarea('body', Input::post('body', isset($post) ? $post->body : ''), array('class' => 'span8', 'rows' => 8)); ?>

			</div>
		</div>
		<div class="clearfix">
			<?php echo Form::label('Status', 'status'); ?>

			<div class="input">
				<?php echo Form::input('status', Input::post('status', isset($post) ? $post->status : ''), array('class' => 'span4')); ?>

			</div>
		</div>
		<div class="clearfix">
			<?php echo Form::label('Category id', 'category_id'); ?>

			<div class="input">
				<?php echo Form::input('category_id', Input::post('category_id', isset($post) ? $post->category_id : ''), array('class' => 'span4')); ?>

			</div>
		</div>
		<div class="clearfix">
			<?php echo Form::label('Language id', 'language_id'); ?>

			<div class="input">
				<?php echo Form::input('language_id', Input::post('language_id', isset($post) ? $post->language_id : ''), array('class' => 'span4')); ?>

			</div>
		</div>
		<div class="clearfix">
			<?php echo Form::label('Upload id', 'upload_id'); ?>

			<div class="input">
				<?php echo Form::input('upload_id', Input::post('upload_id', (count($post->uploads)) ? $post->uploads[1]->id : ''), array('class' => 'span4')); ?>

			</div>
		<div class="actions">
			<?php echo Form::submit('submit', 'Save', array('class' => 'btn btn-primary')); ?>

		</div>
	</fieldset>
<?php echo Form::close(); ?>

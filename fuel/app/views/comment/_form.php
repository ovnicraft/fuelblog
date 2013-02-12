<?php echo Form::open(); ?>

	<fieldset>
		<div class="clearfix">
			<?php echo Form::label('User id', 'user_id'); ?>

			<div class="input">
				<?php echo Form::input('user_id', Input::post('user_id', isset($comment) ? $comment->user_id : ''), array('class' => 'span4')); ?>

			</div>
		</div>
		<div class="clearfix">
			<?php echo Form::label('Status', 'status'); ?>

			<div class="input">
				<?php echo Form::input('status', Input::post('status', isset($comment) ? $comment->status : ''), array('class' => 'span4')); ?>

			</div>
		</div>
		<div class="clearfix">
			<?php echo Form::label('Post id', 'post_id'); ?>

			<div class="input">
				<?php echo Form::input('post_id', Input::post('post_id', isset($comment) ? $comment->post_id : ''), array('class' => 'span4')); ?>

			</div>
		</div>
		<div class="clearfix">
			<?php echo Form::label('Language id', 'language_id'); ?>

			<div class="input">
				<?php echo Form::input('language_id', Input::post('language_id', isset($comment) ? $comment->language_id : ''), array('class' => 'span4')); ?>

			</div>
		</div>
		<div class="actions">
			<?php echo Form::submit('submit', 'Save', array('class' => 'btn btn-primary')); ?>

		</div>
	</fieldset>
<?php echo Form::close(); ?>
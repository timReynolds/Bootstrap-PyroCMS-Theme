<h2 class="page-title" id="page_title"><?php echo lang('user_register_header') ?></h2>

<p>
	<span id="active_step"><?php echo lang('user_register_step1') ?></span> -&gt;
	<span><?php echo lang('user_register_step2') ?></span>
</p>

<?php if ( ! empty($error_string)):?>
<!-- Woops... -->
<div class="alert alert-error">
	<button type="button" class="close" data-dismiss="alert">×</button>
	<?php echo $error_string;?>
</div>
<?php endif;?>

<?php echo form_open('register', array('id' => 'register', 'class'=>'form-stacked')); ?>

	<label for="first_name"><?php echo lang('user_first_name') ?></label>
	<input type="text" name="first_name" maxlength="40" value="<?php echo set_value('first_name'); ?>" />

	<label for="last_name"><?php echo lang('user_last_name') ?></label>
	<input type="text" name="last_name" maxlength="40" value="<?php echo set_value('last_name'); ?>" />

	
	<?php if ( ! Settings::get('auto_username')): ?>

		<label for="username"><?php echo lang('user_username') ?></label>
		<input type="text" name="username" maxlength="100" value="<?php echo set_value('username'); ?>" />

	<?php endif; ?>
	

	<label for="email"><?php echo lang('user_email') ?></label>
	<input type="text" name="email" maxlength="100" value="<?php echo set_value('email'); ?>" />

	<label for="password"><?php echo lang('user_password') ?></label>
	<input type="password" name="password" maxlength="100" />
    <div class='form-actions'>
		<?php echo form_submit( array('name'=>'btnSubmit', 'class'=>'btn btn-primary'), lang('user_register_btn')); ?>
    </div>

<?php echo form_close(); ?>
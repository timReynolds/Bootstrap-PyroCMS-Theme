<h2 class="page-title" id="page_title"><?php echo lang('user_login_header') ?></h2>

<?php if (validation_errors()): ?>
<div class="alert-message error">
	<?php echo validation_errors();?>
</div>
<?php endif; ?>

<?php echo form_open('users/login', array('id'=>'login', 'class'=>'form-stacked'), array('redirect_to' => $redirect_to)); ?>

		<label for="email"><?php echo lang('user_email'); ?></label>
		<input type="text" id="email" name="email" maxlength="120" />

		<label for="password"><?php echo lang('user_password'); ?></label>
		<input type="password" id="password" name="password" maxlength="20" />
  
		<p><?php echo form_checkbox('remember', '1', FALSE); ?><?php echo lang('user_remember')?></p>
     	
     	<div class='actions'>
		<input type="submit" value="<?php echo lang('user_login_btn') ?>" name="btnLogin" class="btn"/>
		<?php echo anchor('register', lang('user_register_btn'), 'class="btn primary"');?>
		</div>
		<p><?php echo anchor('users/reset_pass', lang('user_reset_password_link'));?></p>


<?php echo form_close(); ?>
<h2 id="page_title" class="page-title">
	<?php echo ($this->current_user->id !== $_user->id) ?
					sprintf(lang('user_edit_title'), $_user->first_name.' '.$_user->last_name) :
					lang('profile_edit') ?>
</h2>

<div>
	<?php if(validation_errors()):?>
	<div class="error-box">
		<?php echo validation_errors();?>
	</div>
	<?php endif;?>

	<?php echo form_open('edit-profile', array('id'=>'user_edit', 'class'=>'form-stacked'));?>

	<fieldset id="user_names">
		<legend><?php echo lang('_user_details_section') ?></legend>

      		<label for="first_name"><?php echo lang('user_first_name') ?></label>
			<?php echo form_input('first_name', $_user->first_name); ?>

			<label for="last_name"><?php echo lang('user_last_name') ?></label>
			<?php echo form_input('last_name', $_user->last_name); ?>

			<label for="display_name"><?php echo lang('profile_display_name') ?></label>
			<?php echo form_input('display_name', set_value('display_name', $_user->display_name)); ?>

	</fieldset>

	<fieldset id="user_password">
		<legend><?php echo lang('user_password_section') ?></legend>

				<label for="password"><?php echo lang('user_password') ?></label>
				<?php echo form_password('password', '', 'autocomplete="off"'); ?>

	</fieldset>

	<fieldset>
		<legend><?php echo lang('user_other_settings_section') ?></legend>

				<label for="lang"><?php echo lang('user_lang') ?></label><br/>
				<?php echo form_dropdown('lang', $languages, $_user->lang); ?>

	</fieldset>
	
	<fieldset id="user_personal">
		<legend><?php echo lang('profile_personal_section') ?></legend>
    
                  <div class="clearfix">

				<label><?php echo lang('profile_dob') ?></label>
				<div class="input">
      				<div class="inline-inputs">
						<?php echo form_dropdown('dob_day', $days, isset($_user->dob_day) ? $_user->dob_day : 1, "class='small'") ?>
						<?php echo form_dropdown('dob_month', $months, isset($_user->dob_month) ? $_user->dob_month : 1, "class='medium'") ?>
						<?php echo form_dropdown('dob_year', $years, isset($_user->dob_year) ? $_user->dob_year : null, "class='medium'") ?>
                        </div>
				</div>
                  </div>
				<label for="gender"><?php echo lang('profile_gender') ?></label>
				<?php echo form_dropdown('gender', array(''=> lang('profile_gender_nt'), 'm'=>lang('profile_gender_male'), 'f'=>lang('profile_gender_female')), $_user->gender); ?>

				<label for="bio"><?php echo lang('profile_bio') ?></label>
				<?php echo form_textarea(array('name'=>'bio', 'value'=>$_user->bio, 'cols'=>60, 'rows'=>8, 'class'=>'xxlarge') ); ?>
	</fieldset>

	<fieldset id="user_contact">
		<legend><?php echo lang('profile_contact_section') ?></legend>
				
				<label for="phone"><?php echo lang('user_email_label') ?></label>
				<?php echo form_input('email', $_user->email); ?>

				<label for="phone"><?php echo lang('profile_phone') ?></label>
				<?php echo form_input('phone', $_user->phone); ?>

				<label for="mobile"><?php echo lang('profile_mobile') ?></label>
				<?php echo form_input('mobile', $_user->mobile); ?>

				<label for="address_line1"><?php echo lang('profile_address_line1') ?></label>
				<?php echo form_input('address_line1', $_user->address_line1); ?>

				<label for="address_line2"><?php echo lang('profile_address_line2') ?></label>
				<?php echo form_input('address_line2', $_user->address_line2); ?>

				<label for="address_line3"><?php echo lang('profile_address_line3') ?></label>
				<?php echo form_input('address_line3', $_user->address_line3); ?>

				<label for="postcode"><?php echo lang('profile_address_postcode') ?></label>
				<?php echo form_input('postcode', $_user->postcode); ?>

				<label for="website"><?php echo lang('profile_website'); ?></label>
				<?php echo form_input('website', $_user->website); ?>
	</fieldset>

	<div class="actions">
     	<?php echo form_submit(array('class'=>"btn primary"), lang('profile_save_btn')); ?>
     	<?php echo form_close(); ?>
	</div>
</div>
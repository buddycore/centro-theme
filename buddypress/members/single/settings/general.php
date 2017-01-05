<?php do_action('bp_before_member_settings_template'); ?>

<form action="<?php echo bp_displayed_user_domain() . bp_get_settings_slug() . '/general'; ?>" method="post" class="standardise" id="settings-form">
<fieldset>
	<div class="rows">

	<?php if(!is_super_admin()) : ?>

		<div class="row">
			<div class="column">
				<label for="pwd"><?php _e('Current Password <span>(required to update email or change current password)</span>', 'buddypress'); ?></label>
				<input type="password" name="pwd" id="pwd" size="16" value="" class="settings-input small" <?php bp_form_field_attributes( 'password' ); ?>/>  <a href="<?php echo wp_lostpassword_url(); ?>"><?php _e('Lost your password?', 'buddypress'); ?></a>
			</div>
		</div>

	<?php endif; ?>

		<div class="row">
			<div class="column">
				<label for="email"><?php _e('Account Email', 'buddypress'); ?></label>
				<input type="email" name="email" id="email" value="<?php echo bp_get_displayed_user_email(); ?>" class="settings-input" <?php bp_form_field_attributes('email'); ?>/>	
			</div>
		</div>

		<div class="row halved">
			<div class="column one-half">
				<input placeholder="<?php _e('New Password', 'buddypress'); ?>" type="password" name="pass1" id="pass1" size="16" value="" class="settings-input small password-entry" <?php bp_form_field_attributes('password'); ?>/>
			</div>
			<div class="column one-half">
				<input placeholder="<?php _e('Confirm New Password', 'buddypress'); ?>" type="password" name="pass2" id="pass2" size="16" value="" class="settings-input small password-entry-confirm" <?php bp_form_field_attributes( 'password' ); ?>/>
			</div>
		</div>
		<div class="pass-strength">
			<div id="pass-strength-result"></div>
		</div>

	</div><!-- ROWS -->

	<?php do_action('bp_core_general_settings_before_submit'); ?>

	<div class="submit">
		<input type="submit" name="submit" value="<?php esc_attr_e('Save Changes', 'buddypress'); ?>" id="submit" class="submit" />
	</div>

	<?php do_action('bp_core_general_settings_after_submit'); ?>

	<?php wp_nonce_field('bp_settings_general'); ?>
</fieldset>
</form>

<?php do_action('bp_after_member_settings_template'); ?>

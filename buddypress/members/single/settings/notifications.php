<?php do_action('bp_before_member_settings_template'); ?>

<form action="<?php echo bp_displayed_user_domain() . bp_get_settings_slug() . '/notifications'; ?>" method="post" class="standardise" id="settings-form">
    <fieldset>
        <div class="info">
            <p>You can change when you receive emails on this page.</p>
        </div>
    	<?php do_action('bp_notification_settings'); ?>

    	<?php do_action('bp_members_notification_settings_before_submit'); ?>

    	<div class="submit">
    		<input type="submit" name="submit" value="<?php esc_attr_e('Save Changes', 'buddypress'); ?>" id="submit" class="submit" />
    	</div>

    	<?php do_action('bp_members_notification_settings_after_submit'); ?>

    	<?php wp_nonce_field('bp_settings_notifications'); ?>
    </fieldset>
</form>

<?php do_action('bp_after_member_settings_template'); ?>
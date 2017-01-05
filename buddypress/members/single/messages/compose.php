
<form action="<?php bp_messages_form_action('compose' ); ?>" method="post" id="send_message_form" class="standardise" enctype="multipart/form-data">
	<fieldset>
	<?php do_action('bp_before_messages_compose_content'); ?>

	<div class="rows">

		<div class="row">
			<div class="column">
				<ul class="first acfb-holder">
					<li>
						<?php bp_message_get_recipient_tabs(); ?>
						<input type="text" placeholder="<?php _e("Send To (Username or Friend's Name)", 'buddypress' ); ?>" name="send-to-input" class="send-to-input" id="send-to-input" <?php if(isset($_GET['to'])) : echo ' value="'.$_GET['to'].'"'; endif; ?> />
					</li>
				</ul>	
			</div>
		</div>

		<?php if(bp_current_user_can('bp_moderate')) : ?>
		<div class="row">
			<div class="checkbox">
				<label for="send-notice"><input type="checkbox" id="send-notice" name="send-notice" value="1" /> <?php _e("This is a notice to all users.", 'buddypress'); ?></label>
			</div>
		</div>
		<?php endif; ?>

		<div class="row">
			<div class="column">
				<input type="text" placeholder="<?php _e('Subject', 'buddypress'); ?>" name="subject" id="subject" value="<?php bp_messages_subject_value(); ?>" />
			</div>
		</div>
		
		<div class="row">
			<div class="column">
				<textarea name="content" placeholder="<?php _e('Message', 'buddypress'); ?>" id="message_content" rows="15" cols="40"><?php bp_messages_content_value(); ?></textarea>
			</div>
		</div>

	</div><!-- ROWS -->

	<input type="hidden" name="send_to_usernames" id="send-to-usernames" value="<?php bp_message_get_recipient_usernames(); ?>" class="<?php bp_message_get_recipient_usernames(); ?>" />

	<?php do_action('bp_after_messages_compose_content'); ?>

	<div class="submit">
		<input type="submit" value="<?php esc_attr_e( "Send Message", 'buddypress' ); ?>" name="send" id="send" />
	</div>

	<?php wp_nonce_field('messages_send_message'); ?>
	</fieldset>
</form>

<script type="text/javascript">
	document.getElementById("send-to-input").focus();
</script>
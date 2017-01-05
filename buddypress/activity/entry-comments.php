<?php if((bp_activity_get_comment_count() > 0 || bp_activity_can_comment()) || bp_is_single_activity()) : ?>
    
    <div class="activity-comments">

        <?php bp_activity_comments(); ?>

        <?php if(is_user_logged_in() && bp_activity_can_comment()) : ?>

            <form action="<?php bp_activity_comment_form_action(); ?>" method="post" id="ac-form-<?php bp_activity_id(); ?>" class="ac-form"<?php bp_activity_comment_form_nojs_display(); ?>>
                <div class="ac-reply-content">
                    <div class="ac-textarea">
                        <label for="ac-input-<?php bp_activity_id(); ?>" class="bp-screen-reader-text"><?php _e('Your Reply', 'buddypress'); ?></label>
                        <textarea id="ac-input-<?php bp_activity_id(); ?>" class="ac-input bp-suggestions" name="ac_input_<?php bp_activity_id(); ?>" placeholder="Write your comment here..."></textarea>
                    </div>
                    <div class="submit">
                        <button type="submit" name="ac_form_submit"><?php esc_attr_e('Add Comment', 'buddypress'); ?></button>
                        <a href="#" class="ac-reply-cancel"><?php _e( 'Cancel', 'buddypress' ); ?></a>
                    </div>
                    <input type="hidden" name="comment_form_id" value="<?php bp_activity_id(); ?>" />
                </div>
                <?php do_action('bp_activity_entry_comments'); ?>
                <?php wp_nonce_field('new_activity_comment', '_wpnonce_new_activity_comment'); ?>
            </form>

        <?php endif; ?>

    </div><!-- COMMENTS -->

<?php endif; ?>
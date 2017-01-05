<?php if(is_user_logged_in()) : ?>

    <div class="activity-meta">

        <?php echo sc_show_fav_count(); ?>

        <div class="meta-toggle">
            <ul>
                <li><button class="meta-toggle"><span>Actions</span></button>
                    <ul class="sub-nav">
                        <?php if(bp_get_activity_type() == 'activity_comment') : ?>

                            <li><a href="<?php bp_activity_thread_permalink(); ?>" class="button view bp-secondary-action"><?php _e('View Conversation', 'buddypress'); ?></a></li>

                        <?php endif; ?>

                        <?php if(is_user_logged_in()) : ?>

                            <?php if(bp_activity_can_favorite()) : ?>

                                <?php if(!bp_get_activity_is_favorite()) : ?>

                                    <li><a href="<?php bp_activity_favorite_link(); ?>" class="button fav bp-secondary-action"><?php _e('Favorite', 'buddypress'); ?></a></li>

                                <?php else : ?>

                                    <li><a href="<?php bp_activity_unfavorite_link(); ?>" class="button unfav bp-secondary-action"><?php _e('Remove Favorite', 'buddypress'); ?></a></li>

                                <?php endif; ?>

                            <?php endif; ?>

                            <?php if(bp_activity_can_comment()) : ?>

                                <li><a href="<?php bp_activity_comment_link(); ?>" class="button acomment-reply bp-primary-action" id="acomment-comment-<?php bp_activity_id(); ?>"><?php printf(__('Reply %s', 'buddypress'), '<span>' . bp_activity_get_comment_count() . '</span>'); ?></a></li>

                            <?php endif; ?>

                            <?php if(bp_activity_user_can_delete()) : ?>
                                
                                <li><?php bp_activity_delete_link(); ?></li>
                                
                            <?php endif; ?>

                        <?php endif; ?>
                    </ul>
                </li>
            </ul>
        </div><!-- META TOGGLE -->

        <?php if(is_user_logged_in()) : ?>

            <?php do_action('bp_activity_entry_meta'); ?>

        <?php endif; ?>

    </div><!-- META -->

<?php endif; ?>
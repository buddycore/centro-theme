<?php do_action('bp_before_activity_entry'); ?>

<li class="<?php bp_activity_css_class(); ?><?php if(is_user_logged_in()) : echo ' logged-in'; endif; ?>" id="activity-<?php bp_activity_id(); ?>">

    <div class="inner">

        <div class="activity-content">

            <div class="activity-header">

                <div class="table-cell avatar">

                    <a href="<?php bp_activity_user_link(); ?>" class="avatar"><?php bp_activity_avatar('type=full&width=200&height=200'); ?></a>
                    <a href="<?php bp_activity_thread_permalink(); ?>" class="permalink"><?php echo bp_core_time_since(bp_get_activity_date_recorded()); ?></a>

                </div>

                <div class="table-cell detail"><?php bp_activity_action('timestamp=0'); ?></div>

            </div><!-- HEADER -->

            <?php if(bp_activity_has_content()) : ?>

                <div class="activity-inner standardise">
                    <?php bp_activity_content_body(); ?>
                </div><!-- INNER -->

            <?php endif; ?>

            <?php do_action('bp_activity_entry_content'); ?>

            <?php bp_get_template_part('activity/entry-meta'); ?>

        </div><!-- CONTENT -->

        <?php do_action('bp_before_activity_entry_comments'); ?>

        <?php bp_get_template_part('activity/entry-comments'); ?>

        <?php do_action('bp_after_activity_entry_comments'); ?>

    </div><!-- INNER -->

</li>

<?php do_action('bp_after_activity_entry'); ?>
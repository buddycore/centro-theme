<?php do_action('bp_before_activity_loop'); ?>

<?php if(bp_has_activities(bp_ajax_querystring('activity').'&per_page=12')) : ?>

    <?php if(empty($_POST['page'])) : ?>

        <ul id="activity-stream" class="activity-list">

    <?php endif; ?>

    <?php while(bp_activities()) : bp_the_activity(); ?>

        <?php bp_get_template_part('activity/entry'); ?>

    <?php endwhile; ?>

    <?php if(bp_activity_has_more_items()) : ?>

        <li class="load-more">
            <a href="<?php bp_activity_load_more_link() ?>"><?php _e('Load More', 'buddypress'); ?></a>
        </li>

    <?php endif; ?>

    <?php if(empty($_POST['page'])) : ?>

        </ul>

    <?php endif; ?>

<?php else : ?>

<div class="message-container">
    <div class="message no-results">
        <p><?php _e('Sorry, there was no activity found. Please try a different filter.', 'buddypress'); ?></p>
    </div>
</div>

<?php endif; ?>

<?php do_action('bp_after_activity_loop'); ?>

<?php if(empty($_POST['page'])) : ?>

    <form action="" name="activity-loop-form" id="activity-loop-form" method="post">
        <?php wp_nonce_field('activity_filter', '_wpnonce_activity_filter'); ?>
    </form>

<?php endif; ?>

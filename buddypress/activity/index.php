<?php locate_template('templates/partial/filter/nav.activity.php', true, true); ?>

<div class="padder">

    <div class="container">

    <?php do_action('bp_before_directory_activity'); ?>

    <header class="mast">
        <h2>Activity Stream</h2>
        <p>You will find community activity below</p>
    </header>

    <?php do_action('bp_before_directory_activity_content'); ?>

    <?php do_action('bp_before_directory_activity_list'); ?>

    <?php if(is_user_logged_in()) : ?>

        <?php bp_get_template_part('activity/post-form'); ?>

    <?php endif; ?>

    <div id="buddypress">

        <div class="activity"><?php bp_get_template_part('activity/activity-loop'); ?></div><!-- ACTIVITY -->

    </div>

    <?php do_action('bp_after_directory_activity_list'); ?>

    <?php do_action('bp_directory_activity_content'); ?>

    <?php do_action('bp_after_directory_activity_content'); ?>

    <?php do_action('bp_after_directory_activity'); ?>

</div><!-- CONTAINER -->

</div><!-- PADDER -->
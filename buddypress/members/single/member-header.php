<header class="cover">
    <div class="table">
        <div class="table-cell avatar">
            <p class="avatar">
            <a href="<?php bp_displayed_user_link(); ?>" class="avatar"><?php bp_displayed_user_avatar('type=full&width=200'); ?></a>
            <?php if(bp_is_my_profile() && !(int)bp_get_option('bp-disable-avatar-uploads')) : ?>
                <a href="<?php echo bp_loggedin_user_domain(); ?>profile/change-avatar" class="upload-avatar"><span>Upload New Avatar</span></a>
            <?php endif; ?>
            </p>
        </div>
        <div class="table-cell detail">
            <?php if(bp_is_active('activity') && bp_activity_do_mentions()) : ?>
                <h2><a href="<?php bp_displayed_user_link(); ?>">@<?php bp_displayed_user_mentionname(); ?></a></h2>
            <?php endif; ?>
            <p><?php bp_last_activity(bp_displayed_user_id()); ?></p>
        </div>
    </div>
    <?php if(!bp_is_my_profile() && is_user_logged_in()) : ?>
        <ul class="options">
            <li class="message"><a href="<?php bp_loggedin_user_link(); ?>messages/compose/?to=<?php bp_displayed_user_mentionname(); ?>">Send Message</a></li>
            <li class="mention"><a href="<?php echo home_url(bp_get_activity_root_slug()); ?>?m=<?php bp_displayed_user_mentionname(); ?>">Mention</a></li>
        </ul>
    <?php endif; ?>
    <?php if(bp_displayed_user_use_cover_image_header() && bp_is_my_profile()) : ?>
        <a href="<?php echo bp_loggedin_user_domain(); ?>profile/change-cover-image" class="upload-cover"><span>Upload Cover Image</span></a>
    <?php endif; ?>
</header>
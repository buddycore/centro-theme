<nav class="filter">

    <div class="links">

        <div class="item-list-tabs no-ajax" id="object-nav" aria-label="<?php esc_attr_e('Member primary navigation', 'buddypress'); ?>" role="navigation">
            <ul class="no-span">
                <?php bp_get_displayed_user_nav(); ?>
                <?php do_action('bp_member_options_nav'); ?>
            </ul>
        </div>

    </div><!-- LINKS -->

    <div class="other">
        <ul class="user-opts">
            <li><?php bp_add_friend_button(); ?></li>
        </ul>
    </div><!-- OTHER -->

</nav>

<nav class="filter-responsive">

    
    <div class="links">
        <ul class="toggle-menu">
            <li><button class="toggle-sub"><span>Toggle Menu</span></button>
                <ul class="sub-nav no-span">
                    <?php bp_get_displayed_user_nav(); ?>
                    <?php do_action('bp_member_options_nav'); ?>
                </ul>
            </li>
        </ul>
    </div><!-- LINKS -->

    <h6><?php bp_displayed_user_mentionname(); ?> / <?php global $bp; echo $bp->current_component; ?></h6>

    <div class="other">

    </div><!-- OTHER -->

</nav>
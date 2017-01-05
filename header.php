<!DOCTYPE html <?php language_attributes(); ?>>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0">
<meta name="msapplication-tap-highlight" content="no">
<?php wp_head(); ?>
<?php if(get_theme_mod('sc_analytics')) : echo get_theme_mod('sc_analytics'); endif; ?>

<?php locate_template('templates/partial/style/header.custom.php', true, true); ?>
</head>

<body <?php body_class(); ?>>
    
    <header class="global">
        
        <nav class="global">
            
            <div class="top">

                <h1 class="logo">
                    <a href="<?php echo home_url('/'); ?>">

                        <?php if(get_theme_mod('sc_logo')) : ?>
                            <img src="<?php echo get_theme_mod('sc_logo'); ?>" alt="<?php echo get_bloginfo('name'); ?>">
                        <?php else : ?>
                            <img src="<?php echo get_option('sc_logo'); ?>" alt="<?php echo get_bloginfo('name'); ?>">
                        <?php endif; ?>

                        <?php if(get_theme_mod('sc_logo_sml')) : ?>
                            <img src="<?php echo get_theme_mod('sc_logo_sml'); ?>" alt="<?php echo get_bloginfo('name'); ?>" class="logo-sml">
                        <?php else : ?>
                            <img src="<?php echo get_option('sc_logo_sml'); ?>" alt="<?php echo get_bloginfo('name'); ?>" class="logo-sml">
                        <?php endif; ?>

                    </a>
                </h1>

                <button class="hdr-toggle"><span>Toggle Menu</span></button>

            </div><!-- TOP -->

            <div class="menu">
                
                <?php 
                if(has_nav_menu('primary')) :

                    $defaults = array(
                        'theme_location'    => 'primary',
                        'container'         => false,
                        'items_wrap'        => '<ul class="primary">%3$s</ul>',
                        'walker' => new Nfr_Menu_Walker()
                    );

                    wp_nav_menu($defaults);

                endif;
                ?>

                <div class="fixed">

                    <?php if(get_theme_mod('sc_show_sc_links')) : ?>

                        <?php echo sc_social_links(1, true); ?>

                    <?php endif; ?>

                    <?php if(function_exists('bp_is_active') && get_theme_mod('sc_show_bp_menu')) : ?>
                        
                        <ul class="account">

                            <?php if(!is_user_logged_in()) : ?>

                                <?php if(get_option('users_can_register')) : ?>

                                    <li class="register"><a href="<?php echo home_url(BP_REGISTER_SLUG); ?>">Register</a></li>

                                <?php endif; ?>

                                <li class="login"><a href="<?php echo wp_login_url('/'); ?>">Login</a></li>

                                <li class="forgot-password"><a href="<?php echo wp_lostpassword_url('/'); ?>">Forgot Password?</a></li>

                            <?php else : ?>

                                <li class="profile">

                                    <a href="<?php echo bp_loggedin_user_domain(); ?>" class="user">                                    
                                        <span class="img"><?php bp_loggedin_user_avatar('width=40&height=40'); ?></span>
                                        <span class="uname"><?php echo bp_core_get_user_displayname(bp_loggedin_user_id()); ?></span>
                                    </a>
                                    <?php if(bp_notifications_get_unread_notification_count(bp_loggedin_user_id())) : ?>
                                    <a href="<?php echo bp_loggedin_user_domain(); ?>notifications" class="notifications">                                   
                                        <span><?php echo bp_notifications_get_unread_notification_count(bp_loggedin_user_id()); ?></span>                                    
                                    </a>
                                    <?php endif; ?>
                                    <a href="<?php echo wp_logout_url('/'); ?>" class="logout"><span>Logout</span></a>

                                </li>

                            <?php endif; ?>

                        </ul>

                    <?php endif; ?>

                    <?php 
                    if(has_nav_menu('secondary')) :

                        $defaults = array(
                            'theme_location'    => 'secondary',
                            'container'         => false,
                            'items_wrap'        => '<ul class="secondary">%3$s</ul>',
                            'walker' => new Nfr_Menu_Walker()
                        );

                        wp_nav_menu($defaults);

                    endif;
                    ?>

                    <p class="powered-copy"><a href="http://wordpress.org">Powered by WordPress</a> <span>&copy;</span> <?php bloginfo('name'); ?> <?php echo date('Y'); ?></p>

                </div><!-- FIXED -->

            </div><!-- MENU -->

        </nav>

    </header>
    <main>

        <?php if(get_theme_mod('sc_notice')) : ?>

            <div class="global-notice"><?php echo get_theme_mod('sc_notice'); ?></div>

        <?php endif; ?>




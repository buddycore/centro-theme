<?php
function sc_wp_login_script_style() {
    wp_enqueue_style('sc-app-style', get_bloginfo('template_directory').'/asset/css/app.min.css', array(), '0.0.1');
}
add_action('login_enqueue_scripts', 'sc_wp_login_script_style');

function sc_login_logo() { 
    
    if(get_theme_mod('sc_primary_colour')) :

        $sc_primary_colour = get_theme_mod('sc_primary_colour');

    else :

        $sc_primary_colour = 'rgba(0, 0, 0, .75)';

    endif;

    if(get_theme_mod('sc_accent_colour')) :

        $sc_accent_colour = get_theme_mod('sc_accent_colour');

    else :

        $sc_accent_colour = '#bd4832';

    endif;

    if(get_theme_mod('sc_logo')) : ?>
    <style type="text/css">
        div#login h1 a {
            background-image: url(<?php echo get_theme_mod('sc_logo'); ?>);
        }
        div#login h1 {
            background-color: <?php echo $sc_primary_colour; ?>;
            /*background-image: url(<?php echo asset_url('/img/tile/gplay.png'); ?>);*/
        }
        input:focus {
            border: 1px solid <?php echo $sc_accent_colour; ?> !important;
        }
        p.submit input {
            background: <?php echo $sc_accent_colour; ?> !important;
        }
    </style>
    <?php endif;
}
add_action('login_enqueue_scripts', 'sc_login_logo');

function sc_wp_login_url() {
    return home_url('/');
}
add_filter('login_headerurl', 'sc_wp_login_url');

function sc_wp_login_url_title() {
    return get_bloginfo('name');
}
add_filter('login_headertitle', 'sc_wp_login_url_title');
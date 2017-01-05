<?php

// Helper
function asset_url($path) {
    return get_template_directory_uri().'/asset/'.$path;
}

locate_template('/asset/php/wp/theme.init.php', true, true);
locate_template('/asset/php/wp/init.wordpress.php', true, true);
locate_template('/asset/php/wp/fns.wordpress.php', true, true);
locate_template('/asset/php/wp/wp.login.php', true, true);
locate_template('/asset/php/wp/walker.class.php', true, true);
locate_template('/asset/php/wp/customizer.php', true, true);

locate_template('/asset/php/bp/init.buddypress.php', true, true);
locate_template('/asset/php/bp/fns.buddypress.php', true, true);

add_filter( 'jetpack_development_mode', '__return_true' );
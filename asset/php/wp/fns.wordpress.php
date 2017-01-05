<?php

// HELPER FUNCTION
function sc_social_links($author_id, $output){
    // Add to this as fields are added above
    $social_array = array(
        'twitter',
        'facebook',
        'gplus',
        'youtube',
        'linkedin',
        'vimeo',
        'flickr',
        'twitch',
        'behance',
        'dribble',
        'soundcloud',
        'instagram',
        'tripadvisor',
        'github',
        'codepen',
        'lastfm',
        'delicious',
        'linkedin',
        'pinterest',
    );

    $social_count = 0;

    foreach($social_array as $item) :
        if(get_the_author_meta($item, $author_id)) :
            $social_count++;
        endif;
    endforeach;

    if($output === FALSE) :
        return $social_count;
    else :
        echo '<ul class="social">';
        foreach($social_array as $item) :
            if(get_the_author_meta($item, $author_id)) :
                echo '<li class="'.$item.'"><a href="'.get_the_author_meta($item, $author_id).'" target="_blank"><span>'.__($item).'</span></a></li>';
            endif;
        endforeach;
        echo '</ul>';
    endif;
}

// Infinite Scroll
// https://code.tutsplus.com/tutorials/how-to-create-infinite-scroll-pagination--wp-24873
function sc_infinite_scroll() { 

    $template           = $_POST['template'];
    $paged              = $_POST['page'];
    $ppp                = get_option('posts_per_page');
 
    # Load the posts
    query_posts(array('paged' => $paged, 'post_status' => 'publish')); 
    get_template_part($template);
 
    exit;
}

add_action('wp_ajax_infinite_scroll', 'sc_infinite_scroll');
add_action('wp_ajax_nopriv_infinite_scroll', 'sc_infinite_scroll');


function sc_posts_filter_iframes($content) {     

    return str_replace(['<iframe', '</iframe>'], ['<div class="iframe"><iframe', '</iframe></div>'], $content);
    
}; 
         
// add the filter 
add_filter('the_content', 'sc_posts_filter_iframes', 10, 1); 
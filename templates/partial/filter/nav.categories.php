<nav class="filter">

    <?php if(has_nav_menu('categories')) : ?>

        <div class="links">
            <?php 

            $defaults = array(
                'theme_location'    => 'categories',
                'container'         => false,
                'items_wrap'        => '<ul class="categories">%3$s</ul>',
                'walker' => new Nfr_Menu_Walker()
            );

            wp_nav_menu($defaults);

            ?>
        </div><!-- LINKS -->

    <?php endif; ?>

    <div class="other">
        <?php get_search_form(); ?>
    </div><!-- OTHER -->

</nav>

<nav class="filter-responsive">

    <?php if(has_nav_menu('categories')) : ?>
    
        <div class="links">
            <ul class="toggle-menu">
                <li><button class="toggle-sub"><span>Toggle Menu</span></button>
                    <ul class="sub-nav">
                    <li class="search-form"><?php get_search_form(); ?></li>
                    <?php 

                    $defaults = array(
                        'theme_location'    => 'categories',
                        'container'         => false,
                        'items_wrap'        => '%3$s',
                        'walker' => new Nfr_Menu_Walker()
                    );

                    wp_nav_menu($defaults);

                    ?>  
                    </ul>
                </li>
            </ul>
        </div><!-- LINKS -->

    <?php endif; ?>
    
    <?php if(is_category()) : ?>
        <h6>Category Archive</h6>
    <?php elseif(is_single()) : ?>
        <h6 class="back"><a href="<?php echo home_url('/'); ?>">Back to Archives</a></h6>
    <?php elseif(is_home()) : ?>
        <h6><?php bloginfo('name'); ?> Blog</h6>
    <?php endif; ?>
    

    <div class="other">
        <ul>
            <li><?php get_search_form(); ?></li>
        </ul>
    </div><!-- OTHER -->

</nav>
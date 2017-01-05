<?php get_header(); ?>

<?php locate_template('templates/partial/filter/nav.categories.php', true, true); ?>

<div class="mast author">
    <div class="avatar">
        <?php echo get_avatar(get_the_author_meta('ID'), 150); ?>
    </div>
    <div class="detail">
        <h2><?php echo get_the_author(); ?></h2>
        <?php if(get_the_author_meta('description')) : ?>
        <div class="desc standardise"><?php echo the_author_meta('description'); ?></div>
        <?php endif; ?>
        <?php if(sc_social_links(get_the_author_meta('ID'), false) > 0) : ?>
            <?php sc_social_links(get_the_author_meta('ID'), true); ?>
        <?php endif; ?>
    </div>
</div>

<?php if(have_posts()) : ?>

    <div class="posts">

        <?php while(have_posts()) : the_post(); ?>

            <?php get_template_part('content'); ?>

        <?php endwhile; ?>

    </div><!-- ARRAY -->

    <?php if(paginate_links()) : ?>

        <?php
        $args = array(
            'prev_text' => false,
            'next_text' => false
        );
        ?>
        <div class="pagination"><div class="inner"><?php echo paginate_links($args); ?></div></div>

    <?php endif; ?>

<?php else : ?>
    
    <div class="padder">
        <div class="message no-results">
            <p>No posts were found. <a href="<?php echo home_url('/'); ?>">Return to Index?</a></p>
        </div>
    </div>

<?php endif; ?>

<?php get_footer(); ?>
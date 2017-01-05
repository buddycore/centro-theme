<?php get_header(); ?>

<?php the_post(); ?>

<article <?php post_class(); ?>>

   <header>
       <h2><?php the_title(); ?></h2>
   </header>

    <section>
        <div class="the-content standardise"><?php the_content(); ?></div>

        <?php if(comments_open()) : ?>
            <?php comments_template(); ?>
        <?php endif; ?>
    </section>

</article>

<?php get_footer(); ?>
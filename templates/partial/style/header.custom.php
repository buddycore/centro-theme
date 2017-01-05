<style>
    <?php 
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
    ?>

    header.global, ul.sub-menu, article.item.sticky div.inner:before, form.standardise fieldset h4, div.mast, header.mast {
        background-color: <?php echo $sc_primary_colour; ?>;
        /*background-image: url(<?php echo asset_url('/img/tile/gplay.png'); ?>);*/
    }
    main a {
        color: <?php echo $sc_accent_colour; ?>;
    }
    p.form-submit input, form.post-password-form input[type=submit], div.submit button, div#whats-new-submit button,
    li.load-more a, li.load-newest a, div.submit input, div.modal div.inner form fieldset button {
        background-color: <?php echo $sc_accent_colour; ?> !important;
    }
    form.standardise input:focus, form.standardise textarea:focus, form.comment-form input:focus, form.comment-form textarea:focus,
    div#whats-new-content textarea:focus, div.modal div.inner form fieldset input:focus {
        border: 1px solid <?php echo $sc_accent_colour; ?> !important;
    }
</style>
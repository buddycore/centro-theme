jQuery(document).ready(function($){

    $('button.hdr-toggle, a, ul.primary, button.toggle-sub, li.search-form').on('click', function(e){
        
        e.stopPropagation();
        
    });

    $('button.hdr-toggle').on('click', function(){

        $(this).toggleClass('close');
        $('div.menu').slideToggle(200);

    });

    
    $('html').on('click', function(e){

        hide_hdr_menus();
        hide_archive_menus();
        hide_sub_menus();

    });

    // PRIMARY MENU
    $('ul.primary > li a span').on('click', function(e){

        e.preventDefault();

        hide_archive_menus();
        hide_sub_menus();
        
        if($(this).hasClass('close')) {

            $('ul.primary li a span').removeClass('close');
            $(this).parents('li').find('> ul.sub-menu').hide(0);

        }
        else {

            hide_archive_menus();
            hide_sub_menus();

            $(this).addClass('close');
            $(this).parents('li').find('> ul.sub-menu').show(0);

        }
        

    });

    function hide_hdr_menus(){
        $('ul.primary li a span').removeClass('close');
        $('ul.primary li ul.sub-menu').hide();
    }
    // END PRIMARY MENU

    // POST ARCHIVES
    $('nav.filter ul > li a span').on('click', function(e){

        e.preventDefault();
        
        hide_hdr_menus();
        hide_sub_menus();
        
        if($(this).hasClass('close')) {

            $('nav.filter ul > li a span').removeClass('close');
            $(this).parents('li').find('> ul.sub-menu').hide(0);

        }
        else {

            hide_hdr_menus();
            hide_sub_menus();

            $(this).addClass('close');
            $(this).parents('li').find('> ul.sub-menu').show(0);

        }

    });

    function hide_archive_menus(){
        $('nav.filter ul > li a span').removeClass('close');
        $('nav.filter ul li ul.sub-menu').hide();
    }

    // RESPONSIVE SUB NAV
    $('button.toggle-sub').on('click', function(e){

        e.preventDefault();
        
        if($(this).hasClass('close')) {

            $(this).removeClass('close');
            $(this).parents('li').find('ul.sub-nav').hide(0);

        }
        else {

            $(this).addClass('close');
            $(this).parents('li').find('ul.sub-nav').show(0);

        }

    });

    function hide_sub_menus(){

        $('button.toggle-sub').removeClass('close');
        $('button.toggle-sub').parents('li').find('ul.sub-nav').hide(0);
        
    }

    // INNER RESPoNSIVE SUB NAV
    $('nav.filter-responsive ul.sub-nav > li a span').on('click', function(e){

        e.preventDefault();
        
        if($(this).hasClass('close')) {

            $('nav.filter ul > li a span').removeClass('close');
            $(this).parents('li').find('> ul.sub-menu').hide(0);

        }
        else {

            $(this).addClass('close');
            $(this).parents('li').find('> ul.sub-menu').show(0);

        }

    });
    
});
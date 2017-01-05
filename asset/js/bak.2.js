jQuery(document).ready(function($){

    // MAIN MENU 
    $('button.hdr-toggle').on('click', function(){

        $(this).toggleClass('close');
        $('div.menu').slideToggle(200);

    });

    function hide_hdr_menu(){
        $('button.hdr-toggle').removeClass('close');
        $('div.menu').hide(0);
    }   

    // OFF CLICKS
    $('html').on('click', function(e){

        hide_hdr_menu();
        hide_primary_menus();
        hide_sub_menus();
        hide_responsive_sub_menu();

    });

    // PROPAGATION
    $('ul.primary, button.hdr-toggle, button.toggle-sub, a').on('click', function(e){
        
        e.stopPropagation();
        
    });

    // PRIMARY MENU
    $('ul.primary > li a span').on('click', function(e){

        e.preventDefault();     

        $count = $(this).closest('li').find('ul.sub-menu').length;

        if($count > 1) {



        }
        else {

            if($(this).hasClass('close')) {

                $(this).removeClass('close');
                $(this).closest('li').find('> ul.sub-menu').hide(0);

            }
            else {

                hide_hdr_menu();
                hide_primary_menus();
                hide_sub_menus();
                hide_responsive_sub_menu();
                $(this).addClass('close');
                $(this).closest('li').find('> ul.sub-menu').show(0);

            }

        }

    });

    function hide_primary_menus(){
        $('ul.primary li a span').removeClass('close');
        $('ul.primary li ul.sub-menu').hide(0);
    }    

    // SUB MENU
    $('nav.filter div.links ul li a span').on('click', function(e) {

        e.preventDefault();

        $count = $(this).closest('li').find('ul.sub-menu').length;

        if($count > 1) {



        }
        else {

            if($(this).hasClass('close')) {

                $(this).removeClass('close');
                $(this).closest('li').find('> ul.sub-menu').hide(0);

            }
            else {

                hide_hdr_menu();
                hide_primary_menus();
                hide_sub_menus();
                hide_responsive_sub_menu();
                $(this).addClass('close');
                $(this).closest('li').find('> ul.sub-menu').show(0);

            }

        }
    });

    function hide_sub_menus(){

        $('nav.filter div.links ul li a span').removeClass('close');
        $('nav.filter div.links ul li ul.sub-menu').hide(0);

    } 

    // RESPONSIVE SUB MENU
    $('button.toggle-sub').on('click', function(e) {

        e.preventDefault();

        $count = $(this).closest('li').find('ul.sub-nav').length;

        if($count > 1) {

            console.log($count);

        }
        else {

            if($(this).hasClass('close')) {

                $(this).removeClass('close');
                $(this).closest('li').find('ul.sub-nav').hide(0);

            }
            else {

                hide_hdr_menu();
                hide_primary_menus();
                hide_sub_menus();
                hide_responsive_sub_menu();
                $(this).addClass('close');
                $(this).closest('li').find('ul.sub-nav').show(0);

            }

        }

    });

    function hide_responsive_sub_menu(){

        $('button.toggle-sub').removeClass('close');
        $('button.toggle-sub').parents('li').find('ul.sub-nav').hide(0);
        
    }
});
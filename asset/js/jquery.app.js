jQuery(document).ready(function($){

    // Modals
    $('div.modal button.close').on('click', function(){
        $('div.modal').hide(0);
    }); 

    // For static
    $('button.meta-toggle').on('click', function(e){
        
        if($(this).next('ul.sub-nav').hasClass('shown')) {

            $(this).removeClass('close').next('ul.sub-nav').removeClass('shown');

        }
        else {

            $('div.meta-toggle ul.sub-nav').removeClass('shown');
            $('button.meta-toggle').removeClass('close');

            $(this).addClass('close').next('ul.sub-nav').addClass('shown');

        }

    });

    
    // FOR dynamics
    // TODO fix dynamic elements close link
    $(document).on('click', 'button.meta-toggle', function(e){
        
        if($(this).next('ul.sub-nav').hasClass('shown')) {

            $(this).removeClass('close').next('ul.sub-nav').removeClass('shown');

        }
        else {

            $('div.meta-toggle ul.sub-nav').removeClass('shown');
            $('button.meta-toggle').removeClass('close');

            $(this).addClass('close').next('ul.sub-nav').addClass('shown');

        }

    });

    // ACTIVITY TITLE
    $('nav.filter-responsive h6').html($('div.activity-type-tabs ul > li.selected a').html());

    $('div.activity-type-tabs li a').on('click', function(e){

        $('nav.filter-responsive h6').html($(this).html());

    });

    $('html').on('click', function(e){

        hide_sub_menus();
        hide_responsive_toggle();

        // Activity meta toggle close
        $('div.meta-toggle ul.sub-nav').removeClass('shown');
        $('button.meta-toggle').removeClass('close');

    });

    $('ul.primary li a span, ul.secondary li a span, ul.categories li a span, ul.sub-nav li a span').cenav();

    function hide_sub_menus(){
      
        $('ul li a span').removeClass('close');
        $('ul.sub-menu').removeClass('active');
      
    }

    $('button.hdr-toggle, ul.primary, button.toggle-sub, form.search-form, button.meta-toggle, ul.primary span, ul.secondary span, ul.categories span').on('click', function(e){
        
        e.stopPropagation();
        
    });

    // REPSONSIVE PRIMARY
    $('button.hdr-toggle').on('click', function(){

        hide_sub_menus();
        hide_responsive_toggle();

        $(this).toggleClass('close');
        $('div.menu').slideToggle(200);

    });

    // RESPONSIVE SUB NAV
    $('button.toggle-sub').on('click', function(e) {

        e.preventDefault();

        hide_hdr_toggle();

        if($(this).hasClass('close')) {

            $(this).removeClass('close').next('ul').removeClass('active');

        }
        else {            

            hide_sub_menus();
            $(this).addClass('close').next('ul').addClass('active');

        }

    });

    function hide_responsive_toggle(){
      
        $('button.toggle-sub').removeClass('close');
        $('ul.sub-nav').removeClass('active');
      
    }

    function hide_hdr_toggle() {
        $('button.hdr-toggle').removeClass('close');
        $('div.menu').hide(0);
    }

    // SEARCH FORM TOGGLE STATE
    $('form.search-form input').on('focus', function(){

        $('form.search-form').animate({
            width: '220px'
        }, 200);

    });

    $('form.search-form input').on('focusout', function(){

        $('form.search-form').animate({
            width: '160px'
        }, 200);

    });

    // STATIC PAGE SLIDES
    $('p.next button').on('click', function(e){

        e.preventDefault();

        $scrollTo = $(this).parents('section').next('section').offset().top;

        $('html, body').animate({
            scrollTop: $scrollTo
        });

    });

    $('html, body').on('scroll mousedown wheel DOMMouseScroll mousewheel keyup touchmove', function(){
        $("html, body").stop();
    });
    
});
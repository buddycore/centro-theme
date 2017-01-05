<?php if(is_archive() || is_home() || is_search()) : ?>

    <script>

    jQuery(document).ready(function($){

        var count = 2;
        var total = <?php echo $wp_query->max_num_pages; ?>;
        
        $(window).scroll(function(){

            if($(window).scrollTop() == $(document).height() - $(window).height()) {

                if(count > total) {

                    return false;

                }
                else {

                    loadArticle(count);

                }

                count++;

            }

        });

        function loadArticle(page){  

            $('span.infinite-loading').show(0);

            $.ajax({

                url: "<?php echo esc_url(site_url()); ?>/wp-admin/admin-ajax.php",
                type:'POST',
                data: "action=infinite_scroll&page="+ page + '&template=loop-infinite', 
                success: function(html){

                    $('span.infinite-loading').hide('1000');                    
                    $("div.posts").append(html); 

                }

            });

            return false;

        }

    });

    </script>

<?php endif; ?>
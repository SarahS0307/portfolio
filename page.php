<?php
/**
 * Default page template
 * 
 * @author  <Sarah Schönthaler>
 * @version 1.0.0
 * @package <Package>
*/

get_header();

if (have_posts()) :
    while (have_posts()) :
        the_post();

        if (is_front_page()) :
            get_template_part( 'template-parts/page/content', 'frontpage' );
        else :
            get_template_part( 'template-parts/page/content', 'page' );
        endif;

    endwhile;
endif;

get_footer();
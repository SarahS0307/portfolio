<?php
/**
 * Default post template
 * 
 * @author  <Sarah Schönthaler>
 * @version 1.0.0
 * @package <Package>
*/

get_header();

get_template_part( 'template-parts/page/content', 'single' );

get_footer();
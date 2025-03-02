<?php
/**
 * Header template
 * 
 * @author  <Sarah Schönthaler>
 * @version 1.0.0
 * @package <Package>
*/
?>

<!doctype html>
<html lang="de">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, inital-scale=1.0">
        <title>
            <?php 
            if( is_front_page() ) :
                the_title();
            else :
                wp_title('');
            endif;
            ?>
        </title>
        <?php wp_head(); ?>
    </head>
<body>
<?php get_template_part( 'template-parts/header/content', 'header' ); ?>
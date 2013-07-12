<?php
/*
Template Name: technical disclosure
*/
?>
<?php get_header(); ?>



<div id="page-title-container">
<div id="page-title"><h1><?php the_title(); ?></h1></div>
</div>





<div id="container">

  <div id="disclosure-content">
   <?php the_post(); ?>
                                
    <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                                        
                                       
<?php the_content(); ?>

                                        
    </div><!-- #post-<?php the_ID(); ?> -->                 
                        
<?php if ( get_post_custom_values('comments') ) comments_template() // Add a custom field with Name and Value of "comments" to enable comments on this page ?>               
  </div>
  <!-- #content -->
  
  
     <div id="space"></div>
</div>
<!-- #container -->
<div id="space"></div>
<?php get_footer(); ?>

<?php
/*
Template Name: contact
*/
?>
<?php get_header(); ?>


<div id="contact-image-banner"></div> 


<div id="page-title-container">
<div id="page-title"><h1><?php the_title(); ?></h1></div>
</div>





<div id="container">

  <div id="content">
   <?php the_post(); ?>
                                
    <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                                        
                                       
<?php the_content(); ?>

                                        
    </div><!-- #post-<?php the_ID(); ?> -->                 
                        
<?php if ( get_post_custom_values('comments') ) comments_template() // Add a custom field with Name and Value of "comments" to enable comments on this page ?>               
  </div>
  <!-- #content -->
  
  <div id="sidebar">
<?php if ( is_sidebar_active('blog_widget_area') ) : ?>
                <div id="primary" class="widget-area">
                        <ul class="xoxo">
                                <?php dynamic_sidebar('blog_widget_area'); ?>
                        </ul>
                </div><!-- #third sidebar -->
<?php endif; ?>         
                
                
                
     </div>
     <div id="space"></div>
</div>
<!-- #container -->
<div id="space"></div>
<?php get_footer(); ?>

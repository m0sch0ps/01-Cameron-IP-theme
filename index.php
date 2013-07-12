<?php
/*
Template Name: News
*/
?>
<?php get_header(); ?>


<div id="news-image-banner"></div> 


<div id="page-title-container">
<div id="page-title"><h1><?php the_title(); ?></h1></div>
</div>



<div id="container">

  <div id="content">
    <?php /* The Loop — with comments! */ ?>                        
<?php while ( have_posts() ) : the_post() ?>

<?php /* Create a div with a unique ID thanks to the_ID() and semantic classes with post_class() */ ?>          
                                <div class="index-post" id="index-post-<?php the_ID(); ?>" <?php post_class(); ?>>  
                                                           

                                        
<?php /* Microformatted, translatable post meta */ ?>                                                                           
                                        <div class="entry-meta">
                                                
                                                	
                                                
                                                <span class="entry-date"><?php the_time('j M Y') ?></span>
                                                
                                        </div><!-- .entry-meta -->
                                        
<?php /* an h2 title */ ?>                                                      
                                        <h2 class="entry-title"><a href="<?php the_permalink(); ?>" title="<?php printf( __('Permalink to %s', 'your-theme'), the_title_attribute('echo=0') ); ?>" rel="bookmark"><?php the_title(); ?></a></h2>

<?php /* The entry content */ ?>                                        
                                        <div class="entry-summary">     
<?php the_excerpt( __( 'Continue reading <span class="meta-nav">&raquo;</span>', 'your-theme' )  ); ?>
                                        </div><!-- .entry-summary -->
                                        
                                        <!-- .entry-meta -->

                                        
                                </div><!-- #post-<?php the_ID(); ?> -->

<?php endwhile; ?>                      


<?php global $wp_query; $total_pages = $wp_query->max_num_pages; if ( $total_pages > 1 ) { ?>
 
                                
<?php } ?>     

<?php global $wp_query; $total_pages = $wp_query->max_num_pages; if ( $total_pages > 1 ) { ?>
 <div id="nav-above" class="navigation">
                                        <div class="nav-previous"><?php next_posts_link(__( '<span class="meta-nav"></span> Older posts', 'your-theme' )) ?></div>
                                        <div class="nav-next"><?php previous_posts_link(__( 'Newer posts <span class="meta-nav"></span>', 'your-theme' )) ?></div>
                                         <div id="space"></div>
                                </div><!-- #nav-above -->  
                                
<?php } ?>                     
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

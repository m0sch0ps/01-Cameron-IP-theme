<?php get_header(); ?>

        
<div id="page-title-container">
<div id="page-title"><h1><?php _e( 'Search Results for: ', 'your-theme' ); ?><span><?php the_search_query(); ?></h1></div>
</div>



<div id="container">

  <div id="content">
<?php if ( have_posts() ) : ?>
                                
                               
                                
                                                  

<?php while ( have_posts() ) : the_post() ?>

                                <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                                        <h2 class="entry-title"><a href="<?php the_permalink(); ?>" title="<?php printf( __('Permalink to %s', 'your-theme'), the_title_attribute('echo=0') ); ?>" rel="bookmark"><?php the_title(); ?></a></h2>

<?php if ( $post->post_type == 'post' ) { ?>      

                                                        
                                                              
                                                              
                                                              
                                        <!-- .entry-meta -->
                                        
                                        
<?php } ?>
                                        
                                        <?php /* The entry content */ ?>                                        
                                        <div class="entry-summary">     
<?php the_excerpt( __( 'Continue reading <span class="meta-nav">&raquo;</span>', 'your-theme' )  ); ?>
                                        </div><!-- .entry-summary -->

<?php if ( $post->post_type == 'post' ) { ?>                                                                    
                                        
                                        
                                       
                                       <!-- #entry-utility -->   
                                       
                                       
                                       
<?php } ?>                                      
                                </div><!-- #post-<?php the_ID(); ?> -->

<?php endwhile; ?>

                  

<?php else : ?>


<div id="space"></div>

                                <div id="post-0" class="post no-results not-found">
                                        
                                        <div class="entry-content">
                                        
                                        <h2 class="page-title2">Nothing Not Found!</h2>
                                                <p><?php _e( 'Sorry, but nothing matched your search criteria. Please try again with some different keywords.', 'your-theme' ); ?></p><br /><br />
       <form method="get" id="searchform2" action="<?php bloginfo('home'); ?>/">
<div><input type="text" size="put_a_size_here" name="s" id="s" value="Search..." onFocus="if(this.value==this.defaultValue)this.value='';" onBlur="if(this.value=='')this.value=this.defaultValue;"/>
<input type="submit" id="searchsubmit" value="Go" class="btn" />
</div>
</form>                                               
                                        </div><!-- .entry-content -->
                                </div>

<?php endif; ?>                 


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

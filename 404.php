<?php get_header(); ?>


        
<div id="page-title-container">
<div id="page-title"><h1><?php _e( 'Not Found', 'your-theme' ); ?></h1></div>
</div>



<div id="container">

  <div id="content">
                                
                                <div id="post-0" class="post error404 not-found">
                                        
                                        <div class="entry-content">
                                                <p><?php _e( 'Apologies, but we were unable to find what you were looking for. Perhaps searching will help.', 'your-theme' ); ?></p><br /><br />
        <?php get_search_form(); ?>
                                        </div><!-- .entry-content -->
                                </div><!-- #post-0 -->

                        </div><!-- #content -->         


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

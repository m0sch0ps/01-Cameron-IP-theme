<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>><head profile="http://gmpg.org/xfn/11">
    <title><?php
        if ( is_single() ) { single_post_title(); }       
        elseif ( is_home() || is_front_page() ) { bloginfo('name'); print ' | '; bloginfo('description'); get_page_number(); }
        elseif ( is_page() ) { single_post_title(''); }
        elseif ( is_search() ) { bloginfo('name'); print ' | Search results for ' . wp_specialchars($s); get_page_number(); }
        elseif ( is_404() ) { bloginfo('name'); print ' | Not Found'; }
        else { bloginfo('name'); wp_title('|'); get_page_number(); }
    ?></title>
        
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="initial-scale=1">
        <meta name="format-detection" content="telephone=no">

<script type="text/javascript" src="<?php bloginfo('stylesheet_directory'); ?>/retina.js"></script>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script src="<?php bloginfo('stylesheet_directory'); ?>/scripts/jquery.sequence-min.js"></script>

<script type="text/javascript"> 
    $(document).ready(function(){
        var options = {
            autoPlay: true,
            autoPlayDelay: 3000
        }
        var sequence = $("#sequence").sequence(options).data("sequence");
    });
</script>
        
<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>" />


<!--[if lte IE 8]>
<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/ie8-style.css" media="screen" type="text/css" />
<![endif]-->

        
        <?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?>
        
        <?php wp_head(); ?>
        
        <link rel="alternate" type="application/rss+xml" href="<?php bloginfo('rss2_url'); ?>" title="<?php printf( __( '%s latest posts', 'your-theme' ), wp_specialchars( get_bloginfo('name'), 1 ) ); ?>" />
        <link rel="alternate" type="application/rss+xml" href="<?php bloginfo('comments_rss2_url') ?>" title="<?php printf( __( '%s latest comments', 'your-theme' ), wp_specialchars( get_bloginfo('name'), 1 ) ); ?>" />
        <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
  

</head>

<body <?php body_class(); ?>>

<div id="wrapper" class="hfeed">

<div id="header-container">
<div id="header">
                
                
              <div id="logo"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/logo.png" width="173" height="69" border="0" /></div>
                
                
<div id="access">
<div id="mobile-search">
<form method="get" id="searchform" action="<?php bloginfo('home'); ?>/">
<div><input type="text" size="put_a_size_here" name="s" id="s" value="Search..." onfocus="if(this.value==this.defaultValue)this.value='';" onblur="if(this.value=='')this.value=this.defaultValue;"/>
<input type="submit" id="searchsubmit" value="Go" class="btn" />
</div>
</form>  </div>    

    <div class="skip-link"><a href="#content" title="<?php _e( 'Skip to content', 'your-theme' ) ?>"><?php _e( 'Skip to content', 'your-theme' ) ?></a></div>
                                <?php wp_nav_menu( 'sort_column=menu_order' ); ?>   
                                                   
                        </div><!-- #access -->
                     <div id="space"></div>    
                
        </div><!-- #header -->
        </div><!-- #header-container -->
<div id="main">
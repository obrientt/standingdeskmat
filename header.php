<!DOCTYPE html>

<!-- BEGIN html -->
<html <?php language_attributes(); ?>>
<!-- An Orman Clark design (http://www.premiumpixels.com) - Proudly powered by WordPress (http://wordpress.org) -->

<!-- BEGIN head -->
<head>

	<!-- Meta Tags -->
	<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
	
	<!-- Title -->
	<title><?php wp_title('|', true, 'right'); ?><?php bloginfo('name'); ?></title>
	
	<!-- Stylesheets -->
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
	
	<!-- RSS & Pingbacks -->
	<link rel="alternate" type="application/rss+xml" title="<?php bloginfo( 'name' ); ?> RSS Feed" href="<?php if (get_option('tz_feedburner')) { echo get_option('tz_feedburner'); } else { bloginfo( 'rss2_url' ); } ?>" />
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

	<?php wp_head(); ?>

<!-- END head -->
</head>

<!-- BEGIN body -->
<body <?php body_class(); ?>>

    <?php // Load our custom background image
        // gain access to post id
        global $wp_query;
        if( is_home() && !is_tax( 'portfolio-type' ) ) {
            $postid = get_option('page_for_posts');
        } elseif( is_tax( 'portfolio-type' ) || is_search() || is_404() ) {
            $postid = 0;
        } else {
            $postid = $wp_query->post->ID;
        }
        
        // Get the unique background image
        $bg_img = get_post_meta($postid, 'tz_background_image', true);
        
        if( empty($bg_img) ) { 
            // No image supplied, fall back to default values
            $bg_pos = get_option('tz_default_bg_position');
            
            // Check background position to see if we need to continue
            if( $bg_pos == 'full' ) {
                $bg_img = get_option('tz_default_bg_image'); 
                if( !empty($bg_img) ) {
                    $posttitle = $wp_query->post->post_title;
                
                    // got the details, load the image
                    echo '<img id="background" src="' . $bg_img . '" alt="' . $posttitle . '" />';
                }
            }
        } else {
            // Unique background image included
            // Check background position to see if we need to continue
            $bg_pos = get_post_meta($postid, 'tz_background_position', true);

            if( $bg_pos == __('Full Screen', 'framework') ) {
                $posttitle = $wp_query->post->post_title;
                
                // got the details, load the image
                echo '<img id="background" src="' . $bg_img . '" alt="' . $posttitle . '" />';
            }
        }
    ?>

	<!-- BEGIN #container -->
	<div id="container">
	
	    <?php $header_caption = get_option('tz_header_caption'); 
	    if( !empty( $header_caption ) ) { ?>
	    <!-- BEGIN #header-top -->
        <div id="header-top">
            <p><?php echo $header_caption; ?></p>
        <!-- END #header-top -->
        </div>
        <?php } ?>
        
		<!-- BEGIN #header -->
		<div id="header" class="clearfix">
			
			<!-- BEGIN #logo -->
			<div id="logo">
			<?php /*
			If "plain text logo" is set in theme options then use text
			if a logo url has been set in theme options then use that
			if none of the above then use the default logo.png */
			if (get_option('tz_plain_logo') == 'true') { ?>
			    <a href="<?php echo home_url(); ?>"><?php bloginfo( 'name' ); ?></a>
			<?php } elseif (get_option('tz_logo')) { ?>
			    <a href="<?php echo home_url(); ?>"><img src="<?php echo stripslashes(get_option('tz_logo')); ?>" alt="<?php bloginfo( 'name' ); ?>"/></a>
			<?php } else { ?>
			    <a href="<?php echo home_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt="<?php bloginfo( 'name' ); ?>" /></a>
			<?php } ?>
				
				<?php $tagline = get_option('tz_tagline'); 
    			if( $tagline ) echo "<span id='tagline'>$tagline</span>"; ?>

			<!-- END #logo -->
			</div>
			
			
			<!-- BEGIN #primary-nav -->
    		<div id="primary-nav">
    			<?php if ( has_nav_menu( 'primary-menu' ) ) { /* if menu location 'primary-menu' exists then use custom menu */ ?>
    			<?php wp_nav_menu( array( 'theme_location' => 'primary-menu' ) ); ?>
    			<?php } ?>
    		<!-- END #primary-nav -->
    		</div>
    		
		<!--END #header-->
		</div>
		
		<!--BEGIN #content -->
		<div id="content" class="clearfix">
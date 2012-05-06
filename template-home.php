<?php
/*
Template Name: Home Page
*/
?>

<?php get_header(); ?>

            <!--BEGIN #primary .hfeed-->
            <div id="primary" class="hfeed">
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

            	<!--BEGIN .hentry-->
            	<div <?php post_class('clearfix') ?> id="post-<?php the_ID(); ?>">
                    
                    <?php 
                        $tz_slider = get_option('tz_image_slider'); 
                        if( $tz_slider == 'true' ) { get_template_part('includes/home-imageslider'); }
                    ?>
                    
            		<!--BEGIN .entry-content -->
            		<div class="entry-content">
            			<?php the_content(); ?>
            		<!--END .entry-content -->
            		</div>

            	<!--END .hentry-->
            	</div>
            	
            	<?php 
            	$recent_work = get_option('tz_recent_work'); 
            	if( !empty($recent_work) ) { get_template_part('includes/home-recent-work'); }
            	?>
	
            	<?php endwhile; endif; ?>

            <!--END #primary .hfeed-->
            </div>

<?php get_footer(); ?>
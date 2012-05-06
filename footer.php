
		<!-- END #content -->
		</div>
		
    	<?php 
    	    // Grab the related posts if selected to display in theme options
    	    if( 'portfolio' == get_post_type() && !is_tax('portfolio-type') && !is_search() && !is_404() ) { 

        		$related_ports = get_option('tz_portfolio_related');
        		if( !empty($related_ports) && $related_ports != '0' ) {
                    get_template_part('includes/footer-related-posts');
                } 
    		} 
		?>
			
		<!-- BEGIN #footer -->
		<div id="footer" class="clearfix">
		    <?php get_sidebar('left-footer-column'); ?>
		    <?php get_sidebar('center-footer-column'); ?>
		    <?php get_sidebar('right-footer-column'); ?>
		<!-- END #footer -->
		</div>
		
		<!-- BEGIN #sub-footer -->
		<div id="sub-footer" class="clearfix">
		    
            <div class="copyright">
                <p>&copy; <?php echo date( 'Y' ); ?> <a href="<?php echo home_url(); ?>"><?php bloginfo( 'name' ); ?></a>. <?php _e('Powered by', 'framework') ?> <a href="http://wordpress.org/">WordPress</a></p>

    			<p><a href="http://www.premiumpixels.com/scope">Scope Theme</a> by <a href="http://www.premiumpixels.com">Orman Clark</a></p>
            </div>
		
		    <!-- BEGIN #secondary-nav -->
    		<div id="secondary-nav">
    			<?php if ( has_nav_menu( 'secondary-menu' ) ) { /* if menu location 'secondary-menu' exists then use custom menu */ ?>
    			<?php wp_nav_menu( array( 'theme_location' => 'secondary-menu', 'container' => '', 'depth' => 1 ) ); ?>
    			<?php } ?>
    		<!-- END #secondary-nav -->
    		</div>
		
		<!-- END #sub-footer -->
		</div>
		
	<!-- END #container -->
	</div> 

	<!-- Theme Hook -->
	<?php wp_footer(); ?>
			
<!--END body-->
</body>
<!--END html-->
</html>
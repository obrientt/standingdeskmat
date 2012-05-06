<?php
    $related_ports = get_option('tz_portfolio_related');
    $related = tz_get_posts_related_by_taxonomy($post->ID, 'portfolio-type', array('posts_per_page' => $related_ports));
    $i = 0;
    
    if( $related->have_posts() ) :
?>
	<!-- BEGIN .portfolio-related -->
	<div class="portfolio-related clearfix">
	
		<h2 class="related-title"><span><?php _e('Related Projects', 'framework') ?></span></h2>

		<ul>

        <?php while( $related->have_posts() ) : $related->the_post(); ?>
            <li<?php if($i%4==3) { echo ' class="last"'; } ?>>
            <?php if ( (function_exists('has_post_thumbnail')) && (has_post_thumbnail()) ) { ?>
				<div class="post-thumb">
					<a title="<?php printf(__('Permanent Link to %s', 'framework'), get_the_title()); ?>" href="<?php the_permalink(); ?>">
                        <span class="post-thumb-overlay"><?php _e('View Project', 'framework'); ?></span>
					    <?php the_post_thumbnail('portfolio-thumb'); ?>
					</a>
				</div>
    		<?php } ?>

    		<h2 class="entry-title"><a href="<?php the_permalink(); ?>" rel="bookmark" title="<?php printf(__('Permanent Link to %s', 'framework'), get_the_title()); ?>"> <?php the_title(); ?></a></h2>
    		
    		<!--BEGIN .entry-meta -->
			<div class="entry-meta">
				<span class="entry-portfolio-type"><?php the_terms($post->ID, 'portfolio-type', '', ', ', ''); ?></span>
			<!--END .entry-meta -->
			</div>
			
			</li>	
			<?php $i++; ?>		
        <?php endwhile; ?>
        </ul>
       
	<!-- END .portfolio-related -->
	</div>
	<?php endif; wp_reset_postdata(); ?>
<!-- BEGIN .recent-work -->
<div class="recent-work">

    <h2 class="related-title"><span><?php _e('Recent Work', 'framework') ?></span></h2>

    <ul>
    <?php
        $recent_work = get_option('tz_recent_work');
        $args = array(
            'post_type' => 'portfolio',
            'orderby' => 'date',
            'order' => 'DESC',
            'posts_per_page' => $recent_work
        );
        $recent = new WP_Query( $args );
        $i = 0;

        while( $recent->have_posts() ) : $recent->the_post(); 
    ?>
        <li<?php if($i%4==3) { echo ' class="last"'; } ?>>
            <?php if( (function_exists('has_post_thumbnail')) && (has_post_thumbnail()) ) { ?>
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

    <?php endwhile; wp_reset_postdata(); ?>

    </ul>

<!-- END .recent-work -->
</div>

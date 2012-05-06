<?php 
if( (function_exists('has_post_thumbnail')) && (has_post_thumbnail()) ) { 
    if ( !is_singular() ) { ?>
        
        <div class="post-thumb">        
        	<a title="<?php printf(__('Permanent Link to %s', 'framework'), get_the_title()); ?>" href="<?php the_permalink(); ?>">
        	    <?php the_post_thumbnail('thumbnail-large'); ?>
        	</a>
        </div>
        
    <?php } elseif( get_option('tz_post_img') == 'true' ) { ?>
        
        <div class="post-thumb">        
        	<?php the_post_thumbnail('thumbnail-large'); ?>
        </div>	

    <?php } ?>
    
<?php } ?>

<?php if( is_singular() ) { ?>
    
    <h1 class="entry-title"><?php the_title(); ?></h1>
    
<?php } else { ?>
    
    <h2 class="entry-title">
        <a href="<?php the_permalink(); ?>" rel="bookmark" title="<?php printf(__('Permanent Link to %s', 'framework'), get_the_title()); ?>">      
            <?php the_title(); ?>
        </a>
    </h2>
    
<?php } ?>
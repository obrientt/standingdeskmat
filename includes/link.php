<?php $link = get_post_meta($post->ID, 'tz_link_url', TRUE); ?>

<?php if( is_singular() ) { ?>
    
    <h1 class="entry-title">
        <a href="<?php echo $link; ?>">      
            <?php the_title(); ?>
        </a>
    </h1>
    
<?php } else { ?>
    
    <h2 class="entry-title">
        <a href="<?php echo $link; ?>">      
            <?php the_title(); ?>
        </a>
    </h2>
    
<?php } ?>

<span class="sub-title">&mdash; <?php echo $link; ?></span>
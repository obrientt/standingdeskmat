<?php $quote = get_post_meta($post->ID, 'tz_quote', TRUE); ?>

<h1 class="entry-title"><?php echo $quote; ?></h1>
    
<span class="sub-title">&mdash; <?php the_title(); ?></span>
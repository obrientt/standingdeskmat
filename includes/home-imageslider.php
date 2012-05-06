<?php
        $tz_autoslide_speed = get_option('tz_image_slider_speed');
        $tz_autoslide_speed = ( isset($tz_autoslide_speed) ) ? $tz_autoslide_speed : '0' ;

        $image1 = get_option('tz_image_1');
        $image2 = get_option('tz_image_2'); 
        $image3 = get_option('tz_image_3'); 
        $image4 = get_option('tz_image_4'); 
        $image5 = get_option('tz_image_5'); 
		
		$link1 = get_option('tz_image_link_1');
		$link2 = get_option('tz_image_link_2');
		$link3 = get_option('tz_image_link_3');
		$link4 = get_option('tz_image_link_4');
		$link5 = get_option('tz_image_link_5');
		
		$desc1 = get_option('tz_image_1_desc');
		$desc2 = get_option('tz_image_2_desc');
		$desc3 = get_option('tz_image_3_desc');
		$desc4 = get_option('tz_image_4_desc');
		$desc5 = get_option('tz_image_5_desc');
?>		
		<!--BEGIN #slider-->
		<div id="home-slider" data-speed="<?php echo $tz_autoslide_speed; ?>" data-loader="<?php echo  get_template_directory_uri(); ?>/images/ajax-loader.gif" class="slider">
			
			<!--BEGIN .slides_container-->
			<div class="slides_container">
				
				<?php if( !empty($image1) ) : // begin slide 1 ?>
				
				<div class="slide">
				
    				<?php if( !empty($desc1) ) : ?>
    				<div class="slider-desc"><?php echo stripslashes(htmlspecialchars_decode(nl2br($desc1))); ?></div>
    				<?php endif; ?>
				
    				<?php if( !empty($link1) ) : ?>
    				    <a href="<?php echo $link1; ?>"><img src="<?php echo $image1; ?>" alt="" /></a>
    				<?php else : ?>
    				    <img src="<?php echo $image1; ?>" alt="" />
    				<?php endif; ?>
				
				</div>
				
				<?php endif; // end slide 1 ?>
				
				
				<?php if( !empty($image2) ) : // begin slide 2 ?>
				
				<div class="slide">
				
    				<?php if( !empty($desc2) ) : ?>
    				<div class="slider-desc"><?php echo stripslashes(htmlspecialchars_decode(nl2br($desc2))); ?></div>
    				<?php endif; ?>
				
    				<?php if( !empty($link2) ) : ?>
    				    <a href="<?php echo $link2; ?>"><img src="<?php echo $image2; ?>" alt="" /></a>
				    <?php else : ?>
				        <img src="<?php echo $image2; ?>" alt="" />
    				<?php endif; ?>
				
				</div>
				    				
				<?php endif; // end slide 2 ?>


				<?php if( !empty($image3) ) : // begin slide 3 ?>
				
    				<div class="slide">
				
        				<?php if( !empty($desc3) ) : ?>
        				<div class="slider-desc"><?php echo stripslashes(htmlspecialchars_decode(nl2br($desc3))); ?></div>
        				<?php endif; ?>
				
        				<?php if( !empty($link3) ) : ?>
        				    <a href="<?php echo $link3; ?>"><img src="<?php echo $image3; ?>" alt="" /></a>
    				    <?php else : ?>
        				    <img src="<?php echo $image3; ?>" alt="" />
        				<?php endif; ?>
				
    				</div>
				
    			<?php endif; // end slide 3 ?>
    				
    				
    			<?php if( !empty($image4) ) : // begin slide 4 ?>

    				<div class="slide">

        				<?php if( !empty($desc4) ) : ?>
        				<div class="slider-desc"><?php echo stripslashes(htmlspecialchars_decode(nl2br($desc4))); ?></div>
        				<?php endif; ?>

        				<?php if( !empty($link4) ) : ?>
        				    <a href="<?php echo $link4; ?>"><img src="<?php echo $image4; ?>" alt="" /></a>
    				    <?php else : ?>
    				        <img src="<?php echo $image4; ?>" alt="" />
        				<?php endif; ?>

    				</div>

    			<?php endif; // end slide 4 ?>
				
				
				<?php if( !empty($image5) ) : // begin slide 5 ?>
				
				<div class="slide">
				
    				<?php if( !empty($desc5) ) : ?>
    				<div class="slider-desc"><?php echo stripslashes(htmlspecialchars_decode(nl2br($desc5))); ?></div>
    				<?php endif; ?>
				
    				<?php if( !empty($link5) ) : ?>
    				    <a href="<?php echo $link5; ?>"><img src="<?php echo $image5; ?>" alt="" /></a>
				    <?php else : ?>
				        <img src="<?php echo $image5; ?>" alt="" />
    				<?php endif; ?>
				
				</div>
				    				
				<?php endif; // end slide 5 ?>
			
			<!--END .slides_container-->
			</div>
			
		<!--BEGIN #slider-->
		</div>
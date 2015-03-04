<?php
/**
 * Template for displaying new construction custom post type entries
 */
?>	


<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">


	</header><!-- .entry-header -->

	<div class="entry-content">
		<div class="nc-title"><?php the_field('construction_title'); ?></div>
		<div class="nc-description"><?php the_field('construction_description'); ?></div>
		<div class="nc-review"><?php the_field('construction_customer_review'); ?></div>
		<div class="fb-like" data-href="http://www.sr-stl.com/construction" data-layout="standard" data-action="like" data-show-faces="true" data-share="true"></div>
		<div class="row nc_row">
			<div class="col-md-6 img-wrap"><img id="img-1" class="img-responsive nc_img" src="<?php the_field('landscape_image_of_construction_#1'); ?>"></div>
			<div class="col-md-6 img-wrap"><img id="img-2" class="img-responsive nc_img" src="<?php the_field('landscape_image_of_construction_#2'); ?>"></div>
		</div>
		<div class="row nc_row">	
			<div class="col-md-6 img-wrap"><img class="img-responsive nc_img" src="<?php the_field('landscape_image_of_construction_#3'); ?>"></div>
			<div class="col-md-6 img-wrap"><img class="img-responsive nc_img" src="<?php the_field('landscape_image_of_construction_#4'); ?>"></div>
		</div>	
		<div class="row nc_row">
			<div class="col-md-3 img-wrap"><img class="img-responsive nc_img" src="<?php the_field('portrait_image_of_construction_#1'); ?>"></div>
			<div class="col-md-3 img-wrap"><img class="img-responsive nc_img" src="<?php the_field('portrait_image_of_construction_#2'); ?>"></div>
			<div class="col-md-3 img-wrap"><img class="img-responsive nc_img" src="<?php the_field('portrait_image_of_construction_#3'); ?>"></div>
			<div class="col-md-3 img-wrap"><img class="img-responsive nc_img" src="<?php the_field('portrait_image_of_construction_#4'); ?>"></div>
		</div>		
		
	</div><!-- .entry-content -->	

</article><!-- #post -->

<?php
/**
 * Template for displaying new construction custom post type entries
 */
?>	


<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">


	</header><!-- .entry-header -->
	<div class="entry-content">
		<div class="row wwd_row">
			<div  class="col-md-4"><img id="wwd_top_left" class ="img-responsive wwd_img" src="<?php the_field('image_#1'); ?>"> </div>
			<div  class="col-md-4"><img id="wwd_top_middle" class ="img-responsive wwd_img" src="<?php the_field('image_#2'); ?>"> </div>
			<div  class="col-md-4"><img id="wwd_top_right" class ="img-responsive wwd_img" src="<?php the_field('image_#3'); ?>"> </div>
		</div>
		<div class="col-lg-12 page-explanation "><?php the_field('what_we_do_page_explanation'); ?></div>
		<div class="row wwd_description_row">
			<div class="col-md-4 wwd_description"><?php the_field('what_we_do_newconstruction_description'); ?></div>
			<div class="col-md-4 wwd_description"><?php the_field('what_we_do_renovations_descritption'); ?></div>
			<div class="col-md-4 wwd_description"><?php the_field('what_we_do_other_description'); ?></div>
		</div>
		<div class="row wwd_row">
			<div class="col-md-4"><img id="wwd_bottom_left" class ="img-responsive wwd_img" src="<?php the_field('image_#4'); ?>"> </div>
			<div  class="col-md-4"><img id="wwd_bottom_middle" class ="img-responsive wwd_img" src="<?php the_field('image_#5'); ?>"> </div>
			<div  class="col-md-4"><img id="wwd_bottom_right" class ="img-responsive wwd_img" src="<?php the_field('image_#6'); ?>"> </div>
		</div>

	</div><!-- .entry-content -->	

</article><!-- #post -->


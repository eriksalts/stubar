<?php
/**
 * Template for displaying gallery custom post type entries
 */
?>


<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">

	</header><!-- .entry-header -->
	<div class="entry-content container">
		<div><?php the_field('gallery_description'); ?></div>
		<div class="row gallery-row">
			<div class="col-md-6 parent">
				<img id="construction-gallery-image" src="<?php the_field('gallery_construction_link_image'); ?>" alt="Example image of <?php the_title(); ?>">
				<div class="col-md-12 link-background child">
					<a href="www.sr-stl.com/construction"><?php the_field('construction_gallery_title'); ?></a>
				</div>
			</div>
			<div class="col-md-6 parent">
				<img id="renovations-gallery-image" src="<?php the_field('renovations_link_image'); ?>" alt="Example image of <?php the_title(); ?>">
				<div class="col-md-12 link-background child">
					<a  href="http://www.sr-stl.com/renovations"><?php the_field('renovations_gallery_title'); ?></a>
				</div>
			</div>
		</div>
	</div><!-- .entry-content -->
</article><!-- #post -->

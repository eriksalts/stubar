<?php
/**
 * Template for displaying new construction custom post type entries
 */
?>	


<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">


	</header><!-- .entry-header -->
			<div class="col-md-4 company-image"><img src="<?php the_field('image_of_you'); ?>" alt="Example image of <?php the_title(); ?>"></div>
			<div class="col-md-8 about-us-description"><?php the_field('about_us_description'); ?></div>
</article><!-- #post -->

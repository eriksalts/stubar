<?php
/**
 * Template for displaying new construction custom post type entries
 */
?>


<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">


	</header><!-- .entry-header -->

	<div class="entry-content">

		<div><?php the_field('contact_description'); ?></div>
		<div><a href="tel://1-618-205-3220"><?php the_field('contact_phone_number'); ?></a></div>
		<div><a href="mailto:info@sr-stl.com"><?php the_field('contact_email'); ?></a></div>
		<div id="contact_work_area_description"><?php the_field('contact_work_area_description'); ?></div>


	</div><!-- .entry-content -->

</article><!-- #post -->

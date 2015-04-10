<?php
/**
 * Template for displaying new construction custom post type entries
 */
?>


<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">


	</header><!-- .entry-header -->
	<div class="entry-content">
	<div class="col-lg-12 page-explanation "><?php the_field('what_we_do_page_explanation'); ?></div>
	<!-- START Carousel ONE ---------------------------------------------- -->
<div class="row carousel-row">
<!-- Carousel START -->
  <div class="carousel-non-theme carousel slide col-md-7" data-ride="carousel">
    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <div class="item active">
        <img class="wwd-images" src="<?php the_field('image_#1'); ?>" alt="STUBAR">
      </div>
      <div class="item">
        <img class="wwd-images" src="<?php the_field('image_#2'); ?>" alt="STUBAR">
      </div>
      <div class="item">
        <img class="wwd-images" src="<?php the_field('image_#3'); ?>" alt="STUBAR">
      </div>
    </div>

  </div>
<!-- Carousel END -->

		<div class="row wwd_description_row">
			<div class="col-lg-5 wwd_description"><?php the_field('what_we_do_newconstruction_description'); ?></div>
		</div>

	</div><!-- .entry-content -->

</article><!-- #post -->

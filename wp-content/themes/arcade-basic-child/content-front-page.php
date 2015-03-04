<?php
/**
 * Template for displaying new construction custom post type entries
 */
?>	


<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">


	</header><!-- .entry-header -->
	<!-- Carousel START -->
		<!-- START Carousel ONE ---------------------------------------------- -->
<!-- <div class="row carousel-row"> -->
  <div class="carousel-non-theme front-page-carousel carousel slide col-md-6" data-ride="carousel">
    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <div class="item active">
        <img class="carousel-images" src="<?php the_field('image_#1'); ?>" alt="STUBAR">
      </div>
      <div class="item">
        <img class="carousel-images" src="<?php the_field('image_#2'); ?>" alt="STUBAR">
      </div>
      <div class="item">
        <img class="carousel-images" src="<?php the_field('image_#3'); ?>" alt="STUBAR">
      </div>
    </div>
<div class="fb-follow" data-href="https://www.facebook.com/pages/Stuehlmeyer-Building-Renovation-Company/153925961313160" data-colorscheme="light" data-layout="standard" data-show-faces="true"></div>
  </div>
<!-- Carousel END -->
</article><!-- #post -->

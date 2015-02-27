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
  <div id="wwd-carousel" class="carousel slide col-md-7" data-ride="carousel">
    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <div class="item active">
        <img src="<?php the_field('image_#1'); ?>" alt="STUBAR">
      </div>
      <div class="item">
        <img src="<?php the_field('image_#2'); ?>" alt="STUBAR">
      </div>
      <div class="item">
        <img src="<?php the_field('image_#3'); ?>" alt="STUBAR">
      </div>
    </div>

  </div>
<!-- Carousel END -->
    
    <div class="row wwd_description_row">
      <div class="col-md-5 wwd_description"><?php the_field('what_we_do_newconstruction_description'); ?></div>
    </div>

  </div><!-- .entry-content --> 

</article><!-- #post -->
<script src="//code.jquery.com/jquery-1.11.2.min.js"></script>
<script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>

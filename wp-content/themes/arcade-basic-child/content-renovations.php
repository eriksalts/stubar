<?php
/**
 * Template for displaying new construction custom post type entries
 */
?>	


<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">


	</header><!-- .entry-header -->

	<div class="entry-content">
		<div class="renov-title"><?php the_field('renov_title'); ?></div>
		<div class="renov-description"><?php the_field('renovations_description'); ?></div>
		<div class="renov-review"><?php the_field('renovations_review'); ?></div>
		<div class="row renov-row">
		<div class="fb-like fb-like-renovations" data-href="http://www.sr-stl.com/renovations" data-layout="standard" data-action="like" data-show-faces="true" data-share="true"></div>
			<div class="col-md-6">
				<div id="landscape1" class="cf-landscape">
					<h3 id="after1" class="after-label">After</h3>
					<h3 id="before1" class="before-label">Before</h3>
					<img class="bottom img-responsive renov-img-landscape" src="<?php the_field('landscape_renovations_after_image_#1'); ?>">
					<img class="top img-responsive renov-img-landscape" src="<?php the_field('landscape_renovations_before_image_#1'); ?>">	
				</div>
				<!-- </div> -->
			</div>

			<div class="col-md-6">
				<div id="landscape2" class="cf-landscape">
					<h3 id="after2" class="after after-label">After</h3>
					<h3 id="before2" class="before before-label">Before</h3>
					<img class="bottom img-responsive renov-img-landscape" src="<?php the_field('landscape_renovations_after_image_#2'); ?>">
					<img class="top img-responsive renov-img-landscape" src="<?php the_field('landscape_renovations_before_image_#2'); ?>">	
				</div>
				<!-- </div> -->
			</div>
		</div>			
		<div class="row renov-row">
			<div  class="col-md-3">
				<div id="portrait1" class="cf-portrait">
					<h3 id="after3" class="after-label">After</h3>
					<h3 id="before3" class="before-label">Before</h3>
					<img class="bottom img-responsive renov-img" src="<?php the_field('portrait_renovations_after_image_#1'); ?>">
					<img class="top img-responsive renov-img-portrait" src="<?php the_field('portrait_renovations_before_image_#1'); ?>">
				</div>
			</div>
			<div class="col-md-3">
				<div id="portrait2" class="cf-portrait">
					<h3 id="after4" class="after-label">After</h3>
					<h3 id="before4" class="before-label">Before</h3>
					<img class="bottom img-responsive renov_img" src="<?php the_field('portrait_renovations_after_image_#2'); ?>">
					<img class="top img-responsive renov-img-portrait" src="<?php the_field('portrait_renovations_before_image_#2'); ?>">
				</div>
			</div>
			<div class="col-md-3">
				<div id="portrait3" class="cf-portrait">
					<h3 id="after5" class="after-label">After</h3>
					<h3 id="before5" class="before-label">Before</h3>
					<img class="bottom img-responsive renov_img" src="<?php the_field('portrait_renovations_after_image_#3'); ?>">
					<img class="top img-responsive renov-img-portriat" src="<?php the_field('portrait_renovations_before_image_#3'); ?>">
			</div>
			<div class="col-md-3">
				<div id="portrait4" class="cf-portrait">
					<h3 id="after6" class="after-label">After</h3>
					<h3 id="before6" class="before-label">Before</h3>
					<img class="bottom img-responsive renov_img" src="<?php the_field('portrait_renovations_after_image_#4'); ?>">
					<img class="top img-responsive renov-img-portrait" src="<?php the_field('portrait_renovations_before_image_#4'); ?>">
			
				</div>
		</div>	

	</div><!-- .entry-content -->	

</article><!-- #post -->
<script type="text/javascript" src="<?php bloginfo('stylesheet_directory'); ?>/js/jquery-2.1.3.min.js"></script>
<script type="text/javascript" src="<?php bloginfo('stylesheet_directory'); ?>/js/custom.js"></script>





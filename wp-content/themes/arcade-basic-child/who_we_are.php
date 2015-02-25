<?php
/**
 * Template Name: Who We Are Page
 */
get_header();
?>

	<div class="container">
		<div class="row">
			<div id="primary" <?php bavotasan_primary_attr(); ?>>
				<?php
				while ( have_posts() ) : the_post();
					?>
					<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
						<h1 class="entry-title"><?php the_title(); 
						
						?></h1>

					    <div class="entry-content description clearfix">
						    <?php the_content( __( 'Read more', 'arcade') ); ?>
						    
					    </div><!-- .entry-content -->
					   
					    <?php get_template_part( 'content', 'footer' ); ?>
					</article><!-- #post-<?php the_ID(); ?> -->

					<?php
					// comments_template( '', true );
				endwhile; ?>
				<?php 
			    $args = array(
			        'post_type' => 'about_us',
			        'orderby' => 'title',
			        'order' => 'ASC'
			    );
			    $the_query = new WP_Query( $args );		    
			?>
			<?php if ( have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>	

			<?php get_template_part( 'content', 'who_we_are' ); ?>
			
			<?php endwhile; endif; ?>
			</div>

		</div>
	</div>
	<!-- <div class="container clearfix"> -->
		<!-- <div class="row"> -->
			<div class="col-md-6">
				<a id="veteran" class="who-we-are-links" href="http://www.veteranownedbusiness.com" target="_blank" ><img src="http://www.veteranownedbusiness.com/images/banner_links/vob_120x60_blue_camo.png" alt="Veteran Owned Business Directory, Get your free listing, now!" border="0px" /></a>
			</div>
			<div class="col-md-6">
				<a id="bbb"  class="who-we-are-links" title="Click for the Business Review of Stuehlmeyer Renovations, a Contractor - Remodel & Repair in Glen Carbon IL" href="https://www.bbb.org/stlouis/business-reviews/contractor-remodel-and-repair/stuehlmeyer-renovations-in-glen-carbon-il-310360447#sealclick"><img alt="Click for the BBB Business Review of this Contractor - Remodel & Repair in Glen Carbon IL" style="border: 0;" src="https://seal-stlouis.bbb.org/seals/blue-seal-250-52-stuehlmeyerrenovations-310360447.png" /></a>
			</div>
		<!-- </div>	 -->
	<!-- </div> -->

<?php get_footer(); ?>
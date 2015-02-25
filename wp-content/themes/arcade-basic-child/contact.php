<?php
/**
 * Template Name: Contact Page
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
			        'post_type' => 'contact_us',
			        'orderby' => 'title',
			        'order' => 'ASC'
			    );
			    $the_query = new WP_Query( $args );		    
			?>
			<?php if ( have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>	

			<?php get_template_part( 'content', 'contact' ); ?>
			<iframe src="https://mapsengine.google.com/map/embed?mid=zzLs5QewKfcU.k7ylDBdtOyvU" width="640" height="480"></iframe>

			<?php endwhile; endif; ?>
			</div>
			
		</div>
	</div>
	<div class="container-fluid">
		<div class="row fp-column-row">
			<div class="col-md-4 fp-columns">
			<!-- Cross-platform compatible (Android + iPhone) -->
			<a href="tel://1-618-205-3220">618-205-3220</a>
			</div>
			<div class="col-md-4 fp-columns">
				<a href="https://www.facebook.com/pages/Stuehlmeyer-Building-Renovation-Company/153925961313160">Like us on Facebook</a>
			</div>
			<div class="col-md-4 fp-columns">
				<!-- <a href="info@sr-stl.com">info@sr-stl.com</a> -->
				<p class="temporary-email">info@sr-stl.com</p>
			</div>
		</div>
	</div>
<?php get_footer(); ?>
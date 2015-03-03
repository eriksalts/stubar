<?php
/**
 * Template Name: Front-Page
 */
get_header();

global $paged;
$bavotasan_theme_options = bavotasan_theme_options();

if ( 2 > $paged ) {
	// Display jumbo headline is the option is set
	if ( ! empty( $bavotasan_theme_options['jumbo_headline_title'] ) ) {
	?>
	<div class="home-top">
		<div class="container">
		

			<div class="row front-page-row">
				<div class="col-md-6">
					<!-- <div class="home-jumbotron jumbotron"> -->
						<h1 id="front-page-title"><?php echo apply_filters( 'the_title', html_entity_decode( $bavotasan_theme_options['jumbo_headline_title'] ) ); ?></h1>
						<p class="lead"><?php echo wp_kses_post( html_entity_decode( $bavotasan_theme_options['jumbo_headline_text'] ) ); ?></p>
					<!-- </div> -->
				</div>
				<?php 
			    $args = array(
			        'post_type' => 'front-page',
			        'orderby' => 'title',
			        'order' => 'ASC'
			    );
			    $the_query = new WP_Query( $args );		    
			?>
			<?php if ( have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>	

			<?php get_template_part( 'content', 'front-page' ); ?>

			<?php endwhile; endif; ?>
	<?php
	} ?>
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
				<a href="mailto:info@sr-stl.com">info@sr-stl.com</a>
			</div>
		</div>
	</div>
	<script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>

<?php
}
get_footer(); ?>

<!-- <script src="//code.jquery.com/jquery-1.11.2.min.js"></script> -->




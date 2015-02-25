<?php
/**
 * The front page template.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @since 1.0.0
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
			<div class="row">
				<div class="col-md-12">
					<div class="home-jumbotron jumbotron">
						<h1><?php echo apply_filters( 'the_title', html_entity_decode( $bavotasan_theme_options['jumbo_headline_title'] ) ); ?></h1>
						<p class="lead"><?php echo wp_kses_post( html_entity_decode( $bavotasan_theme_options['jumbo_headline_text'] ) ); ?></p>
					</div>
				</div>
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
	<?php
	} ?>

<?php
}
get_footer(); ?>
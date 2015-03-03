<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @since 1.0.0
 */
get_header();
?>
<div id="fb-root"></div>

	<div class="container">
		<div class="row">
			<div id="primary" <?php bavotasan_primary_attr(); ?>>
				<?php
				while ( have_posts() ) : the_post();
					?>
					<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
						<h1 class="entry-title"><?php the_title(); ?></h1>

					    <div class="entry-content description clearfix">
						    <?php the_content( __( 'Read more', 'arcade') ); ?>
					    </div><!-- .entry-content -->
					   <!--  <div class="fb-like" data-href="https://developers.facebook.com/docs/plugins/" data-width="200" data-layout="button_count" data-action="like" data-show-faces="true" data-share="true"></div> -->
					   
					</article><!-- #post-<?php the_ID(); ?> -->


					<?php
					// comments_template( '', true );
				endwhile; ?>
				

				<?php 
			    $args = array(
			        'post_type' => 'front_page_images',
			        'orderby' => 'title',
			        'order' => 'ASC'
			    );
			    $the_query = new WP_Query( $args );		    
			?>
			<?php if ( have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>	

			<?php get_template_part( 'content', 'page' ); ?>

			<?php endwhile; endif; ?>
			</div>
			
		</div>
	</div>


<?php get_footer(); ?>
<?php
/**
 * Template Name: Renovations Page
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
			        'post_type' => 'renovation',
			        'orderby' => 'title',
			        'order' => 'ASC'
			    );
			    $the_query = new WP_Query( $args );		    
			?>
			<?php if ( have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>	

			<?php get_template_part( 'content', 'renovations' ); ?>

			<?php endwhile; endif; ?>
			</div>
			
		</div>
	</div>

<?php get_footer(); ?>
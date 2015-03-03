<?php
/**
 * Template for displaying questions custom post type entries
 */
?>	


<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">


	</header><!-- .entry-header -->

	<div class="entry-content">
	<div class="row questions-row">
		<a href="#" id="question1" class="questions"><?php the_field('question1'); ?></a>
		<div id="answer1" class="answer"><?php the_field('answer1'); ?></div>
	</div>
	<div class="row questions-row">	
		<a href="#" id="question2" class="questions"><?php the_field('question2'); ?></a>
		<div id="answer2" class="answer"><?php the_field('answer2'); ?></div>
	</div>
	<div class="row questions-row">	
		<a href="#" id="question3" class="questions"><?php the_field('question3'); ?></a>
		<div id="answer3" class="answer"><?php the_field('answer3'); ?></div>
	</div>
	<div class="row questions-row">	
		<a href="#" id="question4" class="questions"><?php the_field('question4'); ?></a>
		<div id="answer4" class="answer"><?php the_field('answer4'); ?></div>
	</div>
	<div class="row questions-row">	
		<a href="#" id="question5" class="questions"><?php the_field('question5'); ?></a>
		<div id="answer5" class="answer"><?php the_field('answer5'); ?></div>
	</div>
	<div class="row questions-row">	
		<a href="#" id="question6" class="questions"><?php the_field('question6'); ?></a>
		<div id="answer6" class="answer"><?php the_field('answer6'); ?></div>
	</div>
	<div class="row questions-row">	
		<a href="#" id="question7" class="questions"><?php the_field('question7'); ?></a>
		<div id="answer7" class="answer"><?php the_field('answer7'); ?></div>
	</div>
	<div class="row questions-row">	
		<a href="#" id="question8" class="questions"><?php the_field('question8'); ?></a>
		<div id="answer8" class="answer"><?php the_field('answer8'); ?></div>
	</div>
	<div class="row questions-row">	
		<a href="#" id="question9" class="questions"><?php the_field('question9'); ?></a>
		<div id="answer9" class="answer"><?php the_field('answer9'); ?></div>
	</div>
	<div class="row questions-row">	
		<a href="#" id="question10" class="questions"><?php the_field('question10'); ?></a>
		<div id="answer10" class="answer"><?php the_field('answer10'); ?></div>
	</div>
	<div class="row questions-row">	
		<a href="#" id="question11" class="questions"><?php the_field('question11'); ?></a>
		<div id="answer11" class="answer"><?php the_field('answer11'); ?></div>
	</div>
	<div class="row questions-row">	
		<a href="#" id="question12" class="questions"><?php the_field('question12'); ?></a>
		<div id="question12" class="answer"><?php the_field('answer12'); ?></div>
	</div>	
		

	</div><!-- .entry-content -->	

</article><!-- #post -->
<script type="text/javascript" src="<?php bloginfo('stylesheet_directory'); ?>/js/jquery-2.1.3.min.js"></script>
<script type="text/javascript" src="<?php bloginfo('stylesheet_directory'); ?>/js/custom.js"></script>
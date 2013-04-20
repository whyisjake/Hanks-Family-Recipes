<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package Hanks
 */

get_header(); ?>

	<div class="row">
	
		<div class="span8">

			<div id="primary" class="content-area">
				<div id="content" class="site-content" role="main">

				<?php if ( have_posts() ) : ?>

					<?php /* Start the Loop */ ?>
					<?php while ( have_posts() ) : the_post(); ?>

						<h1><?php the_title('<a href="' . get_permalink() . '">', '</a>'); ?></h1>
						<?php the_time('F jS, Y') ?> - from <?php the_author_posts_link(); ?>
						<hr>
						<?php the_content(); ?>
						<hr>

					<?php endwhile; ?>

					<?php comments_template(); ?>
					
					<?php hanks_content_nav( 'nav-below' ); ?>

				<?php else : ?>

					<?php get_template_part( 'no-results', 'index' ); ?>

				<?php endif; ?>

				</div><!-- #content -->
			</div><!-- #primary -->
		</div>
		
		<div class="span4">
			<?php get_sidebar(); ?>	
		</div>
	</div>
<?php get_footer(); ?>
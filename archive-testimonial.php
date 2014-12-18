<?php
/**
 * The template for displaying archive pages.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package Michaelfilbey
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main max" role="main">

		<?php if ( have_posts() ) : ?>

			<header class="page-header">
				<?php
					the_archive_title( '<h1 class="page-title">', '</h1>' );
					the_archive_description( '<div class="taxonomy-description">', '</div>' );
				?>
			</header><!-- .page-header -->

			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>

				<?php
					/* Include the Post-Format-specific template for the content.
					 * If you want to override this in a child theme, then include a file
					 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
					 */
					get_template_part( 'content', get_post_format() );
				?>
<div class="entry-content">
			<?php the_field('clients_name'); ?>
			<?php the_field('clients_postcode'); ?>
			<?php the_field('job_complete_for_client'); ?>
			<?php the_field('clients_quote'); ?>
			<?php

			$image = get_field('clients_photo');

			if( !empty($image) ): ?>

			  <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />

			<?php endif; ?>

			<?php

			$image = get_field('picture_of_the_job_1');

			if( !empty($image) ): ?>

			  <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />

			<?php endif; ?>


			<?php

			$image = get_field('picture_of_the_job_2');

			if( !empty($image) ): ?>

			  <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />

			<?php endif; ?>


			<?php

			$image = get_field('picture_of_the_job_3');

			if( !empty($image) ): ?>

			  <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />

			<?php endif; ?>


			<?php

			$image = get_field('picture_of_the_job_4');

			if( !empty($image) ): ?>

			  <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />

			<?php endif; ?>

	</div><!-- .entry-content -->
			<?php endwhile; ?>

			<?php michaelfilbey_paging_nav(); ?>

		<?php else : ?>

			<?php get_template_part( 'content', 'none' ); ?>

		<?php endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>

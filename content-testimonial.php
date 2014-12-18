<?php
/**
 * @package Michaelfilbey
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">


		<div class="entry-meta">

		</div><!-- .entry-meta -->
	</header><!-- .entry-header -->

	<div class="entry-content">
			<p><?php the_field('clients_name'); ?></p>
			<p><?php the_field('clients_postcode'); ?></p>
			<p><?php the_field('job_complete_for_client'); ?></p>
			<p><?php the_field('clients_quote'); ?></p>
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

	<footer class="entry-footer">

	</footer><!-- .entry-footer -->
</article><!-- #post-## -->

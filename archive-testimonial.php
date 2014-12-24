<?php
/**
 * Template name: Testimonials
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package Michaelfilbey
 */

get_header(); ?>

<div id="primary" class="content-area">
	<main id="main" class="site-main max" role="main">

		<div class="text-area intro">
      <h1>Testimonials</h1>
      <p>Michael is available for emergency call out Monday to Saturday from 07:00 to 22:00. In those circumstances call Michael on the mobile number below. Alternatively, if you are looking for a quote, whether it be a small or large job you can call or use any of the methods available here to contact Michael and he will respond to your enquiry at the end of the working day.</p>
    </div>

		<ul id="Testimonials" class="testimonials">


			<?php query_posts( 'post_type=testimonial'); ?>

			<?php
		    $args = array(
		      'post_type' =>
			'testimonial'

		    );
		    $testimonial = new WP_Query( $args );
		    if( $testimonial->have_posts() ) {
		      while( $testimonial->have_posts() ) {
		        $testimonial->the_post();
		        ?>
			<li class="holder">

			<div class="top">
				<div class="client-pic">
						<?php

						$image = get_field('clients_photo');

						if( !empty($image) ): ?>

						<img src="<?php echo $image['url']; ?>
						" alt="
						<?php echo $image['alt']; ?>
						" />
						<?php endif; ?>
				</div>

				<div class="client-details">
					<h4><?php the_field('clients_name'); ?></h4>
					<h5><?php the_field('clients_postcode'); ?></h5>
					<p><?php the_field('job_complete_for_client'); ?></p>
				</div>

				<div class="client-quote">
					<p><?php the_field('clients_quote'); ?></p>
				</div>
			</div>
			<div class="bottom">
				<div>	<?php

$image = get_field('picture_of_the_job_1');

if( !empty($image) ): ?>

				<img src="<?php echo $image['url']; ?>
				" alt="
				<?php echo $image['alt']; ?>
				" />
				<?php endif; ?></div>
				<div><?php

$image = get_field('picture_of_the_job_2');

if( !empty($image) ): ?>

				<img src="<?php echo $image['url']; ?>
				" alt="
				<?php echo $image['alt']; ?>
				" />
				<?php endif; ?></div>
				<div><?php

$image = get_field('picture_of_the_job_3');

if( !empty($image) ): ?>

				<img src="<?php echo $image['url']; ?>
				" alt="
				<?php echo $image['alt']; ?>
				" />
				<?php endif; ?>
</div>
				<div><?php

$image = get_field('picture_of_the_job_4');

if( !empty($image) ): ?>

				<img src="<?php echo $image['url']; ?>
				" alt="
				<?php echo $image['alt']; ?>
				" />
				<?php endif; ?></div>
			</div>








				</li>
			<!-- .holder -->

			<?php
		      }
		    }
		    else { echo 'Oh no Testimonials yet!'; }
		 ?></ul>

	</main>
	<!-- #main -->
</div>
<!-- #primary -->

<?php get_footer(); ?>
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

		        <ul id="emailItems" class="email-design">
<?php query_posts( 'post_type=testimonial'); ?>


		<?php
		    $args = array(
		      'post_type' => 'testimonial'

		    );
		    $testimonial = new WP_Query( $args );
		    if( $testimonial->have_posts() ) {
		      while( $testimonial->have_posts() ) {
		        $testimonial->the_post();
		        ?>


		          <li class="holder">
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

		          </li> <!-- .holder -->

		        <?php
		      }
		    }
		    else { echo 'Oh no Email designs!'; }
		 ?>
		 </ul>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>

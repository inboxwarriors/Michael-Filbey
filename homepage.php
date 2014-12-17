<?php
/**
* Template name: Home

 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package Michaelfilbey
 */

get_header(); ?>

  <div id="primary" class="content-area">
    <main id="main" class="site-main max" role="main">
      <div class="mainhome hero">
        <div class="module-right">
          <h2>Property Maintenance</h2>
          <p>Whether you are a landlord or a home owner your property is one of your greatest assets, one you want to look after and care for. Here at Michael Filbey property maintenance we bring our skill, care and attention to detail to your property upkeep requirements. Making sure we treat your home and the people in it with the respect you would expect from a professional maintenance company.</p>
        </div>
      </div>

      <hr>

      <div class="text-area-two">
        <div>
          <h3>
            Pricing and clients
          </h3>
          <p>As a small family run business Michael Filbey Property Maintenance doesn't carry the high overheads of some of the larger maintenance firms, this enables us to charge a lower than normal hourly rate with a small call out charge for emergency jobs.</p>
        </div>
        <div>
          <p>Michael Filbey Property Maintenance prides itself on excellent customer service and it is this level of service and trust that has kept long standing clients coming back to Michael year after year. Many clients have used Michael from their first homes through to their family and holiday homes. Some of his clients have built up extensive property portfolios always turning to Michael Filbey Property Maintenance for their upkeep.</p>
        </div>
      </div>


      <div class="services box">
        <h3>Services</h3>
        <ul class="service-list">
          <li>
            <img src="<?php bloginfo('template_directory'); ?>/img/plumbing.jpg" alt="Plumbing">
            <h5>Plumbing</h5>
            <p>Whether you have issues with leaking pipes, cold radiators, toilets, showers, sanitary ware  or limescale Michael Filbey Property maintenance has the skills and the know how to help.</p>
          </li>
          <li>
            <img src="<?php bloginfo('template_directory'); ?>/img/carpentry.jpg" alt="Carpentry">
            <h5>Carpentry</h5>
            <p>All types of internal and external woodwork undertaken from building your shed, to installing your new wardrobes, from flooring to doors we have the experience to fix the old or to fit new.</p>
          </li>
          <li>
            <img src="<?php bloginfo('template_directory'); ?>/img/painting.jpg" alt="Painting and decorating">
            <h5>Painting and decorating</h5>
            <p>Anyone can paint a wall right or hang some paper? while that is true the real skill in a professional job lies in the preparation and the finish. We take the time to prepare your surfaces properly and the time to finish them to a very high standard.</p>
          </li>
          <li>
            <img src="<?php bloginfo('template_directory'); ?>/img/electrics.jpg" alt="Electrics">
            <h5>Electrics</h5>
            <p>Whether you need a socket changed or new lighting throughout as soon as the word electrics is mentioned it becomes quite daunting for most people. Here at Michael Filbey Property Services we deal with these issues everyday with care and precision.</p>
          </li>
          <li>
            <img src="<?php bloginfo('template_directory'); ?>/img/tiling.jpg" alt="Tiling and water seals">
            <h5>Tiling and water seals</h5>
            <p>Tiling finishes off a kitchen or bathroom and really adds the wow factor but cracked tiles or leaky water seals can have a really detrimental effect not just on the look but also by rotting the woodwork beneath them causing long term damage. We can replace and repair tiles and seals quickly and efficiently.</p>
          </li>
          <li>
            <img src="<?php bloginfo('template_directory'); ?>/img/plumbing.jpg" alt="Bathroom">
            <h5>Bathroom</h5>
            <p>If you want to replace your current bathroom or simply change one of the components then we can help with the planning, design and installation. We will undertake the whole job for you from removal of the existing equipment to the installation and making good of the new.</p>
          </li>
          <li>
            <img src="<?php bloginfo('template_directory'); ?>/img/kitchens.jpg" alt="Kitchen">
            <h5>Kitchen</h5>
            <p>The kitchen is the heart of many homes and whether you are undertaking a complete refit or just want to change the doors to freshen up we can help. Our independent advice on kitchen suppliers could save you thousands depending on your requirements.</p>
          </li>
          <li>
            <img src="<?php bloginfo('template_directory'); ?>/img/plumbing.jpg" alt="Flat pack furniture">
            <h5>Flat pack furniture </h5>
            <p>Getting angry at IKEA because there are too many screws, not enough dowels and those drawers don't line up with the runners could be a thing of the past. Prefer  to have a weekend than spend it with those easy to read instructions then get in touch and let us take the hassle away.</p>
          </li>
        </ul>
      </div>

      <div class="home-recommendation">
        <h3>Latest Recommendationation</h3>
        <div class="recommendation">
          <div class="profile">
            Sam Cooper
            Uxbridge123

          </div>
          <div class="job-detail">
            New Bathroom installed
            22 Aug 2014
          </div>
          <blockquote>
            <p>Integer quis tempor sem. Donec erat urna, venenatis vitae sem vel, hendrerit fermentum turpis. Phasellus elementum molestie quam.</p>
          </blockquote>
        </div>
      </div>

    </main><!-- #main -->
  </div><!-- #primary -->

<?php get_footer(); ?>

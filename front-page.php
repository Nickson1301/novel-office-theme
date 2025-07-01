<?php get_header(); ?>

<section class="hero-banner">
  <div class="hero-content">
    <h1><span>Offices</span><br>with<br><span>Novel</span></h1>
    <p class="scroll-hint">Scroll to know more</p>
  </div>

  <div class="feature-card top-left">
    <h3>Hassle-Free & Fastest!</h3>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
  </div>
  <div class="feature-card top-right">
    <h3>Customizable Layouts</h3>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
  </div>
  <div class="feature-card bottom-left">
    <h3>Fully Furnished</h3>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
  </div>
  <div class="feature-card bottom-right">
    <h3>Managed 24x7</h3>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
  </div>
</section>

<section class="about"  id="about">
  <h2>About Us</h2>
  <p>We provide modern office solutions tailored to your business needs, with customizable layouts and 24/7 support.</p>
</section>

<section class="services" id="services">
  <h2>Our Services</h2>
  <div class="services-wrapper">
    <div class="service-card">
      <h3>Fully Furnished Offices</h3>
      <p>Ready-to-move-in spaces with modern furniture and infrastructure.</p>
    </div>
    <div class="service-card">
      <h3>Meeting Rooms</h3>
      <p>Private meeting spaces with high-speed internet and AV setup.</p>
    </div>
    <div class="service-card">
      <h3>Flexible Rental Plans</h3>
      <p>Choose hourly, daily, or monthly rentals to suit your business.</p>
    </div>
  </div>
</section>

<section class="testimonials" id="testimonial">
  <h2>What Our Clients Say</h2>
  <div class="testimonial-wrapper">
    <?php
      $args = array(
        'post_type' => 'testimonial',
        'posts_per_page' => 3
      );
      $testimonial_query = new WP_Query($args);
      if ($testimonial_query->have_posts()) :
        while ($testimonial_query->have_posts()) : $testimonial_query->the_post(); ?>
          <div class="testimonial-card">
            <?php if (has_post_thumbnail()) : ?>
              <div class="testimonial-img">
                <?php the_post_thumbnail('thumbnail'); ?>
              </div>
            <?php endif; ?>
            <div class="testimonial-content">
              <p><?php the_content(); ?></p>
              <strong><?php the_title(); ?></strong>
            </div>
          </div>
        <?php endwhile;
        wp_reset_postdata();
      else : ?>
        <p>No testimonials available.</p>
      <?php endif; ?>
  </div>
</section>

<section class="cta" id="contact">
  <h2>Ready to Book Your Office?</h2>
  <a href="#contact" class="btn-primary">Contact Us</a>
</section>

<?php get_footer(); ?>

 HEAD


<?php get_header(); ?>


<!-- Hero Section -->
<section class="hero">
  <div class="hero-content">
    <h1>Modern Office Spaces</h1>
    <p>Discover premium office spaces tailored to your business needs.</p>
    <a href="#contact" class="btn-primary">Get Started</a>
  </div>
</section>

<!-- About Section -->
<section class="about">
    <h2>About Us</h2>
    <p>This section describes who we are, based on the Figma layout.</p>
</section>

<!-- Testimonials Section -->
<section class="testimonials">
    <h2>What People Say</h2>
    <div class="testimonial-item">
        <p>"This is a great product!"</p>
        <strong>- Customer Name</strong>
    </div>
</section>



<section class="testimonials">
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
        <p>No testimonials found.</p>
      <?php endif; ?>
  </div>
</section>



<?php get_header(); ?>


<!-- Hero Section -->
<section class="hero">
  <div class="hero-content">
    <h1>Modern Office Spaces</h1>
    <p>Discover premium office spaces tailored to your business needs.</p>
    <a href="#contact" class="btn-primary">Get Started</a>
  </div>
</section>

<!-- About Section -->
<section class="about">
    <h2>About Us</h2>
    <p>This section describes who we are, based on the Figma layout.</p>
</section>

<!-- Testimonials Section -->
<section class="testimonials">
    <h2>What People Say</h2>
    <div class="testimonial-item">
        <p>"This is a great product!"</p>
        <strong>- Customer Name</strong>
    </div>
</section>



<section class="testimonials">
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
        <p>No testimonials found.</p>
      <?php endif; ?>
  </div>
</section>

 bbb609d61f4e9286b601dd2813fe8db47875214d
<?php get_footer(); ?>
<footer class="site-footer">
  <div class="footer-container">

    <div class="footer-column">
      <h3>Novel Office</h3>
      <p>Customizable offices • Flexible terms</p>
      <a href="https://noveloffice.in/" style="color:red">Look into website for more</a>
    </div>

    <div class="footer-column">
      <h4>Quick Links</h4>
      <ul>
        <li><a href="#about">About</a></li>
        <li><a href="#services">Services</a></li>
        <li><a href="#testimonials">Testimonials</a></li>
        <li><a href="#contact">Contact</a></li>
      </ul>
    </div>

    <div class="footer-column">
      <h4>Contact</h4>
      <p>Email: info@noveloffice.com</p>
      <p>Phone: +91 9939399292</p>
    </div>

  </div>

  <div class="footer-bottom">
    <p>&copy; <?php echo date('Y'); ?> Novel Office. All rights reserved.</p>
  </div>

  <?php wp_footer(); ?>
</footer>
<script>
  const toggle = document.getElementById('menu-toggle');
  const nav = document.getElementById('main-nav');

  toggle.addEventListener('click', () => {
    nav.querySelector('.nav-links').classList.toggle('active');
  });
</script>

</body>
</html>

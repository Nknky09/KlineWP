<footer class="section-background">
        <div class="container section-content footer-container">
          <div class="footer-left">
            <p>© Copyright K Line Logistics 2025</p>
          </div>
          <div class="footer-right">
            <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/logo/facebook-logo.svg"/></a>
            <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/logo/linkedin-logo.svg"/></a>
          </div>
        </div>
      </footer>
    </main>

    <script src="<?php echo get_template_directory_uri(); ?>/map.js" ></script>
    
    <script
      async
      defer
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDlHVc9vVpvV8WZ74gnnbH6zg7htg9uFe4&callback=initMap"
    ></script>

    <script src="<?php echo get_template_directory_uri(); ?>/app.js"></script>

    <?php wp_footer(); ?>
  </body>
</html>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1" >
    <style><?php include get_template_directory() . '/build/critical.css'; ?></style>
    <link rel="preload" href="<?php echo get_template_directory_uri(); ?>/build/index.css" as="style" onload="this.onload=null; this.rel='stylesheet'">
    <noscript><link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/build/index.css"></noscript>
    <?php wp_head(); ?>

    <?php if (is_front_page()) : ?>
      <title>International Freight Forwarding & Supply Chain Solutions | K Line Logistics USA</title>
      <meta name="description" content="K Line Logistics offers reliable freight forwarding, warehousing, customs brokerage, with a large international network from the U.S., Asia, and worldwide. Air, ocean, and land transport tailored to your business industry.">
      <meta property="og:title" content="K Line Logistics USA - Trusted Freight Forwarding & Logistics Company">
      <meta property="og:description" content="Professional global logistics solutions including air, sea, and warehousing services. Serving the U.S., Asia, and beyond.">
      <meta property="og:image" content="<?php echo site_url(); ?>/wp-content/uploads/2025/05/homebg-1024.jpg">
      <meta property="og:url" content="<?php echo site_url(); ?>/">
      <meta property="og:type" content="website">
    <?php endif; ?>

    <link 
      rel="preload" as="image"
      href="<?php echo site_url(); ?>/wp-content/uploads/2025/05/home-768.webp"
      type="image/webp" media="(max-width: 768px)"
      imagesrcset="
        <?php echo site_url(); ?>/wp-content/uploads/2025/05/home-768.webp 768w,
        <?php echo site_url(); ?>/wp-content/uploads/2025/05/home-1024.webp 1024w,
        <?php echo site_url(); ?>/wp-content/uploads/2025/05/home-1920.webp 1920w
      "
      imagesizes="(max-width:768px) 100vw, (max-width:1024px) 100vw, 100vw"
    />

  </head>
  <body>
    <main>
      <header class="main-header">
        <div class="header-position">
          <div class="logo">
            <a href="<?php echo site_url() ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" aria-label="Navigate to the Home page" alt="K Line Logo"/></a>
            <!-- Hamburger Button (visible on mobile only) -->
          <div class="mobile-menu-toggle" id="mobileToggle">
            <span class="bar"></span>
            <span class="bar"></span>
            <span class="bar"></span>
          </div>
          </div>

          <div class="main-nav-wrapper" id="mainNavWrapper">
          <nav class="main-nav">
            <ul>

              <li><a>Company</a>
                <ul class="drop-down">
                  <li><a href="<?php echo site_url('/about/about-us') ?>">About Us</a></li>
                  <li><a href="<?php echo site_url('/about/our-history') ?>">Our History</a></li>                  
                </ul>
              </li>
              <li>
                <a>Services</a>
                <ul class="drop-down">
                  <li><a href="<?php echo site_url('/services/air-export') ?>">Air Cargo</a></li>
                  <li><a href="<?php echo site_url('/services/ocean-export') ?>">Ocean Cargo</a></li>
                  <li><a href="<?php echo site_url('/services/warehouse') ?>">Warehouse</a></li>
                  <li><a href="<?php echo site_url('/services/customs') ?>">Customs Brokerage</a></li>
                  <li><a href="<?php echo site_url('/services/logistics') ?>">Cross Border</a>
                  </li>
                </ul>
              </li>
              
              <li><a>Industries</a>
                <ul class="drop-down">
                  <li><a href="<?php echo site_url('/industries/semiconductor') ?>">Semi Conductor</a></li>
                  <li><a href="<?php echo site_url('/industries/aerospace') ?>">Aerospace</a></li>
                  <li><a href="<?php echo site_url('/industries/automotive') ?>">Automotive</a></li>
                  <li><a href="<?php echo site_url('/industries/railway') ?>">Railway</a></li>
                  <li><a href="<?php echo site_url('/industries/perishables') ?>">Perishables</a></li>
                  <li><a href="https://www.klinelogistics.com/en/service/coldchain/">Cold Chain</a></li>
                </ul>
              </li>

              <li>
                <a href="<?php echo site_url('locations') ?>"
                  >US Locations</a
                >
              </li>

              <li><a href="https://www.klinelogistics.com/en/globalnetwork/">Global Network</a>
                <ul class="drop-down">
                  <li><a href="https://www.klinelogistics.com/en/globalnetwork/japan/">Japan</a></li>
                  <li><a href="https://www.klinelogistics.com/en/globalnetwork/eastasia/">East Asia</a></li>
                  <li><a href="https://www.klinelogistics.com/en/globalnetwork/southeastasia/">Southeast Asia</a></li>
                  <li><a href="https://www.klinelogistics.com/en/globalnetwork/oceania/">Oceania</a></li>
                  <li><a href="https://www.klinelogistics.com/en/globalnetwork/americas/">Americas</a></li>
                  <li><a href="https://www.klinelogistics.com/en/globalnetwork/europe/">Europe</a></li>
                </ul>
              </li>

              <li>
                <a href="<?php echo site_url('/news/press') ?>">Press Release</a>
        
              </li>

              <li>
                <a href="<?php echo site_url('documents') ?>"
                  >Documents</a
                >
              </li>
                
               </li> 
              <li><a href="<?php echo site_url('contact') ?>">Contact</a></li>
            </ul>
          </nav>
          </div>
       
        </div>
        
      </header>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1" >
    <?php wp_head(); ?>
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>

    <title>"K" LINE LOGISTICS USA</title>
  </head>

  <body>
    <main>
      <header class="main-header">
        
        <div class="header-position">
          <div class="logo">
            <a href="<?php echo site_url() ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" /></a>
          </div>

          <nav class="main-nav">
            <ul>
              
              <li><a>Company</a>
                <ul class="drop-down">
                  <li><a href="<?php echo site_url('/about/about-us') ?>">About Us</a></li>
                  <li><a href="<?php echo site_url('/about/our-history') ?>">Our History</a></li>
                  <li><a href="<?php echo site_url('/about/csr') ?>">CSR</a></li>
                </ul>
              </li>
              <li>
                <a>Services</a>
                <ul class="drop-down">
                  <li><a href="<?php echo site_url('/services/air-export') ?>">Air Cargo</a></li>
                  <li><a href="<?php echo site_url('/services/ocean-export') ?>">Ocean Cargo</a></li>
                  <li><a href="<?php echo site_url('/services/warehouse') ?>">Warehouse</a></li>
                  <li><a href="<?php echo site_url('/services/customs') ?>">Customs Clearance</a></li>
                  <li><a href="<?php echo site_url('/services/logistics') ?>">Logistics</a>
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
                  <li><a href="https://www.klinelogistics.com/en/service/coldchain/">Other</a></li>
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

              <li><a>News</a>
                <ul class="drop-down">
                  <li><a >Press Release</a></li>
                  <li><a href="<?php echo site_url('news') ?>">Company News</a></li>
                </ul>
               </li> 
              <li><a href="<?php echo site_url('contact') ?>">Contact</a></li>
            </ul>
          </nav>
       
       
        </div>
        
      </header>
<?php get_header(); 
pageBanner();?>


<div class="">
        <div class="container-about">
            <div class="card-about">
                <div class="image-container-about">
                    <a href="<?php echo site_url('/about/about-us') ?>" ><img class="column-img-about" src="<?php echo get_template_directory_uri(); ?>/img/pexels-thirdman-7652039.jpg"/>
                        <span class="column-title-about"><p>About The Company</p></span></a> 
                </div>
                <div class="column-bottom-about">
                    <a href="<?php echo site_url('/about/about-us') ?>" class="column-arrow-icon-about">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/Slide Side.png" />
                        <p>About The Company</p>
                    </a>
                </div>
            </div>

            <div class="card-about">
                <div class="image-container-about">
                    <a href="<?php echo site_url('/about/our-history') ?>"><img class="column-img-about" src="<?php echo get_template_directory_uri(); ?>/img/nav_company.jpg" />
                        <span class="column-title-about"><p>Our History</p></span></a>
                </div>
                <div class="column-bottom-about">
                    <a href="<?php echo site_url('/about/our-hisotry') ?>" class="column-arrow-icon-about">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/Slide Side.png" />
                        <p>Our History</p>
                    </a>
                </div>
            </div>

            <div class="card-about">
                <div class="image-container-about">
                    <a href="<?php echo site_url('/about/csr') ?> "><img class="column-img-about" src="<?php echo get_template_directory_uri(); ?>/img/shane-rounce-DNkoNXQti3c-unsplash.jpg"/>
                        <span class="column-title-about"><p>CSR</p></span></a>
                </div>
                <div class="column-bottom-about">
                    <a href="<?php echo site_url('/about/csr') ?> " class="column-arrow-icon-about">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/Slide Side.png" />
                        <p>CSR</p>
                    </a>
                </div>
            </div>
        </div>
    </div>

    
<?php get_footer(); ?>
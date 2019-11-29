<?php get_header(); ?>

    
  <!-- Carousel -->
  <section id="carousel-container" class="contianer p-2 bg-dark">
    <div id="mainCarousel" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#mainCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#mainCarousel" data-slide-to="1"></li>
        <li data-target="#mainCarousel" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner">
        <div class="carousel-item active mvh-85">
          <!-- crop images to 1300x600 -->
          <img src="<?php echo get_theme_mod('carousel1_image', get_bloginfo('template_url').'/media/hstflighdeckwashdown-cropped1.jpg'); ?>" class="d-block w-100 img-fluid op-dark " alt="">
          <div class="carousel-caption d-none d-md-block">
            <h5><?php echo get_theme_mod('carousel1_heading', 'Join Us!'); ?></h5>
            <p><?php echo get_theme_mod('carousel1_text', 'No one does more for veterans.'); ?></p>
            <a href="<?php echo get_theme_mod('carousel1_btn_url', 'https://vfw.org/join'); ?>" type="button" class="btn btn-light" ><?php echo get_theme_mod('carousel1_btn_text', 'Join'); ?></a>
          </div>
        </div>
        <div class="carousel-item mvh-85">
          <img src="<?php echo get_theme_mod('carousel2_image', get_bloginfo('template_directory').'/media/us-army-aricraft-crop1.jpg'); ?>" class="d-block w-100 img-fluid op-dark " alt="">
          <div class="carousel-caption d-none d-md-block">
            <h5><?php echo get_theme_mod('carousel2_heading', 'Help us keep the doors open!'); ?></h5>
            <p><?php echo get_theme_mod('carousel2_text', 'We need help to re-pave our parking lot.'); ?></p>
            <a href="<?php echo get_theme_mod('carousel2_btn_url', 'https://vfw.org/'); ?>" type="button" class="btn btn-light"><?php echo get_theme_mod('carousel2_btn_text', 'Donate'); ?></a>
          </div>
        </div>
        <div class="carousel-item mvh-85">
          <img src="<?php echo get_theme_mod('carousel3_image', get_bloginfo('template_directory').'/media/USFlag-cropped1.jpeg'); ?>" class="d-block w-100 img-fluid op-dark " alt="">
          <div class="carousel-caption d-none d-md-block">
            <h5><?php echo get_theme_mod('carousel3_heading', 'Contact Us'); ?></h5>
            <p><?php echo get_theme_mod('carousel3_text', 'Need help with, or just want more information? Click below.'); ?></p>
            <a href="<?php echo get_theme_mod('carousel3_btn_url', 'https://vfwpost1062.org/contact'); ?>" type="button" class="btn btn-light"><?php echo get_theme_mod('carousel3_btn_text', 'Contact Us'); ?></a>
          </div>
        </div>
      </div>
      <a class="carousel-control-prev" href="#mainCarousel" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#mainCarousel" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
  </section>

  <main class="bg-dark pt-2">
    <!-- cards -->
    <section class="container bg-dark" id="three-card-section">
      <div class="row bg-dark">
        <!-- card 1 -->
        <div class="col-lg-4 card">
          <img class="card-img-top bg-secondary placeholder-div mt-1 img-fit-cover" src="<?php echo get_theme_mod('card1_image', get_bloginfo('template_directory').'/media/postplaque-cropped.jpg'); ?>" alt="">
          <div class="card-body">
            <h5><?php echo get_theme_mod('card1_heading', 'Card One'); ?></h5>
            <p><?php echo get_theme_mod('card1_text', 'Lorem ipsum dolor sit amet consectetur adipisicing elit.'); ?></p>
            <a href="<?php echo get_theme_mod('card1_btn_url', 'https://vfwpost1062.org/contact'); ?>" class="btn btn-secondary"><?php echo get_theme_mod('card1_btn_text', 'CTA One'); ?></a>
          </div>
        </div>
        <!-- card 2 -->
        <div class="col-lg-4 card">
          <img class="card-img-top bg-secondary placeholder-div mt-1 img-fit-cover" src="<?php echo get_theme_mod('card2_image', get_bloginfo('template_directory').'/media/postplaque-cropped.jpg'); ?>" alt="">
          <div class="card-body">
            <h5><?php echo get_theme_mod('card2_heading', 'Card Two'); ?></h5>
            <p><?php echo get_theme_mod('card2_text', 'Lorem ipsum dolor sit amet consectetur adipisicing elit.'); ?></p>
            <a href="<?php echo get_theme_mod('card2_btn_url', 'https://vfwpost1062.org/contact'); ?>" class="btn btn-secondary"><?php echo get_theme_mod('card2_btn_text', 'CTA Two'); ?></a>
          </div>
        </div>
        <!-- card 3 -->
        <div class="col-lg-4 card">
          <img class="card-img-top bg-secondary placeholder-div mt-1 img-fit-cover" src="<?php echo get_theme_mod('card3_image', get_bloginfo('template_directory').'/media/ht3vice.JPG'); ?>" alt="">
          <div class="card-body">
            <h5><?php echo get_theme_mod('card3_heading', 'Card Three'); ?></h5>
            <p><?php echo get_theme_mod('card3_text', 'Lorem ipsum dolor sit amet consectetur adipisicing elit.'); ?></p>
            <a href="<?php echo get_theme_mod('card3_btn_url', 'https://vfwpost1062.org/contact'); ?>" class="btn btn-secondary"><?php echo get_theme_mod('card3_btn_text', 'CTA Three'); ?></a>
          </div>
        </div>       
      </div>
    </section>

    <!-- marketing -->
    <section class="container" id="featurette-section">
      <hr class="divider my-4">
      <!-- feat1 -->
      <div class="row d-flex align-items-center bg-light">
        <div class="col-md-7">
          <h2 class="display-4">
            <?php echo get_theme_mod('feat1_heading', 'First Featurette Heading'); ?> <br>
            <span class="text-muted"><?php echo get_theme_mod('feat1_subheading', 'Mind blowing.'); ?></span>
          </h2>
          <p class="lead">
            <?php echo get_theme_mod('feat1_text', 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dolores provident laborum fugit molestiae quas labore repellendus ratione eligendi nam. Debitis.'); ?>
          </p>
        </div>
        <div class="col-md-5">
          <img class="img-fluid my-1 img-fit-cover"  src="<?php echo get_theme_mod('feat1_image', get_bloginfo('template_directory').'/media/tablesetting.jpeg'); ?>">
        </div>
      </div>

      <hr class="divider my-4">

      <!-- feat2 -->
      <div class="row d-flex align-items-center bg-light">
          <div class="col-md-5">
              <img class="img-fluid my-1 img-fit-cover" src="<?php echo get_theme_mod('feat2_image', get_bloginfo('template_directory').'/media/tablesetting.jpeg'); ?>">
          </div>
          <div class="col-md-7">
            <h2 class="display-4">
              <?php echo get_theme_mod('feat2_heading', 'Second Featurette Heading'); ?> <br>
              <span class="text-muted"><?php echo get_theme_mod('feat2_subheading', 'More mind blowing.'); ?></span>
            </h2>
            <p class="lead">
              <?php echo get_theme_mod('feat2_text', 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dolores provident laborum fugit molestiae quas labore repellendus ratione eligendi nam. Debitis.'); ?>
            </p>
          </div>
        </div>

        <hr class="divider my-4">

        <!-- feat3 -->
        <div class="row d-flex align-items-center bg-light">
          <div class="col-md-7">
            <h2 class="display-4">
              <?php echo get_theme_mod('feat3_heading', 'Thrid Featurette Heading'); ?> <br>
              <span class="text-muted"><?php echo get_theme_mod('feat3_subheading', 'Incredibly mind blowing.'); ?></span>
            </h2>
            <p class="lead">
              <?php echo get_theme_mod('feat3_text', 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dolores provident laborum fugit molestiae quas labore repellendus ratione eligendi nam. Debitis.'); ?>
            </p>
          </div>
          <div class="col-md-5">
            <img class="img-fluid my-1 img-fit-cover" src="<?php echo get_theme_mod('feat3_image', get_bloginfo('template_directory').'/media/tablesetting.jpeg'); ?>">
          </div>
        </div>

        <hr class="divider my-4">

    </section>

    <section class="container" id="contact-form-section">
      <form action="">
        
      </form>
    </section>

    <!-- officer cards -->
    <section class="container" id="officer-cards-section">

      <h1 class="text-center text-light">Post Officers</h1>
      <p class="text-center text-light lead"><?php echo Date('Y'); ?> - <?php echo Date('Y')+1; ?></p>

      <div class="row justify-content-center">
        <!-- card cdr -->
        <div class="card mb-3 col-lg-4">
          <div class="card-header">Commander</div>
          <div class="card-body"><?php echo get_theme_mod('card_cdr', 'Zeus Almighty'); ?></div>
        </div>
      </div>

      <div class="row">
        <!-- card srv -->
        <div class="card mb-3 col-lg-4">
          <div class="card-header">Sr. Vice Commander</div>
          <div class="card-body"><?php echo get_theme_mod('card_srv', 'Poseidon Earth-Shaker'); ?></div>
        </div>
        <div class="card mb-3 col-lg-4">
          <!-- card jrv -->
          <div class="card-header">Jr. Vice Commander</div>
          <div class="card-body"><?php echo get_theme_mod('card_jrv', 'Hades Plouton'); ?></div>
        </div>
        <div class="card mb-3 col-lg-4">
          <!-- card qm -->
          <div class="card-header">Quartermaster</div>
          <div class="card-body"><?php echo get_theme_mod('card_qm', 'Omar Bradley'); ?></div>
        </div>
      </div>

      <div class="row">
        <!-- card ch -->
        <div class="card mb-3 col-lg-4">
          <div class="card-header">Chaplain</div>
          <div class="card-body"><?php echo get_theme_mod('card_ch', 'John Paul II'); ?></div>
        </div>
        <!-- card ja -->
        <div class="card mb-3 col-lg-4">
          <div class="card-header">JUDGE ADVOCATE/ADJUTANT</div>
          <div class="card-body"><?php echo get_theme_mod('card_ja', 'John Jay'); ?></div>
        </div>
        <!-- card sg -->
        <div class="card mb-3 col-lg-4">
          <div class="card-header">Surgeon</div>
          <div class="card-body"><?php echo get_theme_mod('card_sg', 'Christiaan Barnard'); ?></div>
        </div>
      </div>

        <div class="row">
          <!-- card t1 -->
          <div class="card mb-3 col-lg-4">
            <div class="card-header">1 Year Trustee</div>
            <div class="card-body"><?php echo get_theme_mod('card_t1', 'John Rockefeller'); ?></div>
          </div>
          <!-- card t2 -->
          <div class="card mb-3 col-lg-4">
            <div class="card-header">2 Year Trustee</div>
            <div class="card-body"><?php echo get_theme_mod('card_t2', 'Andrew Carnegie'); ?></div>
          </div>
          <!-- card t3 -->
          <div class="card mb-3 col-lg-4">
            <div class="card-header">3 Year Trustee</div>
            <div class="card-body"><?php echo get_theme_mod('card_t3', 'Cornelius Vanderbilt'); ?></div>
          </div>
        </div>

    </section>

    
  </main>

    <?php get_footer(); ?>
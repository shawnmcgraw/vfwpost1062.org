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
        <div class="carousel-item active">
          <!-- crop images to 1300x600 -->
          <img src="<?php echo get_theme_file_uri('media/hstflighdeckwashdown-cropped1.jpg'); ?>" class="d-block w-100 img-fluid img-fit-cover op-dark " alt="">
          <div class="carousel-caption d-none d-md-block">
            <h5>Join Us!</h5>
            <p>No one does more for veterans.</p>
            <button type="button" class="btn btn-secondary">Join</button>
          </div>
        </div>
        <div class="carousel-item">
          <img src="<?php echo get_theme_file_uri('media/us-army-aricraft-crop1.jpg') ?>" class="d-block w-100 img-fluid img-fit-cover op-dark " alt="">
          <div class="carousel-caption d-none d-md-block">
            <h5>Help Us Keep the Doors Open</h5>
            <p>We are currently need to re-pave our parking lot, and could use your help.</p>
            <button type="button" class="btn btn-danger">Donate</button>
          </div>
        </div>
        <div class="carousel-item">
          <img src="<?php echo get_theme_file_uri('media/USFlag-cropped1.jpeg') ?>" class="d-block w-100 img-fluid img-fit-cover op-dark " alt="">
          <div class="carousel-caption d-none d-md-block">
            <h5>Contact Us</h5>
            <p>Need help with, or just want more information? Click below.</p>
            <button type="button" class="btn btn-secondary">Contact Us</button>
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
        <div class="col-lg-4 card">
          <!-- <img src="" alt="" class="card-img-top"> -->
          <div class="card-img-top bg-secondary placeholder-div mt-1"></div> <!-- replace div with img -->
          <div class="card-body">
            <h5>Card 1</h5>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
            <a href="#" class="btn btn-secondary">CTA 1</a>
          </div>
        </div>
        <div class="col-lg-4 card">
          <!-- <img src="" alt="" class="card-img-top"> -->
          <div class="card-img-top bg-secondary placeholder-div mt-1"></div>
          <div class="card-body">
            <h5>Card 2</h5>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
            <a href="#" class="btn btn-secondary">CTA 2</a>
          </div>
        </div>
        <div class="col-lg-4 card">
          <!-- <img src="" alt="" class="card-img-top"> -->
          <div class="card-img-top bg-secondary placeholder-div mt-1"></div>
          <div class="card-body">
            <h5>Card 3</h5>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
            <a href="#" class="btn btn-secondary">CTA 3</a>
          </div>
        </div>
      </div>
    </section>

    <!-- marketing -->
    <section class="container" id="featurette-section">
      <hr class="divider my-4">
      
      <div class="row d-flex align-items-center bg-light">
        <div class="col-md-7">
          <h2 class="display-4">
            First Featurette Heading
            <span class="text-muted">Mind blowing.</span>
          </h2>
          <p class="lead">
            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dolores provident laborum fugit molestiae quas labore repellendus ratione eligendi nam. Debitis.          </p>
        </div>
        <div class="col-md-5">
          <!-- replace div below with image - square 500x500 -->
          <div class="bg-secondary my-1" style="height:500px;width:auto;"></div>
        </div>
      </div>

      <hr class="divider my-4">

      <div class="row d-flex align-items-center bg-light">
          <div class="col-md-5">
              <!-- replace div below with image - square 500x500 -->
              <div class="bg-secondary my-1" style="height:500px;width:auto;"></div>
          </div>
          <div class="col-md-7">
            <h2 class="display-4">
              Second Featurette Heading
              <span class="text-muted"> More Mind blowing.</span>
            </h2>
            <p class="lead">
              Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dolores provident laborum fugit molestiae quas labore repellendus ratione eligendi nam. Debitis.          </p>
          </div>
        </div>

        <hr class="divider my-4">

        <div class="row d-flex align-items-center bg-light">
          <div class="col-md-7">
            <h2 class="display-4">
              Third Featurette Heading
              <span class="text-muted">Incredibly Mind blowing.</span>
            </h2>
            <p class="lead">
              Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dolores provident laborum fugit molestiae quas labore repellendus ratione eligendi nam. Debitis.          </p>
          </div>
          <div class="col-md-5">
            <!-- replace div below with image - square 500x500 -->
            <div class="bg-secondary my-1" style="height:500px;width:auto;"></div>
          </div>
        </div>

        <hr class="divider my-4">

    </section>

    <section class="container" id="officer-cards-section">
      <h1 class="text-center text-light">Post Officers</h1>
      <p class="text-center text-light lead">2019 - 2020</p>

      <div class="row justify-content-center">
        <div class="card mb-3 col-lg-4">
          <div class="card-header">Commander</div>
          <div class="card-body">Bernie Gobroggie</div>
        </div>
      </div>

      <div class="row">
        <div class="card mb-3 col-lg-4">
          <div class="card-header">Sr. Vice Commander</div>
          <div class="card-body">Jeremy Husted</div>
        </div>
        <div class="card mb-3 col-lg-4">
          <div class="card-header">Jr. Vice Commander</div>
          <div class="card-body">Larry Larson</div>
        </div>
        <div class="card mb-3 col-lg-4">
          <div class="card-header">Quartermaster</div>
          <div class="card-body">Charlie Stanfield</div>
        </div>
      </div>

      <div class="row">
        <div class="card mb-3 col-lg-4">
          <div class="card-header">Chaplain</div>
          <div class="card-body">Robert McKnight</div>
        </div>
        <div class="card mb-3 col-lg-4">
          <div class="card-header">JUDGE ADVOCATE/ADJUTANT</div>
          <div class="card-body">Leo Labbe</div>
        </div>
        <div class="card mb-3 col-lg-4">
          <div class="card-header">Surgeon</div>
          <div class="card-body">Shawn McGraw</div>
        </div>
      </div>

        <div class="row">
          <div class="card mb-3 col-lg-4">
            <div class="card-header">1 Year Trustee</div>
            <div class="card-body">Aurea Brunson</div>
          </div>
          <div class="card mb-3 col-lg-4">
            <div class="card-header">2 Year Trustee</div>
            <div class="card-body">Allan Laite</div>
          </div>
          <div class="card mb-3 col-lg-4">
            <div class="card-header">3 Year Trustee</div>
            <div class="card-body">Dave Violette</div>
          </div>
        </div>

    </section>

    <hr class="divider my-4">

    <?php get_footer(); ?>
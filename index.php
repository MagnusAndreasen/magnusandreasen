<!DOCTYPE html>
<html lang="en">

  <head>
  <?php include 'head.php';?>  
  </head>

  <body id="page-top">

    <!-- Navigation -->
    <a class="menu-toggle rounded-0" href="#">
      <i class="fas fa-bars"></i>
    </a>
   <?php include 'menu.php';?> 

    <!-- Header -->
    <header class="masthead d-flex">
      <div class="container text-center text-white my-auto">
        <h1 class="mb-1">Welcome!</h1>
        <h3 class="mb-5">
          <em>Hi! I'm Magnus Andreasen. I'm a web developer and this is my website!</em>
        </h3>
        <a class="btn btn-dark btn-xl js-scroll-trigger rounded-0" href="#about">About Me</a>
      </div>
      <div class="overlay"></div>
    </header>

    <!-- About -->
    <section class="content-section bg-light" id="about">
      <div class="container text-center">
		<div class="row">
		  <div class="col-lg-10 mx-auto mb-5">
            <span class="service-icon rounded mx-auto">
				<img src="img/magnus.jpg" class="rounded-0 img-fluid img-circle" alt="">
            </span>
            
          </div>
		</div>
        <div class="row">
          <div class="col-lg-10 mx-auto">
            <h2>Magnus Andreasen</h2>
            <p class="lead mb-5"><strong>Short about me:</strong><br>30 years old, based in Copenhagen, Denmark. Currently studying for a degree in Multimediadesign at Copenhagen Business Academy.<br>As a Multimedia designer, I can do work such as: Web Design, Web Development, Graphic Design, Project Management and much more.<br>I am very passionate about web design and development and I always strive to make the best product possible.</p>
			<p class="lead mb-5"><strong>Check out my services below or read more about me by clicking the CV button.</strong></p>  
            <a class="btn btn-dark btn-xl js-scroll-trigger mb-2 rounded-0" href="#services">What I offer</a>
			<a class="btn btn-primary btn-xl js-scroll-trigger mb-2 rounded-0" href="files/magnus_cv.pdf" target="_blank">Download my CV!</a>
          </div>
        </div>
      </div>
    </section>

    <!-- Services -->
    <section class="content-section bg-primary text-white text-center" id="services">
      <div class="container">
        <div class="content-section-heading">
          <h3 class="text-secondary mb-0">Services</h3>
          <h2 class="mb-5">What I offer</h2>
        </div>
        <div class="row">
          <div class="col-lg-3 col-md-6 mb-5 mb-lg-0">
            <span class="service-icon rounded-circle mx-auto mb-3">
              <i class="icon-screen-smartphone"></i>
            </span>
            <h4>
              <strong>Web Design</strong>
            </h4>
            <p class="text-faded mb-0">I can make you a great design for your next web project!</p>
          </div>
          <div class="col-lg-3 col-md-6 mb-5 mb-lg-0">
            <span class="service-icon rounded-circle mx-auto mb-3">
              <i class="icon-screen-desktop"></i>
            </span>
            <h4>
              <strong>Web Development</strong>
            </h4>
            <p class="text-faded mb-0">I love making websites and apps. Let me create your next project!</p>
          </div>
          <div class="col-lg-3 col-md-6 mb-5 mb-md-0">
            <span class="service-icon rounded-circle mx-auto mb-3">
              <i class="icon-pencil"></i>
            </span>
            <h4>
              <strong>Graphic Design</strong>
            </h4>
            <p class="text-faded mb-0">I can create a wide variation of graphic designs, such as posters, menus and business cards!</p>
          </div>
          <div class="col-lg-3 col-md-6">
            <span class="service-icon rounded-circle mx-auto mb-3">
              <i class="icon-wrench"></i>
            </span>
            <h4>
              <strong>Technical Support</strong>
            </h4>
            <p class="text-faded mb-0">Need help with something technical? I'll do my best to help you!</p>
          </div>
        </div>
	    <br><a class="btn btn-dark btn-xl js-scroll-trigger rounded-0" href="contact.php">Get in touch!</a>
      </div>
    </section>

    <!-- Portfolio -->
    <section class="content-section" id="portfolio">
      <div class="container">
        <div class="content-section-heading text-center">
          <h3 class="text-secondary mb-0">Portfolio</h3>
          <h2 class="mb-5">Recent Projects</h2>
        </div>
        <div class="row">
          <div class="col-lg-6 mb-5">
            <a class="portfolio-item" href="#">
              <span class="caption">
                <span class="caption-content bg-primary">
                  <h2 class="mt-1 mx-1">Strong You</h2>
                  <p class="mb-1 mx-1">Designed and developed this website for the danish fitness and health company Strong You!</p>
                </span>
              </span>
              <img class="img-fluid" src="img/strongyou-small.png" alt="">
            </a>
          </div>
          <div class="col-lg-6 mb-5">
            <a class="portfolio-item" href="#">
              <span class="caption">
                <span class="caption-content bg-primary">
                  <h2 class="mt-1 mx-1">Hugo.fo</h2>
                  <p class="mb-1 mx-1">Designed and developed this website for Guesthouse Hugo & Café Fjørðoy in the Faroe Islands!</p>
                </span>
              </span>
              <img class="img-fluid" src="img/hugo.fo-small.png" alt="">
            </a>
          </div>
          <div class="col-lg-6 mb-2">
            <a class="portfolio-item" href="#">
              <span class="caption">
                <span class="caption-content bg-primary">
                  <h2 class="mt-1 mx-1">Cocktail Guide</h2>
                  <p class="mb-1 mx-1">Designed and development a cocktail recipe website as a school project!</p>
                </span>
              </span>
              <img class="img-fluid" src="img/cocktailguide-small.png" alt="">
            </a>
          </div>
          <div class="col-lg-6 mb-2">
            <a class="portfolio-item" href="#">
              <span class="caption">
                <span class="caption-content bg-primary">
                  <h2 class="mt-1 mx-1">Post It Board</h2>
                  <p class="mb-1 mx-1">Designed and developed a Post It Board website as a school project!</p>
                </span>
              </span>
              <img class="img-fluid" src="img/postitboard-small.png" alt="">
            </a>
          </div>
		  
        </div>
		<br>
		<div class="content-section-footer text-center mt-3">
            <h2 class="mb-4">Click the button below to see more of my projects!</h2>
            <a href="portfolio.php" class="btn btn-xl btn-dark rounded-0" target="">Portfolio</a>
          </div>
      </div>
    </section>

    <!-- Footer -->
   <?php include 'footer.php';?>

	  
    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded-0 js-scroll-trigger" href="#page-top">
      <i class="fas fa-angle-up"></i>
    </a>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for this template -->
    <script src="js/stylish-portfolio.min.js"></script>

  </body>

</html>

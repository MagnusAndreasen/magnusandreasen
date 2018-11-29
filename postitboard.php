<!DOCTYPE html>
<html lang="en">

  <head>
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Post It Board</title>
  <?php include 'head.php';?>  
  </head>

  <body id="page-top">

    <!-- Navigation -->
    <a class="menu-toggle rounded-0" href="#">
      <i class="fas fa-bars"></i>
    </a>
   <?php include 'menu.php';?> 

    <!-- Portfolio -->
	<div class="jumbotron jumbotron-fluid bg-primary">
  		<div class="container text-center text-white">
    		<h1 class="display-3">Post It Board</h1>
    		<p class="lead">All your notes in one solution.</p>
  		</div>
	</div>
    <div class="mb-5 mt-5">
      <div class="container">
		<div class="row justify-content-center mb-5">
			<img class="img-fluid mr-3" src="img/postitboard-small.png" alt="">
		</div>
		<hr>
		  <div class="mt-4">
  			<dl class="row">
				
  				<dt class="col-sm-3">About the Project</dt>
  				<dd class="col-sm-9 mb-4">This was a school project and the objective was to design and make a post it board, with database, log in function and limit the user to only be able to edit and delete ones own post its.</dd>

  				<dt class="col-sm-3">Design</dt>
  				<dd class="col-sm-9 mb-4">The design of the website is just a simple one pager with a function to make post its, a function to log in and the post it board. It is possible to choose between 4 different colours for your post it, for example, one for shopping lists, one for tasks and so on, but everything in one place, for better overview.</dd>

  				<dt class="col-sm-3">Development</dt>
  				<dd class="col-sm-9 mb-4">The website has been made with Bootstrap and PHP and also includes elements of jQuery. The database used is a MySql database.</dd>

  				<dt class="col-sm-3 text-truncate">Reflection</dt>
  				<dd class="col-sm-9">The first database project. An exciting project and gave great insights to what it is like to add a login function for example.</dd>
			</dl>
		  </div>
        </div>
		  <div class="col-lg-10 mt-5 mx-auto text-center">
            <div class="foo  foo-3"><a class="btn btn-primary btn-xl js-scroll-trigger rounded-0" href="http://zero2hero.dk/post-it" target="_blank">Online Version</a></div>
		  <div class="col-lg-10 mt-5 mx-auto text-center">
            <div class="foo  foo-3">
				<a class="btn btn-dark btn-xl js-scroll-trigger rounded-0" href="portfolio.php">Back</a>
			</div>
          </div>
		  
          </div>
        </div>
      </div>
    </div>
	  
    <!-- Footer -->
   <?php include 'footer.php';?>

  </body>

</html>

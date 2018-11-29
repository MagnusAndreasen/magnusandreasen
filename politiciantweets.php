<!DOCTYPE html>
<html lang="en">

  <head>
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Politician Tweets</title>
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
    		<h1 class="display-3">Politician Tweets</h1>
    		<p class="lead">A overview of all tweets from danish politicians.</p>
  		</div>
	</div>
    <div class="mb-5 mt-5">
      <div class="container">
		<div class="row justify-content-center mb-5">
			<img class="img-fluid mr-3" src="img/politikertweets-small.png" alt="">
		</div>
		<hr>
		  <div class="mt-4">
  			<dl class="row">
				
  				<dt class="col-sm-3">About the Project</dt>
  				<dd class="col-sm-9 mb-4">The client needed a website that showed all of the most recent tweets from danish politicians in the Parliament. The aim was to be able to follow the political debate on twitter, but with a better overview of all relevant tweets. It is possible to see single timelines, multiple tweets from several party members and also see tweets based on hashtags.</dd>

  				<dt class="col-sm-3">Design</dt>
  				<dd class="col-sm-9 mb-4">The design of the website is based on the idea that the page has to be as simple as possible. So this is a one-pager website and everything is showed on a single page. The colours are chosen to be as neutral as possible, so that the page is relevant for everyone.</dd>

  				<dt class="col-sm-3">Development</dt>
  				<dd class="col-sm-9 mb-4">The website has been made with the Twitter API. The data retrieved is a single users timeline, multiple recent tweets and hashtags. The main technology used is PHP and JavaScript, and layout is with Bootstrap. To connect and group the Twitter data, there has been made a json file which includes all of the twitter handles of the danish politicians in the Parliament. This way, it is possible to search politicians by each party.</dd>

  				<dt class="col-sm-3 text-truncate">Reflection</dt>
  				<dd class="col-sm-9">A very difficult project, as it was very difficult to connect our own data with that from Twitters API, but the end result is pleasing, although there could have been more features added, but had to be cut out, due to time pressure.</dd>
			</dl>
		  </div>
        </div>
		  <div class="col-lg-10 mt-5 mx-auto text-center">
            <div class="foo  foo-3"><a class="btn btn-primary btn-xl js-scroll-trigger rounded-0" href="http://magnusmultimedia.dk/politikertweets" target="_blank">Online Version</a></div>
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

<footer class="footer bg-dark text-center">
	<div class="container">
		<ul class="list-inline mb-5">
			<li class="list-inline-item">
				<a class="social-link rounded-circle text-white mr-3 mb-3" href="http://www.linkedin.com/in/magnus-andreasen-multimediadesign" target="_blank">
              <i class="icon-social-linkedin"></i>
            </a>
			</li>
			<li class="list-inline-item">
				<a class="social-link rounded-circle text-white mr-3 mb-3" href="https://github.com/MagnusAndreasen" target="_blank">
              <i class="icon-social-github"></i>
            </a>
			</li>
			<li class="list-inline-item">
				<a class="social-link rounded-circle text-white mr-3 mb-3" href="https://twitter.com/manitweb" target="_blank">
              <i class="icon-social-twitter"></i>
            </a>
			</li>
			<li class="list-inline-item">
				<a class="social-link rounded-circle text-white mb-3" data-toggle="modal" data-target="#emailme">
              <i class="icon-envelope"></i>
            </a>
			</li>
		</ul>
		<p class="text-muted small mb-0">Copyright &copy; Magnus Andreasen 2018</p>
	</div>
</footer>

<!-- Modal -->
<div class="modal fade" id="emailme" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalCenterTitle">Get in touch</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       <form action="mail.php" method="post">
                        <div class="card border-primary rounded-0">
                            <div class="card-header p-0">
                                <div class="bg-info text-white text-center py-2">
                                    <h3>Send me an email</h3>
                                    <p class="m-0"></p>
                                </div>
                            </div>
                            <div class="card-body p-3">

                                <!--Body-->
                                <div class="form-group">
                                    <div class="input-group mb-2">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text"><i class="fa fa-user text-info"></i></div>
                                        </div>
                                        <input type="text" class="form-control" id="name" name="name" placeholder="Name" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-group mb-2">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text"><i class="fa fa-envelope text-info"></i></div>
                                        </div>
                                        <input type="email" class="form-control" id="email" name="email" placeholder="Your email" required>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="input-group mb-2">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text"><i class="fa fa-comment text-info"></i></div>
                                        </div>
                                        <textarea class="form-control" id="subject" name="subject" placeholder="Message" required></textarea>
                                    </div>
                                </div>

                                <div class="text-center">
                                    <input type="submit" value="Send" class="btn2 btn-info btn-block rounded-0 py-2">
                                </div>
                            </div>

                        </div>
						<hr>
                    </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-dark" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded-0 js-scroll-trigger" href="#page-top">
      <i class="fas icon-arrow-up"></i>
    </a>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for this template -->
    <script src="js/stylish-portfolio.min.js"></script>
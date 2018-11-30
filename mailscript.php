<?php

$from="ma0806s9@gmail.com";

$email="ma0806s9@gmail.com";

$navn=$_POST['name'];

$minmail=$_POST['email'];

$tlf=$_POST['subject'];

mail ( $email, $navn, $tlf );

print "you message has been sent!"

?>
<div class="col-lg-10 mt-5 mx-auto text-center">
            <div class="foo  foo-3"><a class="btn btn-dark btn-xl js-scroll-trigger rounded-0" href="index.php">Back</a></div>
          </div>
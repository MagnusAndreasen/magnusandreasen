<?php

$from="info@magnusandreasen.com";

$email="info@magnusandreasen.com";

$navn=$_POST['name'];

$minmail=$_POST['email'];

$tlf=$_POST['subject'];

mail ( $email, $navn, $tlf );

print "you message has been sent!"

?>
<?php
 $ipaddress = getenv("REMOTE_ADDR") ;
 Echo "Your IP Address is " . $ipaddress;
?>


<?php
 $ipaddress = $_SERVER['REMOTE_ADDR'];
 echo "Your IP Address is " . $ipaddress . "<br>";


 print_r($_SERVER['HTTP_USER_AGENT']);

 print_r(get_browser());
?>
<?php
if (isset($_SERVER['PHP_AUTH_USER']) || isset($_SERVER['PHP_AUTH_PW'])) {
	if ($_SERVER['PHP_AUTH_USER'] != "oz" || $_SERVER['PHP_AUTH_PW'] != "123") {
		header('WWW-Authenticate: Basic realm="Authorization Required!"' );  
  	header("HTTP/1.0 401 Unauthorized");
		echo 'Authorization Required!'; 
  	exit;
  }
}
else {
	header('WWW-Authenticate: Basic realm="Authorization Required!"' );  
	echo 'Authorization Required!'; 
 	exit;
}
?>

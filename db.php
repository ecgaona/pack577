<?php
define('HOSTNAME','localhost');
define('DB_USERNAME','cubmaster');
define('DB_PASSWORD','##########');
define('DB_NAME', 'pack577');

$con = mysqli_connect(HOSTNAME, DB_USERNAME, DB_PASSWORD, DB_NAME) or die ("error");

if(mysqli_connect_errno($con))  echo "Failed to connect MySQL: " .mysqli_connect_error();
?>

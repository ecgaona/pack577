<?php
// Database parameters (username & password blanked out for security purposes)
define('HOSTNAME','localhost');
define('DB_USERNAME','root');
define('DB_PASSWORD','szeTbMXd');
define('DB_NAME', 'pack577');

// Connect to database
$con = mysqli_connect(HOSTNAME, DB_USERNAME, DB_PASSWORD, DB_NAME) or die ("error");

if(mysqli_connect_errno($con))  echo "Failed to connect MySQL: " .mysqli_connect_error();
?>

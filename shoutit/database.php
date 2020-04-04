<?php
//Connect to MySQL
$con = mysqli_connect("localhost","shane","Sapdrow","shoutit");

//Test fann_get_total_connections
if (mysqli_connect_errno()){
  echo "Failed to connect to MySQL: " . mysqli_connect_error();

}
 ?>

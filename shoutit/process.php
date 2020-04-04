//process.php processes the messages and uploads into database

<?php
include 'database.php';

//Check if form is submited
if(isset($_POST['submit'])) {
  $user = mysqli_real_escape_string($con, $_POST['user']);
  $message = mysqli_real_escape_string($con, $_POST['message']);

  //Set timezone
  date_default_timezone_set('America/Chicago');
  $time = date('H:i:s', time());

  //Validate input
  if(!isset($user) || $user == '' || !isset($message) || $message == ''){
      $error = "Please fill in your name and message";
      //If error redirects to index and appends error
      header("Location: index.php?error=".urlencode($error));
      exit();
  //Once all the fields are completed comments are added to DB w/ error checking and updates the page
  } else {
      $query = "INSERT INTO shouts (user, message, time) VALUES ('$user', '$message', '$time')";
      if(!mysqli_query($con, $query)){
        die('Error: ' . mysqli_error($con));
      } else {
        header("Location: index.php");
        exit();
      }
    }
  }
 ?>

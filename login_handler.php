<?php
session_start();

include("db_config.php");

if (isset($_POST['email']) && isset($_POST['password'])) {
  $username = mysqli_real_escape_string($conn, $_POST['email']);
  $password = mysqli_real_escape_string($conn, $_POST['password']); 
  
  $sql = "SELECT f_name FROM user WHERE mail = '".$username."' and mdp = '".$password."';";
  
  $result = mysqli_query($conn, $sql);
  $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
  
  $count = mysqli_num_rows($result);
  
  if($count >= 1) {
    $_SESSION['login_user'] = $username;

    header("location: index.php");
  } else {
    $error = "Your Login Name or Password is invalid";
  }
} else {
  $error = "Email and password not provided";
}
?>

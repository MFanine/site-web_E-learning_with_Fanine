<?php
session_start();

include("db_config.php");


  $username = $_POST['email'];
  $password = $_POST['password'];
  $fname = $_POST['fname'];

  $username = mysqli_real_escape_string($conn,$_POST['email']);
  $password = mysqli_real_escape_string($conn,$_POST['password']); 
  $fname = mysqli_real_escape_string($conn,$_POST['fname']); 

  $sql = "INSERT INTO `user` (`f_name`, `mail`, `mdp`, `mdpc`) VALUES ('".$fname."', '".$username."', '".$password."', '".$password."');";
  
  $row = mysqli_query($conn,$sql);
    
  if($row >= 1) {
    $_SESSION['login_user'] = $username;

    header("location: index.php");
  } else {
    $error = "Your Login Name or Password is invalid";
  }
?>4
<?php
session_start();

include("db_config.php");


  $id = $_POST['email'];
  $password = $_POST['password'];

  $username = mysqli_real_escape_string($conn,$_POST['email']);
  $password = mysqli_real_escape_string($conn,$_POST['password']); 
  
  $sql = "SELECT ref FROM admin WHERE admin_id = '".$username."' and pwd = '".$password."';";
  
  $result = mysqli_query($conn,$sql);
  $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
//   $active = $row['active'];
  
  $count = mysqli_num_rows($result);
  
    
  if($count >= 1) {
    $_SESSION['login_dash'] = $username;

    header("location: admin.php");
  } else {
    $error = "Your Login Name or Password is invalid";
  }
?>
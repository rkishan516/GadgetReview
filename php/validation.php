<?php
  session_start();
  $conn = mysqli_connect('localhost','root','','login');
  $_SESSION['user'] = $name = $_POST['user'];
  $_SESSION['password'] = $pass = $_POST['password'];

  $sql = "SELECT * FROM users where user = '$name' && pass = '$pass'";
  $result = mysqli_query($conn,$sql);

  $num = mysqli_num_rows($result);

  if($num==1){
    header('location: reviewer.php');
  }else{
    header('location: index.php');
  }

?>

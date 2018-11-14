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
    echo "<script type='text/javascript'>alert('Error ,User Not Found with Given Password!')</script>";
    echo "<script type='text/javascript'> window.location.replace(\"index.php\") </script>";
  }

?>

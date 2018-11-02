<?php
  session_start();
  header('location: reviewer.php');
  $conn = mysqli_connect('localhost','root','','login');
  $_SESSION['user'] = $name = $_POST['user'];
  $_SESSION['password'] = $pass = $_POST['password'];

  $sql = "SELECT * FROM users where user = '$name'";
  $result = mysqli_query($conn,$sql);

  $num = mysqli_num_rows($result);

  if($num==1){
    echo "<script>alert('Username Already Taken')</script>";
  }else{
    $sql = "insert into users(user,pass) values('$name','$pass')";
    mysqli_query($conn,$sql);

    $sql = "CREATE TABLE ".$_SESSION['user']." (
    DeviceName VARCHAR(30) NOT NULL,
    ImageName VARCHAR(20) NOT NULL,
    Pros VARCHAR(1000) NOT NULL,
    Cons VARCHAR(1000) NOT NULL,
    Specification VARCHAR(10000) NOT NULL,
        PRIMARY KEY(DeviceName)
    )";

    if (mysqli_query($conn, $sql)) {
      echo "<script>alert('Table created successfully')</script>";
    } else {
      echo "Error creating table: " . mysqli_error($conn);
    }

    echo "<script> alert('Registration Successful'); </script>";
  }

?>

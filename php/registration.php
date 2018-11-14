<?php
  session_start();
  $conn = mysqli_connect('localhost','root','','login');
  $_SESSION['user'] = $name = $_POST['user'];
  $_SESSION['password'] = $pass = $_POST['password'];

  $sql = "SELECT * FROM users where user = '$name'";
  $result = mysqli_query($conn,$sql);

  $num = mysqli_num_rows($result);

  if($num==1){
    echo "<script type='text/javascript'>alert('Username Already Taken')</script>";
    echo "<script type='text/javascript'> window.location.replace(\"index.php\") </script>";
  }else{
    $sql = "insert into users(user,pass) values('$name','$pass')";
    mysqli_query($conn,$sql);

    $sql = "CREATE TABLE ".$_SESSION['user']." (
    DeviceName VARCHAR(30) NOT NULL,
    ImageName VARCHAR(20) NOT NULL,
    Pros VARCHAR(1000) NOT NULL,
    Cons VARCHAR(1000) NOT NULL,
    Specification VARCHAR(10000) NOT NULL,
    OvRat INT(3) NOT NULL,
    PerRat INT(3) NOT NULL,
    DesRat INT(3) NOT NULL,
    SatRat INT(3) NOT NULL,
        PRIMARY KEY(DeviceName)
    )";

    if (mysqli_query($conn, $sql)) {
    } else {
      echo "Error creating table: " . mysqli_error($conn);
    }

    echo "<script type='text/javascript'>alert('Welcome To The World Of gadgetReview!')</script>";
    echo "<script type='text/javascript'> window.location.replace(\"reviewer.php\") </script>";
  }

?>

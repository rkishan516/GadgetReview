<?php
  session_start();
  $conn = mysqli_connect('localhost', 'root','','login');
  $dn = $_POST['cd'];
  $sql = "DELETE FROM admin WHERE DeviceName='$dn'";
  if ($conn->query($sql) === TRUE) {
      echo "Record Deleted successfully";
  } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
  }
  mysqli_close($conn);
  header('location: reviewer.php');
?>

<?php
  session_start();
  $user = $_SESSION['user'];
  $conn=mysql_connect('localhost', 'root', '');
  mysql_select_db('login', $conn);
  $dn = $_POST['cd'];
  $path = "../Images/";
  $sql = "SELECT ImageName FROM $user where DeviceName='$dn'";
  $res = mysql_query($sql);
  while ($row=mysql_fetch_array($res)) {
      $Title=$row["ImageName"];
  }
  $path = $path.$Title;
  $sql = "DELETE FROM $user WHERE DeviceName='$dn'";
  if(unlink($path)){
    echo "Deletion Successful";
  }else{
    echo "File Not Deleted Due To File Should be in Upload Folder";
  }
  $conn = $conn=mysqli_connect('localhost', 'root', '','login');
  if ($conn->query($sql) === TRUE) {
      echo "<script type='text/javascript'>alert('Record Deleted Successfully!')</script>";
  } else {
      echo "<script type='text/javascript'>alert('Error ,Something Went Wrong!')</script>";
      echo "Error: " . $sql . "<br>" . $conn->error;
  }
  mysqli_close($conn);
    echo "<script type='text/javascript'> window.location.replace(\"reviewer.php\") </script>";
?>

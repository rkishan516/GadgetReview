<?php
  session_start();
  $user = $_SESSION['user'];
  $conn=mysql_connect('localhost', 'root', '');
  mysql_select_db('login', $conn);
  $dn = $_POST['cd'];
  $path = "../Images/";
  $imgname = basename($_FILES["ImageName"]["name"]);
  $pros = $_POST['Pros'];
  $cons = $_POST['Cons'];
  $Spec = $_POST['Specification'];
  $or = $_POST['OR'];
  $pr = $_POST['PR'];
  $dr = $_POST['DR'];
  $sr = $_POST['SR'];

  if($imgname != ''){
    $sql = "UPDATE $user SET ImageName='$imgname',Pros='$pros',Cons='$cons',Specification='$Spec',OvRat=$or,PerRat=$pr,DesRat=$dr,SatRat=$sr WHERE DeviceName='$dn' ";
    $dsql = "SELECT ImageName FROM $user where DeviceName='$dn'";
    $res = mysql_query($dsql);
    while ($row=mysql_fetch_array($res)) {
        $Title=$row["ImageName"];
    }
    $path = $path.$Title;
    if(unlink($path)){
    }else{
      echo "<script type='text/javascript'>alert('Error ! File Not Deleted Due To File Should be in Upload Folder')</script>";
    }
    $path = "../Images/";
    $path = $path.basename($_FILES["ImageName"]["name"]);
    if(move_uploaded_file($_FILES['ImageName']['tmp_name'], $path)) {
    }else{
          echo "<script type='text/javascript'>alert('Error ! Your file was unable to upload.  Please try again!')</script>";
          echo "";
      }
  }else{
    $sql = "UPDATE $user SET Pros='$pros',Cons='$cons',Specification='$Spec',OvRat=$or,PerRat=$pr,DesRat=$dr,SatRat=$sr WHERE DeviceName='$dn' ";
  }

  $conn=mysqli_connect('localhost', 'root', '','login');
  if ($conn->query($sql) === TRUE) {
      echo "<script type='text/javascript'>alert('Record Updated Successfully!')</script>";
  } else {
      echo "<script type='text/javascript'>alert('Error ,Something Went Wrong!')</script>";
      echo "Error: " . $sql . "<br>" . $conn->error;
  }
  echo "<script type='text/javascript'> window.location.replace(\"reviewer.php\") </script>";

?>

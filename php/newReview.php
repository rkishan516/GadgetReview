<?php
  session_start();

          $dev_name = $_POST['dev_name'];
          $img_name = basename($_FILES["ImageName"]["name"]);
          $spec = $_POST['Specification'];
          $or = $_POST['OR'];
          $pr = $_POST['PR'];
          $dr = $_POST['DR'];
          $sr = $_POST['SR'];
          $conn = mysqli_connect('localhost','root','','login');
          $pros = $_POST['Pros1'];
          $cons = $_POST['Cons1'];
          $path = "../Images/";
          $path = $path.basename($_FILES["ImageName"]["name"]);
          if(move_uploaded_file($_FILES['ImageName']['tmp_name'], $path)) {
                echo "The file ".  basename( $_FILES['ImageName']['name']).
                " has been uploaded";
          }else{
                echo "Your file was unable to upload.  Please try again!";
            }
          $sql = "INSERT INTO $_SESSION[user] (DeviceName, ImageName, Pros, Cons, Specification,OvRat,PerRat,DesRat,SatRat) VALUES ('$dev_name','$img_name','$pros','$cons','$spec',$or,$pr,$dr,$sr)";

          if ($conn->query($sql) === TRUE) {
              echo "<script type='text/javascript'>alert('New review created successfully!')</script>";
          } else {
              echo "<script type='text/javascript'>alert('Error ,Something Went Wrong!')</script>";
              echo "Error: " . $sql . "<br>" . $conn->error;
          }
          echo "<script type='text/javascript'> window.location.replace(\"reviewer.php\") </script>";
?>

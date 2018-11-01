<?php
  session_start();

          var_dump($_FILES);
          $dev_name = $_POST['dev_name'];
          $img_name = $_POST['ImageName'];
          $spec = $_POST['Specification'];
          $conn = mysqli_connect('localhost','root','','login');
          $pros = "";
          $cons = "";
          $i=1;
          //while($_POST['Pros'.$i]!=NULL){
            $pros = $pros.$_POST['Pros'.$i];
            //$i++;
          //}
          //$i=1;
          //while($_POST['Cons'.$i]!=NULL){
            $cons = $cons.$_POST['Cons'.$i];
            //$i++;
          //}

          $sql = "INSERT INTO $_SESSION[user] (DeviceName, ImageName, Pros, Cons, Specification) VALUES ('$dev_name','$img_name','$pros','$cons','$spec')";

          if ($conn->query($sql) === TRUE) {
              echo "New review created successfully";
              header('location: reviewer.php');
          } else {
              echo "Error: " . $sql . "<br>" . $conn->error;
              header('location: reviewer.php');
          }
?>

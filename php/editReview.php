<?php
  session_start();
  if(!isset($_SESSION['user'])){
    header('location: index.php');
  }
?>
<html>
  <head>
    <title> Reviewer Welcome </title>
    <link rel="stylesheet" type="text/css" href="../css/loginstyle.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  </head>
  <body style="color:white">
    <div class="container">
      <nav>
        <div class="menu">
          <ul>
            <li></li>
             <li><h1>Edit Review</h1></li>
            <li><a href="logout.php" class="menu-item">Log Out</a></li>
          </ul>
        </div>
      </nav>
      <div id="vcontainer" >
        <form action="editConfirm.php" enctype="multipart/form-data" method="post">
          Device Name :<select id="cd" name="cd">
              <?php
              $user = $_SESSION['user'];
              $conn=mysql_connect('localhost', 'root', '');
              mysql_select_db('login', $conn);
              $res=mysql_query("SELECT DeviceName FROM $user");

              while ($row=mysql_fetch_array($res)) {
                  $Title=$row["DeviceName"];
                  echo "<option name='$Title'> $Title </option>";
              }
              ?>
          </select><br>
          <input type="submit" value="Fetch Data" formaction="editReview.php"/>
          <?php
              error_reporting(E_ERROR | E_WARNING | E_PARSE);
              $conn=mysql_connect('localhost', 'root', '');
              mysql_select_db('login', $conn);
              $cd = $_POST['cd'];
              $user = $_SESSION['user'];
              $sql = "SELECT ImageName FROM $user where DeviceName='$cd'";
              $res = mysql_query($sql);
              while ($row=mysql_fetch_array($res)) {
                  $Title=$row["ImageName"];
                  echo "<br><br><br><center><img src='../Images/$Title' id='ImageName1'alt='Image Not Found' /></center>";
              }
           ?>
           <?php echo 'Image : <input type="file" name="ImageName" id="ImageName"/></br>'; ?>
          <?php
              $conn=mysql_connect('localhost', 'root', '');
              mysql_select_db('login', $conn);
              $cd = $_POST['cd'];
              $user = $_SESSION['user'];
              $sql = "SELECT Pros FROM $user where DeviceName='$cd'";
              $res = mysql_query($sql);
              while ($row=mysql_fetch_array($res)) {
                  $Title=$row["Pros"];
                  echo "Pros : </br>(Multiple Pros Seprated By Comma)<br><input type='text' name='Pros' id='Pros' value='$Title' required/><br>";
              }
           ?>
          <?php
              $conn=mysql_connect('localhost', 'root', '');
              mysql_select_db('login', $conn);
              $cd = $_POST['cd'];
              $user = $_SESSION['user'];
              $sql = "SELECT Cons FROM $user where DeviceName='$cd'";
              $res = mysql_query($sql);
              while ($row=mysql_fetch_array($res)) {
                  $Title=$row["Cons"];
                  echo "Cons : </br>(Multiple Cons Seprated By Comma)<br><input type='text' name='Cons' id='Cons' value='$Title' required/><br>";
              }
           ?>
          <?php
              $conn=mysql_connect('localhost', 'root', '');
              mysql_select_db('login', $conn);
              $cd = $_POST['cd'];
              $user = $_SESSION['user'];
              $sql = "SELECT Specification FROM $user where DeviceName='$cd'";
              $res = mysql_query($sql);
              while ($row=mysql_fetch_array($res)) {
                  $Title=$row["Specification"];
                  echo "Specification : <br><input type='text' name='Specification' id='Specification' value='$Title' required/></br>";
              }
           ?>
           <?php
               $conn=mysql_connect('localhost', 'root', '');
               mysql_select_db('login', $conn);
               $cd = $_POST['cd'];
               $user = $_SESSION['user'];
               $sql = "SELECT OvRat FROM $user where DeviceName='$cd'";
               $res = mysql_query($sql);
               while ($row=mysql_fetch_array($res)) {
                   $Title=$row["OvRat"];
                   echo "Overall Rating : <br><input type='number' name='OR' id='OR' max='100' min='0' value='$Title' required/></br>";
               }
            ?>
            <?php
                $conn=mysql_connect('localhost', 'root', '');
                mysql_select_db('login', $conn);
                $cd = $_POST['cd'];
                $user = $_SESSION['user'];
                $sql = "SELECT PerRat FROM $user where DeviceName='$cd'";
                $res = mysql_query($sql);
                while ($row=mysql_fetch_array($res)) {
                    $Title=$row["PerRat"];
                    echo "Performance Rating : <br><input type='number' name='PR' id='PR' max='100' min='0' value='$Title' required/></br>";
                }
             ?>
             <?php
                 $conn=mysql_connect('localhost', 'root', '');
                 mysql_select_db('login', $conn);
                 $cd = $_POST['cd'];
                 $user = $_SESSION['user'];
                 $sql = "SELECT DesRat FROM $user where DeviceName='$cd'";
                 $res = mysql_query($sql);
                 while ($row=mysql_fetch_array($res)) {
                     $Title=$row["DesRat"];
                     echo "Design Rating : <br><input type='number' name='DR' id='DR' max='100' min='0' value='$Title' required/></br>";
                 }
              ?>
              <?php
                  $conn=mysql_connect('localhost', 'root', '');
                  mysql_select_db('login', $conn);
                  $cd = $_POST['cd'];
                  $user = $_SESSION['user'];
                  $sql = "SELECT SatRat FROM $user where DeviceName='$cd'";
                  $res = mysql_query($sql);
                  while ($row=mysql_fetch_array($res)) {
                      $Title=$row["SatRat"];
                      echo "Stability Rating : <br><input type='number' name='SR' id='SR' max='100' min='0' value='$Title' required/></br>";
                  }
               ?>
          <br><br><br><input type="submit" value="submit" name="submit"/>
        </form>
      </div>
    </div>
  </body>
</html>

<?php
  session_start();
  if(!isset($_SESSION['user'])){
    header('location: index.php');
  }
?>
<html>
  <head>
    <title> Reviewer Welcome </title>
    <script type="text/javascript" src="../js/reviewer.js"></script>
    <link rel="stylesheet" type="text/css" href="../css/loginstyle.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  </head>
  <body>
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
        <form action="editConfirm.php" method="post">
          Device Name :<select id="cd" name="cd">
              <?php
              $conn=mysql_connect('localhost', 'root', '');
              mysql_select_db('login', $conn);
              $res=mysql_query("SELECT DeviceName FROM admin");

              while ($row=mysql_fetch_array($res)) {
                  $Title=$row["DeviceName"];
                  echo "<option name='$Title'> $Title </option>";
              }
              ?>
          </select><br>
          <input type="submit" value="Fetch Data" formaction="editReview.php" id="getData"/>
          Image : <input type="file" name="ImageName" id="ImageName" /></br>
          <?php
              echo "Pros :<br>";
              $conn=mysql_connect('localhost', 'root', '');
              mysql_select_db('login', $conn);
              $cd = $_POST['cd'];
              $sql = "SELECT Pros FROM admin where DeviceName='$cd'";
              $res = mysql_query($sql);
              while ($row=mysql_fetch_array($res)) {
                  $Title=$row["Pros"];
                  echo "<input type='text' name='Pros' id='Pros' value='$Title' required/>";
              }
           ?>
          <?php
              echo "Cons :<br>";
              $conn=mysql_connect('localhost', 'root', '');
              mysql_select_db('login', $conn);
              $cd = $_POST['cd'];
              $sql = "SELECT Cons FROM admin where DeviceName='$cd'";
              $res = mysql_query($sql);
              while ($row=mysql_fetch_array($res)) {
                  $Title=$row["Cons"];
                  echo "<input type='text' name='Cons' id='Cons' value='$Title' required/>";
              }
           ?>
          <?php
              echo "Specification :";
              $conn=mysql_connect('localhost', 'root', '');
              mysql_select_db('login', $conn);
              $cd = $_POST['cd'];
              $sql = "SELECT Specification FROM admin where DeviceName='$cd'";
              $res = mysql_query($sql);
              while ($row=mysql_fetch_array($res)) {
                  $Title=$row["Specification"];
                  echo "<input type='text' name='Specification' id='Specification' value='$Title' required/>";
              }
           ?>
          <br><br><br><input type="submit" value="submit" name="submit"/>
        </form>
      </div>
    </div>
  </body>
</html>

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
            <li><h1>Delete Review</h1></li>
            <li><a href="logout.php" class="menu-item">Log Out</a></li>
          </ul>
        </div>
      </nav>
      <div id="vcontainer" >
        <form method="POST" action="deleteConfirm.php">
            Device Name : <select id="cd" name="cd">
                <?php
                $conn=mysql_connect(localhost, 'root', '');
                mysql_select_db('login', $conn);
                $res=mysql_query("SELECT DeviceName FROM admin");

                while ($row=mysql_fetch_array($res)) {
                    $Title=$row["DeviceName"];
                    echo "<option name='$Title'> $Title </option>";
                }
                ?>
            </select><br>
            <input type="submit" value="Delete Review" />
        </form>
      </div>
    </div>
  </body>
</html>

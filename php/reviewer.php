<?php
  session_start();
  if(!isset($_SESSION['user'])){
    header('location: index.php');
  }
?>
<html>
  <head>
    <title> Reviewer Welcome </title>
    <script type="text/javascript">
          function showReviewCreator(){
            var c1=document.getElementById("vcontainer");
            c1.innerHTML="";
            c1.innerHTML= c1.innerHTML +'<form action="newReview.php" enctype="multipart/form-data" method="post">'
                                       +'Device Name :<input type="text" name="dev_name" id="dev_name" required/></br>'
                                       +'Image : <input type="file" name="ImageName" id="ImageName" required/></br>'
                                       +'Pros : <input type="text" name="Pros1" id="Pros" required/><br>'
                                       +'Cons : <input type="text" name="Cons1" id="Cons1" required/><br>'
                                       +'Specification : <textarea name="Specification" id="Specification" required></textarea><br>'
                                       +'Overall Rating : <input type="number" name="OR" id="OR" max="100" min="0" required/><br>'
                                       +'Performance Rating : <input type="number" name="PR" id="PR" max="100" min="0" required/><br>'
                                       +'Design Rating : <input type="number" name="DR" id="DR" max="100" min="0" required/><br>'
                                       +'Stability Rating : <input type="number" name="SR" id="SR" max="100" min="0" required/><br>'
                                       +'<input type="submit" value="submit" name="submit"/>'
                                       +'</form>'
          }
    </script>
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
             <li><a onclick="showReviewCreator()" href="#" class="menu-item">New Review</a></li>
             <li><a href="editReview.php" class="menu-item">Edit Review</a></li>
             <li><a href="deleteReview.php" class="menu-item">Delete Review</a></li>
            <li><a href="logout.php" class="menu-item">Log Out</a></li>
          </ul>
        </div>
      </nav>
      <div id="vcontainer" ><h1> Welcome <?php echo $_SESSION['user']; ?> </h1></div>
    </div>
  </body>
</html>

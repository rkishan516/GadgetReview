var i=2,j=2;

function showReviewCreator(){
  var c1=document.getElementById("vcontainer");
  c1.innerHTML="";
  c1.innerHTML= c1.innerHTML +'<form action="newReview.php" method="post">'
                             +'Device Name :<input type="text" name="dev_name" id="dev_name" required/></br>'
                             +'Image : <input type="file" name="ImageName" id="ImageName" required/></br>'
                             +'Pros : <input type="text" name="Pros1" id="Pros" required/>'
                             +'<div id="pros"></div>'
                             +'<button type="button" class="btn" onclick="addpros()"><i class="fa fa-plus"></i></button>'
                             +'Cons : <input type="text" name="Cons1" id="Cons1" required/><br>'
                             +'<div id="cons"></div>'
                             +'<button type="button" class="btn" onclick="addcons()"><i class="fa fa-plus"></i></button>'
                             +'Specification : <textarea name="Specification" id="Specification" required></textarea>'
                             +'<input type="submit" value="submit" name="submit"/>'
                             +'</form>'
}

function editReview(){
  var c1=document.getElementById("vcontainer");
  c1.innerHTML="";
  c1.innerHTML= c1.innerHTML +'<form action="newReview.php" method="post">'
                             +'Device Name :<input type="text" name="dev_name" id="dev_name" required/></br>'
                             +'Image : <input type="file" name="ImageName" id="ImageName" required/></br>'
                             +'Pros : <input type="text" name="Pros1" id="Pros" required/>'
                             +'<div id="pros"></div>'
                             +'<button type="button" class="btn" onclick="addpros()"><i class="fa fa-plus"></i></button>'
                             +'Cons : <input type="text" name="Cons1" id="Cons1" required/><br>'
                             +'<div id="cons"></div>'
                             +'<button type="button" class="btn" onclick="addcons()"><i class="fa fa-plus"></i></button>'
                             +'Specification : <textarea name="Specification" id="Specification" required></textarea>'
                             +'<input type="submit" value="submit" name="submit"/>'
                             +'</form>'
}

function deleteReview(){
  var c1=document.getElementById("vcontainer");
  c1.innerHTML="";
  c1.innerHTML= c1.innerHTML +'<form action="deleteReview.php" method="post">'
                             +'Device Name :'
                             +'<select id="cd" name="cd">'
                             +'</select>'
                             +'<input type="submit" value="submit" name="submit"/>'
                             +'</form>'
}
function addpros(){
  var c1=document.getElementById("pros");
  c1.innerHTML = c1.innerHTML + '<input type="text" name="Pros'+i+'" id="Pros" required/>';
  i++;
}

function addcons(){
  var c1=document.getElementById("cons");
  c1.innerHTML = c1.innerHTML + '<input type="text" name="Cons'+j+'" id="Cons" required/>';
  j++;
}

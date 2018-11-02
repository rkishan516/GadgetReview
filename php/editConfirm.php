<?php
  $conn=mysql_connect(localhost, 'root', '');
  mysql_select_db('login', $conn);
  $dn = $_POST['cd'];
  $pros = $_POST['Pros'];
  $cons = $_POST['Cons'];
  $Spec = $_POST['Specification'];

  $sql = "UPDATE admin SET Pros='$pros',Cons='$cons',Specification='$Spec' WHERE DeviceName='$dn' ";
  echo $sql;


?>

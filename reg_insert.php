<?php
$error="one or more field is empty";
if($_POST[author]==""||$_POST[email]==""||$_POST[phone]==""||$_POST[bgroup]==""||$_POST[text]=="")
 {
  header("LOCATION:contactus.html?id=$error");
 }
else
  {
    $con=mysql_connect("localhost","root","");
      if(!$con)
        die('Could not connect: '.mysql_error());
      else
      {
         mysql_select_db("mysql",$con);
         mysql_query("INSERT INTO project2 VALUES ('$_POST[author]','$_POST[email]','$_POST[phone]','$_POST[bgroup]','$_POST[text]')",$con);
         mysql_close($con);
         header("LOCATION:index.html?");
      }
  }
?>

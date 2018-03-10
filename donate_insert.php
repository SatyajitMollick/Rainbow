<?php
$error="one or more field is empty";
if($_POST[author]==""||$_POST[email]==""||$_POST[phone]==""||$_POST[amount]==""||$_POST[date]=="")
 {
  header("LOCATION:donate.html?id=$error");
 }

else
  {
    $con=mysql_connect("localhost","root","");
      if(!$con)
        die('Could not connect: '.mysql_error());
      else
      {
         mysql_select_db("mysql",$con);
         mysql_query("INSERT INTO donate2 VALUES ('$_POST[author]','$_POST[email]','$_POST[phone]','$_POST[amount]','$_POST[date]')",$con);
         mysql_close($con);

       header("LOCATION:index.html");

      }

  }


?>

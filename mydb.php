
<?php

$i=0;
if($_SERVER['REQUEST_METHOD']=="GET")
{
      $localhost = "192.168.20.126";
      $usernamew = "root";
      $passwordw = "";
      $db = "expdb";
$conn = mysqli_connect($localhost,$usernamew,$passwordw,$db);
if(!$conn)
     {
            echo "Connection error";
      }
  else
   {
       echo "";

    }
}
?>
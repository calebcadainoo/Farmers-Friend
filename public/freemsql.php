<?php
$host = "sql2.freemysqlhosting.net";
$user = "sql2395722";
$password = "rN3!xS6*";
$db = "sql2395722";
$link = mysqli_connect($host, $user, $password, $db);

if ($link == true) {
  echo "Connection Activated <br>";
  $val = mysqli_query($link, 'SELECT 1 from `crop_location` LIMIT 1');

  if($val !== FALSE){
    echo "found data";
  }else{
    echo "no data";
  }
} else {
  echo "Failed to connect".mysqli_error($link);
}

<?php
$servername='localhost';
$username='root';
$password='';
$dbname = "workshop";
$connect1=mysqli_connect($servername,$username,$password,"$dbname");
if(!$connect1){
   die('Could not Connect My Sql:' .mysql_error());
}
?>
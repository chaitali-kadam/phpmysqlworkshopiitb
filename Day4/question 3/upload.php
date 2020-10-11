<?php
$name = $_FILES["myfile"]["name"];
echo" The name of the file is :\n $name";
echo "<br>";
$type = $_FILES["myfile"]["type"];
echo" The type of the file is :\n $type";
echo "<br>";
$size = $_FILES["myfile"]["size"];
echo"The size of the file is :\n $size";
?>
<html>  
<body>  
<form method="post">  
    Enter 2 numbers :  <br>
    <input type="number" name="num1">  
    <input type="number" name="num2">  
    <input type="submit" value="Submit"><br>
</form>  
</body>  
</html>
<?php
if($_POST)
 {
  $num1 = $_POST["num1"]; 
  $num2 = $_POST["num2"];

   if ($num1>$num2) 
   
	echo"The number $num1 is greatest number.";
  
   else if ($num1<$num2) 
  
	echo "The number $num2 is greatest number.";
   
   else 
  echo "The number $num1 and $num2 are equal number.";
 }  
?>
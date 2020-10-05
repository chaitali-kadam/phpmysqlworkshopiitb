<html>  
<body>  
<form method="post">  
    Enter 2 numbers :  <br>
    <input type="number" name="num1">  
    <input type="submit" value="Submit"><br>
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

	$total=$num1+$num2;
	echo "The Addition of two numbers is $total.";
	echo "<br>";
	$total=$num1-$num2;
	echo "The Subtraction of two numbers is $total.";
	echo "<br>";
	$total=$num1*$num2;
	echo "The Multiplication of two numbers is $total.";
	echo "<br>";
	$total=$num1/$num2;
	echo "The Division of two numbers is $total.";
	}
?>
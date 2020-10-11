<html>  
<body>  
<form method="get">  
    Enter the string: <br>
     <input type="text" name="s"> <br> 
</form>  
</body>  
</html>
<?php 
 if($_GET)
 {
   $stringbyuser = $_GET["s"]; 
   $string=$stringbyuser;
   echo "The string entered bu the user is $string.";
   echo "<br>";
   echo "The count of the string enter by the user:\n";
   echo strlen($string) ; 
   echo "<br>";

   echo "A string into an array:\n";
   print_r(explode(" ",$string));
   echo "<br>";

   echo "The reverse of the string enter by the user:\n";
   echo strrev($string) ; 
   echo "<br>";
    
   echo "The lower case of the string enter by the user:\n";
   echo strtolower($string) ; 
   echo "<br>";

   echo "The upper case of the string enter by the user:\n";
   echo strtoupper($string) ; 
   echo "<br>";

   echo "The string after replace with original string is:\n";
   $replace = "$string";
   $result = substr_replace($replace,"chaitali", 11,14);
   echo "$result";
}
?>
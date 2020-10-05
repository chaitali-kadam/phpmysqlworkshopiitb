<html>  
<body>  
<form method="post">  
    Enter a alphabet:  
    <input type="text" name="var">  
    <input type="submit" value="Submit">  
</form>  
</body>  
</html>
<?php 
 if($_POST)
 {
  $variable = $_POST["var"]; 
    switch ($variable)
    {
 	case "A":
 	case "E":
 	case "I":
 	case "O":
 	case "U":
 	case "a":
 	case "e":
 	case "i":
    case "o":
 	case "u":
 	echo "The entered alphabet is vowel.";
 		break;
 	
 	default:
 		echo "The entered alphabet is consonant.";
 	}
 }
?>
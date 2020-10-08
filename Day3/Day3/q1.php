<html>
<head><title>Report card</title></head>
<body>
<form  method="post" action="q2.php">
	<table border="1" width="300" height="150">
		<tr>
			<td>Name of the student:</td>
			<td><input type="text" name="username"></td>
		</tr>
      Marks in Each Subject out off 100<br>
      <tr>
			<td>Subject 1:</td>
			<td><input type="number" name="Subject1"></td>
	  </tr>
	  <tr>
			<td>Subject 2:</td>
			<td><input type="number" name="Subject2"></td>
	  </tr>
	  <tr>
			<td>Subject 3:</td>
			<td><input type="number" name="Subject3"></td>
	  </tr>
	  <tr>
			<td>Subject 4:</td>
			<td><input type="number" name="Subject4"></td>
	  </tr>
	  <tr>
			<td>Subject 5:</td>
			<td><input type="number" name="Subject5"></td>
	  </tr>
	  <tr>
	  	<td colspan="5" align="center">
      <input type="submit" value="Submit" />
        </td>
    </tr>
</table>
</form>
</body>
</html>
<?php
require("connect1.php");
@$name = $_POST['username'];
@$sub1 = $_POST['Subject1'];
@$sub2 = $_POST['Subject2'];
@$sub3 = $_POST['Subject3'];
@$sub4 = $_POST['Subject4'];
@$sub5 = $_POST['Subject5'];
@$total_obtained = ($sub1 + $sub2 + $sub3 + $sub4 + $sub5) ;
@$total_marks = 500 ;
@$percent = ($total_obtained*100)/$total_marks ;

if($name && $sub1 && $sub2 && $sub3 && $sub4 && $sub5 )
{
  echo "<br> <b>Marksheet of $name :</b> <br>";
  echo "Subject 1: $sub1 <br>";
  echo "Subject 2: $sub2 <br>";
  echo "Subject 3: $sub3 <br>";
  echo "Subject 4: $sub4 <br>";
  echo "Subject 5: $sub5 <br>";
  echo "Total Marks Obtained :  $total_obtained <br>";
  echo "Total marks: $total_marks <br>";
  echo "Percentage:$percent <br> ";

$write = "INSERT INTO class1 VALUES ('','$name', $sub1, $sub2, $sub3, $sub4, $sub5, $total_obtained, $total_marks, $percent)";

if ($connect1-> query ($write) === TRUE)
     {
			 echo "New record created successfully";
		 }
     else
     {
			 echo "Error: " . $write. "<br>" . $connect1->error;
	   }
}
$connect1->close();
?>
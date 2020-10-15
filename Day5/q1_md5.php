<html>
<head><title>Login</title></head>
<body>
<form  method="post" action="q1_md5.php">
	<table border="1" width="200" height="100">
		<tr>
			<td>Username:</td>
			<td><input type="text" name="username"></td>
		</tr>
		<tr>
            <td>password</td>
			<td><input type="password" name="password"></td>
	  </tr>
	  <tr>
	  	<td colspan="5" align="center">
      <input type="submit" value="Submit" />
        </td>
	</table>
</form>
</body>
</html>
<?php
require("connect2.php");
@$username = $_POST['username'];
@$password = $_POST['password'];
@$password = md5($password);

$write = "INSERT INTO data1 VALUES ('','$username','$password')";

if ($connect2-> query ($write) === TRUE)
     {
			 echo "New record added successfully";
		 }
     else
     {
			 echo "Error: " . $write. "<br>" . $connect2->error;
	   }
	$connect2->close();
	?>
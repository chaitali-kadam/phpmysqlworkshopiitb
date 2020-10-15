<?php
  require ("connect3.php");
  session_start();
  if(!isset($_SESSION))
	{
		header('location:loginAdmin.php');
		exit;
	}
  $success="";
  $mail=$_SESSION['mail'];     
  $select = "Select Id,Name,Email-Id,PHP,MYSQL,HTML,totalObtained,totalMarks,PassingMarks,Percentage FROM marksheet,students where students.Id=marks.Id"; 
  $result1 = mysqli_query($conn, $select);
 
  if (mysqli_num_rows($result1) > 0) {
      // output data of each row
    //   $i=0;
    //   while($row = mysqli_fetch_array($result1)) {
    //     $name=$row['name'];
    //     $subject1=$row["sub1"];
    //     $subject2=$row["sub2"];
    //     $subject3=$row["sub3"];
    //     $totalobtained=$subject1 + $subject2 + $subject3;
    //     $percentage=($totalobtained / 300 )*100;
    //     $i--;
    //   }    
  
    }
    else echo "Error";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>td,h1,div{
    text-align: center;
    }</style>
</head>
<body>
    <h1>Welcome Admin</h1>
    <table border="2" cellpadding="15"   style="width: 100%; border-collapse: collapse; margin:0 auto">
      <thead>
        <tr>
          <th>Name</th>
          <th>HTML</th>
          <th>PHP</th>
          <th>MYSQL</th>
          <th>Total_ Obtained</th>
          <th>Percentage</th>
        </tr>
      </thead>
      <tbody>
        <tr>
        <?php
                while($row = mysqli_fetch_assoc($result1)){?>
                <tr>
                    <td><?php echo $row['Name']?></td>
                    <td><?php echo $row['PHP']; ?></td>
                    <td><?php echo $row['MYSQL']?></td>
                    <td><?php echo $row['HTML']; ?></td>
                    <td><?php echo $row['totalObtained'];?></td>
                    <td><?php echo $row['Percentage']; ?></td>
                    <?php $student_id=$row['Id'] ?>
                    <td><a href="edit.php?_id=<?php echo $student_id ?>">Edit</a> | <a href="delete.php?_id=<?php echo $student_id ?>">Delete</a></td>";
                <tr>
                <?php } ?>
        </tr>
      </tbody>
    </table>
    <div style="padding: 100px;">
    <a href="q1_record.php"><button>Add new student</button></a>
    </div>
    <h1 ><?php echo $success ?></h1>
    <a style="position:absolute; top:1em ;right:1em;" href="logout.php"><button>Logout</button></a>
</body>
</html>
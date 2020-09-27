<?php
$con=$con=mysqli_connect("localhost","root","","mentalhealthsystem");
if(!$con)
{
 echo "database not connected";
}
if(isset($_POST['submit']))
{
 $nm=$_POST['uname'];
 $em=$_POST['email'];
 $ps=$_POST['pass'];
 $sql="INSERT INTO admin(Name,Email,Password) VALUES('$nm','$em','$ps')";
 if(!mysqli_query($con,$sql))
 {
 	echo "error try again";
 }
 else
 {
 	echo"data inserted";
 }
}
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
  <form action="adminsignup.php" method="post" enctype="multipart/form-data">
		<table border="4" cellpadding="5" cellspacing="4" align="center" height="600px" width="800px" >
			<tr>
				<th colspan="2" align="center">Admin Registration</th>
			<tr>
				<td>Name</td>
				<td><input type="text" name="uname" placeholder="enter detail"></td>
			</tr>
			
			<tr>
				<td>Email</td>
				<td><input type="email" name="email" placeholder="enter detail"></td>
			</tr>
			
			<tr>
				<td>Password</td>
				<td><input type="password" name="pass" placeholder="enter detail"></td>
			</tr>
			
			<tr>
			 <td colspan="2" align="center"> <input type="submit" name="submit" ></td>
			</tr>
		</tr>
	</table>
</form>
</body>
</html>

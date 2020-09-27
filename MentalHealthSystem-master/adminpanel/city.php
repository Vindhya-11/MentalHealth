<?php
session_start();
if(isset($_SESSION['login_user']))
{
 $con=mysqli_connect("localhost","root","","mentalhealthsystem");
 if(isset($_POST['submit']))
 {
   $mc=$_POST['mcat'];
   $nm=$_POST['cname'];
   $date=date('Y-m-d');
   $sql=mysqli_query($con,"INSERT INTO cities(Country,City,Date) VALUES('$mc','$nm','$date')");
   if($sql)
   {
 	echo "<script>alert('City Inserted');window.location.href='#';</script>";
   }
   else
   {
 	echo "<script>alert('Request cannot be completed right now');window.location.href='#';</script>";
   }
 }

 ?>
 <!DOCTYPE html>
 <html>
 <head>
	<title></title>
 </head>
 <body>
  <form method="post" enctype="multipart/form-data">
		<table border="4" cellpadding="5" cellspacing="4" align="center" height="600px" width="800px">
			<tr>
				<th colspan="2" align="center">Cities Available</th>
			<tr>
				<td>
				Country
			    </td>
				<td>
					<select name="mcat">
					<option value="1">India</option>
				    </select>
				</td>
			</tr>
			<tr>
				<td>City</td>
				<td><input type="text" name="cname" required="" size="35" placeholder="enter detail"></td>
			</tr>
			<tr>
			 <td colspan="2" align="center"> <input type="submit" name="submit" ></td>
			</tr>
			<tr>
				<a href="dashboard.php">Back to Dashboard</a>
			</tr>
		</tr>
	</table>
 </form>
 </body>
 </html>
 <?php 
}
 else
 {
 header('location:index.html');
 }?>

<?php
session_start();
if(isset($_SESSION['login_user']))
{
 $con=mysqli_connect("localhost","root","","mentalhealthsystem");
 $allcat=mysqli_query($con,"select * from cities");
 if(isset($_POST['submit']))
 {
   $cid=$_POST['cityid'];
   $nm=$_POST['dname'];
   $edu=$_POST['dedu'];
   $year=$_POST['yrs'];
   $hos=$_POST['hosaddr'];
   $no=$_POST['num'];
   $date=date('y-m-d');
   $sql=mysqli_query($con,"INSERT INTO doctors(SNo,Name,DocEducation,YearsofExperience,HospitalAddr,ContactNumber,Date) VALUES
   	('$cid','$nm','$edu','$year','$hos','$no','$date')");
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
		<table border="4"cellpadding="5" cellspacing="4" align="center" height="600px" width="800px">
			<tr>
				<th colspan="2" align="center">Doctor's</th>
			<tr>
				 <tr>	
    	          <td>Welcome:> <?php echo $_SESSION['login_user'];?> </td>
    	          <td> <a href="#">Log Out</a> </td>
                 </tr>
				<td>City</td>
				<td>
					<select name="cityid">
					<?php 
					  while($fetchcity=mysqli_fetch_assoc($allcat))
					  {
					?>
					  	<option value="<?php echo $fetchcity['SNo'];?>"><?php echo $fetchcity['City'];?></option>
					<?php	
					  }
					?>
				    </select>
				</td>
		    </tr>
			<tr>
				<td>Doctor-Name</td>
				<td><input type="text" name="dname" placeholder="enter detail"></td>
			</tr>
			
			<tr>
				<td>Doctor-Education</td>
				<td><input type="text" name="dedu" placeholder="enter detail"></td>
			</tr>
			<tr>
				<td>Years-of-Experience</td>
				<td><input type="text" name="yrs" placeholder="enter detail"></td>
			</tr>
			<tr>
				<td>Hospital-Address</td>
				<td><input type="text" name="hosaddr"  placeholder="enter detail"></td>
			</tr>
			<tr>
				<td>Contact-Number</td>
				<td><input type="text" name="num" placeholder="enter detail"></td>
			</tr>
			
			<tr>
			 <td> <input type="submit" name="submit"value="Add Doctor"></td>
			 <td><a href="dashboard.php">Back To Dashboard</a> </td>
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
}
?>
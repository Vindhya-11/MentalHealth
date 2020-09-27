<?php
session_start();
if(isset($_SESSION['login_user']))
{
    $con=mysqli_connect("localhost","root","","mentalhealthsystem");
    $alladmin=mysqli_query($con,"select * from admin");
    $fetchinfo=mysqli_fetch_assoc($alladmin);
   ?>
 <!DOCTYPE html>
 <html>
 <head>
  <style>

  body 
  {
    background-image: url("https://3.bp.blogspot.com/-9c5DfYB2lfM/UxLG_mJiHRI/AAAAAAAAACI/b4PjRiHtUJU/s1600/awsum-purple-sky-mountains-covered-with-snow.jpg");
    background-size:cover;
  }

   #customers 
   {
     text-decoration: none;
    font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
    border-collapse: collapse;
    margin-top:100px;
     width: 60%;
    height: 60%;
   }
   #customers td, #customers th {
    text-align: center;
    border: 2px solid #ddd;
    font-weight: bold;
    padding: 8px;
    padding-bottom: 20px;
  }

  #customers tr:nth-child(even){background-color: #f2f2f2;}

  #customers tr:nth-child(odd) {background-color: #DACDCA;}

  #customers th {
    padding-top: 15px;
    padding-bottom: 22px;
    text-align: center;
    background-color: #F3B8A1 ;
    color: white;
  }

  #customer td{
    text-decoration: none;
  }
  </style>
	<title></title>
 </head>
 <body>
   <table id="customers" width="500" border="1" cellpadding="10" cellspacing="0" align="center">
   	<tr>
        <th colspan ="1">Welcome:<?php echo $_SESSION['login_user'];?></th>
        <th colspan="1" align="left"><a href="dashboard.php">Back to dashboard</a></th>
        <th colspan="1" align="right"><a href="index.html">Logout</a></th>
     </tr>
     <tr>
	 <td>Name</td>
		<td colspan="2"><?php echo $fetchinfo['Name'];?></td>
				    	    
	</tr>
     <tr>
     	<td>Email</td>
					<td colspan="2"><?php echo $fetchinfo['Email'];?></td>
				    
     </tr>
 </table>
 </body>
 </html> 
 <?php
}
else
{
  header('location:login.php');
}
?>
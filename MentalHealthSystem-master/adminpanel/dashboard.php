<?php
session_start();
if(isset($_SESSION['login_user']))
{?>
<!DOCTYPE html>
<html>
 <head>
 <title>Admin Dashboard</title>
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

</style>
</head>
<body>
	<table id="customers" align="center">
    <tr>
    	<th colspan="2" >ADMIN DASHBOARD</th>
    </tr>
    <tr>	
    	<td colspan=1>Welcome:> <?php echo $_SESSION['login_user'];?></td>
    	<td> <a href="index.html"> <button style="width: 150px; height:50px; font-size:25px; background-color:#87cefa;"> <b>Log Out</b> </button></a></td>
    </tr>
     <tr>	
    	<td colspan=2 align="center"> <a href="city.php">Add City</a> </td>
    </tr> 	
     <tr>	
    	<td colspan=2><a href="doctors.php">Add Doctor</a></td>
    </tr> 	
     <tr>	
    	<td colspan=2><a href="viewprofile.php">View Profile</a></td>	
    </tr>

  </table>

</body>
</html>
<?php
}
else
{
    header('Location:index.html'); 
}
?>
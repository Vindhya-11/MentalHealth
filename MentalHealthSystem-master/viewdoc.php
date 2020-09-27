<?php
session_start();
if(isset($_SESSION['login_user']))
{
 $con=mysqli_connect("localhost","root","","mentalhealthsystem");
 $id=$_GET['cid'];
 $cat_query="Select * from doctors where SNo='$id'";
 $result=mysqli_query($con,$cat_query);
 ?>
 <!DOCTYPE html>
 <html>
 <head>
  <style>
  
  body {
      background-image: url("https://images.unsplash.com/photo-1500382017468-9049fed747ef?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjU3Nzg0fQ&w=1920");
    background-size:cover;
  }

  #customers {
    font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
    border-collapse: collapse;
    width: 75%;
  }

  #customers td, #customers th {
    border: 2px solid #ddd;
    padding: 8px;
    padding-bottom: 10px;
    font-weight: bold;
    font-size: 22px;
    text-align:center;
  }

 

  #customers th {
    padding-top: 12px;
    padding-bottom: 12px;
    text-align:center;
    background-color:#CFFBF2;
    color: black;
  }
</style>
  <title></title>
 </head>
 <body>
  <form method="post" enctype="multipart/form-data">
      
    <table id="customers" border="2" cellpadding="5" cellspacing="4" align="center" height="600px" width="800px">
      <tr>
        <td colspan ="2">Welcome:<?php echo $_SESSION['login_user'];?></td>
        <td colspan="3" align="center"> <a href="index.html">Logout</a>
       </td>
      </tr>

     <tr>
        <th>Doctor's Name</th>
        <th>Degree</th>
        <th>Years Of Experience</th>
        <th>Hospital Address</th>
        <th>Contact Number</th>
      </tr>
        <?php
        if(mysqli_num_rows($result) > 0)
        {
          while($row=mysqli_fetch_array($result))
          {  
        ?>
        <tr>
          <td> <?php echo $row["Name"]; ?> </td>
          <td> <?php echo $row["DocEducation"]; ?> </td>
          <td> <?php echo $row["YearsofExperience"]; ?> </td>
          <td> <?php echo $row["HospitalAddr"]; ?> </td>
          <td> <?php echo $row["ContactNumber"]; ?> </td>
        </tr> 

      <?php
            }
          }
      ?> 
  </table>
 </form>
 </body>
 </html>
 <?php 
}
 else
 {
 header('location:userlogin.html');
 }?>

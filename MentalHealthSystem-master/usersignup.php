<?php
$con=mysqli_connect("localhost","root","","mentalhealthsystem");
if(!$con)
{
 echo "database not connected";
}
if(isset($_POST['submit']))
{
 $unm=$_POST['uname'];
 $ugn=$_POST['gend'];
 $ucn=$_POST['cityname'];
 $uem=$_POST['email'];
 $ups=$_POST['pass'];
 $sql="INSERT INTO user(Username,Gender,City,Email,Password) VALUES('$unm','$ugn','$ucn','$uem','$ups')";
 if(!mysqli_query($con,$sql))
 {
  echo "error try again";
 }
 else
 {
  echo"<script>alert('User Registered');window.location.href='userlogin.html';</script>";
 }
}
?>
<!DOCTYPE html>
<html>
<head>
  <title></title>
  <style>
    *,
*:before,
*:after {
  box-sizing: border-box;
}
body {
  padding: 1em;
  font-family: 'Open Sans', 'Helvetica Neue', Helvetica, Arial, sans-serif;
  font-size: 15px;
  color: #b9b9b9;
  background-color: #e3e3e3;
  background-image: url('https://i.pinimg.com/originals/e8/a7/4e/e8a74e5feac64cadb9ae726bde33fba9.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: cover;
  
}

h1,h4 {
  color: #1AA10C;
}
input,
input[type="radio"] + label,
input[type="checkbox"] + label:before,
select option,
select {
  width: 100%;
  padding: 1em;
  line-height: 1.4;
  background-color: #f9f9f9;
  border: 1px solid #e5e5e5;
  border-radius: 3px;
  -webkit-transition: 0.35s ease-in-out;
  -moz-transition: 0.35s ease-in-out;
  -o-transition: 0.35s ease-in-out;
  transition: 0.35s ease-in-out;
  transition: all 0.35s ease-in-out;
}
input:focus {
  outline: 0;
  border-color: #64ac15;
}
input:focus + .input-icon i {
  color: #7ed321;
}
input:focus + .input-icon:after {
  border-right-color: #7ed321;
}
input[type="radio"] {
  display: none;
}
input[type="radio"] + label,
select {
  display: inline-block;
  width: 50%;
  text-align: center;
  float: left;
  border-radius: 0;
}
input[type="radio"] + label:first-of-type {
  border-top-left-radius: 3px;
  border-bottom-left-radius: 3px;
}
input[type="radio"] + label:last-of-type {
  border-top-right-radius: 3px;
  border-bottom-right-radius: 3px;
}
input[type="radio"] + label i {
  padding-right: 0.4em;
}
input[type="radio"]:checked + label,
input:checked + label:before,
select:focus,
select:active {
  background-color: #7ed321;
  color: #fff;
  border-color: #64ac15;
}
input[type="checkbox"] {
  display: none;
}
input[type="checkbox"] + label {
  position: relative;
  display: block;
  padding-left: 1.6em;
}
input[type="checkbox"] + label:before {
  position: absolute;
  top: 0.2em;
  left: 0;
  display: block;
  width: 1em;
  height: 1em;
  padding: 0;
  content: "";
}
input[type="checkbox"] + label:after {
  position: absolute;
  top: 0.45em;
  left: 0.2em;
  font-size: 0.8em;
  color: #fff;
  opacity: 0;
  font-family: FontAwesome;
  content: "\f00c";
}
input:checked + label:after {
  opacity: 1;
}
select {
  height: 3.4em;
  line-height: 2;
}
select:first-of-type {
  border-top-left-radius: 3px;
  border-bottom-left-radius: 3px;
}
select:last-of-type {
  border-top-right-radius: 3px;
  border-bottom-right-radius: 3px;
}
select:focus,
select:active {
  outline: 0;
}
select option {
  background-color: #7ed321;
  color: #fff;
}
.input-group {
  margin-bottom: 1em;
  zoom: 1;
}
.input-group:before,
.input-group:after {
  content: "";
  display: table;
}
.input-group:after {
  clear: both;
}
.input-group-icon {
  position: relative;
}
.input-group-icon input {
  padding-left: 4.4em;
}
.input-group-icon .input-icon {
  position: absolute;
  top: 0;
  left: 0;
  width: 3.4em;
  height: 3.4em;
  line-height: 3.4em;
  text-align: center;
  pointer-events: none;
}
.input-group-icon .input-icon:after {
  position: absolute;
  top: 0.6em;
  bottom: 0.6em;
  left: 3.4em;
  display: block;
  border-right: 1px solid #e5e5e5;
  content: "";
  -webkit-transition: 0.35s ease-in-out;
  -moz-transition: 0.35s ease-in-out;
  -o-transition: 0.35s ease-in-out;
  transition: 0.35s ease-in-out;
  transition: all 0.35s ease-in-out;
}
.input-group-icon .input-icon i {
  -webkit-transition: 0.35s ease-in-out;
  -moz-transition: 0.35s ease-in-out;
  -o-transition: 0.35s ease-in-out;
  transition: 0.35s ease-in-out;
  transition: all 0.35s ease-in-out;
}
.container {
  max-width: 38em;
  padding: 1em 3em 2em 3em;
  margin: 0em auto;
  background-color: #fff;
  border-radius: 4.2px;
  box-shadow: 0px 3px 10px -2px rgba(0, 0, 0, 0.2);
}
.row {
  zoom: 1;
}
.row:before,
.row:after {
  content: "";
  display: table;
}
.row:after {
  clear: both;
}
.col-half {
  padding-right: 10px;
  float: left;
  width: 50%;
}
.col-half:last-of-type {
  padding-right: 0;
}
.col-third {
  padding-right: 10px;
  float: left;
  width: 33.33333333%;
}
.col-third:last-of-type {
  padding-right: 0;
}
@media only screen and (max-width: 540px) {
  .col-half {
    width: 100%;
    padding-right: 0;
  }
}
div.form
{
    display: block;
    text-align: center;
}
form
{
    display: inline-block;
    margin-left: auto;
    margin-right: auto;
    text-align: left;
    
}


</style>
</head>
<body>
  <div class="form">
  <form method="post" enctype="multipart/form-data" autocomplete="off" class="row">
    
      
      <div class="row">
      <h1>User Registration</h1>
      <div class="input-group ">
        <input type="text" placeholder="Full Name" name="uname" style="width: 400px";/>
        <div class="input-icon"><i class="fa fa-user"></i></div>
      </div>
      <div class="input-group ">
        <input type="email" placeholder="Email Adress" name="email" style="width: 400px";/>
        <div class="input-icon"><i class="fa fa-envelope"></i></div>
      </div>
      <div class="input-group ">
        <input type="password" placeholder="Password" name="pass" style="width: 400px";/>
        <div class="input-icon"><i class="fa fa-key"></i></div>
      </div>
      <div class="input-group">
        <input type="text" placeholder="City" name="cityname" style="width: 400px";/>
        <div class="input-icon"><i class="fa fa-envelope"></i></div>
      </div>
    </div>
    <div class="row">
      <div class="col-half" style="width:300px;">
        <h4>Gender</h4>
        <div class="input-group">
          <input type="radio" name="gend" value="male" id="gender-male" />
          <label for="gender-male">Male</label>
          <input type="radio" name="gend" value="female" id="gender-female" />
          <label for="gender-female">Female</label>
        </div>
      </div>
    </div>
    
     
    <div class="row">
      <h4>Terms and Conditions</h4>
      <div class="input-group">
        <input type="checkbox" id="terms"/>
        <label for="terms" style="color:black;">I accept the terms and conditions for signing up to this service, and hereby confirm I have read the privacy policy.</label>
      </div>
      <div class="row">
      <div class="col-half" style="width:300px;">
        <div class="input-group">
      <input type="submit" name="submit" >
       </div>
      </div>
    </div>
    
</form></div>
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="profile.css">
    <title>profile</title>
</head>
<body>
    <div class="sidebar">
        <div class="sidebar-menu">
            <ul>
                <li>Profile</li>
                  <ul>
                      <li>View profile</li>
                      <li>Change password</li>
                  </ul>
                <li>Find Doctor</li>
                  <ul>
                      <li>Department</li>
                  </ul>
                <li>Appointments</li>
                   <ul>
                       <li>Book Appointment</li>
                       <li>View Appointments</li>
                   </ul>
                <li>Blood Bank</li>
                   <ul>
                       <li>Donate Blood</li>
                       <li>Receive Blood</li>
                   </ul>
            </ul>
        </div>
    </div>
<?php

?>

<form  method="POST">
    <label>Full Name</label>
    <input type="text" name="name" id="name" placeholder="full name"/><br>

    <label>Username</label>
    <input type="text" name="username" id="username" placeholder="username"/><br>

    <label>Admission date</label>
    <input type="date" name="admissiondate" id="admissiondate"/><br>

    <label>Date of birth:</label>
    <input type="date" id="dob" name="dob"><br>

   <label>Gender</label>
   <select name="gender" id="gender" aria-placeholder="select">
       <option value=""></option>
       <option value="Female">Female</option>
       <option value="Male">Male</option>

   </select><br>

   <label>Blood Group</label>
   <select name="bloodgroup" id="bloodgroup" aria-placeholder="select">
       <option value=""></option>
       <option value="A+">A+</option>
       <option value="A-">A-</option>
       <option value="B+">B+</option>
       <option value="B-">B-</option>
       <option value="AB+">AB+</option>
       <option value="AB-">AB-</option>
       <option value="O+">O+</option>
       <option value="O-">O-</option>

   </select><br>

   <label>Mobile Number</label>
   <input type="number" name="mobileno" id="mobileno"/><br>

   <label>Email</label>
   <input type="text" name="email" id="email"/><br>

   <label>Address</label>
   <input type="text" name="address" id="address"/><br>
   
   
  <input type="Submit" name="register" id="register" value="Register"/>

  


     </form>
     <?php
$con = mysqli_connect('localhost', 'root', '','patient');


$name=$_POST['name'];
$username=$_POST['username'];
$admissiondate=$_POST['admissiondate'];
$dob=$_POST['dob'];
$gender=$_POST['gender'];
$bloodgroup=$_POST['bloodgroup'];
$mobileno=$_POST['mobileno'];
$email=$_POST['email'];
$address=$_POST['address'];
$register=$_POST['register'];



$sql="INSERT INTO `patients`(`Id`,`patient_name`,`username`,`admissiondate`,`dob`,`gender`,`bloodgroup`,`mobileno`,`email`,`address`)
      VALUES('0','$name','$username','$admissiondate','$dob','$gender','$bloodgroup','$mobileno','$email','$address')";

$rs = mysqli_query($con, $sql);
if($rs)
{	
      echo"<script>setTimeout(()=>{alert('You are registered!')},500);</script>";


}

echo"<script>window.setTimeout(function() {window.location.href='profile.html';},1500);</script>";
// echo"<script>location.replace('profile.html')</script>";

?>

</body>
</html>
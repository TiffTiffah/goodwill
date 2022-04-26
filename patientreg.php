<?php

$name=$_POST["name"];
$username=$_POST["username"];
$dob=$_POST["dob"];
$date_reg=$_POST["date_reg"];
$email=$_POST["email"];
$mobileno=$_POST["mobileno"];
$height=$_POST["height"];
$weight=$_POST["weight"];
$gender=$_POST["gender"];
$bloodgrp=$_POST["bloodgrp"];


$conn=mysqli_connect("localhost","root","","goodwill");
$sql="INSERT INTO `patients`(`name`,`username`,`dob`,`date_reg`,`email`,`mobileno`,`height`,`weight`,`gender`,`bloodgrp`)
    VALUES ('$name','$username','$dob','$date_reg','$email','$mobileno','$height','$weight','$gender','$bloodgrp')";
$result=mysqli_query($conn,$sql);
if($result)
{
    // echo"<script>setTimeout(()=>{alert('Welcome!')},500);</script>";
  echo"<script>window.setTimeout(function() {window.location.href='patientpanel.html';},1000);</script>";
}


?>
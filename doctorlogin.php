<?php

$password = $_POST['password'];
$username = $_POST['username'];


$db = "localhost";
$dbuser =  "root";
$dbpass = "";
$db = "goodwill";

$conn = new mysqli ('localhost',$dbuser,$dbpass,$db);
if ($conn-> connect_error) {
    echo 'ERROR - 404';
}
// else {
//     echo('Connected! ');
// }

$sql = "SELECT * FROM `doctors` WHERE doc_login_id = '$username' AND password = '$password'";
$result = mysqli_query($conn,$sql);
$row = mysqli_fetch_array($result);

if($row ['doc_login_id'] == $username && $row ['password'] == $password){

    echo"<script>setTimeout(()=>{alert('Welcome!')},500);</script>";
    echo"<script>window.setTimeout(function() {window.location.href='doctorpanel.html';},1000);</script>";
    
}

else{
    echo "<script>alert('Check your credentials')</script>";
    echo "<script>location.replace('doctorlogin.html')</script>";

}
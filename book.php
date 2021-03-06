<?php

$conn=mysqli_connect("localhost","root","","goodwill");

$app_date = $_POST['app_date'];
$app_time = $_POST['app_date'];
$app_reason=$_POST['reason'];


$sql="INSERT INTO `appointment`(`app_date`,`app_time`,`app_reason`)
    VALUES ('$app_date','$app_time','$app_reason')'";
$result=mysqli_query($conn,$sql);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="book.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
</head>
<body>
    <aside>
        
       

        <ul class="sidebar_menu">
            <!-- <div class="logo">
                <img src="goodwill.png" alt="">
                <h4>Goodwill Health Services</h4>
            </div> -->
            
             
            <li>
                <a href="dashboard.html">
                    <i class='bx bxs-dashboard'></i>
                    <span>Dashboard</span>
                </a>
            </li>

            <li>
                <a href="">
                    <i class='bx bxs-user' ></i>
                    <span>Profile</span>
                    <i class='bx bx-chevron-right' ></i>
                </a>
                <ul class="submenu">
                    <li><a href="view.php">View Profile</a></li>
                    <li><a href="password.html">Change password</a></li>
                </ul>
            </li>

            <li>
                <a href="">
                    <i class='bx bxs-user-plus' ></i>
                    <span>Find Doctor</span>
                    <i class='bx bx-chevron-right' ></i>
                </a>
                <ul class="submenu">
                    <li><a href="department.html">Department</a></li>
                </ul>
            </li>

            <li>
                <a href="">
                    <i class='bx bxs-calendar' ></i>
                    <span>Appointments</span>
                    <i class='bx bx-chevron-right' ></i>
                </a>
                <ul class="submenu">
                    <li><a href="book.html">Book Appointment</a></li>
                    <li><a href="viewapp.php">View Appointment</a></li>
                </ul>
            </li>
                <!-- prescription and treatment -->
            <li>
                <a href="">
                    <i class='bx bxs-calendar' ></i>
                    <span>Treatment</span>
                    <i class='bx bx-chevron-right' ></i>
                </a>
                <ul class="submenu">
                    <li><a href="treatment.php">Treatments</a></li>
                    <li><a href="prescription.php">Prescription</a></li>
                </ul>
            </li>
                <!-- billing -->
            <li>
                <a href="billing.php">
                    <i class='bx bxs-dashboard'></i>
                    <span>Billing</span>
                </a>
            </li>

            <li>
                <a href="index.html">
                    <i class='bx bx-log-out'></i>
                    <span>Log Out</span>
                </a>
            </li>

            


        </ul>

            </aside>

  <section>
     
    <div class="app">

        <h1>Book Appointments</h1>
        <form action="book.php" method="POST">
    
            <div class="input-container">
                <input type="date" name="app_date" required>
                <label for="dor">Appointment Date</label>
            </div>
    
            <div class="input-container">
                <input type="time" name="app_time" required>
                <label for="dor">Appointment Time</label>
            </div>
            
            <div class="input-container">
                <span>Select Department</span>
                  <select name="dept" id="" required>
                      <option></option>
                      <option value="1">Psychology</option>
                      <option value="2">Radiology</option>
                      <option value="3">Dentistry</option>
                      <option value="4">Gynecology</option>
                      <option value="5">Cardiology</option>
                      <option value="6">General Surgery</option>
                      <option value="7">ENT</option>
                      <option value="8">Nutrition and Diet</option>
                      <option value="9">Orthopedics</option>
                      <option value="10">Renal Unit</option>
                  </select>
                
            </div>
    
            <div class="input-container">
                <span>Select Doctor</span>
                  <select name="doc-name" id="" required>
                    <option></option>
                    <option value="1">Dr. Kim Namjoon (Cardiology)</option>
                    <option value="2">Dr. Arad Nimchura (ENT)</option>
                    <option value="3">Dr. Michael Arera (Radiology)</option>
                    <option value="4">Dr. Evelyne Moraa (Oncology)</option>
                    <option value="5">Dr. Peterson Mutuku (Dentistry)</option>
                    <option value="6">Dr. Choi Yeonjun (Cardiology)</option>
                    <option value="7">Dr. Zayed Abdul-Rahman (General Surgery)</option>
                    <option value="8">Dr. Kim Jennie (Orthopedics)</option>
                    <option value="9">Dr. Nishimura Riki (Nutrition and Diet)</option>
                    <option value="10">Dr. Kim Taeri (Gynecology)</option>
                    <option value="11">Dr. Yang Jungwon (Radiology)</option>
                    <option value="12">Dr. Maina Thuku (General Surgery)</option>
                    <option value="13">Dr. Sim Jaehyun (Renal Unit)</option>
                
                  </select>
                
            </div>
    
    
            <div class="input-container">
                <textarea name="reason" id=""required></textarea>
                <label class="text" for="reason">Reason for apointment</label>
            </div>
          
            
    
                 <div class="submitbtn">
                    <input type="submit" value="Make an Appointment">
                 </div>
        </form>
    
    </div>
  </section>
  

  

</body>
</html>
<?php
session_start();

$username=$_SESSION['username'];
if(isset($_POST['change_pswd']))
{
    $old_passwd=$_POST['oldpassword'];
    $new_passwd=$_POST['newpassword'];
    $confirm_passwd=$_POST['confirmpassword'];


    $conn=mysqli_connect("localhost","root","","goodwill");
    $sql = "UPDATE `login` SET password1='$new_passwd', password2='$confirm_passwd' where username='$username'";

    $query=mysqli_query($conn,$sql);

}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="pass.css">
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
          <h1>Change Password</h1>

    <form action="" method="POST">
        <div class="input-container">
			<input type="password" name="oldpassword" placeholder="Old password" required>
			<label for="email">Old Password</label>
		</div>

		<div class="input-container">
			<input type="password" name="newpassword" placeholder="new password" required>
			<label for="mobileno">New Password</label>
		</div>

		<div class="input-container">
			<input type="password" name="confirmpassword" placeholder="confirm password" required>
			<label for="weight">Confirm Password</label>
		</div>

        <div class="submitbtn">
            <input type="submit" name="change_pswd" value="Change">
         </div>
    </form>
      </div>
  </section>
  

  

</body>
</html>


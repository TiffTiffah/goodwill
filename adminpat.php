<?php


$conn=mysqli_connect("localhost","root","","goodwill")

?>

<html>
<body>
<link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
<link rel="stylesheet" href="admin.css">
<link rel="stylesheet" href="pat.css">
<aside>
        
        <ul class="sidebar_menu">
            <li>
                <a href="admin.php">
                    <span>Dashboard</span>
                </a>
            </li>

            <li>
                <a href="">
                    <span>Doctor</span>
                    <i class='bx bx-chevron-right' ></i>
                </a>
                <ul class="submenu">
                    <li><a href="doctors.php">All Doctors</a></li>
                    <li><a href="doctors.html">Add Doctor</a></li>
                    <li><a href="doctors.html">Edit Doctor</a></li>
                </ul>
            </li>

            <li>
                <a href="">
                    <span>Patients</span>
                    <i class='bx bx-chevron-right' ></i>
                </a>
                <ul class="submenu">
                    <li><a href="patients.php">All Patients</a></li>
                    <li><a href="patients.html">Add Patient</a></li>
                    <li><a href="patients.html">Edit Patient</a></li>
                </ul>
            </li>

            <li>
                <a href="">
                    <span>Appointments</span>
                    <i class='bx bx-chevron-right' ></i>
                </a>
                <ul class="submenu">
                    <li><a href="appointment.php">Book Appointment</a></li>
                    <li><a href="schedulr.html">Doctor's Schedule</a></li>
                </ul>
            </li>

            <li>
                <a href="">
                    
                    <span>Support</span>
                    <i class='bx bx-chevron-right' ></i>
                </a>
                <ul class="submenu">
                    <li><a href="book.html">FAQs</a></li>
                    <li><a href="viewapp.html">Help Center</a></li>
                </ul>
            </li>
            <li>
            <!-- <li>
                    <a href="">
                        <span>Pharmacy</span>
                        <i class='bx bx-chevron-right' ></i>
                    </a>
                    <ul class="submenu">
                        <li><a href="book.html">Book Appointment</a></li>
                        <li><a href="viewapp.html">Doctor's Schedule</a></li>
                    </ul>
                </li> -->
                <a href="index.html">
                    <i class='bx bx-log-out'></i>
                    <span>Log Out</span>
                </a>
            </li>

            


        </ul>

            </aside>

<section>
<section class="reg">
       <h1>Registration Form</h1>




       <form action="patientreg.php" method="POST">
		<div class="input-container">
			<input type="text" name="name" placeholder="Fullname" required>
			<label for="name">Fullname</label>
		</div>


		<div class="input-container">
			<input type="date" name="date_reg" required>
			<label for="dor">Date of Registration</label>
		</div>


		<div class="input-container">
			<input type="text" name="email" placeholder="Email" required>
			<label for="email">Email</label>
		</div>
        <div class="input-container">
			<input type="text" name="mobileno" placeholder="Mobile number" required>
			<label for="mobileno">Mobile Number</label>
		</div>



		     <div class="submitbtn">
				<input type="submit" value="Register">
			 </div>

           
       </form>
</section> 
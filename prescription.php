<?php
//start session
session_start();

include('db.php');


$username =$_SESSION['username'];

    $conn=mysqli_connect("localhost","root","","goodwill");
    

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="prescription.css">
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
      <div class="app-table">
          <h1>Prescription Details</h1>
    <table class="table-content">
        <thead>
            <th>Prescription ID</th>
            <th>Medicine Name</th>
            <th>Quantity</th>
            <th>Dosage</th>
            <th>Cost</th>
           
        </thead>


        <tbody>
        <?php
				$result = mysqli_query($conn,"SELECT * FROM `prescription`");
					$i=1;
					while($q = mysqli_fetch_array($result)) {
				?>
          <tr>
             <td><?php echo $q['prescription_id']?></td>
             <td><?php echo $q['medicine_name']?></td>
             <td><?php echo $q['quantity']?></td>
             <td><?php echo $q['dosage']?></td>
             <td><?php echo $q['medicine_cost']?></td>


          </tr>
          <?php
				$i++;
				}
				?>
          
        </tbody>

     </table>

    </div>
  </section>
</body>
</html>
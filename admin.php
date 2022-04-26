<?php

$conn=mysqli_connect("localhost","root","","goodwill")

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="admin.css">
    <link rel="stylesheet" href="dash.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
</head>
<body>
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
                    <li><a href="patientreg.html">Add Patient</a></li>
                    <li><a href="patients.html">Edit Patient</a></li>
                </ul>
            </li>

            <li>
                <a href="">
                    <span>Appointments</span>
                    <i class='bx bx-chevron-right' ></i>
                </a>
                <ul class="submenu">
                    <li><a href="appointment.php">All Appointments</a></li>
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

            <div class="header">
                <h3>Overview</h3>
            </div>

            <div class="boxes">
                <div class="total-boxes">
        
                    <div class="single-box">
                       <div>
                        <!-- total number of patients -->
                           <h1>
                           <?php
                                $sql = "SELECT * FROM patients";
                                $qsql = mysqli_query($conn,$sql);
                                echo mysqli_num_rows($qsql);
                                ?>
                           </h1>
                           <span>Total Patients</span>
                           <a href="patients.php">View all</a>
                       </div>
                       <div>
                        <span class='bx bxs-user'></span>
                       </div>
                    </div>
                       <!-- total number of doctors -->
                    <div class="single-box">
                        <div>
                            <h1>
                                <?php
                                $sql = "SELECT * FROM doctors WHERE status='Active'";
                                $qsql = mysqli_query($conn,$sql);
                                echo mysqli_num_rows($qsql);
                                ?>
                            </h1>
                            <span>Total Doctors</span>
                            <a href="doctors.php">View all</a>
                        </div>
                        <div>
                            <span class='bx bxs-user'></span>
                        </div>
                     </div>
                       <!-- total number of appointments -->
                     <div class="single-box">
                        <div>
                            <h1>
                            <?php
                                $sql = "SELECT * FROM appointment";
                                $qsql = mysqli_query($conn,$sql);
                                echo mysqli_num_rows($qsql);
                                ?>
                            </h1>
                            <span>Total Appointments</span>
                            <a href="appointment.php">View all</a>
                        </div>
                        <div>
                            <span class='bx bxs-calendar'></span>
                        </div>
                     </div>
                        <!-- total number of adminstrators -->
                     <div class="single-box">
                        <div>
                            <h1>
                            <?php
                                $sql = "SELECT * FROM admin";
                                $qsql = mysqli_query($conn,$sql);
                                echo mysqli_num_rows($qsql);
                                ?>
                            </h1>
                            <span>Total Adminstrators</span>
                            <a href="">View all</a>
                        </div>
                        <div>
                            <span class='bx bxs-user'></span>
                        </div>
                     </div>
                </div>


             </div>




             <div class="app-table">
         <table class="table-content">
            <h4>Recent Activities</h4>
         <thead>
            <th>Id</th>
            <th>User</th>
            <th>Name</th>
            <th>Registration Date</th>
            <th>Email</th>
            <th>Gender</th>
            <th>Status</th>
           
        </thead>


        <tbody>
      
          <tr>
          <?php
                 $sql = "SELECT * FROM patients";
                 $result = mysqli_query($conn,$sql);
                 $i=1;
                while($q=mysqli_fetch_array($result)){;
          ?>
             <td><?php echo $q['reg_id']?></td>
             <td>Patient</td>
             <td><?php echo $q['name']?></td>
             <td><?php echo $q['date_reg']?></td>
             <td><?php echo $q['email']?></td>
             <td><?php echo $q['gender']?></td>
             <td></td>


          </tr>
          <?php
				$i++;
				}
				?>

          <tr>
          <?php
                 $sql = "SELECT * FROM doctors";
                 $result = mysqli_query($conn,$sql);
                 $q=mysqli_fetch_array($result);
          ?>
             <td><?php echo $q['doc_id']?></td>
             <td>Doctor</td>
             <td><?php echo $q['doc_name']?></td>
             <td><?php echo $q['email']?></td>
             <td></td>
             <td><?php echo $q['status']?></td>


          </tr>
          
          
        </tbody>

     </table>

    </div>


    
            </section>
  

  

</body>
</html>
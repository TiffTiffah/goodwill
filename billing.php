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
          <h1>Billing Details</h1>
    <table class="table-content">
        <thead>
            <th>Patient Id</th>
            <th>Consultancy Cost</th>
            <th>Treatment Cost</th>
            <th>Medicine Cost</th>
            <th>Total Cost</th>
           
        </thead>


        <tbody>
          <tr>
             <td></td>
             <td><?php
                                $c ="SELECT consultancy_charge from `doctors`";
                                $q = mysqli_query($conn,$c);
                                $consult=mysqli_fetch_array($q);
                                echo $consult['consultancy_charge'];
                                ?></td>
             <td><?php
                                $t ="SELECT treatment_cost  from `treatment`";
                                $q = mysqli_query($conn,$t);
                                $treat=mysqli_fetch_array($q);
                                echo $treat['treatment_cost'];
                                ?></td>
             <td>
             <?php
                                $m ="SELECT medicine_cost  from `prescription`";
                                $q = mysqli_query($conn,$m);
                                $med=mysqli_fetch_array($q);
                                echo $med['medicine_cost'];
                                ?>
             </td>
             <td>
                <?php
                    //  $total_cost = $consult + $treat + $med;    
                    //  $total= "INSERT INTO `billing`(`total_cost`) VALUES('$total_cost')";
                    //  $res=mysqli_query($conn,$total);
                    //  $tot ="SELECT  total_cost from `billing`";
                                $q = mysqli_query($conn,$tot);
                                $result=mysqli_fetch_array($q).implode();
                                echo $result['total_cost'];
                ?>
             </td>


          </tr>
          
        </tbody>

     </table>
   <div class="cont">
       <h4>How To pay</h4>
       <p>
1.Go to YOUR MPESA Menu on the phone.<br>
2.Choose Lipa Na Mpesa<br>
3.Select Paybill<br>
4.Input Goodwill Health online Paybill No. 862432.<br>
5.Input the Account no(Your full name without space)<br>
6.Enter the applicable amount and click confirm.<br>
7.Wait for the Confirmation SMS from safaricom Mpesa.<br>
</p>
   </div>
        </div>
  </section>
</body>
</html>
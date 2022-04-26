<?php


$conn=mysqli_connect("localhost","root","","goodwill")

?>

<html>
<body>
<link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
<link rel="stylesheet" href="admin.css">
<link rel="stylesheet" href="patient.css">
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
	<div class="header">
		<!-- <h4>Manage Patients</h4> -->
		<div class="pat-sub-menu">
			<a href=""><i class='bx bxs-plus-circle' ></i></i>Add Doctor</a>
			<a href=""><i class='bx bxs-minus-circle' ></i></i>Delete Doctor</a>
		</div>
	</div>
<div class="app-table">
         <table class="table-content">
         <thead>
                    <tr>
						<th>
							<span class="custom-checkbox">
								<input type="checkbox" id="selectAll">
								<label for="selectAll"></label>
							</span>
						</th>
						<th>DOC NO</th>
                        <th>NAME</th>
                        <th>ADDRESS</th>
						<th>DEPARTMENT</th>
                        <th>CONSULTANCY CHARGE</th>
                        <th>ACTION</th>
                    </tr>
                </thead>


                <tbody>
				
				<?php
				$result = mysqli_query($conn,"SELECT * FROM doctors");
					$i=1;
					while($row = mysqli_fetch_array($result)) {
				?>
				<tr id="<?php echo $row["reg_id"]; ?>">
				<td>
							<span class="custom-checkbox">
								<input type="checkbox" class="user_checkbox" data-user-id="<?php echo $row["doc_id"]; ?>">
								<label for="checkbox2"></label>
							</span>
						</td>
					<td><?php echo $row["doc_id"]; ?></td>
					<td><?php echo $row["doc_name"]; ?></td>
					<td><?php echo $row["address"]; ?></td>
					<td><?php echo $row["dept_name"]; ?></td>
					<td><?php echo $row["consultancy_charge"]; ?></td>
					<td>
						<a href="" class="bx bxs-edit" title="Edit"></a>
                        <a href="" class="bx bxs-trash-alt" title="Delete">
                            <?php
                                   $sql="DELETE FROM patients";
                                   $query=mysqli_query($conn,$sql);
                            ?>
                        </a>
                    </td>
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
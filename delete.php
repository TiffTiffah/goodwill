<?php
                               if(isset($_POST['delete']))
                               {
                                   $id =$_POST['id'];
                                   $sql="DELETE FROM patients WHERE id='$id'";
                                   $query=mysqli_query($conn,$sql);

                                   if($query)
                                   {
                                       echo'<script> alert("Data deleted successfully"): </script>';
                                       header('location: index.php');
                                   }
                                   else
                                   {
                                       echo'<script> alert("Data not deleted");</script>';
                                   }
                               }
?>
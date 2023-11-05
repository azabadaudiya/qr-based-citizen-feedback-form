<?php
include 'connection.php';
if(isset($_GET['del']))
				{
					$sq = "delete from login_table where id=".$_GET['del']."";
					$resulta = mysqli_query($con,$sq);
					header("location:viewadmin.php");
					
					if($resulta)
					{
						echo "<script> alert('Deleted Successfully');</script>";
					}
					else
					{
						echo "<script> alert('Not Deleted');</script>";
					}
				}
                
                ?>
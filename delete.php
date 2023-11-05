<?php
include 'connection.php';
if(isset($_GET['del']))
				{
					$sq = "delete from ps_details where ps_id=".$_GET['del']."";
					$resulta = mysqli_query($con,$sq);
					header("location:viewps.php");
					
					if($resulta)
					{
						echo "<script> alert('Police Station Deleted Successfully');</script>";
					}
					else
					{
						echo "<script> alert('Police Station Not Deleted');</script>";
					}
				}
                
                ?>
<?php 
error_reporting(E_ALL);
include 'connection.php';
  session_start();
	if(!isset($_SESSION['sess_admin']))
	{
		header("Location:admin.php");
	}
	else
	{
    ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>QR Code Based Citizen Feedback System</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/bootstrap.css">

    <link rel="stylesheet" href="assets/vendors/perfect-scrollbar/perfect-scrollbar.css">
    <link rel="stylesheet" href="assets/vendors/bootstrap-icons/bootstrap-icons.css">
    <link rel="stylesheet" href="assets/css/app.css">
    <link rel="shortcut icon" href="assets/images/favicon.svg" type="image/x-icon">
</head>

<body>
    <div id="app">
        <div id="main">
            <header class="mb-3">
                <a href="#" class="burger-btn d-block d-xl-none">
                    <i class="bi bi-justify fs-3"></i>
                </a>
            </header>

            <div class="page-heading">
                <div class="page-title">
                    <div class="row">
                        <div class="col-12 col-md-6 order-md-1 order-last">
                            <h3>View Police Stations</h3>
                    
                        </div>
                        <div class="col-12 col-md-6 order-md-2 order-first">
                            <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="dashboard.php">Dashboard</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">View Police Stations</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>

                   <!-- Striped rows start -->
                <section class="section">
                    <div class="row" id="table-striped">
                        <div class="col-12">
                            <div class="card">
                                
                                <div class="card-content">
                                    
                                    <!-- table striped -->
                                    <div class="table-responsive">
                                        <table class="table table-striped mb-0">
                                            <!-- ... previous code ... -->

                                            <thead> <tr height="75px"> 
                                        
        <th>CITY</th>
        <th>AREA</th>
        <th>NAME OF POLICE STATION</th>
        <th>DELETE</th>
	</tr>
			<?php
				$query = "select * from ps_details";
				$result = mysqli_query($con,$query);
				//$value = mysqli_fetch_array($result);
				while($value= mysqli_fetch_array($result))
				{
					?>
					<tr> 
						<!--<td><?php echo $value['ps_id'] ?></td>-->
						<td><?php echo $value['city'] ?></td>
						<td><?php echo $value['area'] ?></td>
						<td><?php echo $value['ps_name'] ?></td>
						<td><a href= "delete.php?del=<?php echo $value['ps_id']; ?>" onclick="return confirm('Are you sure you want to delete police station?')">DELETE </a> 
					</tr>
				<?php
				}
			
				/*if(isset($_GET['del']))
				{
					$sq = "delete from ps_details where ps_id=".$_GET['del']."";
					$resulta = mysqli_query($con,$sq);
					#header("location:viewps.php");
					
					if($resulta)
					{
						echo "<script> alert('Police Station Deleted Successfully');</script>";
					}
					else
					{
						echo "<script> alert('Police Station Not Deleted');</script>";
					}
				}*/
				?>
																		</thead> <tbody>  </tbody> </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
           
        </div>
    </div>
	<?php
				include 'menu.php';
			?>
    <script src="assets/vendors/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>

    <script src="assets/js/main.js"></script>
</body>

</html>
<?php } ?>
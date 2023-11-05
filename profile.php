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
        <div id="sidebar" class="active">
            
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
                            <h3>Profile</h3>
                           
                        </div>
                       
                    </div>
                </div>
             <section class="section">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Name</h4>
                        </div>
                        <div class="card-body">
                        <?php
				$query = "select * from login_table";
				$result = mysqli_query($con,$query);
				$value = mysqli_fetch_array($result);
                echo $value['name']?>
							</div>
							
							<div class="card-header">
                            <h4 class="card-title">Email</h4>
                        </div>
                        <div class="card-body">
                        <?php echo $value['email']?>
							</div>
							
							<div class="card-header">
                            <h4 class="card-title">Mobile Number</h4>
                        </div>
                        <div class="card-body">
                        <?php echo $value['mobile_no']?>
							</div>
							
							
                    </div>
                </section>
            </div>

           
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
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
                            <h3>Add Admin</h3>
                           
                        </div>
                        <div class="col-12 col-md-6 order-md-2 order-first">
                            <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="dashboard.php">Dashboard</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Add Admin</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>



                <!-- // Basic multiple Column Form section start -->
                <section id="multiple-column-form">
                    <div class="row match-height">
                        <div class="col-12">
                            <div class="card">
                               
                                <div class="card-content">
                                    <div class="card-body">
                                        <form class="form" method="POST">
                                            <div class="row">
                                                <div class="col-md-6 col-12">
                                                    <div class="form-group">
                                                        <label for="first-name-column">Full Name</label>
                                                        <input type="text" id="first-name-column" class="form-control"
                                                            placeholder="Full Name" name="fname">
                                                    </div>
                                                </div>
<div class="col-md-6 col-12">
                                                    <div class="form-group">
                                                        <label for="email-id-column">Email</label>
                                                        <input type="email" id="email-id-column" class="form-control"
                                                            name="email" placeholder="Email">
                                                    </div>
                                                </div>
                                                <div class="col-md-6 col-12">
                                                    <div class="form-group">
                                                       <label for="password-vertical">Password</label>
                                                            <input type="password" id="password-vertical"
                                                                class="form-control" name="password"
                                                                placeholder="Password">
                                                    </div>
                                                </div>
                                                <div class="col-md-6 col-12">
                                                    <div class="form-group">
                                                        <label for="country-floating">City</label>
                                                        <input type="text" id="country-floating" class="form-control"
                                                            name="city" placeholder="City">
                                                    </div>
                                                </div>
                                              
                                                <div class="col-12 d-flex justify-content-end">
                                                    <button type="submit" name="add"
                                                        class="btn btn-primary me-1 mb-1">Submit</button>
                                                    <button type="reset"
                                                        class="btn btn-light-secondary me-1 mb-1">Reset</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- // Basic multiple Column Form section end -->
            </div>

           
        </div>
    </div>
	<?php
				include 'menu.php';
			?>
            <?php
				if(isset($_POST['add']))
				{
                    $fname=$_POST['fname'];
					$email=$_POST['email'];
					$pass=$_POST['password'];
					$city=$_POST['city'];
					$role="2";
				
					$query="INSERT INTO login_table(name,password,email,ROLE,CITY) VALUES('$fname','$pass','$email','$role','$city')";
					$sql=mysqli_query($con,$query);
                    
					if($sql)
					{
						echo "<script> alert('Admin Added Successfully');</script>";
					}
					else
					{
						echo "<script> alert('Admin Not Added');</script>";
					}
					
				}
				
			?>
    <script src="assets/vendors/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>

    <script src="assets/js/main.js"></script>
</body>

</html>
<?php } ?>
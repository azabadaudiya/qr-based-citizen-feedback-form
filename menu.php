<?php
	include 'connection.php';

	#session_start();
    ?>
		
?><!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>QR Code Based Citizen Feedback System</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/bootstrap.css">

    <link rel="stylesheet" href="assets/vendors/iconly/bold.css">

    <link rel="stylesheet" href="assets/vendors/perfect-scrollbar/perfect-scrollbar.css">
    <link rel="stylesheet" href="assets/vendors/bootstrap-icons/bootstrap-icons.css">
    <link rel="stylesheet" href="assets/css/app.css">
    <link rel="shortcut icon" href="assets/images/favicon.svg" type="image/x-icon">
	

</head>

<body>
    <div id="app">
        <div id="sidebar" class="active">
            <div class="sidebar-wrapper active">
                <div class="sidebar-header">
                    <div class="d-flex justify-content-between">
                        <div class="logo">
                            <a href="profile.php"><img src="assets/images/logo/logo.png" alt="Logo" srcset=""></a>
                        </div>
						
                        <div class="toggler">
                            <a href="#" class="sidebar-hide d-xl-none d-block"><i class="bi bi-x bi-middle"></i></a>
                        </div>
						
                    </div>
                </div>
                <div class="sidebar-menu">
                    <ul class="menu">
                        <li class="sidebar-item active ">
                            <a href="dashboard.php" class='sidebar-link'>
                                <i class="bi bi-grid-fill"></i>
                                <span>Dashboard</span>
                            </a>
                        </li>

                    
                        <li class="sidebar-item  has-sub">
                        <a href="addadmin.php" class='sidebar-link'>
                            <i class="bi bi-person-badge-fill"></i>
                            <span>Admin</span>
                        </a>
                        <ul class="submenu ">
                        
                                <li class="submenu-item ">
                                    <a href="addadmin.php">Add Admin</a>
                                </li>
                                <li class="submenu-item ">
                                    <a href="viewadmin.php">View Admin</a>
                                </li>
                        
                        </ul>
                    </li>
 
                      						
						 <li class="sidebar-item  has-sub">
                             <a href="addps.php" class='sidebar-link'>
                                <i class="bi bi-collection-fill"></i>
                                <span>Police Station</span>
                            </a>
                            <ul class="submenu ">
                                <li class="submenu-item ">
                                    <a href="addps.php">Add Police Stations</a>
                                </li>
                                <li class="submenu-item ">
                                    <a href="viewps.php">View Police Stations</a>
                                </li>
                            </ul>
                        </li>

                        <li class="sidebar-item  ">
                            <a href="qrcode.php" class='sidebar-link'>
                                <i class="bi bi-puzzle"></i>
                                <span>QR Code</span>
                            </a>
                        </li>
						
						<li class="sidebar-item  ">
                            <a href="viewfeedback.php" class='sidebar-link'>
                                <i class="bi bi-file-earmark-medical-fill"></i>
                                <span>Feedbacks</span>
                            </a>
                        </li>
						
						<li class="sidebar-item  ">
                            <a href="logout.php" class='sidebar-link'>
                                <i class="bi bi-x-octagon-fill"></i>
                                <span>Log Out</span>
                            </a>
                        </li>						
                    </ul>
                </div>
                <button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
            </div>
        </div>
        
<header class="mb-3">
    <a href="#" class="burger-btn d-block d-xl-none">
        <i class="bi bi-justify fs-3"></i>
    </a>
<ul class="nav justify-content-end">
  <li class="nav-item">
    
  </li>
</ul>

</header>

            </div>

         
        </div>
    </div>
    <script src="assets/vendors/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>

    <script src="assets/vendors/apexcharts/apexcharts.js"></script>
    <script src="assets/js/pages/dashboard.js"></script>

    <script src="assets/js/main.js"></script>
</body>

</html>
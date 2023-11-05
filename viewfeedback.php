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
        
        </div>
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
                            <h3>Feedbacks</h3>
                            
                        </div>
                        <div class="col-12 col-md-6 order-md-2 order-first">
                            <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="dashboard.php">Dashboard</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Feedbacks</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>

                <section id="multiple-column-form">
                    <div class="row match-height">
                        <div class="col-12">
                            <div class="card">
                               
                                <div class="card-content">
                                    <div class="card-body">
                                    <form class="form" method="GET">

                                            <div class="row">
                                                <div class="col-md-6 col-12">
                                                    <div class="form-group">
                                                        <label for="first-name-column">Name of City</label>
                                                        <input type="text" id="first-name-column" class="form-control"
                                                        value="<?php if(isset($_GET['cname'])){ echo $_GET['cname']; } ?>" 
                                                        placeholder="City Name" name="cname">
                                                    </div>
                                                </div>
                                                    <div class="col-md-6 col-12">
                                                    <div class="form-group">
                                                        <label for="first-name-column">Name of Police Station</label>
                                                        <input type="text" id="first-name-column" class="form-control"
                                                        value="<?php if(isset($_GET['psname'])){ echo $_GET['psname']; } ?>"   
                                                        placeholder="Police Station Name" name="psname">
                                                    </div>
                                                </div>
                                                <div class="col-md-6 col-12">
                                                    <div class="form-group">
                                                        <label for="first-name-column">Select Date (From)</label>
                                                       <input type="date" id="first-name-column" class="form-control" value="<?php if(isset($_GET['datefrom'])){ echo $_GET['datefrom']; } ?>" 
                                                           name="datefrom">
                                                    </div>
                                                </div>

                                                <div class="col-md-6 col-12">
                                                    <div class="form-group">
                                                        <label for="first-name-column">Select Date (To)</label>
                                                        <input type="date" id="first-name-column" class="form-control" value="<?php if(isset($_GET['dateto'])){ echo $_GET['dateto']; } ?>" name="dateto">
                                                    </div>
                                                </div>                        
                                            
                                                <center>
    <button type="submit" name="search" class="btn btn-primary me-1 mb-1">Filter Feedbacks</button>
    <a href="download_feedbacks.php?download=true
    <?php 
        if(isset($_GET['cname'])){ echo '&cname='.$_GET['cname']; }
        if(isset($_GET['psname'])){ echo '&psname='.$_GET['psname']; }
        if(isset($_GET['datefrom'])){ echo '&datefrom='.$_GET['datefrom']; }
        if(isset($_GET['dateto'])){ echo '&dateto='.$_GET['dateto']; }
    ?>"
    class="btn btn-primary me-1 mb-1">Download Feedbacks</a>
</center></div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <?php 
                if(isset($_GET['search'])) {?>
                <!-- Hoverable rows start -->
                 <section class="section">
                    <div class="row" id="table-striped">
                        <div class="col-12">
                            <div class="card">
                                
                                <div class="card-content">
                                    
                                   
                                    <!-- table hover -->
                                    <div class="table-responsive">
                                        <table class="table table-hover mb-0">
                                        <thead> <tr height="75px"> 
                                            
                                            <th>CITY</th>
                                            <th>NAME OF OFFICER</th>
                                            <th>NAME OF POLICE STATION</th>
                                            <th>For which case did you approach the police station?</th>
                                            <th>Was your problem solved?</th>
                                            <th>Did any officer ask you for money, papers etc for your work?</th>
                                            <th>Submit your feedback in description.</th>
                                            <th>Submit your feedback in Audio form.</th>
										</tr>
                                        <?php 
        if(isset($_GET['search'])) {
            $conditions = [];
        
            if (!empty($_GET['cname'])) {
                $city = mysqli_real_escape_string($con, $_GET['cname']);
                $conditions[] = "CITY='$city'";
            }
        
            if (!empty($_GET['psname'])) {
                $police_station = mysqli_real_escape_string($con, $_GET['psname']);
                $conditions[] = "PS_NAME='$police_station'";
            }
        
            if (!empty($_GET['datefrom']) && !empty($_GET['dateto'])) {
                $start_date = mysqli_real_escape_string($con, $_GET['datefrom']);
                $end_date = mysqli_real_escape_string($con, $_GET['dateto']);
                $conditions[] = "DATE_TIME BETWEEN '$start_date' AND '$end_date'";
            }
        
            if (!empty($conditions)) {
                $where_clause = "WHERE " . implode(" AND ", $conditions);
                $query = "SELECT * FROM feedbacks $where_clause";
            } else {
                $query = "SELECT * FROM feedbacks";
            }
        
            $query_run = mysqli_query($con, $query);
        
            if(mysqli_num_rows($query_run) > 0) {
                foreach($query_run as $row) {
?>
                                        <tr>
                                            <td><?= $row['CITY']?></td>
                                            <td><?= $row['OFFICER_NAME']?></td>
                                            <td><?=$row['PS_NAME']?></td>
                                            <td><?=$row['option1']?></td>
                                            <td><?=$row['option2']?></td>
                                            <td><?=$row['option3']?></td>
                                            <td><?=$row['description']?></td>
                                            <td>
                                            <?php if (!empty($row['AUDIO'])): ?>
    <audio src="../FINAL_FEEDBACK/uploads/<?=$row['AUDIO']?>" controls></audio>
<?php else: ?>
    No audio available
<?php endif; ?>

</td></tr>
                                        <?php
                                    }
                                }
                                else
                                {
                                    echo "NO records found";
                                }
                            }
                            
                        ?>
</thead> <tbody>  </tbody> </table>


                                                    
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <?php 
                }
                ?>
                <!-- Hoverable rows end -->

            

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
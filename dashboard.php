<?php
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

    <link rel="stylesheet" href="assets/vendors/iconly/bold.css">

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
                <h3>QR Based Feedback Statistics</h3>
            </div>
            <div class="page-content">
                <section class="row">
                    <div class="col-12 col-lg-9">
                        <div class="row">
                            <div class="col-6 col-lg-3 col-md-6">
                                <div class="card">
                                   
                                </div>
                            </div>
                            <div class="col-6 col-lg-3 col-md-6">
                                <div class="card">
                                    
                                </div>
                            </div>
                            <div class="col-6 col-lg-3 col-md-6">
                                <div class="card">
                                    
                                </div>
                            </div>
                            <div class="col-6 col-lg-3 col-md-6">
                                <div class="card">
                                   
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h4>Citywise Feedback Analysis</h4>
                                    </div>
                                    <div class="card-body">
                                        <div id="chart-profile-visit1"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 col-xl-4">
                                <div class="card">
                                    <div class="card-header">
                                        <h4>Total Feedbacks</h4>
                                    </div>
                                    <div class="card-body">
                                        <div class="row">
                                <div class="card-body">
                                    <div id="radialGradient"></div>
                                </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-xl-8">
                                <div class="card">
                                    <div class="card-header">
                                        <h4>Latest Feedbacks</h4>
                                    </div>
                                    <div class="card-body">
                                        <div class="table-responsive">
                                            <table class="table table-hover table-lg">
                                                <thead>
                                                    <tr>
                                                        <th>Police Station</th>
                                                        <th>Feedback</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                        <?php $query = "SELECT * FROM feedbacks ORDER BY DATE_TIME DESC LIMIT 2";
                        $result = mysqli_query($con, $query);

                        if ($result) {
                            while ($row = mysqli_fetch_assoc($result)) {?>
        <tr>
                                                        <td class="col-3">
                                                            <div class="d-flex align-items-center">
                                                                <p class="mb-0"><?php echo $row['PS_NAME'];?></p>
                                                            </div>
                                                        </td>
                                                        <td class="col-auto">
                                                            <p class=" mb-0"><?php echo $row['description'];?></p>
                                                        </td>
                                                    </tr>
                                                    <?php }
} else {
    echo "Error: " . $query . "<br>" . mysqli_error($con);
}
?>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-3">
                        <div class="card">
                            
                        </div>
                        <div class="card">
                            <div class="card-header">
                                <h4>Most Cases Arising</h4>
                            </div>
                            <?php
                            $query1 = "SELECT option1, COUNT(*) AS case_count
                            FROM feedbacks
                            GROUP BY option1
                            ORDER BY case_count DESC
                            LIMIT 2";
                        $result1 = mysqli_query($con, $query1);

                        if ($result1) {
                            while ($row1 = mysqli_fetch_assoc($result1)) {?>

                            <div class="card-content pb-4">
                                <div class="recent-message d-flex px-4 py-2">

                                    <div class="name ms-2">
                                    <h6 class="text-muted mb-0"><?php echo $row1['option1'];?></h6>
                                    </div>
                                </div>                             
                             
                            </div>
                            <?php }
} else {
    echo "Error: " . $query . "<br>" . mysqli_error($con);
}
?>
                        </div>
                        <div class="card">
                            <div class="card-header">
                                <h4>Problem Resolution</h4>
                            </div>
                            <div class="card-body">
                            <?php
                            $query2 = "SELECT 
                            SUM(CASE WHEN option2 = 'Report filed and copy give' THEN 1 ELSE 0 END) as problems_solved,
                            SUM(CASE WHEN option2 = 'FIR registered and copy given' THEN 1 ELSE 0 END) as problems_not_solved
                            FROM feedbacks";

                                $result1 = mysqli_query($con, $query2);

                                if ($result1) {
                                $row = mysqli_fetch_assoc($result1);

                                $problemsSolved = $row['problems_solved'];
                                $problemsNotSolved = $row['problems_not_solved'];
                                } else {
                                echo "Error: " . $query2 . "<br>" . mysqli_error($con);
                                }
                                ?>
                                <div id="chart-visitors-profiles"></div>
                            </div>
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

    <script src="assets/vendors/apexcharts/apexcharts.js"></script>
    <script src="assets/js/pages/dashboard.js"></script>

    <script src="assets/js/main.js"></script>
    

    <!-- After defining or retrieving $problemsSolved and $problemsNotSolved in your PHP code -->

<script>
    let optionsVisitorsProfile1 = {
        series: [<?php echo $problemsSolved; ?>, <?php echo $problemsNotSolved; ?>],
        labels: ['Report filed and copy given', 'FIR registered and copy given'],
        colors: ['#435ebe', '#55c6e8'],
        chart: {
            type: 'donut',
            width: '100%',
            height: '350px'
        },
        legend: {
            position: 'bottom'
        },
        plotOptions: {
            pie: {
                donut: {
                    size: '30%'
                }
            }
        }
    }

    var chartVisitorsProfile1 = new ApexCharts(document.getElementById('chart-visitors-profiles'), optionsVisitorsProfile1);
    chartVisitorsProfile1.render();
</script>
<?php
 $query3 = "SELECT COUNT(*) as total_feedbacks FROM feedbacks";
 $result4 = mysqli_query($con, $query3);
 
 if ($result4) {
     $row4 = mysqli_fetch_assoc($result4);
     $totalFeedbacks = $row4['total_feedbacks'];
 } else {
     $totalFeedbacks = 0; // Default to 0 if there's an error
 }
?>
<script>
    var radialGradientOptions = {
        series: [<?php echo $totalFeedbacks; ?>],
  chart: {
    height: 350,
    type: "radialBar",
    toolbar: {
      show: true,
    },
  },
  plotOptions: {
    radialBar: {
      startAngle: -135,
      endAngle: 225,
      hollow: {
        margin: 0,
        size: "70%",
        background: "#fff",
        image: undefined,
        imageOffsetX: 0,
        imageOffsetY: 0,
        position: "front",
        dropShadow: {
          enabled: true,
          top: 3,
          left: 0,
          blur: 4,
          opacity: 0.24,
        },
      },
      track: {
        background: "#fff",
        strokeWidth: "67%",
        margin: 0, // margin is in pixels
        dropShadow: {
          enabled: true,
          top: -3,
          left: 0,
          blur: 4,
          opacity: 0.35,
        },
      },

      dataLabels: {
        show: true,
        name: {
          offsetY: -10,
          show: true,
          color: "#888",
          fontSize: "17px",
        },
        value: {
          formatter: function(val) {
            return parseInt(val);
          },
          color: "#111",
          fontSize: "36px",
          show: true,
        },
      },
    },
  },
  fill: {
    type: "gradient",
    gradient: {
      shade: "dark",
      type: "horizontal",
      shadeIntensity: 0.5,
      gradientToColors: ["#ABE5A1"],
      inverseColors: true,
      opacityFrom: 1,
      opacityTo: 1,
      stops: [0, 100],
    },
  },
  stroke: {
    lineCap: "round",
  },
  labels: ["Feedbacks"],
};

var radialGradient = new ApexCharts(document.querySelector("#radialGradient"), radialGradientOptions);
radialGradient.render();
</script>

<?php

$query4= "SELECT CITY, COUNT(*) AS feedback_count FROM feedbacks GROUP BY CITY";
    $result5 = mysqli_query($con, $query4);

    $cities = [];
    $feedbackCounts = [];

    if ($result5) {
        while ($row6 = mysqli_fetch_assoc($result5)) {
            $cities[] = $row6['CITY'];
            $feedbackCounts[] = $row6['feedback_count'];
        }
    }
    ?>


<script>
var optionsProfileVisit1 = {
	annotations: {
		position: 'back'
	},
	dataLabels: {
		enabled:false
	},
	chart: {
		type: 'bar',
		height: 300
	},
	fill: {
		opacity:1
	},
	plotOptions: {},
	series: [{
		name: 'sales',
		data: <?php echo json_encode($feedbackCounts); ?>
	}],
	colors: '#435ebe',
	xaxis: {
		categories: <?php echo json_encode($cities); ?>
	},
}



var chartProfileVisit1 = new ApexCharts(document.querySelector("#chart-profile-visit1"), optionsProfileVisit1);

chartProfileVisit1.render();

</script>
</body>

</html>
<?php
}
?>
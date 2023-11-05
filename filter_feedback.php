<?php
include 'connection.php';

$city = $_GET['cname'];
$psName = $_GET['psname'];
$fromDate = $_GET['datefrom'];
$toDate = $_GET['dateto'];

$query = "SELECT * FROM feedbacks WHERE CITY='$city' AND PS_NAME='$psName' AND DATE_TIME BETWEEN '$fromDate' AND '$toDate'";
$result = mysqli_query($con, $query);

if ($result) {
    while ($row = mysqli_fetch_assoc($result)) {
        echo '<tr>
                  <td>'.$row['CITY'].'</td>
                  <td>'.$row['OFFICER_NAME'].'</td>
                  <td>'.$row['PS_NAME'].'</td>
                  <td>'.$row['option1'].'</td>
                  <td>'.$row['option2'].'</td>
                  <td>'.$row['option3'].'</td>
                  <td>'.$row['description'].'</td>
               </tr>';
    }
} else {
    echo "Error: " . $query . "<br>" . mysqli_error($con);
}

mysqli_close($con);
?>

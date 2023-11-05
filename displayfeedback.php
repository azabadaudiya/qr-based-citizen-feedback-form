<?php
error_reporting(E_ALL);
include 'connection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $city = $_POST['cname'];
    $police_station = $_POST['psname'];
    $start_date = $_POST['datefrom'];
    $end_date = $_POST['dateto'];

    $query = "SELECT * FROM feedbacks WHERE CITY='$city' AND PS_NAME='$police_station' AND DATE_TIME BETWEEN '$start_date' AND '$end_date'";
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
                      <td>'.$row['DESCRIPTION'].'</td>
                   </tr>';
        }
    } else {
        echo "Error: " . $query . "<br>" . mysqli_error($con);
    }

    mysqli_close($con);
}
?>

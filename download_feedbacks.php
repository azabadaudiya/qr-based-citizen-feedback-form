<?php
include 'connection.php';

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

$filename = "feedbacks.csv";
header('Content-Type: text/csv');
header('Content-Disposition: attachment; filename='.$filename);

$output = fopen('php://output', 'w');

fputcsv($output, array('FEEDBACK_ID','CITY', 'OFFICER_NAME', 'PS_NAME', 'option1', 'option2', 'option3', 'description', 'AUDIO'));

while($row = mysqli_fetch_assoc($query_run)) {
    fputcsv($output, $row);
}

fclose($output);
?>

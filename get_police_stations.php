<?php
include 'connection.php';

if(isset($_POST['city'])) {
    $selectedCity = $_POST['city'];

    $query = "SELECT ps_name FROM ps_details WHERE city = '$selectedCity'";
    $result = mysqli_query($con, $query);

    $options = '<option selected="true" value="-Select-">-Select-</option>';
    while($row = mysqli_fetch_assoc($result)) {
        $options .= '<option name="ps_name">'.$row['ps_name'].'</option>';
    }

    echo $options;
}
?>

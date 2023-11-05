<?php
include 'connection.php';
session_start();    
    if(isset($_POST['login']))
		{
			$email=$_POST['uemail'];
			$pass=$_POST['upass'];
			$query=("SELECT * FROM login_table WHERE EMAIL='".$email."' AND PASSWORD='".$pass."'");
			 $run = mysqli_query($con, $query);
    $count = mysqli_num_rows($run);

 if ($count == 1) { // Check $count, not $run

        $_SESSION['sess_admin'] = $email;
        header("Location: dashboard.php");
        exit; // Make sure to exit after using header to prevent further script execution
    } else {
        echo "<script>alert('Enter correct Email ID or Password');</script>";
    }
}
?>
<?php
	//1. connect to server
	
	
    $HOSTNAME='localhost';
    $USERNAME='id21486209_harsh';
    $PASSWORD='Harsh@123';
    $DATABASE='id21486209_qr_feedbackform';

    $con=mysqli_connect($HOSTNAME,$USERNAME,$PASSWORD,$DATABASE);

    if($con){
       // echo "Connection successfull";
    }
    else{
        die(mysqli_error($con));
    }
	
?>
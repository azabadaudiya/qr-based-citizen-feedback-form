<?php 
error_reporting(E_ALL);
include 'connection.php';
session_start();
if (isset($_POST['submit']) && isset($_FILES['my_audio'])) {
    $cname = mysqli_real_escape_string($con, $_POST['cname']);
    $psname = mysqli_real_escape_string($con, $_POST['psname']);
    $officername = mysqli_real_escape_string($con, $_POST['officername']);
    $option1 = mysqli_real_escape_string($con, $_POST['option1']);
    $option2 = mysqli_real_escape_string($con, $_POST['option2']);
    $option3 = mysqli_real_escape_string($con, $_POST['option3']);
    $desc = mysqli_real_escape_string($con, $_POST['desc']);
    $captcha = mysqli_real_escape_string($con, $_POST['captcha']);
    
    date_default_timezone_set("Asia/Calcutta");
    $datetime = date('Y-m-d H:i:s');

    $filename=addslashes($_FILES['my_audio']['name']);
			$tmpname=addslashes($_FILES['my_audio']['tmp_name']);	
			
			date_default_timezone_set("Asia/Calcutta");
			
			$iname=(string)(date('YmdHis'));
			$extension=pathinfo($filename,PATHINFO_EXTENSION);
			$audio_path=$iname.".".$extension;
			if($filename)
			{
				move_uploaded_file($_FILES['my_audio']['tmp_name'],"uploads/".$audio_path);
			}

            if($_SESSION['CODE']==$captcha){
                $query="insert into feedbacks(CITY,OFFICER_NAME,PS_NAME,option1,option2,option3,description,AUDIO,DATE_TIME) 
            values('$cname','$officername','$psname','$option1','$option2','$option3','$desc','$audio_path','$datetime')";
            if (mysqli_query($con, $query)) {
                echo "<script>alert('Successfully');</script>";
               echo "<div style='font-size: 24px; font-weight: bold; color: #007bff; text-align: center;'>Thank you for your feedback!</div>";

                header("Location:index.php");
                 
            } else {
                echo "Error: " . mysqli_error($con);
                echo "<div style='font-size: 24px; font-weight: bold; color: #007bff; text-align: center;'>Please try again!!</div>";

            }
        }
       else{
           echo "<script>alert('Invalid Captcha');</script>";
            echo "<div style='font-size: 24px; font-weight: bold; color: #007bff; text-align: center;'>Please try again!!</div>";
       }
               
    }?>
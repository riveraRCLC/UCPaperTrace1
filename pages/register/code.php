<?php
session_start();        
require 'config.php';

if(isset($_POST['save_student']))
{
    $email = mysqli_real_escape_string($con,$_POST['email']);
    $firstName = mysqli_real_escape_string($con,$_POST['firstName']);
    $middleName = mysqli_real_escape_string($con,$_POST['middleName']);
    $lastName = mysqli_real_escape_string($con,$_POST['lastName']);
    $password = mysqli_real_escape_string($con,$_POST['password']);
    
    

    $query = "INSERT INTO user (uemail, ufname, umname, ulname, upassword) VALUES ('$email','$firstName','$middleName','$lastName' ,'$password')";

    $query_run = mysqli_query($con, $query);
    if($query_run){
        $_SESSION['message'] = "Student Created Successfully";
        header("Location: register.php");
        exit(0);
    }else{
        $_SESSION['message'] = "Student NOT CREATED";
        header("Location: register.php");
         exit(0);
    }

}
?>
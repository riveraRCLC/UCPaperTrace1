<?php
session_start();        
require 'config.php';

if(isset($_POST['save_student']))
{
    $firstName = mysqli_real_escape_string($con,$_POST['firstName']);
    $lastName = mysqli_real_escape_string($con,$_POST['lastName']);
    $email = mysqli_real_escape_string($con,$_POST['email']);
    $password = mysqli_real_escape_string($con,$_POST['password']);
          
    $query = "INSERT INTO user (firstName,lastName,email,password) VALUES ('$firstName','$lastName','$email','$password')";

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
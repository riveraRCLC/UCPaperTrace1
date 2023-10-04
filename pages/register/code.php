<?php
        
        require("config.php");

        if(isset($_POST['save_student']))
        {
          $name = mysqli_real_escape_string($con,$_POST['userfname']);
          $userlname = mysqli_real_escape_string($con,$_POST['userlname']);
          $useremail = mysqli_real_escape_string($con,$_POST['useremail']);
          $password = mysqli_real_escape_string($con,$_POST['password']);
          $confirmpassword = mysqli_real_escape_string($con,$_POST['confirmpassword']);

        }
        
      ?>
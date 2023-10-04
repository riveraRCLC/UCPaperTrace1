<?php
        
        require("config.php");

        if(isset($_POST['submit']))
        {
          $userfname = mysqli_real_escape_string($conn,$_POST['userfname']);
          $userlname = mysqli_real_escape_string($conn,$_POST['userlname']);
          $useremail = mysqli_real_escape_string($conn,$_POST['useremail']);
          $password = mysqli_real_escape_string($conn,$_POST['password']);
          $confirmpassword = mysqli_real_escape_string($conn,$_POST['confirmpassword']);

        }
        
      ?>
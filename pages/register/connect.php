<?php

    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $email = $_POST['email'];
    $password = $_POST['password'];
   
     
    //Database Connection
    $conn = new mysqli('localhost','root','','test');
    if($conn->connection_error){
        die('Connection Failed:  '.$conn->connection_error);
    }else{
        $stmt = $conn->prepare("insert into user(firstName, lastName, email, password)
        values(?,?,?,?)");
        $stmt->bind_param("ssss",$firstName,$firstName,$lastName,$email);
        $stmt->execute();
        echo "Registration Successfully";
        $stmt->close();
        $conn->close();
    }
     
?>
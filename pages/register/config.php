<?php

$host = "localhost";
$dbusername = "root";
$dbpass = "";
$dbname = "supportticketingdb";


$conn = new mysqli ($host, $dbusername, $dbpass, $dbname);


if(mysqli_connect_error())
{
    die('Connect Error('. mysqli_connect_errno().')'. mysqli_connect_error());
}

?>
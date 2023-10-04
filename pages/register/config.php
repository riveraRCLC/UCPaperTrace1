<?php

$con = mysqli_connect("localhost","root","","suppTicketDB");

if(!$con){
    die('Connection Failed'. mysqli_connect_error());
}

?>
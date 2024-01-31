<?php
    $servername="localhost";
    $username="root";
    $password="";
    $databasename="mitm";
    $conn=new mysqli($servername,$username,$password,$databasename);
    if($conn->connect_error){
        die($conn->connect_error);
    }
    
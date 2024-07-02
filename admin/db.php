<?php
    $servername="localhost";
    // $username="u728233529_nbs";
    // $password=";hbq73#i/?Z7";
    // $databasename="u728233529_nbs";
    // $base_url="https://mitm.edu.in/";

    
    $username="root";
    $password="";
    $databasename="mitm";
    $base_url="https://localhost/mitm/";
    $conn=new mysqli($servername,$username,$password,$databasename);
    if($conn->connect_error){
        die($conn->connect_error);
    }
    ?>

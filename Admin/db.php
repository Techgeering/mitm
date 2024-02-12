<?php
    $servername="localhost";
    $username="u728233529_mitm";
    $password="e^M0RFB[r";
    $databasename="u728233529_mitm";
    $base_url="https://localhost/mitm/";
    $conn=new mysqli($servername,$username,$password,$databasename);
    if($conn->connect_error){
        die($conn->connect_error);
    }
    ?>
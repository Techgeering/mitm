<?php
    $servername="localhost";

    //Don't Change
    // $username="u728233529_spcon";
    // $password="4=u#9A1+I";
    // $databasename="u728233529_spcon";
    $username="root";
    $password="";
    $databasename="construction";
    $conn=new mysqli($servername,$username,$password,$databasename);
    if($conn->connect_error){
        die($conn->connect_error);
    }
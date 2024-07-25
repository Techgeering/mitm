<?php
include 'admin/db.php';
$response = array();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $ggname = $_POST["gname1"];
    $ggregistration = $_POST["gregistration1"];
    $ggbranch = $_POST["gbranch1"];
    $ggyear = $_POST["gyear1"];
    $gggender = $_POST["ggender1"];
    $ggphone = $_POST["gphone1"];
    $ggemail = $_POST["gemail1"];
    $ggrievance = $_POST["grievance1"];

    $sql = "INSERT INTO mitm_grievance (grievance_name, grievance_registration, grievance_branch, grievance_year, grievance_gender, grievance_phone, grievance_email, grievance) 
    VALUES ('$ggname', '$ggregistration', '$ggbranch', '$ggyear', '$gggender', '$ggphone', '$ggemail', '$ggrievance')";
    if (mysqli_query($conn, $sql)) {
        $response["status"] = "success";
        $response["message"] = "Your Grievance has recorded";
    } else {
        $response["status"] = "error";
        $response["message"] = "Error: " . mysqli_error($conn);
    }

}
header('Content-Type: application/json');
echo json_encode($response);
?>
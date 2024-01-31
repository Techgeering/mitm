<?php
include 'Admin/db.php';
$response = array();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $cname = $_POST["fname"];
        $clname = $_POST["lname"];
        $cemail = $_POST["email"];
        $cphone = $_POST["phone"];
        $cmessage = $_POST["message"];

        $sql = "INSERT INTO mitm_contact (contact_name, contact_email, contact_phone, contact_message) VALUES ('$cname $clname', '$cemail', '$cphone', '$cmessage')";
        if (mysqli_query($conn, $sql)) {
                $response["status"] = "success";
                $response["message"] = "Your Contacts has recorded";
        } else {
                $response["status"] = "error";
                $response["message"] = "Error: " . mysqli_error($conn);
        }

}
header('Content-Type: application/json');
echo json_encode($response);
?>
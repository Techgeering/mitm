<?php
include 'admin/db.php';
$response = array();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $ename = $_POST["name"];
        $eemail = $_POST["email"];
        $ephone = $_POST["phone"];
        $ecourse = $_POST["course"];
        $emessage = $_POST["message"];

        $sql = "INSERT INTO mitm_enquiry (enquiry_name, enquiry_email, enquiry_mobile, enquiry_course, enquiry_message) VALUES ('$ename', '$eemail', '$ephone', '$ecourse', '$emessage')";
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
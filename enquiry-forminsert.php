<?php
include 'admin/db.php';
$response = array();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $ename = $_POST["name"];
        $eemail = $_POST["email"];
        $ephone = $_POST["phone"];
        $eaddress = $_POST["address"];
        $ecourse = $_POST["course"];
        $elexamapp = $_POST["lexamapp"];
        $elexamper = $_POST["lexamper"];
        $eentranceapp = $_POST["entranceapp"];

        $sql = "INSERT INTO mitm_enquiry (enquiry_name, enquiry_email, enquiry_mobile, enquiry_address, enquiry_course, last_exam_appeared, last_exam_percentage, entrance_appeared) VALUES ('$ename', '$eemail', '$ephone', '$eaddress', '$ecourse', '$elexamapp', '$elexamper', '$eentranceapp')";
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
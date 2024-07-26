<?php
include 'admin/db.php';
$response = array();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $frole = $_POST["feedrole"];
        $fname = $_POST["feedname"];
        $fnumber = $_POST["feednumber"];
        $femail = $_POST["feedemail"];
        $feedback = $_POST["feedmessage"];

        $sql = "INSERT INTO mitm_feedback (feedback_role, feedback_name, feedback_number, feedback_email, feedback) VALUES ('$frole', '$fname', '$fnumber', '$femail', '$feedback')";
        if (mysqli_query($conn, $sql)) {
                $response["status"] = "success";
                $response["message"] = "Your Feedback has recorded";
        } else {
                $response["status"] = "error";
                $response["message"] = "Error: " . mysqli_error($conn);
        }

}
header('Content-Type: application/json');
echo json_encode($response);
?>
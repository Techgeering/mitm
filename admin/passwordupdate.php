<?php include 'db.php';
if (isset($_POST['changepass'])) {
    $cur_pas = $_POST['cur_pas'];
    $new_pas = $_POST['new_pas'];
    $rnew_pas = $_POST['rnew_pas'];

    // Check if new passwords match
    if ($new_pas == $rnew_pas) {
        $sql1 = "SELECT * FROM mitm_user WHERE id = 1";

        // Execute the SQL query
        $result = $conn->query($sql1);

        // Check if query executed successfully
        if ($result !== false) {
            // Check if one row is returned
            if ($result->num_rows == 1) {
                $row = $result->fetch_assoc();
                $psd = $row['mitm_user_password'];

                // Verify current password
                if ($cur_pas == $psd) {
                    $sql2 = "UPDATE mitm_user SET mitm_user_password='$new_pas' WHERE id = 1";

                    if ($conn->query($sql2) === TRUE) {
                        // Password updated successfully
                        header("location: passchange.php");
                        exit; // Terminate further execution
                    } else {
                        // Error updating password
                        $error_message = "Error updating password: " . $conn->error;
                    }
                } else {
                    $error_message = "Current Password Mismatch";
                }
            } else {
                $error_message = "User not found or multiple users found with the same ID.";
            }
        } else {
            // Error executing query
            $error_message = "Error: " . $conn->error;
        }
    } else {
        $error_message = "Password Mismatch";
    }
}
?>
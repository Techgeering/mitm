<?php
include 'db.php';

// SQL query to add phone_number and email columns to mitm_faculty table
$sql = "ALTER TABLE mitm_faculty
        ADD COLUMN phone_number VARCHAR(20),
        ADD COLUMN email_id VARCHAR(50)";

// Execute the query and check for errors
if ($conn->query($sql) === TRUE) {
    echo "Table mitm_faculty altered successfully";
} else {
    echo "Error altering table: " . $conn->error;
}

// Close the database connection
$conn->close();
?>
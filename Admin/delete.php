<?php include 'db.php';

if (isset($_GET['delete'], $_GET['tb'], $_GET['returnpage'], $_GET['tbc'])) {
  $id = $_GET['delete'];
  $id1 = $_GET['tb'];
  $id2 = $_GET['returnpage'];
  $tbc = $_GET['tbc'];

  // Array of image columns to check and delete
  $imageColumns = ['image', 'image1', 'pdf'];

  // Loop through each image column
  foreach ($imageColumns as $imageColumn) {
    // Check if the image column exists in the table
    $checkColumnSql = "SHOW COLUMNS FROM $id1 LIKE '$imageColumn'";
    $columnResult = mysqli_query($conn, $checkColumnSql);

    if ($columnResult && mysqli_num_rows($columnResult) > 0) {
      // The image column exists in the table, so proceed to delete it

      // Fetch the image file name associated with the record
      $sql = "SELECT $imageColumn FROM $id1 WHERE $tbc = '$id'";
      $result = mysqli_query($conn, $sql);

      // Check if the query was successful and fetch the result
      if ($result && $row = mysqli_fetch_assoc($result)) {
        $imageToDelete = $row[$imageColumn]; // Get the image file name to delete

        // Define the path to the image file
        $imagePath = 'upload/' . $imageToDelete;
        $imagePath = 'upload/member/' . $imageToDelete;

        // Check if the image file exists and delete it
        if (file_exists($imagePath)) {
          if (unlink($imagePath)) {
            echo "<script>alert('Image Deleted Successfully');</script>";
          } else {
            echo "Error deleting image: $imagePath"; // Display an error message if the image cannot be deleted
          }
        }
      }
    }
  }


  $sql = "DELETE FROM $id1 WHERE $tbc = $id";
  if ($conn->query($sql) === true) {
    header("location: $id2");
  } else {
    echo $conn->error;
  }
  $conn->close();
} else {
  echo "Missing required parameters.";
}
?>
<?php include 'db.php';

if (isset($_GET['delete'], $_GET['tb'], $_GET['returnpage'], $_GET['tbc'])) {
  $id = $_GET['delete'];
  $id1 = $_GET['tb'];
  $id2 = $_GET['returnpage'];
  $tbc = $_GET['tbc'];

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
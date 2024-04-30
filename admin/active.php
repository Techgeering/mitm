<!DOCTYPE html>
<html>

<body>
  <?php include 'db.php';
  $id = $_GET["status"];
  $id1 = $_GET["tb"];
  $id2 = $_GET["returnpage"];

  $tbc = $_GET["tbc"];
  $tbc1 = $_GET["tbc1"];

  //var_dump($id);exit();
  $sql1 = "UPDATE $id1 SET $tbc1='0' WHERE $tbc='$id'";

  if ($conn->query($sql1) == true) {
    //var_dump("done");exit();
    header("location:$id2");
  } else {
    // var_dump("not-done");exit();
  
    $conn->error;
  }
  $conn->close();

  ?>
</body>

</html>
<?php include 'db.php';


  $id=$_GET['delete'];
  $id1=$_GET['tb'];
  $id2=$_GET['returnpage'];
  $tbc=$_GET['tbc'];
 //var_dump($id,$id1,$id2);exit();
  $sql="DELETE FROM $id1 where $tbc=$id";
  if($conn->query($sql)==true){
      header("location:".$id2);
  }
  else{$conn->error;}
  $conn->close();
?>
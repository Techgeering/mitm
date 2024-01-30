<!DOCTYPE html>
<html>
<body>
<?php include 'db.php';
   $id = $_GET["status0"];
   $id1 = $_GET["tb"];
   $id2 = $_GET["returnpage"];
   $tbc=$_GET["tbc"];
   $tbc1=$_GET["tbc1"];
   

          $sql1="UPDATE $id1 SET $tbc1='1' WHERE $tbc='$id'";
          if($conn->query($sql1)==true){
            header("location:$id2");
          }
          else{$conn->error;}
          $conn->close();

?> 
</body>
</html>       
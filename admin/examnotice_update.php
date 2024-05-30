<?php
include_once ('db.php');
if (isset($_POST['updateexam-notice'])) {
    $id = $_POST['id2'];
    $examtitle = $_POST['examnotice'];
    $publishdate = $_POST['publishdate'];

    $sql2 = "UPDATE exam_notice SET noticetitle ='$examtitle', publish_date='$publishdate' WHERE id='$id'";
    if ($conn->query($sql2) === true) {
        echo '<script>window.location.href = "examnotice.php";</script>';
    } else {
        echo $conn->error;
    }
    $conn->close();
}
?>
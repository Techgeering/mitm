<?php
include_once('db.php');
if (isset($_POST['updatenotice'])) {
    $id = $_POST['id2'];
    $notice = $_POST['notice'];
    $date = $_POST['date2'];

    $sql2 = "UPDATE mitm_notice SET notice ='$notice', date_of_upload='$date' WHERE id='$id'";
    if ($conn->query($sql2) === true) {
        echo '<script>window.location.href = "notice.php";</script>';
    } else {
        echo $conn->error;
    }
    $conn->close();
}
?>
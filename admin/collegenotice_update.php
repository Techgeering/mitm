<?php
                include_once ('db.php');
                if (isset($_POST['updatetitle'])) {
                    $id = $_POST['id2'];
                    $title = $_POST['title'];
                    $publishdate = $_POST['date2'];

                    $sql2 = "UPDATE college_notice SET title ='$title', publish_date='$publishdate' WHERE id='$id'";
                    if ($conn->query($sql2) === true) {
                        echo '<script>window.location.href = "collegenotice.php";</script>';
                    } else {
                        echo $conn->error;
                    }
                    $conn->close();
                }
                ?>
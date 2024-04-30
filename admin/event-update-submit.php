<?php


include_once('db.php');
if (isset($_POST['update'])) {
                    $id = $_POST['id3'];
                    $link = $_POST['link'];
                    $date = $_POST['date'];

                    $sql2 = "UPDATE mitm_news SET link ='$link', date_of_upload='$date' WHERE id='$id'";
                    if ($conn->query($sql2) === true) {
                        echo '<script>window.location.href = "news-event.php";</script>';
                    } else {
                        echo $conn->error;
                    }
                    $conn->close();
                }

                ?>
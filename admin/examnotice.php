<?php
session_start();
$form = $_SESSION["mitm_user_username"];
$collage = $_SESSION["college_type"];
if ($form === NULL) {
    header("location:login.php");
} else {
    ?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="utf-8">
        <title>MITM | Exam Notice</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="" name="keywords">
        <meta content="" name="description">

        <!-- Favicon -->
        <link href="img/favicon.ico" rel="icon">

        <!-- Google Web Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600;700&display=swap" rel="stylesheet">

        <!-- Icon Font Stylesheet -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

        <!-- Libraries Stylesheet -->
        <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
        <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

        <!-- Customized Bootstrap Stylesheet -->
        <link href="assets/css/bootstrap.min.css" rel="stylesheet">

        <!-- Template Stylesheet -->
        <link href="assets/css/style.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script> <!-- Include SweetAlert library -->
        <!-- pagination -->
        <!-- DataTables CSS -->
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.css">
        <!-- jQuery -->
        <script type="text/javascript" src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <!-- DataTables JS -->
        <script type="text/javascript" src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.js"></script>
        <!-- End pagination -->
    </head>

    <body>
        <div class="container-xxl position-relative bg-white d-flex p-0">
            <!-- Spinner Start -->
            <div id="spinner"
                class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
                <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                    <span class="sr-only">Loading...</span>
                </div>
            </div>
            <!-- Spinner End -->

            <!-- Sidebar Start -->
            <div class="sidebar pe-4 pb-3">
                <nav class="navbar bg-light navbar-light">
                    <a href="index.html" class="navbar-brand mx-4 mb-3">
                        <?php if ($collage == 1) { ?>
                            <h3 class="text-primary">MITM</h3>
                        <?php } elseif ($collage == 2) { ?>
                            <h3 class="text-primary">NAUMI</h3>
                        <?php } ?>
                    </a>
                    <div class="navbar-nav w-100">
                        <?php
                        if ($collage === '1') {
                            echo '<a href="contact.php" class="nav-item nav-link"><i class="far fa-comments nav-icon"></i>Contact</a>';
                            echo '<a href="enquiry.php" class="nav-item nav-link"><i
                                class="bi bi-file-earmark-text me-2"></i>Admission Enq</a>';
                            echo '<a href="feedbackdata.php" class="nav-item nav-link"><i
                                class="bi bi-file-earmark-text me-2"></i>Feedback</a>';
                            echo '<a href="grievance.php" class="nav-item nav-link">
                                <i class="fas fa-exclamation-circle"></i> Grievance Cell</a>';
                            echo '<div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                                <i class="fa fa-object-group nav-icon"></i> Gallery
                            </a>
                            <div class="dropdown-menu bg-transparent border-0">
                                <a href="life-image.php" class="dropdown-item">
                                    <i class="bi bi-image me-2"></i> Image
                                </a>
                                <a href="life-video.php" class="dropdown-item">
                                    <i class="bi bi-play-circle me-2"></i> Video
                                </a>
                            </div>
                        </div>';
                            echo '<a href="news-event.php" class="nav-item nav-link"><i class="bi bi-newspaper me-2"></i> News and
                            Event</a>';
                            echo '<a href="notice.php" class="nav-item nav-link"><i class="bi bi-bell me-2"></i>Notice</a>';
                            echo '<a href="collegenotice.php" class="nav-item nav-link"><i class="fas fa-bullhorn"></i>College
                            Notice</a>';
                            echo '<a href="examnotice.php" class="nav-item nav-link active"><i
                                class="fas fa-exclamation-triangle"></i>Exam
                            Notice</a>';
                            echo '<a href="placement.php" class="nav-item nav-link"><i class="fas fa-briefcase"></i>Placement</a>';
                            echo '<a href="placement-student1.php" class="nav-item nav-link"><i class="fas fa-briefcase"></i>Placement
                            Std</a>';
                            echo '<a href="faculty.php" class="nav-item nav-link"><i class="fas fa-user-graduate"></i>Faculty</a>';
                        } else {
                            echo '<div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                                <i class="fa fa-object-group nav-icon"></i> Gallery
                            </a>
                            <div class="dropdown-menu bg-transparent border-0">
                                <a href="life-image.php" class="dropdown-item">
                                    <i class="bi bi-image me-2"></i> Image
                                </a>
                                <a href="life-video.php" class="dropdown-item">
                                    <i class="bi bi-play-circle me-2"></i> Video
                                </a>
                            </div>
                        </div>';
                            echo '<a href="contact.php" class="nav-item nav-link"><i class="far fa-comments nav-icon"></i>Contact</a>';
                            echo '<a href="collegenotice.php" class="nav-item nav-link"><i class="fas fa-bullhorn"></i>College
                            Notice</a>';
                            echo '<a href="examnotice.php" class="nav-item nav-link active"><i
                                class="fas fa-exclamation-triangle"></i>Exam
                            Notice</a>';
                            echo '<a href="placement.php" class="nav-item nav-link"><i class="fas fa-briefcase"></i>Placement</a>';
                            echo '<a href="placement-student1.php" class="nav-item nav-link"><i class="fas fa-briefcase"></i>Placement
                            Student</a>';
                            echo '<a href="faculty.php" class="nav-item nav-link"><i class="fas fa-user-graduate"></i>Faculty</a>';
                        }
                        ?>
                    </div>
                </nav>
            </div>
            <!-- Sidebar End -->

            <!-- Content Start -->
            <div class="content">
                <!-- Navbar Start -->
                <nav class="navbar navbar-expand bg-light navbar-light sticky-top px-4 py-0">
                    <a href="index.html" class="navbar-brand d-flex d-lg-none me-4">
                        <h2 class="text-primary mb-0"><i class="fa fa-hashtag"></i></h2>
                    </a>
                    <a href="#" class="sidebar-toggler flex-shrink-0">
                        <i class="fa fa-bars"></i>
                    </a>
                    <div class="ms-auto d-flex align-items-center"> <!-- Added d-flex and align-items-center classes -->
                        <a href="logout.php" class="nav-item nav-link me-3"> <!-- Added margin between buttons -->
                            <i class="far fa-share-square nav-icon"></i> Logout
                        </a>
                        <a href="passchange.php" class="nav-item nav-link">
                            <i class="fas fa-cog nav-icon"></i> Setting <!-- Used Font Awesome cog icon -->
                        </a>
                    </div>
                </nav>
                <!-- Navbar End -->

                <!-- Table Start -->
                <div class="container-fluid pt-4 px-4">
                    <div class="row g-4">
                        <div class="">
                            <div class="bg-light rounded h-100 p-4">
                                <h6 class="mb-4">Exam Notice</h6>
                                <div class="col-sm-12 mb-2">
                                    <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                        data-bs-target="#modal-bs-primary">
                                        <i class="fas fa-plus"></i>Add
                                    </button>
                                </div>
                                <table id="example1" class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th scope="col" class="text-center">Slno</th>
                                            <th scope="col" class="text-center">Title</th>
                                            <th scope="col" class="text-center">Publish Date</th>
                                            <th scope="col" class="text-center">manage</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        <?php include 'db.php';

                                        $sql = "SELECT * FROM exam_notice where college_type= '$collage' ORDER BY id DESC";
                                        $result = $conn->query($sql);
                                        $i = 1;
                                        while ($row = $result->fetch_assoc()) {
                                            ?>
                                            <tr>
                                                <td class="text-center">
                                                    <?php echo $i;
                                                    $i++; ?>
                                                </td>
                                                </td>
                                                <td class="text-center">
                                                    <?php echo $row['noticetitle']; ?>
                                                </td>
                                                <td class="text-center">
                                                    <?php echo $row['publish_date']; ?>
                                                </td>
                                                <td class=text-center><?php $status = $row['status'];
                                                $status = $row['status'];
                                                $idm = $row['id'];
                                                $tb = 'exam_notice';
                                                $tbc = 'id';
                                                $tbc1 = 'status';
                                                $returnpage = 'examnotice.php';

                                                if ($status == 1) {
                                                    echo "<a href='active.php?status=$idm&tb=$tb&tbc=$tbc&tbc1=$tbc1&returnpage=$returnpage' class='btn btn-success' onclick='return confirmAction(\"active\", $idm, \"$tb\", \"$tbc\", \"$tbc1\", \"$returnpage\")'>
                                                    <i class='fas fa-unlock'></i></a>";
                                                } else {
                                                    echo "<a href='inactive.php?status0=$idm&tb=$tb&tbc=$tbc&tbc1=$tbc1&returnpage=$returnpage' class='btn btn-danger' onclick='return confirmAction(\"inactive\", $idm, \"$tb\", \"$tbc\", \"$tbc1\", \"$returnpage\")'>
                                                    <i class='fas fa-lock'></i></a>";
                                                }
                                                ?>
                                                    <button type="button" name="update1"
                                                        onclick="myfcn5('<?php echo $row['id']; ?>','<?php echo $row['noticetitle']; ?>','<?php echo $row['publish_date']; ?>')"
                                                        class="btn btn-primary m-2" data-bs-toggle="modal"
                                                        data-bs-target="#modal-primary-up">
                                                        <i class='fas fa-edit'></i>
                                                    </button>
                                                    <a
                                                        onclick="confirmDelete(<?php echo $row['id']; ?>, tb='exam_notice', tbc='id', returnpage='examnotice.php');">
                                                        <i class="fas fa-trash-alt btn btn-danger"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                        <?php } ?>
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th scope="col" class="text-center">Slno</th>
                                            <th scope="col" class="text-center">Title</th>
                                            <th scope="col" class="text-center">Publish Date</th>
                                            <th scope="col" class="text-center">manage</th>
                                        </tr>
                                        <tfoot>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <?php

                if (isset($_POST['add'])) {

                    $notice = $_POST["noticetitle"];
                    $enoticedate = $_POST["examnoticedate"];

                    $sql = "INSERT INTO exam_notice(noticetitle,publish_date,status,college_type) 
             VALUES('$notice','$enoticedate','1','$collage')";
                    if ($conn->query($sql) === true) {
                        echo "<script>window.location.href='examnotice.php';</script>";
                    } else {
                        $conn->error;
                    }
                }
                $conn->close();
                ?>

                <!--modal for add-->
                <div class="modal fade" data-bs-backdrop="static" id="modal-bs-primary">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title">Upload Exam Notice</h4>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <form action="<?php $_SERVER['PHP_SELF']; ?>" method='post' enctype="multipart/form-data">
                                <div class="modal-body">
                                    <div class="card-body">
                                        <div class="form-group">
                                            <label for="exampleInputtext">notice</label>
                                            <textarea id="title" class="form-control" name="noticetitle" rows="5"
                                                required></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputtext">Date of Upload</label>
                                            <input type="date" id="date" class="form-control" name="examnoticedate"
                                                required />
                                        </div>
                                    </div>
                                    <div class="modal-footer justify-content-between">
                                        <button type="button" class="btn btn-secondary"
                                            data-bs-dismiss="modal">Close</button>
                                        <button type="Submit" name="add" value="Submit"
                                            class="btn btn-primary">Upload</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <!-- /.modal-content -->
                    </div>
                    <!-- /.modal-dialog -->
                </div>

                <!--modal for update-->
                <div class="modal fade" data-bs-backdrop="static" id="modal-primary-up">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title">Update Exam Notice</h4>
                                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <form action="examnotice_update.php" method='post' enctype="multipart/form-data">
                                <div class="modal-body">
                                    <div class="card-body">
                                        <input type="hidden" name="id2" id="updateexam">

                                        <div class="form-group">
                                            <label for="exampleInputimage">Notice</label>
                                            <input type="text" class="form-control" name="examnotice" id="updateexamtitle">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputtext">Publish Date</label>
                                            <input type="date" id="publishdateid2" class="form-control"
                                                name="publishdate" />
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer justify-content-between">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    <button type="submit" name="updateexam-notice" value="update"
                                        class="btn btn-primary">Update</button>
                                </div>
                            </form>
                        </div>
                        <!-- /.modal-content -->
                    </div>
                    <!-- /.modal-dialog -->
                </div>
                <!-- Table End -->
                <script>
                    function myfcn5(idx, examtitle, publishdate2) {
                        console.log(examtitle + "  " + publishdate2);

                        document.getElementById("updateexam").value = idx;
                        document.getElementById("updateexamtitle").value = examtitle;
                        document.getElementById("publishdateid2").value = publishdate2;
                    }
                </script>
                <?php include "common/footer.php" ?>
            <?php } ?>
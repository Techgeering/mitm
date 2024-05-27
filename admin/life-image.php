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
        <title>MITM | Home</title>
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
                            echo '<div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle active" data-bs-toggle="dropdown"><i
                                    class="fa fa-object-group nav-icon"></i>Life</a>';
                            echo '<div class="dropdown-menu bg-transparent border-0">
                                <a href="life-image.php" class="dropdown-item">
                                    <i class="bi bi-image me-2"></i> Image
                                </a>
                                <a href="life-video.php" class="dropdown-item">
                                    <i class="bi bi-play-circle me-2"></i> Video
                                </a>
                            </div>
                        </div>';
                            echo '<a href="news-event.php" class="nav-item nav-link"><i class="bi bi-newspaper me-2"></i>News and
                            Event</a>';
                            echo '<a href="notice.php" class="nav-item nav-link"><i class="bi bi-bell me-2"></i>Notice</a>';
                            echo '<a href="collegenotice.php" class="nav-item nav-link"><i class="fas fa-bullhorn"></i>College
                            Notice</a>';
                            echo '<a href="examnotice.php" class="nav-item nav-link"><i class="fas fa-exclamation-triangle"></i>Exam
                            Notice</a>';

                            echo '<a href="placement.php" class="nav-item nav-link"><i
                                class="fas fa-briefcase"></i>Placement</a>';
                            echo '<a href="placement-student1.php" class="nav-item nav-link"><i class="fas fa-briefcase"></i>Placement
                                Std</a>';
                            echo '<a href="faculty.php" class="nav-item nav-link"><i class="fas fa-user-graduate"></i>Faculty</a>';
                            echo '<a href="logout.php" class="nav-item nav-link"><i
                                class="far fa-share-square nav-icon"></i>Logout</a>';
                        } else {
                            echo '<div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle active" data-bs-toggle="dropdown"><i
                                    class="fa fa-object-group nav-icon"></i>Life</a>';
                            echo '<div class="dropdown-menu bg-transparent border-0">
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
                            echo '<a href="examnotice.php" class="nav-item nav-link"><i class="fas fa-exclamation-triangle"></i>Exam
                            Notice</a>';
                            echo '<a href="placement.php" class="nav-item nav-link"><i
                                class="fas fa-briefcase"></i>Placement</a>';
                            echo '<a href="placement-student1.php" class="nav-item nav-link"><i class="fas fa-briefcase"></i>Placement
                            Std</a>';
                            echo '<a href="faculty.php" class="nav-item nav-link"><i class="fas fa-user-graduate"></i>Faculty</a>';
                            echo '<a href="logout.php" class="nav-item nav-link"><i
                                class="far fa-share-square nav-icon"></i>Logout</a>';
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

                </nav>
                <!-- Navbar End -->

                <!-- Table Start -->
                <div class="container-fluid pt-4 px-4">
                    <div class="row g-4">
                        <div class="">
                            <div class="bg-light rounded h-100 p-4">
                                <h6 class="mb-4">LIFE @ MITM</h6>
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
                                            <th scope="col" class="text-center">Image</th>
                                            <th scope="col" class="text-center">Date Of Upload</th>
                                            <th scope="col" class="text-center">manage</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        <?php include 'db.php';
                                        $sql = "SELECT * FROM mitm_life_image where college_type= '$collage' ORDER BY id DESC";
                                        $result = $conn->query($sql);
                                        $i = 1;
                                        while ($row = $result->fetch_assoc()) { ?>
                                            <tr>
                                                <td class=text-center><?php echo $i;
                                                $i++; ?></td>
                                                <td class=text-center><img src="upload/<?php echo $row['image']; ?>" width="50"
                                                        height="50">
                                                </td>
                                                <td class=text-center><?php echo $row['date_of_upload']; ?></td>
                                                <td class=text-center><?php $status = $row['status'];
                                                $status = $row['status'];
                                                $idm = $row['id'];
                                                $tb = 'mitm_life_image';
                                                $tbc = 'id';
                                                $tbc1 = 'status';
                                                $returnpage = 'life-image.php';

                                                if ($status == 1) {
                                                    echo "<a href='active.php?status=$idm&tb=$tb&tbc=$tbc&tbc1=$tbc1&returnpage=$returnpage' class='btn btn-success' onclick='return confirmAction(\"active\", $idm, \"$tb\", \"$tbc\", \"$tbc1\", \"$returnpage\")'>
                                                    <i class='fas fa-unlock'></i></a>";
                                                } else {
                                                    echo "<a href='inactive.php?status0=$idm&tb=$tb&tbc=$tbc&tbc1=$tbc1&returnpage=$returnpage' class='btn btn-danger' onclick='return confirmAction(\"inactive\", $idm, \"$tb\", \"$tbc\", \"$tbc1\", \"$returnpage\")'>
                                                    <i class='fas fa-lock'></i></a>";
                                                }
                                                ?>
                                                    <a
                                                        onclick="confirmDelete(<?php echo $row['id']; ?>, tb='mitm_life_image', tbc='id', returnpage='life-image.php');">
                                                        <i class="fas fa-trash-alt btn btn-danger"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                        <?php } ?>
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th scope="col" class="text-center">Slno</th>
                                            <th scope="col" class="text-center">Image</th>
                                            <th scope="col" class="text-center">Date Of Upload</th>
                                            <th scope="col" class="text-center">manage</th>
                                        </tr>
                                        <tfoot>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>


                <?php

                if (isset($_POST['addgallery'])) {

                    $image_name = $_FILES['image']['name'];
                    $image_size = $_FILES['image']['size'];
                    $image_tmp = $_FILES['image']['tmp_name'];
                    $file_type = pathinfo($image_name, PATHINFO_EXTENSION);
                    $new_file_name = uniqid() . '.' . $file_type;

                    $upload_dir = "upload/";
                    if (!is_dir($upload_dir)) {
                        mkdir($upload_dir);
                    } else {
                        $conn->error;
                    }
                    $target_file = $upload_dir . $new_file_name;
                    if (move_uploaded_file($image_tmp, $target_file)) {
                        // echo "<script>
                        //     alert('image uploaded successfuly');
                        //     </script>";
                    } else {
                        // echo "<script>
                        //     alert('image not uploaded');
                        //     </script>";
                    }
                    $sql = "INSERT INTO mitm_life_image(image,status,college_type) 
             VALUES('$new_file_name','1','$collage')";
                    if ($conn->query($sql) === true) {
                        echo "<script>window.location.href='life-image.php';</script>";
                    } else {
                        $conn->error;
                    }
                    $conn->close();
                }

                ?>

                <div class="modal fade" data-bs-backdrop="static" id="modal-bs-primary">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title">Upload Image</h4>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method='post' enctype="multipart/form-data">
                                <div class="modal-body">
                                    <div class="card-body">
                                        <div class="form-group">
                                            <label for="exampleInputimage">Select Image</label>
                                            <input type="file" id="exampleInputimage" name="image" required>
                                        </div>
                                    </div>
                                    <div class="modal-footer justify-content-between">
                                        <button type="button" class="btn btn-secondary"
                                            data-bs-dismiss="modal">Close</button>
                                        <button type="submit" name="addgallery" value="Submit"
                                            class="btn btn-primary">Upload</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- Table End -->
                <?php include "common/footer.php" ?>
            <?php } ?>
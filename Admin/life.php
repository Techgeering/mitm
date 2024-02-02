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
                    <h3 class="text-primary"><i class="fa fa-hashtag me-2"></i>DASHMIN</h3>
                </a>
                <div class="d-flex align-items-center ms-4 mb-4">
                    <div class="position-relative">
                        <img class="rounded-circle" src="assets/img/user.jpg" alt="" style="width: 40px; height: 40px;">
                        <div
                            class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1">
                        </div>
                    </div>
                    <div class="ms-3">
                        <h6 class="mb-0">Jhon Doe</h6>
                        <span>Admin</span>
                    </div>
                </div>
                <div class="navbar-nav w-100">
                    <a href="contact.php" class="nav-item nav-link"><i class="fa fa-th me-2"></i>Contact</a>
                    <a href="enquiry.php" class="nav-item nav-link"><i class="fa fa-th me-2"></i>Enquiry</a>
                    <a href="life.php" class="nav-item nav-link active"><i class="fa fa-table me-2"></i>Life</a>
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
                            <h6 class="mb-4">Enquiry</h6>
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th scope="col" class="text-center">Slno</th>
                                        <th scope="col" class="text-center">Image</th>
                                        <th scope="col" class="text-center">Date Of Upload</th>
                                        <th scope="col" class="text-center">Status</th>
                                        <th scope="col" class="text-center">Delete</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    <?php include 'db.php';
                                    $sql = "SELECT * FROM mitm_life_image ORDER BY id DESC";
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
                                            $idm = $row['id'];
                                            if ($status == 1) {
                                                echo "<a href='active.php?status=$idm&&tb=construction_gallery_image&&returnpage=gallery_image.php' class='btn btn-success'onclick='return confirmAction(\"active\", $idm)'><i class='fas fa-unlock'></i></a>";
                                            } else {
                                                echo "<a href='inactive.php?status0=$idm&&tb=construction_gallery_image&&returnpage=gallery_image.php' class='btn btn-danger'onclick='return confirmAction(\"inactive\", $idm)'><i class='fas fa-lock'></i></a>";
                                            }
                                            ?>
                                                <a class="btn btn-danger m-2"
                                                    onclick="confirmDelete(<?php echo $row['id']; ?>)"><i
                                                        class="fas fa-trash-alt"></i></a>
                                            </td>
                                        </tr>
                                    <?php } ?>
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th scope="col" class="text-center">Slno</th>
                                        <th scope="col" class="text-center">Image</th>
                                        <th scope="col" class="text-center">Date Of Upload</th>
                                        <th scope="col" class="text-center">Status</th>
                                        <th scope="col" class="text-center">Delete</th>
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

                $upload_dir = "upload/img/";
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
                $sql = "INSERT INTO construction_gallery_image(image,status) 
             VALUES('$new_file_name','1')";
                if ($conn->query($sql) === true) {
                    echo '<script>window.location.href = "gallery_image.php";</script>';
                } else {
                    $conn->error;
                }
                $conn->close();
            }

            ?>

            <div class="modal fade" data-backdrop="static" id="modal-primary">
                <div class="modal-dialog">
                    <div class="modal-content bg-primary">
                        <div class="modal-header">
                            <h4 class="modal-title">Upload Image</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <form action="<?php $_SERVER['PHP_SELF']; ?>" method='post' enctype="multipart/form-data">
                            <div class="modal-body">

                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="exampleInputimage">Select Image</label>
                                        <input type="file" id="exampleInputimage" name="image" required>
                                    </div>
                                </div>
                                <div class="modal-footer justify-content-between">
                                    <button type="button" class="btn btn-outline-light"
                                        data-dismiss="modal">Close</button>
                                    <button type="Submit" name="addgallery" value="Submit"
                                        class="btn btn-outline-light">Upload</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <!-- /.modal-content -->
                </div>
            </div>
            <!-- Table End -->
            <?php include "common/footer.php" ?>
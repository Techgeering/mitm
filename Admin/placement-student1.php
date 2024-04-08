<?php
session_start();
$form = $_SESSION["mitm_user_username"];
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
                        <h3 class="text-primary">MITM</h3>
                    </a>
                    <div class="navbar-nav w-100">
                        <a href="contact.php" class="nav-item nav-link"><i class="far fa-comments nav-icon"></i>Contact</a>
                        <a href="enquiry.php" class="nav-item nav-link"><i
                                class="bi bi-file-earmark-text me-2"></i>Admission Enquiry</a>
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i
                                    class="fa fa-object-group nav-icon"></i>Life</a>
                            <div class="dropdown-menu bg-transparent border-0">
                                <a href="life-image.php" class="dropdown-item">
                                    <i class="bi bi-image me-2"></i> Image
                                </a>
                                <a href="life-video.php" class="dropdown-item">
                                    <i class="bi bi-play-circle me-2"></i> Video
                                </a>
                            </div>
                        </div>
                        <a href="news-event.php" class="nav-item nav-link"><i class="bi bi-newspaper me-2"></i>News and
                            Event</a>
                        <a href="notice.php" class="nav-item nav-link"><i class="bi bi-bell me-2"></i>Notice</a>
                        <a href="placement.php" class="nav-item nav-link"><i class="fas fa-briefcase"></i>Placement</a>
                        <a href="placement-student.php" class="nav-item nav-link active"><i class="fas fa-briefcase"></i>Placement Student</a>
                        <a href="faculty.php" class="nav-item nav-link"><i class="fas fa-user-graduate"></i>Faculty</a>
                        <a href="logout.php" class="nav-item nav-link"><i
                                class="far fa-share-square nav-icon"></i>Logout</a>
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
                                <h6 class="mb-4">Placement Student</h6>
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
                                            <th scope="col" class="text-center">Year</th>
                                            <th scope="col" class="text-center">Branch</th>
                                            <th scope="col" class="text-center">Student</th>
                                            <th scope="col" class="text-center">Company Name</th>
                                            <th scope="col" class="text-center">Date Of Upload</th>
                                            <th scope="col" class="text-center">Manage</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        <?php include 'db.php';
                                        $sql = "SELECT * FROM mitm_campus_placement ORDER BY id DESC";
                                        $result = $conn->query($sql);
                                        $i = 1;
                                        while ($row = $result->fetch_assoc()) { ?>
                                            <tr>
                                                <td class=text-center><?php echo $i;
                                                $i++; ?></td>
                                                <td class=text-center><img src="upload/<?php echo $row['image']; ?>" width="50"
                                                        height="50">
                                                </td>
                                                <td class=text-center><?php echo $row['year']; ?></td>
                                                <td class=text-center><?php echo $row['branch']; ?></td>
                                                <td class=text-center><?php echo $row['student_name']; ?></td>
                                                <td class=text-center><?php echo $row['company_name']; ?></td>
                                                <td class=text-center><?php echo $row['date_of_upload']; ?></td>
                                                <td class=text-center><?php $status = $row['status'];
                                                $status = $row['status'];
                                                $idm = $row['id'];
                                                $tb = 'mitm_campus_placement';
                                                $tbc = 'id';
                                                $tbc1 = 'status';
                                                $returnpage = 'placement-student1.php';

                                                if ($status == 1) {
                                                    echo "<a href='active.php?status=$idm&tb=$tb&tbc=$tbc&tbc1=$tbc1&returnpage=$returnpage' class='btn btn-success' onclick='return confirmAction(\"active\", $idm, \"$tb\", \"$tbc\", \"$tbc1\", \"$returnpage\")'>
                                                    <i class='fas fa-unlock'></i></a>";
                                                } else {
                                                    echo "<a href='inactive.php?status0=$idm&tb=$tb&tbc=$tbc&tbc1=$tbc1&returnpage=$returnpage' class='btn btn-danger' onclick='return confirmAction(\"inactive\", $idm, \"$tb\", \"$tbc\", \"$tbc1\", \"$returnpage\")'>
                                                    <i class='fas fa-lock'></i></a>";
                                                }
                                                ?>
                                                    <button type="button" name="update1"
                                                        onclick="myfcn3(<?php echo $row['id']; ?>,'<?php echo $row['image']; ?>','<?php echo $row['year']; ?>','<?php echo $row['branch']; ?>','<?php echo $row['student_name']; ?>','<?php echo $row['company_name']; ?>')"
                                                        class="btn btn-primary m-2" data-bs-toggle="modal"
                                                        data-bs-target="#updateplacement">
                                                        <i class='fas fa-edit'></i>
                                                    </button>
                                                    <a
                                                        onclick="confirmDelete(<?php echo $row['id']; ?>, tb='mitm_campus_placement', tbc='id', returnpage='placement-student1.php');">
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
                                            <th scope="col" class="text-center">Year</th>
                                            <th scope="col" class="text-center">Branch</th>
                                            <th scope="col" class="text-center">Student</th>
                                            <th scope="col" class="text-center">Company Name</th>
                                            <th scope="col" class="text-center">Date Of Upload</th>
                                            <th scope="col" class="text-center">Manage</th>
                                        </tr>
                                        <tfoot>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <?php
                if (isset($_POST['addplacement'])) {

                    $year = $_POST['year'];
                    $branch = $_POST['branch'];
                    $studentname = $_POST['student'];
                    $companyname = $_POST['company'];

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
                    $sql = "INSERT INTO mitm_campus_placement(image,year,branch,student_name,company_name ,status) 
             VALUES('$new_file_name','$year','$branch','$studentname','$companyname','1')";
                    if ($conn->query($sql) === true) {
                        echo '<script>window.location.href = "placement-student1.php";</script>';
                    } else {
                        $conn->error;
                    }
                    $conn->close();
                }
                ?>
                <!--Add modal-->
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
                                            <label for="exampleInputimage">Select a file</label>
                                            <input type="file" id="exampleInputimage" name="image" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputtext">Year</label>
                                            <select name="year" id="year" class="form-control">
                                                <option value="2022-23">2022-23</option>
                                                <option value="2023-24">2023-24</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputtext">Branch</label>
                                            <select name="branch" id="branch" class="form-control">
                                                <option value="COMPUTER SCIENCE ENGINEERING">COMPUTER SCIENCE ENGINEERING
                                                </option>
                                                <option value="MECHANICAL ENGINEERING">MECHANICAL ENGINEERING</option>
                                                <option value="ELECTRONICS AND COMMUNICATION ENGINEERING">ELECTRONICS AND
                                                    COMMUNICATION ENGINEERING</option>
                                                <option value="MASTERS IN BUSINESS ADMINISTRATIVE">MASTERS IN BUSINESS
                                                    ADMINISTRATIVE</option>
                                                <option value="ELECTRICAL ENGINEERING">ELECTRICAL ENGINEERING</option>
                                                <option value="CIVIL ENGINEERING">CIVIL ENGINEERING</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputtext">Student Name</label>
                                            <input type="text" class="form-control" id="student" name="student" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputtext">Company Name</label>
                                            <input type="text" class="form-control" id="company" name="company" required>
                                        </div>
                                    </div>
                                    <div class="modal-footer justify-content-between">
                                        <button type="button" class="btn btn-secondary"
                                            data-bs-dismiss="modal">Close</button>
                                        <button type="submit" name="addplacement" value="Submit"
                                            class="btn btn-primary">Upload</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!--End Add modal-->
                <?php
                if (isset($_POST['updateplacement'])) {
                    $id = $_POST["id1"];
                    $year = $_POST['year'];
                    $branch = $_POST['branch'];
                    $studentname = $_POST['student'];
                    $companyname = $_POST['company'];

                    // Check if a new image is uploaded
                    if (!empty($_FILES['image']['name'])) {
                        $image_name = $_FILES['image']['name'];
                        $image_size = $_FILES['image']['size'];
                        $image_tmp = $_FILES['image']['tmp_name'];
                        $file_type = pathinfo($image_name, PATHINFO_EXTENSION);
                        $new_file_name = uniqid() . '.' . $file_type;

                        $upload_dir = "upload/";
                        $target_file = $upload_dir . $new_file_name;

                        if (move_uploaded_file($image_tmp, $target_file)) {
                            // Image uploaded successfully
                            // Update the database with the new image
                            $sql = "UPDATE mitm_campus_placement SET image='$new_file_name', year='$year', branch='$branch', student_name='$studentname', company_name='$companyname' WHERE id='$id'";
                            if ($conn->query($sql) === true) {
                                echo '<script>window.location.href = "placement-student1.php";</script>';
                            } else {
                                echo $conn->error;
                            }
                        } else {
                            // Image not uploaded
                            echo "<script>alert('Image not uploaded');</script>";
                        }
                    } else {
                        // No new image uploaded, update other fields only
                        $sql = "UPDATE mitm_campus_placement SET year='$year', branch='$branch', student_name='$studentname',company_name='$companyname' WHERE id='$id'";
                        if ($conn->query($sql) === true) {
                            echo '<script>window.location.href = "placement-student1.php";</script>';
                        } else {
                            echo $conn->error;
                        }
                    }
                    $conn->close();
                }
                ?>
                <!-- Table End -->
                <?php include "common/footer.php" ?>
                <!--Modal for Update members-->
                <div class="modal fade" data-bs-backdrop="static" id="updateplacement">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title">placement</h4>
                                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method='post' enctype="multipart/form-data">
                                <div class="modal-body">
                                    <input type="hidden" name="id1" id="zxy1">
                                    <div class="form-group">
                                        <label for="image">image</label>
                                        <input type="file" class="form-control" id="zxy2" name="image">
                                        <img id="zxy" src="#" alt="pic" width="50" height="50" />
                                        <img src="upload/<?php echo $row['image']; ?>" id="image" alt="profile image"
                                            width="50" height="50">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputpassword1">Year</label>
                                        <select class="form-control" id="year" name="year">
                                            <option value="2022-23">2022-23</option>
                                            <option value="2023-24">2023-24</option>
                                            <!-- Add more options as needed -->
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputpassword1">Branch</label>
                                        <select class="form-control" id="branch" name="branch">
                                            <option value="COMPUTER SCIENCE ENGINEERING">COMPUTER SCIENCE ENGINEERING
                                            </option>
                                            <option value="MECHANICAL ENGINEERING">MECHANICAL ENGINEERING</option>
                                            <option value="ELECTRONICS AND COMMUNICATION ENGINEERING">ELECTRONICS AND
                                                COMMUNICATION ENGINEERING</option>
                                            <option value="MASTERS IN BUSINESS ADMINISTRATIVE">MASTERS IN BUSINESS
                                                ADMINISTRATIVE</option>
                                            <option value="ELECTRICAL ENGINEERING">ELECTRICAL ENGINEERING</option>
                                            <option value="CIVIL ENGINEERING">CIVIL ENGINEERING</option>
                                            <!-- Add more options as needed -->
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="text">Student Name</label>
                                        <input type="text" class="form-control" id="student1" name="student">
                                    </div>
                                    <div class="form-group">
                                        <label for="text">Campany Name</label>
                                        <input type="text" class="form-control" id="company1" name="company">
                                    </div>
                                    <div class="modal-footer justify-content-between">
                                        <button type="button" class="btn btn-outline-dark"
                                            data-bs-dismiss="modal">Close</button>
                                        <button type="Submit" name="updateplacement" value="Submit"
                                            class="btn btn-outline-dark">UPDATE</button>
                                    </div>
                            </form>
                            <!--/.modal-content -->
                        </div>
                        <!-- /.modal-dialog -->
                    </div>
                </div>
                <!-- End Modal for Update Carousel-->
                <script>
                    //id get for update Members.-->
                    function myfcn3(id1, image, year, branch, student, company) {
                        document.getElementById("zxy1").value = id1;
                        document.getElementById("image").src = "upload/" + image;
                        document.getElementById("year").value = year;
                        document.getElementById("branch").value = branch;
                        document.getElementById("student1").value = student;
                        document.getElementById("company1").value = company;
                    }
                </script>
                <script>
                    //member image
                    $("#zxy2").change(function () {
                        const file3 = this.files[0];
                        if (file3) {
                            let reader3 = new FileReader();
                            reader3.onload = function (event) {
                                $("#zxy").attr("src", event.target.result);
                            };
                            reader3.readAsDataURL(file3);
                        }
                    });
                </script>

            <?php } ?>
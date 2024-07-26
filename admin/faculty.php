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
        <title>MITM | Faculty</title>
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
                    <a href="contact" class="navbar-brand mx-4 mb-3">
                        <?php if ($collage == 1) { ?>
                            <h3 class="text-primary">MITM</h3>
                        <?php } elseif ($collage == 2) { ?>
                            <h3 class="text-primary">NAUMI</h3>
                        <?php } ?>
                    </a>
                    <div class="navbar-nav w-100">
                        <?php
                        if ($collage === '1') {
                            echo '<a href="contact" class="nav-item nav-link"><i class="far fa-comments nav-icon"></i>Contact</a>';
                            echo '<a href="enquiry" class="nav-item nav-link"><i
                                class="bi bi-file-earmark-text me-2"></i>Admission Enq</a>';
                            echo '<a href="feedbackdata" class="nav-item nav-link"><i
                                class="bi bi-file-earmark-text me-2"></i>Feedback</a>';
                            echo '<a href="grievance" class="nav-item nav-link">
                                <i class="fas fa-exclamation-circle"></i> Grievance Cell</a>';
                            echo '<div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i
                                    class="fa fa-object-group nav-icon"></i>Gallery</a>
                            <div class="dropdown-menu bg-transparent border-0">
                                <a href="life-image" class="dropdown-item">
                                    <i class="bi bi-image me-2"></i> Image
                                </a>
                                <a href="life-video" class="dropdown-item">
                                    <i class="bi bi-play-circle me-2"></i> Video
                                </a>
                            </div>
                        </div>';
                            echo '<a href="news-event" class="nav-item nav-link"><i class="bi bi-newspaper me-2"></i>News and
                            Event</a>';
                            echo '<a href="notice" class="nav-item nav-link"><i class="bi bi-bell me-2"></i>Notice</a>';
                            echo '<a href="collegenotice" class="nav-item nav-link"><i class="fas fa-bullhorn"></i>College
                            Notice</a>';
                            echo '<a href="examnotice" class="nav-item nav-link"><i class="fas fa-exclamation-triangle"></i>Exam
                            Notice</a>';

                            echo '<a href="placement" class="nav-item nav-link"><i class="fas fa-briefcase"></i>Placement</a>';
                            echo '<a href="placement-student1" class="nav-item nav-link"><i class="fas fa-briefcase"></i>Placement
                            Std</a>';
                            echo '<a href="faculty" class="nav-item nav-link active"><i
                                class="fas fa-user-graduate"></i>Faculty</a>';

                        } else {
                            echo '<div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i
                                    class="fa fa-object-group nav-icon"></i>Gallery</a>
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
                            echo '<a href="examnotice.php" class="nav-item nav-link"><i class="fas fa-exclamation-triangle"></i>Exam
                            Notice</a>';

                            echo '<a href="placement.php" class="nav-item nav-link"><i class="fas fa-briefcase"></i>Placement</a>';
                            echo '<a href="placement-student1.php" class="nav-item nav-link"><i class="fas fa-briefcase"></i>Placement
                            Student</a>';
                            echo '<a href="faculty.php" class="nav-item nav-link active"><i
                                class="fas fa-user-graduate"></i>Faculty</a>';
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
                                <h6 class="mb-4">Faculty</h6>
                                <div class="col-sm-12 mb-2">
                                    <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                        data-bs-target="#modal-bs-primary">
                                        <i class="fas fa-plus"></i>Add
                                    </button>
                                </div>
                                <div class="table-responsive">
                                    <table id="example1" class="table table-hover">
                                        <thead>
                                            <tr>
                                                <th scope="col" class="text-center">Slno</th>
                                                <th scope="col" class="text-center">Image</th>
                                                <th scope="col" class="text-center">Name</th>
                                                <th scope="col" class="text-center">Designation</th>
                                                <th scope="col" class="text-center">Professor</th>
                                                <th scope="col" class="text-center">Phone Number</th>
                                                <th scope="col" class="text-center">Email</th>
                                                <th scope="col" class="text-center">Branch</th>
                                                <th scope="col" class="text-center">Manage</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                            <?php include 'db.php';
                                            $sql = "SELECT * FROM mitm_faculty where college_type= '$collage' ORDER BY id DESC";
                                            $result = $conn->query($sql);
                                            $i = 1;
                                            while ($row = $result->fetch_assoc()) { ?>
                                                <tr>
                                                    <td class=text-center><?php echo $i;
                                                    $i++; ?></td>
                                                    <td class=text-center><img src="upload/member/<?php echo $row['image']; ?>"
                                                            width="50" height="50">
                                                    </td>
                                                    <td class=text-center><?php echo $row['faculty_name']; ?></td>
                                                    <td class=text-center><?php echo $row['designation']; ?></td>
                                                    <td class=text-center><?php echo $row['Professor']; ?></td>
                                                    <td class=text-center><?php echo $row['phone_number']; ?></td>
                                                    <td class=text-center><?php echo $row['email_id']; ?></td>
                                                    <td class=text-center><?php echo $row['branch']; ?></td>

                                                    <td class=text-center><?php $status = $row['status'];
                                                    $status = $row['status'];
                                                    $idm = $row['id'];
                                                    $tb = 'mitm_faculty';
                                                    $tbc = 'id';
                                                    $tbc1 = 'status';
                                                    $returnpage = 'faculty.php';

                                                    if ($status == 1) {
                                                        echo "<a href='active.php?status=$idm&tb=$tb&tbc=$tbc&tbc1=$tbc1&returnpage=$returnpage' class='btn btn-success' onclick='return confirmAction(\"active\", $idm, \"$tb\", \"$tbc\", \"$tbc1\", \"$returnpage\")'>
                                                    <i class='fas fa-unlock'></i></a>";
                                                    } else {
                                                        echo "<a href='inactive.php?status0=$idm&tb=$tb&tbc=$tbc&tbc1=$tbc1&returnpage=$returnpage' class='btn btn-danger' onclick='return confirmAction(\"inactive\", $idm, \"$tb\", \"$tbc\", \"$tbc1\", \"$returnpage\")'>
                                                    <i class='fas fa-lock'></i></a>";
                                                    }
                                                    ?>
                                                        <button type="button" name="update1"
                                                            onclick="myfcn4(<?php echo $row['id']; ?>,'<?php echo $row['image']; ?>','<?php echo $row['faculty_name']; ?>','<?php echo $row['designation']; ?>','<?php echo $row['Professor']; ?>','<?php echo $row['phone_number']; ?>','<?php echo $row['email_id']; ?>','<?php echo $row['branch']; ?>')"
                                                            class="btn btn-primary m-2" data-bs-toggle="modal"
                                                            data-bs-target="#updatefaculty">
                                                            <i class='fas fa-edit'></i>
                                                        </button>
                                                        <a
                                                            onclick="confirmDelete(<?php echo $row['id']; ?>, tb='mitm_faculty', tbc='id', returnpage='faculty.php');">
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
                                                <th scope="col" class="text-center">Name</th>
                                                <th scope="col" class="text-center">Designation</th>
                                                <th scope="col" class="text-center">Professor</th>
                                                <th scope="col" class="text-center">Phone Number</th>
                                                <th scope="col" class="text-center">Email</th>
                                                <th scope="col" class="text-center">Branch</th>
                                                <th scope="col" class="text-center">Manage</th>
                                            </tr>
                                            <tfoot>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php
                if (isset($_POST['addfaculty'])) {

                    $name = $_POST['name'];
                    $designation = $_POST['designation'];
                    $Professor = $_POST['Professor'];
                    $phonenumber = $_POST['phonenumber'];
                    $email = $_POST['email'];
                    $branch2 = $_POST['branch'];

                    $image_name = $_FILES['image']['name'];
                    $image_size = $_FILES['image']['size'];
                    $image_tmp = $_FILES['image']['tmp_name'];
                    $file_type = pathinfo($image_name, PATHINFO_EXTENSION);
                    $new_file_name = uniqid() . '.' . $file_type;

                    $upload_dir = "upload/member/";
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
                    $sql = "INSERT INTO mitm_faculty (image, faculty_name, designation, Professor, phone_number, email_id, branch, status, college_type) 
             VALUES('$new_file_name','$name','$designation', '$Professor', '$phonenumber', '$email', '$branch2', '1','$collage')";
                    if ($conn->query($sql) === true) {
                        echo '<script>window.location.href = "faculty.php";</script>';
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
                                <h4 class="modal-title">Upload Faculty</h4>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method='post' enctype="multipart/form-data">
                                <div class="modal-body">
                                    <div class="card-body">
                                        <div class="form-group">
                                            <label for="exampleInputimage">Choose Faculty Image</label>
                                            <input type="file" id="exampleInputimage" name="image" class="form-control"
                                                required>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputtext">Faculty Name</label>
                                            <input type="text" class="form-control" id="name" name="name" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputtext">Designation</label>
                                            <input type="text" class="form-control" id="designation" name="designation"
                                                required>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputtext">Professor</label>
                                            <input type="text" class="form-control" id="Professor1" name="Professor"
                                                required>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputtext">Phone Number</label>
                                            <input type="tel" class="form-control" id="phonenumber" name="phonenumber"
                                                required>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputtext">Email</label>
                                            <input type="text" class="form-control" id="email" name="email" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="branch">Branch</label>
                                            <!-- <input type="text" class="form-control" id="exampleInputtext" name="collegename" required> -->
                                            <select name="branch" class="form-control">
                                                <?php if ($collage == 1) { ?>
                                                    <option value="COMPUTER SCIENCE ENGINEERING">CSE</option>
                                                    <option value="CIVIL ENGINEERING">CIVIL</option>
                                                    <option value="ELECTRONICS AND COMMUNICATION ENGINEERING">ECE</option>
                                                    <option value="ELECTRICAL ENGINEERING">EE</option>
                                                    <option value="Electronics and Electrical Engineering">EEE</option>
                                                    <option value="MASTERS IN BUSINESS ADMINISTRATIVE">MBA</option>
                                                    <option value="MECHANICAL ENGINEERING">MECH</option>
                                                <?php } elseif ($collage == 2) { ?>
                                                    <option value="MASTERS IN BUSINESS ADMINISTRATIVE">MBA</option>
                                                <?php } ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="modal-footer justify-content-between">
                                        <button type="button" class="btn btn-secondary"
                                            data-bs-dismiss="modal">Close</button>
                                        <button type="submit" name="addfaculty" value="Submit"
                                            class="btn btn-primary">Upload</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!--End Add modal-->
                <?php
                if (isset($_POST['updatefaculty'])) {
                    $id = $_POST["id1"];
                    $name = $_POST['name'];
                    $designation = $_POST['designation'];
                    $professor2 = $_POST['Professor'];
                    $phonenumber = $_POST['phonenumber'];
                    $email = $_POST['email'];
                    $branch = $_POST['branch'];

                    // Check if a new image is uploaded
                    if (!empty($_FILES['image']['name'])) {
                        $image_name = $_FILES['image']['name'];
                        $image_size = $_FILES['image']['size'];
                        $image_tmp = $_FILES['image']['tmp_name'];
                        $file_type = pathinfo($image_name, PATHINFO_EXTENSION);
                        $new_file_name = uniqid() . '.' . $file_type;

                        $upload_dir = "upload/member/";

                        // Retrieve the previous file name from the database
                        $sql_previous_image = "SELECT image FROM mitm_faculty  WHERE id='$id'";
                        $result = $conn->query($sql_previous_image);

                        if ($result->num_rows > 0) {
                            $row = $result->fetch_assoc();
                            $previous_image = $upload_dir . $row['image'];

                            // Delete previous photo from the upload folder
                            if (file_exists($previous_image)) {
                                if (unlink($previous_image)) {
                                    // Previous image deleted successfully
                                } else {
                                    echo "Error deleting previous image: $previous_image";
                                }
                            }
                        }
                        $target_file = $upload_dir . $new_file_name;

                        if (move_uploaded_file($image_tmp, $target_file)) {
                            // Image uploaded successfully
                            // Update the database with the new image
                            $sql = "UPDATE mitm_faculty SET image='$new_file_name', faculty_name='$name', designation='$designation' , Professor='$professor2' phone_number='$phonenumber' , email_id='$email' , branch='$branch' WHERE id='$id'";
                            if ($conn->query($sql) === true) {
                                echo '<script>window.location.href = "faculty.php";</script>';
                            } else {
                                echo $conn->error;
                            }
                        } else {
                            // Image not uploaded
                            echo "<script>alert('Image not uploaded');</script>";
                        }
                    } else {
                        // No new image uploaded, update other fields only
                        $sql = "UPDATE mitm_faculty SET faculty_name='$name', designation='$designation', Professor='$professor2', phone_number='$phonenumber', email_id='$email' , branch='$branch' WHERE id='$id'";
                        if ($conn->query($sql) === true) {
                            echo '<script>window.location.href = "faculty.php";</script>';
                        } else {
                            echo $conn->error;
                        }
                    }
                    $conn->close();
                }
                ?>
                <!-- Table End -->
                <?php include "common/footer.php" ?>

                <!--Modal for Update Faculty-->
                <div class="modal fade" data-bs-backdrop="static" id="updatefaculty">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title">Update Faculty</h4>
                                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method='post' enctype="multipart/form-data">
                                <div class="modal-body">
                                    <input type="hidden" name="id1" id="zxy11">
                                    <div class="form-group">
                                        <label for="image">image</label>
                                        <input type="file" class="form-control" id="zxy22" name="image">
                                        <img id="preimage" src="#" alt="pic" width="50" height="50" />
                                        <img src="upload/member/<?php echo $row['image']; ?>" id="image11"
                                            alt="profile image" width="50" height="50">
                                    </div>
                                    <div class="form-group">
                                        <label for="text">Faculty Name</label>
                                        <input type="text" class="form-control" id="name1" name="name">
                                    </div>
                                    <div class="form-group">
                                        <label for="text">Designation</label>
                                        <input type="text" class="form-control" id="designation1" name="designation">
                                    </div>
                                    <div class="form-group">
                                        <label for="text">Professor</label>
                                        <input type="text" class="form-control" id="Professor2" name="Professor">
                                    </div>
                                    <div class="form-group">
                                        <label for="text">Phone Number</label>
                                        <input type="text" class="form-control" id="phone1" name="phonenumber">
                                    </div>
                                    <div class="form-group">
                                        <label for="text">Email</label>
                                        <input type="text" class="form-control" id="email1" name="email">
                                    </div>
                                    <div class="form-group">
                                        <label for="branch">Branch</label>
                                        <!-- <input type="text" class="form-control" id="branch1" name="branch" required> -->
                                        <select name="branch" id="branch1" class="form-control">
                                            <?php if ($collage == 1) { ?>
                                                <option value="COMPUTER SCIENCE ENGINEERING">CSE</option>
                                                <option value="CIVIL ENGINEERING">CIVIL</option>
                                                <option value="ELECTRONICS AND COMMUNICATION ENGINEERING">ECE</option>
                                                <option value="ELECTRICAL ENGINEERING">EE</option>
                                                <option value="Electronics and Electrical Engineering">EEE</option>
                                                <option value="MASTERS IN BUSINESS ADMINISTRATIVE">MBA</option>
                                                <option value="MECHANICAL ENGINEERING">MECH</option>
                                            <?php } elseif ($collage == 2) { ?>
                                                <option value="MASTERS IN BUSINESS ADMINISTRATIVE">MBA</option>
                                            <?php } ?>

                                        </select>
                                    </div>
                                    <div class="modal-footer justify-content-between">
                                        <button type="button" class="btn btn-outline-dark"
                                            data-bs-dismiss="modal">Close</button>
                                        <button type="Submit" name="updatefaculty" value="Submit"
                                            class="btn btn-outline-dark">UPDATE</button>
                                    </div>
                            </form>
                            <!--/.modal-content -->
                        </div>
                        <!-- /.modal-dialog -->
                    </div>
                </div>
                <!-- End Modal for Update Faculty-->

            <?php } ?>

            <script>
                //id get for update Members.-->
                function myfcn4(id1, image, name, designation, Professor, phonenumber, email, branch) {
                    document.getElementById("zxy11").value = id1;
                    document.getElementById("image11").src = "upload/member/" + image;
                    document.getElementById("name1").value = name;
                    document.getElementById("designation1").value = designation;
                    document.getElementById("Professor2").value = Professor;
                    document.getElementById("phone1").value = phonenumber;
                    document.getElementById("email1").value = email;
                    document.getElementById("branch1").value = branch;
                }
            </script>
            <script>
                //member image
                $("#preimage").attr("src", "assets/img/no-image.png");
                $("#zxy22").change(function () {
                    email
                    const file3 = this.files[0];
                    if (file3) {
                        let reader3 = new FileReader();
                        reader3.onload = function (event) {
                            $("#preimage").attr("src", event.target.result);
                        };
                        reader3.readAsDataURL(file3);
                    }
                });
            </script>
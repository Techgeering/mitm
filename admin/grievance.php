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
        <title>MITM | Grievance</title>
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
        <!-- DataTables CSS -->
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.css">
        <!-- DataTables Buttons CSS -->
        <link rel="stylesheet" type="text/css"
            href="https://cdn.datatables.net/buttons/2.1.0/css/buttons.dataTables.min.css">
        <!-- DataTables Extensions CSS -->
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">

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
                            echo '<a href="grievance" class="nav-item nav-link active">
                                <i class="fas fa-exclamation-circle"></i> Grievance Cell</a>';
                            echo '<div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                                <i class="fa fa-object-group nav-icon"></i> Gallery
                            </a>
                            <div class="dropdown-menu bg-transparent border-0">
                                <a href="life-image" class="dropdown-item">
                                    <i class="bi bi-image me-2"></i> Image
                                </a>
                                <a href="life-video" class="dropdown-item">
                                    <i class="bi bi-play-circle me-2"></i> Video
                                </a>
                            </div>
                        </div>';
                            echo '<a href="news-event" class="nav-item nav-link"><i class="bi bi-newspaper me-2"></i> News and
                            Event</a>';
                            echo '<a href="notice" class="nav-item nav-link"><i class="bi bi-bell me-2"></i>Notice</a>';
                            echo '<a href="collegenotice" class="nav-item nav-link"><i class="fas fa-bullhorn"></i>College
                            Notice</a>';
                            echo '<a href="examnotice" class="nav-item nav-link"><i class="fas fa-exclamation-triangle"></i>Exam
                            Notice</a>';
                            echo '<a href="placement" class="nav-item nav-link"><i class="fas fa-briefcase"></i>Placement</a>';
                            echo '<a href="placement-student1" class="nav-item nav-link"><i class="fas fa-briefcase"></i>Placement
                            Std</a>';
                            echo '<a href="faculty" class="nav-item nav-link"><i class="fas fa-user-graduate"></i>Faculty</a>';
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
                            echo '<a href="examnotice.php" class="nav-item nav-link"><i class="fas fa-exclamation-triangle"></i>Exam
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
                                <h6 class="mb-4">Grievance</h6>
                                <!-- <button onclick="downloadCSV()">CSV</button> -->
                                <div class="table-responsive">
                                    <table id="example1" class="table table-hover">
                                        <thead>
                                            <tr>
                                                <th scope="col">Slno</th>
                                                <th scope="col">Name</th>
                                                <th scope="col">Registration</th>
                                                <th scope="col">Branch</th>
                                                <th scope="col">Year</th>
                                                <th scope="col">Gender</th>
                                                <th scope="col">Phone</th>
                                                <th scope="col">Email</th>
                                                <th scope="col">Grievance</th>
                                                <th scope="col">Date of Upload</th>
                                                <th scope="col">Delete</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                            <?php include 'db.php';

                                            $sql = "SELECT * FROM mitm_grievance ORDER BY id DESC";
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
                                                        <?php echo $row['grievance_name']; ?>
                                                    </td>
                                                    <td class="text-center">
                                                        <?php echo $row['grievance_registration']; ?>
                                                    </td>
                                                    <td class="text-center">
                                                        <?php echo $row['grievance_branch']; ?>
                                                    </td>
                                                    <td class="text-center">
                                                        <?php echo $row['grievance_year']; ?>
                                                    </td>
                                                    <td class="text-center">
                                                        <?php echo $row['grievance_gender']; ?>
                                                    </td>
                                                    <td class="text-center">
                                                        <?php echo $row['grievance_phone']; ?>
                                                    </td>
                                                    <td class="text-center">
                                                        <?php echo $row['grievance_email']; ?>
                                                    </td>
                                                    <td class="text-center">
                                                        <?php echo $row['grievance']; ?>
                                                    </td>
                                                    <td class="text-center">
                                                        <?php echo $row['date_of_upload']; ?>
                                                    </td>
                                                    <td class="text-center">
                                                        <a
                                                            onclick="confirmDelete(<?php echo $row['id']; ?>, tb='mitm_grievance', tbc='id', returnpage='grievance.php');">
                                                            <i class="fas fa-trash-alt btn btn-danger"></i>
                                                        </a>
                                                    </td>
                                                </tr>
                                            <?php } ?>
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th scope="col">Slno</th>
                                                <th scope="col">Name</th>
                                                <th scope="col">Registration</th>
                                                <th scope="col">Branch</th>
                                                <th scope="col">Year</th>
                                                <th scope="col">Gender</th>
                                                <th scope="col">Phone</th>
                                                <th scope="col">Email</th>
                                                <th scope="col">Grievance</th>
                                                <th scope="col">Date of Upload</th>
                                                <th scope="col">Delete</th>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Table End -->
                <?php include "common/footer.php" ?>
            <?php } ?>
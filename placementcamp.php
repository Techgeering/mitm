<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <title>MITM | Placement Companies</title>
    <!-- Favicon -->
    <link href="assets/img/logos1.png" rel="icon" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Education Website">
    <meta name="keywords" content="HTML5, CSS3, JavaScript, bootstrap-5">
    <meta name="author" content="Techgeering">
    <!-- <meta http-equiv="refresh" content="30"> -->
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="assets/bootstrap-5.0.2-dist/bootstrap-5.0.2/css/bootstrap.min.css">


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
        integrity="sha512-c42qTSw/wPZ3/5LBzD+Bw5f7bSF2oxou6wEb+I/lqeaKV5FDIfMvvRp772y4jcJLKuGUOpbJMdg/BTl50fJYAw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" type="text/css"
        href="http://fonts.googleapis.com/css?family=Ubuntu:regular,bold&subset=Latin">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" type="text/css" href="assets/css/style.css?v=<?php echo time(); ?>">
    <!-- <link href="assets/css/style.css?v=1.6" rel="stylesheet"> -->

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/3.5.0/remixicon.css">

    <!--toaster alert-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>


    <title>MITM | About Us</title>

    <style>
        /* Style the tab content */
        .tabcontent {
            display: none;
            padding: 6px 5px;
            /* border: 1px solid #ccc; */
            /* border-top: none; */
        }

        .card {
            max-width: 255px;
            height: 220px !important;
            margin: 12px auto;
        }

        .tab .tablinks {
            text-align: center;
        }
    </style>

</head>

<body>

    <?php include 'navbar.php' ?>
    <!--enquiry start-->
    <?php include 'enquiry.php' ?>
    <!--enquiry end -->
    <div class="heading-bg-img place-head" style="background-image: url(assets/img/headingbgimg.png);">
        <div class="heading-bg-color">
            <h1 class="heading-text-position text-uppercase">Campus @ 2024</h1>
        </div>
    </div>
    <div class="container">
        <div class="tab">
            <div class="tab d-flex justify-content-center mb-4">
                <?php include 'admin/db.php';
                $sql2 = "SELECT distinct year from mitm_campus_placement where college_type= '1' order by year desc";
                $result = $conn->query($sql2);
                while ($rr = $result->fetch_assoc()) {
                    ?>
                    <button class="tablinks btn btn-secondary" id="defaultOpen"
                        onclick="openCity(event, '<?php echo $rr['year']; ?>')"><?php echo $rr['year']; ?></button>
                    <?php
                }
                ?>
                <!-- <button class="tablinks ml-2" onclick="openCity(event, 'Tokyo')">2024-2025</button> -->
            </div>
            <?php
            $sql2 = "SELECT distinct year from mitm_campus_placement";
            $result = $conn->query($sql2);
            while ($rr = $result->fetch_assoc()) {
                $year = $rr['year'];
                ?>
                <div id="<?php echo $year; ?>" class="tabcontent py-5">
                    <?php
                    $sql = "SELECT distinct branch FROM mitm_campus_placement where year = '$year'";
                    $Sql_query = mysqli_query($conn, $sql);
                    $All_fname = mysqli_fetch_all($Sql_query, MYSQLI_ASSOC);
                    foreach ($All_fname as $row) {
                        ?>
                        <div class="row">
                            <h4 class="text-uppercase mission-head"><?php echo $row['branch']; ?>
                            </h4>
                            <?php
                            $branch = $row['branch'];
                            $sql1 = "select * from mitm_campus_placement where branch= '$branch' and year= '$year'";
                            $res = $conn->query($sql1);
                            while ($std = $res->fetch_assoc()) {
                                ?>
                                <div class="col-lg-3 col-md-4 col-sm-6">
                                    <!-- Card-->
                                    <div class="card rounded bg-primary shadow-sm border-0 pb-4">
                                        <div class="card-body m-2">
                                            <div class="p-4 text-center card-img-top"><img
                                                    src="admin/upload/studentplacement/<?php echo $std['image']; ?>" alt="..."
                                                    width="100" class="rounded-circle mb-2 img-thumbnail d-block mx-auto">
                                                <h5 class="text-white mb-0"><?php echo $std['student_name']; ?></h5>
                                                <p class="small text-white mb-0"><?php echo $std['company_name']; ?></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php } ?>
                        </div>
                    <?php } ?>
                </div>
            <?php } ?>
        </div>
    </div>

    <?php include 'footer.php' ?>

    <script type="text/javascript"
        src="assets/bootstrap-5.0.2-dist/bootstrap-5.0.2/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <script type="text/javascript" src="assets/js/allpage.js?v=1.3"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>
    <!-- Bootstrap JS and jQuery (Optional, if needed) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <!-- Toastr JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

    <script>
        // Function to simulate click on London tab by default
        window.onload = function () {
            // Simulate click on the London tab
            document.getElementById("defaultOpen").click();
        };

        function openCity(evt, cityName) {
            var i, tabcontent, tablinks;
            tabcontent = document.getElementsByClassName("tabcontent");
            for (i = 0; i < tabcontent.length; i++) {
                tabcontent[i].style.display = "none";
            }
            tablinks = document.getElementsByClassName("tablinks");
            for (i = 0; i < tablinks.length; i++) {
                tablinks[i].className = tablinks[i].className.replace(" active", "");
            }
            document.getElementById(cityName).style.display = "block";
            evt.currentTarget.className += " active";
        }
    </script>

</body>

</html>
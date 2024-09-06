<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <title>MITM | Industry Tours</title>
    <!-- Favicon -->
    <link href="../assets/img/logos1.png" rel="icon" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Education Website">
    <meta name="keywords" content="HTML5, CSS3, JavaScript, bootstrap-5">
    <meta name="author" content="Techgeering">
    <!-- <meta http-equiv="refresh" content="30"> -->
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="assets/bootstrap-5.0.2-dist/bootstrap-5.0.2/css/bootstrap.min.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/../assets/owl.carousel.min.css" /> -->

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
        integrity="sha512-c42qTSw/wPZ3/5LBzD+Bw5f7bSF2oxou6wEb+I/lqeaKV5FDIfMvvRp772y4jcJLKuGUOpbJMdg/BTl50fJYAw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" type="text/css"
        href="http://fonts.googleapis.com/css?family=Ubuntu:regular,bold&subset=Latin">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css">

    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"> -->

    <link rel="stylesheet" type="text/css" href="assets/css/style.css?<?php echo time(); ?>">

    <!--toaster alert-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>


    <title>MITM | Industry Tours</title>

    <!-- Custom CSS -->
    <style>
        .hero-section {
            text-align: center;
            color: #343a40;
        }

        .facility-img {
            height: 200px;
            object-fit: cover;
            width: 100%;
        }

        .team-card {
            transition: transform 0.3s;
            border: 1px solid #dee2e6;
            border-radius: .375rem;
            max-width: 100% !important;
            height: 100%;
        }

        .team-card:hover {
            transform: scale(1.05);
        }

        .gallery-img {
            height: 200px;
            object-fit: cover;
            width: 100%;
            transition: transform 0.3s;
        }

        .gallery-img:hover {
            transform: scale(1.1);
        }

        .contact-info {
            padding: 20px 0;
        }

        .head-color {
            color: #007bff;
        }

        .event-card {
            max-width: 100%;
            border-radius: 10px;
            background: #ffffff;
            transition: transform 0.3s, box-shadow 0.3s;
        }

        .event-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .event-card .card-body {
            padding: 20px;
        }

        .head-color {
            color: #007bff;
        }
    </style>

</head>

<body>

    <?php include 'navbar.php' ?>
    <!--enquiry start-->
    <?php include 'enquiry.php' ?>
    <!--enquiry end -->


    <div class="heading-bg-img" style="background-image: url(../assets/img/headingbgimg.png); margin-top: 135px;">
        <div class="heading-bg-color d-none d-lg-block">
            <h1 class="heading-text-position text-uppercase mt-5">Industry Tours</h1>
        </div>
        <div class="heading-bg-color d-lg-none d-md-block d-sm-block">
            <h1 class="heading-text-position text-uppercase">Industry Tours</h1>
        </div>
    </div>

    <!-- Hero Section -->
    <section id="hero" class="hero-section">
        <div class="container">
            <h1 class="head-color">Explore Industry Tours at MITM</h1>
            <p>Gain hands-on experience and insight into leading industries with our comprehensive industry tours
                program.</p>
        </div>
    </section>

    <!-- Facilities Section -->
    <section id="facilities" class="py-3">
        <div class="container">
            <h2 class="text-center mb-5 head-color fw-bold">Our Partner Industries</h2>
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-12">
                    <img src="../assets/img/industry1.jpg" alt="Automobile Industry" class="facility-img">
                    <h5 class="text-center mt-3">Automobile Industry</h5>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12">
                    <img src="../assets/img/industry2.jpg" alt="Manufacturing Plant" class="facility-img">
                    <h5 class="text-center mt-3">Manufacturing Plant</h5>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12">
                    <img src="../assets/img/industry3.jpg" alt="IT and Software" class="facility-img">
                    <h5 class="text-center mt-3">IT and Software</h5>
                </div>
            </div>
        </div>
    </section>

    <!-- Teams Section -->
    <section id="teams" class="bg-light">
        <div class="container p-5">
            <h2 class="text-center mb-5 head-color fw-bold">Tour Highlights</h2>
            <div class="row">
                <div class="col-lg-3 col-md-4 col-sm-12">
                    <div class="card team-card">
                        <img src="../assets/img/team1.jpg" class="card-img-top" alt="Automobile Plant Visit">
                        <div class="card-body">
                            <h5 class="card-title">Automobile Plant Visit</h5>
                            <p class="card-text">Explore cutting-edge technology in automobile manufacturing.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-12">
                    <div class="card team-card">
                        <img src="../assets/img/team2.jpg" class="card-img-top" alt="Manufacturing Facility Tour">
                        <div class="card-body">
                            <h5 class="card-title">Manufacturing Facility Tour</h5>
                            <p class="card-text">Experience large-scale production processes and operations.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-12">
                    <div class="card team-card">
                        <img src="../assets/img/team3.jpg" class="card-img-top" alt="IT and Software">
                        <div class="card-body">
                            <h5 class="card-title">IT and Software</h5>
                            <p class="card-text">Discover innovations in software development and IT services.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-12">
                    <div class="card team-card">
                        <img src="../assets/img/team4.jpg" class="card-img-top" alt="Energy Sector">
                        <div class="card-body">
                            <h5 class="card-title">Energy Sector</h5>
                            <p class="card-text">Get insights into renewable energy and power generation.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Events Section -->
    <section id="events" class="py-5">
        <div class="container">
            <h2 class="text-center mb-5 head-color fw-bold">Upcoming Industry Tours</h2>
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
                    <div class="card event-card shadow-sm border-0">
                        <div class="card-body">
                            <h5 class="card-title">Automobile Plant Tour</h5>
                            <p class="card-text"><strong>Date:</strong> March 15, 2025</p>
                            <p class="card-text"><strong>Venue:</strong> XYZ Automobile Plant</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
                    <div class="card event-card shadow-sm border-0">
                        <div class="card-body">
                            <h5 class="card-title">IT and Software Industry Visit</h5>
                            <p class="card-text"><strong>Date:</strong> April 10, 2025</p>
                            <p class="card-text"><strong>Venue:</strong> ABC Tech Park</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
                    <div class="card event-card shadow-sm border-0">
                        <div class="card-body">
                            <h5 class="card-title">Manufacturing Plant Tour</h5>
                            <p class="card-text"><strong>Date:</strong> April 20, 2025</p>
                            <p class="card-text"><strong>Venue:</strong> DEF Manufacturing Unit</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="bg-light contact-info">
        <div class="container">
            <h2 class="text-center mb-5 head-color fw-bold">Contact Us for Industry Tours</h2>
            <div class="row">
                <!-- Tours Coordination Info -->
                <div class="col-md-6 mb-4">
                    <h5 class="text-center">Industry Tours Coordinator</h5>
                    <p class="text-center">MITM College, Odisha, India</p>
                    <p class="text-center"><strong>Email:</strong> tours@mitm.edu.in</p>
                    <p class="text-center"><strong>Phone:</strong> +91 12345 67890</p>
                </div>
                <!-- General Contact Info -->
                <div class="col-md-6 mb-4">
                    <h5 class="text-center">General Enquiries</h5>
                    <p class="text-center">MITM College, Odisha, India</p>
                    <p class="text-center"><strong>Email:</strong> info@mitm.edu.in</p>
                    <p class="text-center"><strong>Phone:</strong> +91 98765 43210</p>
                </div>
            </div>
        </div>
    </section>



    <?php include 'footer.php' ?>

    <script type="text/javascript"
        src="assets/bootstrap-5.0.2-dist/bootstrap-5.0.2/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <script type="text/javascript" src="assets/js/allpage.js?v=1.3"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>
    <!-- Toastr JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <script>
        // Initialize Wow.js
        new WOW().init();
    </script>

</body>

</html>
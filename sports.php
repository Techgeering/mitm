<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <title>MITM | Sports</title>
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


    <title>MITM | Sports</title>

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

        /* Events Section */
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
            /* Adjust the color as needed */
        }
    </style>

</head>

<body>

    <?php include 'navbar.php' ?>
    <!--enquiry start-->
    <?php include 'enquiry.php' ?>
    <!--enquiry end -->


    <div class="heading-bg-img" style=" margin-top: 135px;">
        <div class="heading-bg-color d-none d-lg-block">
            <h1 class="heading-text-position text-uppercase mt-5">Sports</h1>
        </div>
        <div class="heading-bg-color d-lg-none d-md-block d-sm-block">
            <h1 class="heading-text-position text-uppercase">Sports</h1>
        </div>
    </div>

    <!-- Hero Section -->
    <section id="hero" class="hero-section">
        <div class="container">
            <h1 class="head-color">Welcome to MITM College Sports</h1>
            <p>Discover our vibrant sports culture and the amazing achievements of our athletes.</p>
        </div>
    </section>

    <!-- Facilities Section -->
    <section id="facilities" class="py-3">
        <div class="container">
            <h2 class="text-center mb-5 head-color fw-bold">Our Sports Facilities</h2>
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-12">
                    <img src="../assets/img/gymnasium.avif" alt="Gym" class="facility-img">
                    <h5 class="text-center mt-3">Gymnasium</h5>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12">
                    <img src="../assets/img/swimming.jpeg" alt="Swimming Pool" class="facility-img">
                    <h5 class="text-center mt-3">Swimming Pool</h5>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12">
                    <img src="../assets/img/spoersfield.webp" alt="Sports Field" class="facility-img">
                    <h5 class="text-center mt-3">Sports Field</h5>
                </div>
            </div>
        </div>
    </section>

    <!-- Teams Section -->
    <section id="teams" class="bg-light">
        <div class="container p-5">
            <h2 class="text-center mb-5 head-color fw-bold">Our Sports Teams</h2>
            <div class="row">
                <div class="col-lg-3 col-md-4 col-sm-12">
                    <div class="card team-card">
                        <img src="../assets/img/basketball.avif" class="card-img-top" alt="Basketball Team">
                        <div class="card-body">
                            <h5 class="card-title">Basketball Team</h5>
                            <p class="card-text">Join our energetic basketball team and be part of the action!</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-12">
                    <div class="card team-card">
                        <img src="../assets/img/football.avif" class="card-img-top" alt="Football Team">
                        <div class="card-body">
                            <h5 class="card-title">Football Team</h5>
                            <p class="card-text">Compete with our football team and showcase your skills on the field.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-12">
                    <div class="card team-card">
                        <img src="../assets/img/tennis.avif" class="card-img-top" alt="Tennis Team">
                        <div class="card-body">
                            <h5 class="card-title">Tennis Team</h5>
                            <p class="card-text">Ace your game with our dedicated tennis team.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-12">
                    <div class="card team-card">
                        <img src="../assets/img/cricket.avif" class="card-img-top" alt="Tennis Team">
                        <div class="card-body">
                            <h5 class="card-title">Cricket Team</h5>
                            <p class="card-text">Ace your game with our dedicated tennis team.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Events Section -->
    <section id="events" class="py-5">
        <div class="container">
            <h2 class="text-center mb-5 head-color fw-bold">Upcoming Events</h2>
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
                    <div class="card event-card shadow-sm border-0">
                        <div class="card-body">
                            <h5 class="card-title">Annual Sports Meet</h5>
                            <p class="card-text"><strong>Date:</strong> March 15, 2025</p>
                            <p class="card-text"><strong>Venue:</strong> Sports Field</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
                    <div class="card event-card shadow-sm border-0">
                        <div class="card-body">
                            <h5 class="card-title">Inter-Collegiate Football Tournament</h5>
                            <p class="card-text"><strong>Date:</strong> April 10, 2025</p>
                            <p class="card-text"><strong>Venue:</strong> Main Stadium</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
                    <div class="card event-card shadow-sm border-0">
                        <div class="card-body">
                            <h5 class="card-title">Inter-Collegiate Football Tournament</h5>
                            <p class="card-text"><strong>Date:</strong> April 10, 2025</p>
                            <p class="card-text"><strong>Venue:</strong> Main Stadium</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- Athletes Section -->
    <section id="athletes" class="bg-light">
        <div class="container">
            <h2 class="text-center mb-5 head-color fw-bold">Featured Athletes</h2>
            <div class="row p-5">
                <div class="col-lg-3 col-md-4 col-sm-12">
                    <div class="athlete-card text-center">
                        <img src="../assets/img/team-1.jpg" class="img-fluid rounded-circle" alt="Athlete 1">
                        <h5 class="mt-3">John Doe</h5>
                        <p>Basketball Champion</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-12">
                    <div class="athlete-card text-center">
                        <img src="../assets/img/team-2.jpg" class="img-fluid rounded-circle" alt="Athlete 2">
                        <h5 class="mt-3">Jane Smith</h5>
                        <p>Football Star</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-12">
                    <div class="athlete-card text-center">
                        <img src="../assets/img/team-3.jpg" class="img-fluid rounded-circle" alt="Athlete 3">
                        <h5 class="mt-3">Emily Johnson</h5>
                        <p>Tennis Pro</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-12">
                    <div class="athlete-card text-center">
                        <img src="../assets/img/team-4.jpg" class="img-fluid rounded-circle" alt="Athlete 3">
                        <h5 class="mt-3">Emily Johnson</h5>
                        <p>Cricket Pro</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="contact-info py-5">
        <div class="container">
            <h2 class="text-center mb-5 head-color fw-bold">Contact Us</h2>
            <div class="row">
                <!-- Sports Department Info -->
                <div class="col-md-6 mb-4" style="height: 180px;">
                    <div class="p-4 bg-white shadow rounded h-100">
                        <h5 class="text-uppercase text-primary fw-bold">Sports Department</h5>
                        <p><i class="fa fa-envelope" aria-hidden="true"></i><span class="ms-2" >Email: </span><a href="mailto:sports@mitm.edu"
                                class="text-decoration-none">sports@mitm.edu</a></p>
                        <p><i class="fa fa-phone" aria-hidden="true"></i><span class="ms-3" >Phone: </span><a href="tel:+911234567890"
                                class="text-decoration-none">+91 123 456 7890</a></p>
                        <p><i class="fa fa-map-marker" aria-hidden="true"></i><span class="ms-3" >Address: </span>MITM College, Main Campus, City, State,
                            ZIP</p>
                    </div>
                </div>

                <!-- Social Media Follow Us -->
                <div class="col-md-6" style="height: 180px;">
                    <div class="p-4 bg-white shadow rounded h-100 text-center">
                        <h5 class="text-uppercase text-primary fw-bold mb-4">Follow Us</h5>
                        <a href="#" class="btn btn-primary me-2 mb-2">
                            <!-- <i class="fab fa-facebook-f me-2"></i> -->
                            Facebook</a>
                        <a href="#" class="btn btn-info me-2 mb-2">
                            <!-- <i class="fab fa-twitter me-2"></i> -->
                            Twitter</a>
                        <a href="#" class="btn btn-danger mb-2">
                            <!-- <i class="fab fa-youtube me-2"></i> -->
                            YouTube</a>
                    </div>
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
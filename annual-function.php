<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <title>MITM | Annual Function</title>
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


    <title>MITM | Annual Function</title>

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


    <div class="heading-bg-img" style="background-image: url(../assets/img/headingbgimg.png); margin-top: 135px;">
        <div class="heading-bg-color d-none d-lg-block">
            <h1 class="heading-text-position text-uppercase mt-5">Annual Function</h1>
        </div>
        <div class="heading-bg-color d-lg-none d-md-block d-sm-block">
            <h1 class="heading-text-position text-uppercase">Annual Function</h1>
        </div>
    </div>

    <!-- Hero Section -->
    <section class="hero-section">
        <div class="container">
            <h1>Welcome to MITM Annual Function</h1>
            <h4>Join us in celebrating another year of achievements, fun activities, and memorable moments!</h4>
        </div>
    </section>

    <!-- Annual Function Highlights Section -->
    <section id="highlights" class="py-5">
        <div class="container">
            <h2 class="text-center mb-5 head-color fw-bold">Annual Function Highlights</h2>
            <div class="row justify-content-center">
                <div class="col-lg-3 col-md-4 col-sm-12 p-3">
                    <div class="card seminar-card">
                        <img src="../assets/img/annual1.png" class="card-img-top" alt="Cultural Performances">
                        <div class="card-body">
                            <h3 class="card-title">Cultural Performances</h3>
                            <p class="card-text">Enjoy vibrant cultural performances showcasing the talents of our
                                students.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-12 p-3">
                    <div class="card seminar-card">
                        <img src="../assets/img/annual2.png" class="card-img-top" alt="Award Ceremony">
                        <div class="card-body">
                            <h3 class="card-title">Award Ceremony</h3>
                            <p class="card-text">Celebrate the hard work and achievements of our students and staff
                                during the award ceremony.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-12 p-3">
                    <div class="card seminar-card">
                        <img src="../assets/img/annual3.png" class="card-img-top" alt="Fun and Games">
                        <div class="card-body">
                            <h3 class="card-title">Fun and Games</h3>
                            <p class="card-text">Engage in exciting games and activities that promise fun for everyone!
                            </p>
                        </div>
                    </div>
                </div>
                <!-- Add more annual function highlight cards as needed -->
            </div>
        </div>
    </section>

    <!-- Gallery Section -->
    <section id="gallery" class="gallery-section py-5 bg-light">
        <div class="container">
            <h2 class="text-center head-color fw-bold">Annual Function Gallery</h2>
            <div class="row justify-content-center">
                <div class="col-lg-3 col-sm-4 col-sm-12 p-3">
                    <img src="../assets/img/annual4.jpg" alt="Annual Function Image 1">
                </div>
                <div class="col-lg-3 col-sm-4 col-sm-12 p-3">
                    <img src="../assets/img/annual5.jpg" alt="Annual Function Image 2">
                </div>
                <div class="col-lg-3 col-sm-4 col-sm-12 p-3">
                    <img src="../assets/img/annual6.jpg" alt="Annual Function Image 3">
                </div>
                <!-- Add more gallery images as needed -->
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
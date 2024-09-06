<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <title>MITM | Workshop</title>
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


    <title>MITM | Festivals</title>

    <style>
        /* Hero Section */
        .hero-section {
            background-color: white;
            color: #333;
            text-align: center;
        }

        .hero-section h1 {
            font-size: 3rem;
            font-weight: bold;
            color: #007bff;
            margin-bottom: 20px;
            position: relative;
        }

        .hero-section h1::after {
            content: '';
            display: block;
            width: 80px;
            height: 3px;
            background-color: #007bff;
            margin: 10px auto 0;
        }

        .hero-section p {
            font-size: 1.2rem;
            color: #666;
            max-width: 600px;
            margin: 0 auto;
            line-height: 1.8;
        }

        /* Workshop Section */
        .workshop-card {
            transition: transform 0.3s;
            max-width: 100% !important;
            height: 300px;
        }

        .workshop-card:hover {
            transform: scale(1.05);
        }

        /* Gallery Section */
        .gallery-section img {
            width: 100%;
            height: 230px;
            transition: transform 0.3s;
        }

        .gallery-section img:hover {
            transform: scale(1.1);
        }

        .gallery-section h2 {
            margin-bottom: 30px;
            font-weight: bold;
            color: #007bff;
        }

        .card-title {
            color: #007bff;
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
            <h1 class="heading-text-position text-uppercase mt-5">Workshops</h1>
        </div>
        <div class="heading-bg-color d-lg-none d-md-block d-sm-block">
            <h1 class="heading-text-position text-uppercase">Workshops</h1>
        </div>
    </div>

    <!-- Hero Section -->
    <section class="hero-section">
        <div class="container">
            <h1>Welcome to MITM Workshops</h1>
            <h4>Enhance your skills with our wide range of technical and soft skills workshops hosted by industry
                experts.</h4>
        </div>
    </section>

    <!-- Workshops Section -->
    <section id="workshops" class="py-5">
        <div class="container">
            <h2 class="text-center mb-5 head-color fw-bold">Upcoming Workshops</h2>
            <div class="row justify-content-center">
                <!-- Workshop Card 1 -->
                <div class="col-lg-3 col-md-4 col-sm-12 p-3">
                    <div class="card workshop-card">
                        <img src="../assets/img/codeimg1.avif" class="card-img-top" alt="Coding Bootcamp">
                        <div class="card-body">
                            <h3 class="card-title">Coding Bootcamp</h3>
                            <p class="card-text">A comprehensive workshop to learn coding from basics to advanced
                                techniques.</p>
                        </div>
                    </div>
                </div>
                <!-- Workshop Card 2 -->
                <div class="col-lg-3 col-md-4 col-sm-12 p-3">
                    <div class="card workshop-card">
                        <img src="../assets/img/enterpreneurship.avif" class="card-img-top" alt="Business Workshop">
                        <div class="card-body">
                            <h3 class="card-title">Entrepreneurship 101</h3>
                            <p class="card-text">Learn how to start and scale your own business with this hands-on
                                workshop.</p>
                        </div>
                    </div>
                </div>
                <!-- Workshop Card 3 -->
                <div class="col-lg-3 col-md-4 col-sm-12 p-3">
                    <div class="card workshop-card">
                        <img src="../assets/img/ai.avif" class="card-img-top" alt="AI Workshop">
                        <div class="card-body">
                            <h3 class="card-title">AI & Machine Learning</h3>
                            <p class="card-text">Dive into the world of artificial intelligence and machine learning with
                                this expert-led session.</p>
                        </div>
                    </div>
                </div>
                <!-- Workshop Card 4 -->
                <div class="col-lg-3 col-md-4 col-sm-12 p-3">
                    <div class="card workshop-card">
                        <img src="../assets/img/designthinking.avif" class="card-img-top" alt="Design Workshop">
                        <div class="card-body">
                            <h3 class="card-title">Design Thinking</h3>
                            <p class="card-text">Explore the principles of design thinking and how it can boost your
                                creativity and innovation.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Gallery Section -->
    <section id="gallery" class="gallery-section py-5 bg-light">
        <div class="container">
            <h2 class="text-center head-color fw-bold">Workshop Gallery</h2>
            <div class="row justify-content-center">
                <div class="col-lg-3 col-sm-4 col-sm-12 p-3">
                    <img src="../assets/img/workshop1.jpg" alt="Workshop 1">
                </div>
                <div class="col-lg-3 col-sm-4 col-sm-12 p-3">
                    <img src="../assets/img/workshop2.jpg" alt="Workshop 2">
                </div>
                <div class="col-lg-3 col-sm-4 col-sm-12 p-3">
                    <img src="../assets/img/workshop3.jpg" alt="Workshop 3">
                </div>
                <div class="col-lg-3 col-sm-4 col-sm-12 p-3">
                    <img src="../assets/img/workshop4.jpg" alt="Workshop 4">
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
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <title>MITM | Tech Fest</title>
    <!-- Favicon -->
    <link href="../assets/img/logos1.png" rel="icon" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Education Website">
    <meta name="keywords" content="HTML5, CSS3, JavaScript, bootstrap-5">
    <meta name="author" content="Techgeering">
    <!-- <meta http-equiv="refresh" content="30"> -->
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="../assets/bootstrap-5.0.2-dist/bootstrap-5.0.2/css/bootstrap.min.css">

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

    <link rel="stylesheet" type="text/css" href="../assets/css/style.css?<?php echo time(); ?>">

    <!--toaster alert-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>


    <title>MITM | Tech Fest</title>

    <!-- Custom CSS -->
    <style>
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

        .event-card {
            transition: transform 0.3s;
            max-width: 100% !important;
            height: 300px;
        }

        @media (max-width: 576px) {
            .event-card {
                max-width: 100% !important;
                height: 300px;
            }
        }

        .event-card:hover {
            transform: scale(1.05);
        }

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
            <h1 class="heading-text-position text-uppercase mt-5">Tech Fest</h1>
        </div>
        <div class="heading-bg-color d-lg-none d-md-block d-sm-block">
            <h1 class="heading-text-position text-uppercase">Tech Fest</h1>
        </div>
    </div>

    <!-- Hero Section -->
    <section class="hero-section">
        <div class="container">
            <h1>Welcome to MITM Tech Fest</h1>
            <h4>Discover the future of technology and innovation at MITM's annual Tech Fest. Join us to explore
                cutting-edge technologies and engage with leading tech enthusiasts from around the globe.</h4>
        </div>
    </section>

    <!-- Tech Fest Events Section -->
    <section id="events" class="py-5">
        <div class="container">
            <h2 class="text-center mb-5 head-color fw-bold">Exciting Events at Tech Fest</h2>
            <div class="row justify-content-center">
                <div class="col-lg-3 col-md-4 col-sm-12 p-3">
                    <div class="card event-card">
                        <img src="../assets/img/robotics.jpg" class="card-img-top" alt="Robotics Competition">
                        <div class="card-body">
                            <h3 class="card-title">Robotics Competition</h3>
                            <p class="card-text">Watch innovative robotics teams battle it out in a challenge of
                                programming, creativity, and engineering.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-12 p-3">
                    <div class="card event-card">
                        <img src="../assets/img/hackathon.jpg" class="card-img-top" alt="24-Hour Hackathon">
                        <div class="card-body">
                            <h3 class="card-title">24-Hour Hackathon</h3>
                            <p class="card-text">Collaborate with tech enthusiasts to build unique software solutions
                                under tight deadlines.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-12 p-3">
                    <div class="card event-card">
                        <img src="../assets/img/ai_workshop.jpg" class="card-img-top"
                            alt="AI & Machine Learning Workshop">
                        <div class="card-body">
                            <h3 class="card-title">AI & Machine Learning Workshop</h3>
                            <p class="card-text">Join experts to learn about the future of AI and how it's
                                revolutionizing various industries.</p>
                        </div>
                    </div>
                </div>
                <!-- Add more tech fest events as needed -->
            </div>
        </div>
    </section>

    <!-- Gallery Section -->
    <section id="gallery" class="gallery-section py-5 bg-light">
        <div class="container">
            <h2 class="text-center head-color fw-bold">Tech Fest Gallery</h2>
            <div class="row justify-content-center">
                <div class="col-lg-3 col-sm-4 col-sm-12 p-3">
                    <img src="../assets/img/techfest1.jpg" alt="Tech Fest Image 1">
                </div>
                <div class="col-lg-3 col-sm-4 col-sm-12 p-3">
                    <img src="../assets/img/techfest2.jpg" alt="Tech Fest Image 2">
                </div>
                <div class="col-lg-3 col-sm-4 col-sm-12 p-3">
                    <img src="../assets/img/techfest3.jpg" alt="Tech Fest Image 3">
                </div>
                <!-- Add more gallery images as needed -->
            </div>
        </div>
    </section>




    <?php include 'footer.php' ?>

    <script type="text/javascript"
        src="../assets/bootstrap-5.0.2-dist/bootstrap-5.0.2/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <script type="text/javascript" src="../assets/js/allpage.js?v=1.3"></script>
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
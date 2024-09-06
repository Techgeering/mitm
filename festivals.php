<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <title>MITM | Festivals</title>
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
            /* Clean white background */
            color: #333;
            /* Soft black color for text */
            text-align: center;
            /* Center the text */
        }

        .hero-section h1 {
            font-size: 3rem;
            /* Larger font for main heading */
            font-weight: bold;
            /* Bold for emphasis */
            color: #007bff;
            /* Add a primary color for branding */
            margin-bottom: 20px;
            /* Space below the heading */
            position: relative;
        }

        .hero-section h1::after {
            content: '';
            /* Add a decorative line under the heading */
            display: block;
            width: 80px;
            /* Width of the line */
            height: 3px;
            /* Thickness of the line */
            background-color: #007bff;
            /* Same color as heading */
            margin: 10px auto 0;
            /* Center the line and add space */
        }

        .hero-section p {
            font-size: 1.2rem;
            /* Slightly larger text for clarity */
            color: #666;
            /* Softer color for the paragraph */
            max-width: 600px;
            /* Limit the width of the paragraph */
            margin: 0 auto;
            /* Center the paragraph */
            line-height: 1.8;
            /* Add better readability */
        }

        /* Festivals Section */
        .festival-card {
            transition: transform 0.3s;
            max-width: 100% !important;
            height: 300px;
        }

        @media (max-width: 576px) {
            .festival-card {
                transition: transform 0.3s;
                max-width: 100% !important;
                height: 300px;
            }
        }

        .festival-card:hover {
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
            <h1 class="heading-text-position text-uppercase mt-5">Festivals</h1>
        </div>
        <div class="heading-bg-color d-lg-none d-md-block d-sm-block">
            <h1 class="heading-text-position text-uppercase">Festivals</h1>
        </div>
    </div>

    <!-- Hero Section -->
    <section class="hero-section">
        <div class="container">
            <h1>Welcome to MITM</h1>
            <h4>Discover the vibrant and joyful celebrations of Indian festivals, where traditions, colors, and
                community come together.</h4>
        </div>
    </section>

    <!-- Festivals Section -->
    <section id="festivals" class="py-5">
        <div class="container">
            <h2 class="text-center mb-5 head-color fw-bold">Festival's Celebrated at MITM</h2>
            <div class="row justify-content-center">
                <div class="col-lg-3 col-md-4 col-sm-12 p-3">
                    <div class="card festival-card">
                        <img src="../assets/img/diwali.png" class="card-img-top" alt="Diwali">
                        <div class="card-body">
                            <h3 class="card-title">Diwali</h3>
                            <p class="card-text">The festival of lights celebrated with crackers, sweets, and
                                decorations all over India.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-12 p-3">
                    <div class="card festival-card">
                        <img src="../assets/img/holi.png" class="card-img-top" alt="Holi">
                        <div class="card-body">
                            <h3 class="card-title">Holi</h3>
                            <p class="card-text">The festival of colors where people play with colored powders and
                                water.</p>
                        </div>
                    </div>
                </div>
                <!-- Ganesh Chaturthi -->
                <div class="col-lg-3 col-md-4 col-sm-12 p-3">
                    <div class="card festival-card">
                        <img src="../assets/img/ganeshpuja1.png" class="card-img-top" alt="Ganesh Chaturthi">
                        <div class="card-body">
                            <h3 class="card-title">Ganesh Chaturthi</h3>
                            <p class="card-text">Ganesh Chaturthi marks the birth of Lord Ganesha. Colleges organize
                                pujas, cultural programs, and processions.</p>
                        </div>
                    </div>
                </div>
                <!-- Saraswati Puja -->
                <div class="col-lg-3 col-md-4 col-sm-12 p-3">
                    <div class="card festival-card">
                        <img src="../assets/img/saraswatipuja.png" class="card-img-top" alt="Saraswati Puja">
                        <div class="card-body">
                            <h3 class="card-title">Saraswati Puja</h3>
                            <p class="card-text">Celebrated in educational institutions, Saraswati Puja is dedicated to
                                the goddess of wisdom with prayers and cultural events.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-12 p-3">
                    <div class="card festival-card">
                        <img src="../assets/img/eid.png" class="card-img-top" alt="Eid">
                        <div class="card-body">
                            <h3 class="card-title">Eid</h3>
                            <p class="card-text">A religious festival celebrated by Muslims with prayers, feasts, and
                                charity.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-12 p-3">
                    <div class="card festival-card">
                        <img src="../assets/img/teachersday.jpg" class="card-img-top" alt="Teachers' Day">
                        <div class="card-body">
                            <h3 class="card-title">Teachers' Day</h3>
                            <p class="card-text">A day to honor and appreciate the dedication of teachers, celebrated
                                with events and activities.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-12 p-3">
                    <div class="card festival-card">
                        <img src="../assets/img/childrensday.avif" class="card-img-top" alt="Children's Day">
                        <div class="card-body">
                            <h3 class="card-title">Children's Day</h3>
                            <p class="card-text">Celebrated in schools and colleges, this day is filled with fun
                                activities and cultural performances.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Gallery Section -->
    <section id="gallery" class="gallery-section py-5 bg-light">
        <div class="container">
            <h2 class="text-center head-color fw-bold">Festival's Gallery</h2>
            <div class="row justify-content-center">
                <div class="col-lg-3 col-sm-4 col-sm-12 p-3">
                    <img src="../assets/img/Celebration/celeb1.jpg" alt="Celebration 1">
                </div>
                <div class="col-lg-3 col-sm-4 col-sm-12 p-3">
                    <img src="../assets/img/Celebration/celeb2.jpg" alt="Celebration 2">
                </div>
                <div class="col-lg-3 col-sm-4 col-sm-12 p-3">
                    <img src="../assets/img/Celebration/celeb3.jpg" alt="Celebration 3">
                </div>
                <div class="col-lg-3 col-sm-4 col-sm-12 p-3">
                    <img src="../assets/img/Celebration/celeb4.jpg" alt="Celebration 3">
                </div>
                <div class="col-lg-3 col-sm-4 col-sm-12 p-3">
                    <img src="../assets/img/Celebration/celeb5.jpg" alt="Celebration 3">
                </div>
                <div class="col-lg-3 col-sm-4 col-sm-12 p-3">
                    <img src="../assets/img/Celebration/celeb6.jpg" alt="Celebration 3">
                </div>
                <div class="col-lg-3 col-sm-4 col-sm-12 p-3">
                    <img src="../assets/img/Celebration/celeb7.avif" alt="Celebration 3">
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
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <title>MITM | Alumini Networks</title>
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


    <title>MITM | Alumini Networks</title>

    <!-- Custom CSS -->
    <style>
        .hero-section {
            background-color: #0062cc;
            color: white;
            text-align: center;
            padding: 50px 0;
        }

        .hero-section h1 {
            font-size: 2.5rem;
            font-weight: bold;
        }

        .hero-section p {
            font-size: 1.2rem;
            margin-top: 15px;
        }

        .content-section {
            padding: 50px 0;
        }

        .content-section h2 {
            color: #0062cc;
            font-weight: bold;
            margin-bottom: 30px;
            text-align: center;
        }

        .content-section .icon {
            font-size: 50px;
            color: #0062cc;
            margin-bottom: 20px;
        }

        .content-section p {
            font-size: 1.1rem;
            color: #333;
            line-height: 1.8;
        }

        .card-custom {
            max-width: 100%;
            height: 100%;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s;
        }

        .card-custom:hover {
            transform: scale(1.05);
        }

        .services {
            margin-top: 50px;
        }

        .footer {
            background-color: #333;
            color: white;
            padding: 30px 0;
            text-align: center;
        }
    </style>

</head>

<body>

    <?php include 'navbar.php' ?>
    <!--enquiry start-->
    <?php include 'enquiry.php' ?>
    <!--enquiry end -->


    <!-- Hero Section -->
    <section class="hero-section">
        <div class="container">
            <h1>Welcome to MITM Alumni Network</h1>
            <p>Connecting, Engaging, and Empowering MITM Alumni Worldwide</p>
        </div>
    </section>

    <!-- Content Section -->
    <section class="content-section">
        <div class="container">
            <h2>Stay Connected with MITM</h2>
            <div class="row justify-content-center">
                <div class="col-lg-3 col-md-4 col-sm-12 mb-4">
                    <div class="card card-custom p-4">
                        <div class="text-center">
                            <i class="fa fa-linkedin icon"></i>
                            <h3 class="mt-2">Alumni Networking</h3>
                        </div>
                        <p>The MITM Alumni Network enables graduates to stay connected and engage with their peers.
                            Whether you're seeking mentorship, exploring career opportunities, or simply reconnecting
                            with old friends, our platform offers various resources to help you stay in touch.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-12 mb-4">
                    <div class="card card-custom p-4">
                        <div class="text-center">
                            <i class="fa fa-handshake-o icon"></i>
                            <h3 class="mt-2">Career Support</h3>
                        </div>
                        <p>Our dedicated career support services assist alumni in navigating their professional
                            journeys. From job placement to workshops and networking events, we help alumni connect with
                            industry leaders and grow in their respective fields.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-12 mb-4">
                    <div class="card card-custom p-4">
                        <div class="text-center">
                            <i class="fa fa-calendar icon"></i>
                            <h3 class="mt-2">Alumni Events</h3>
                        </div>
                        <p>We host a variety of events to foster engagement within the MITM community. From reunions to
                            networking sessions and alumni talks, these events provide valuable opportunities to
                            reconnect with the institute and fellow graduates.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-12 mb-4">
                    <div class="card card-custom p-4">
                        <div class="text-center">
                            <i class="fa fa-envelope icon"></i>
                            <h3 class="mt-2">Stay Updated</h3>
                        </div>
                        <p>Subscribe to our alumni newsletter and stay updated on the latest news, upcoming events, and
                            opportunities to engage with the MITM community. Be a part of something bigger and stay
                            informed on the exciting developments at MITM.</p>
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
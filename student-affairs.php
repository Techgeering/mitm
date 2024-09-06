<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <title>MITM | Student Affairs</title>
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


    <title>MITM | Student Affairs</title>

    <!-- Custom CSS -->
    <style>

        .hero-section {
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
            color: #007bff;
            font-weight: bold;
            margin-bottom: 30px;
            text-align: center;
        }

        .content-section .icon {
            font-size: 50px;
            color: #007bff;
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
            <h1>Welcome to Student Affairs</h1>
            <p>Ensuring a positive student experience through support, engagement, and development</p>
        </div>
    </section>

    <!-- Content Section -->
    <section class="content-section">
        <div class="container">
            <h2>Empowering Student Life</h2>
            <div class="row justify-content-center">
                <div class="col-lg-3 col-md-4 col-sm-12 mb-4">
                    <div class="card card-custom p-4">
                        <div class="text-center">
                            <i class="fa fa-users icon"></i>
                            <h3 class="mt-2">Student Support Services</h3>
                        </div>
                        <p>Our dedicated team provides a variety of support services to help students thrive
                            academically,
                            socially, and emotionally. From counseling services to academic advising, we ensure that
                            students have the resources they need to succeed.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-12 mb-4">
                    <div class="card card-custom p-4">
                        <div class="text-center">
                            <i class="fa fa-calendar icon"></i>
                            <h3 class="mt-2">Campus Activities & Events</h3>
                        </div>
                        <p>Student Affairs organizes and hosts various campus activities and events to enrich student
                            life
                            at MITM. From cultural festivals to guest lectures and student-led initiatives, we encourage
                            students to get involved and make the most of their time here.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-12 mb-4">
                    <div class="card card-custom p-4">
                        <div class="text-center">
                            <i class="fa fa-balance-scale icon"></i>
                            <h3 class="mt-2">Student Rights & Responsibilities</h3>
                        </div>
                        <p>MITM values the rights and responsibilities of every student. Our office ensures that
                            students
                            understand their roles within the community and upholds standards of conduct, integrity, and
                            respect for others.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-12 mb-4">
                    <div class="card card-custom p-4">
                        <div class="text-center">
                            <i class="fa fa-handshake-o icon"></i>
                            <h3 class="mt-2">Career Services & Placement</h3>
                        </div>
                        <p>Our career services team offers guidance, workshops, and job placement assistance to prepare
                            students for the workforce. We help students explore career opportunities, build resumes,
                            and
                            connect with potential employers.</p>
                    </div>
                </div>
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
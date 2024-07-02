<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <title>MITM | Canteen</title>
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

    <!-- <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" /> -->

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


    <title>MITM | Canteen</title>



</head>

<body>

    <?php include 'navbar.php' ?>
    <!--enquiry start-->
    <?php include 'enquiry.php' ?>
    <!--enquiry end -->


    <div class="heading-bg-img" style="background-image: url(assets/img/headingbgimg.png); margin-top: 135px;">
        <div class="heading-bg-color">
            <h1 class="heading-text-position text-uppercase mt-5">Canteen</h1>
        </div>
    </div>

    <section>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-4 col-sm-12">
                    <h2>Overview</h2>
                    <p>MITM prides itself on its modern canteen facilities, offering a diverse culinary experience to cater to students' dietary needs and preferences. The canteen features spacious and inviting dining areas, providing a comfortable environment for students to enjoy their meals. With a variety of nutritious and delicious options available, students can indulge in a satisfying dining experience. The canteen also offers flexible dining hours, ensuring students have access to meals at convenient times. MITM's commitment to providing quality food and dining services enhances the overall student experience, fostering a vibrant and inclusive campus community.</p>
                </div>
                <div class="col-lg-4 col-md-12 col-sm-12">
                    <img src="assets/img/canteen-1.jpg" class="img-fluid" alt="">
                </div>
            </div>
        </div>
    </section>
    <section class="mt-5 mb-5" >
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-12"><img src="assets/img/canteen-2.jpg" class="img-fluid" style="box-shadow: 5px 7px 6px 0px black;" alt=""></div>
                <div class="col-lg-3 col-md-3 col-sm-12"><img src="assets/img/canteen-3.jpg" class="img-fluid" style="box-shadow: 5px 7px 6px 0px black;" alt="">
                </div>
                <div class="col-lg-3 col-md-3 col-sm-12"><img src="assets/img/canteen17.JPG" class="img-fluid" style="box-shadow: 5px 7px 6px 0px black;" alt="">
                </div>
                <div class="col-lg-3 col-md-3 col-sm-12"><img src="assets/img/canteen18.JPG" class="img-fluid" style="box-shadow: 5px 7px 6px 0px black;" alt="">
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
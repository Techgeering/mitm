<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <title>MITM | Fascilities</title>
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

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
        integrity="sha384-e1PXRdejUjQEa7ihLAEgv1J87OaOu8sm4gkZoYTI+Tw8tcCZaxqWw8+35a8DOVX2" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" type="text/css" href="assets/css/style.css?v=1.6">

    <!--toaster alert-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>

    <title>MITM | About Us</title>

    <style>
        /* this css only written for codepen view */

        body {
            display: grid;
            place-content: center
        }

        .fascility-1 {
            margin-top: 200px;
        }

        .fascility-2 {
            background: linear-gradient(to left, #2e48f2 0%, #40dfff 100%);
        }



        /* Add styles for carousel indicators */
        .carousel-indicators {
            position: absolute;
            bottom: -10px;
            left: 35%;
            transform: translateX(-50%);
            z-index: 15;
        }

        .fascility-carousel {
            margin-top: 315px;
            color: white;
        }
    </style>


</head>

<body>

<?php include 'navbar.php' ?>
    <!--enquiry start-->
    <?php include 'enquiry.php' ?>
    <!--enquiry end -->


    <section>
        <div class="" id="fas-1">

            <div class="heading-bg-img place-head" style="background-image: url(assets/img/headingbgimg.png);">
                <div class="heading-bg-color">
                    <h1 class="heading-text-position text-uppercase">fascilities</h1>
                </div>
            </div>

            <div class="d-none d-lg-block">
                <div class=" p-5 align-items-center " style="background-size:cover; background: white; display: flex;">
                    <div class="col-lg-6 order-md-1">
                        <h1 class="text-uppercase">Hostel Fascility</h1>
                        <p class="fascility-para">Hostels are low-cost, short-term accommodations that offer basic,
                            shared
                            facilities. Hostels typically have dormitory-style rooms with bunk beds or private rooms
                            with
                            shared facilities, such as bathrooms and kitchens. Hostels may also offer common areas, such
                            as
                            lounges, dining areas, and outdoor spaces, where guests can socialize and relax.
                        </p>
                    </div>
                    <div class="col-lg-6 order-md-2 text-center">
                        <div id="recipeCarousel" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-inner" role="listbox">
                                <div class="carousel-item active">
                                    <div class="col-md-12">
                                        <div class="card">
                                            <div class="card-img">
                                                <img src="assets/img/home13.jpg" class="img-fluid">
                                            </div>
                                            <div class="card-img-overlay text-uppercase fascility-carousel">Hostel Room
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <div class="col-md-12">
                                        <div class="card">
                                            <div class="card-img">
                                                <img src="assets/img/home14.jpg" class="img-fluid">
                                            </div>
                                            <div class="card-img-overlay text-uppercase fascility-carousel">hostel</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <div class="col-md-12">
                                        <div class="card">
                                            <div class="card-img">
                                                <img src="assets/img/home15.jpg" class="img-fluid">
                                            </div>
                                            <div class="card-img-overlay text-uppercase fascility-carousel">Hostel
                                                canteen
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>



                            <a class="carousel-control-prev bg-transparent w-aut" href="#recipeCarousel" role="button"
                                data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            </a>
                            <a class="carousel-control-next bg-transparent w-aut" href="#recipeCarousel" role="button"
                                data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="d-lg-none d-sm-block">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-md-12 order-md-1">
                            <h1 class="text-uppercase text-center mb-4">Hostel Facility</h1>
                            <p class="fascility-para">Hostels are low-cost, short-term accommodations that offer basic,
                                shared facilities. Hostels typically have dormitory-style rooms with bunk beds or
                                private rooms with shared facilities, such as bathrooms and kitchens. Hostels may also
                                offer common areas, such as lounges, dining areas, and outdoor spaces, where guests can
                                socialize and relax.</p>
                        </div>
                        <div class="col-md-12 order-md-2">
                            <div id="recipeCarousel" class="carousel slide" data-bs-ride="carousel">
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <img src="assets/img/hostel-1.jpg" class="d-block w-100" alt="Hostel Room">
                                        <div
                                            class="carousel-caption d-none d-md-block text-uppercase fascility-carousel">
                                            Hostel Room</div>
                                    </div>
                                    <div class="carousel-item">
                                        <img src="assets/img/hostel-2.jpg" class="d-block w-100" alt="Hostel">
                                        <div
                                            class="carousel-caption d-none d-md-block text-uppercase fascility-carousel">
                                            Hostel</div>
                                    </div>
                                    <div class="carousel-item">
                                        <img src="assets/img/hostel-3.jpg" class="d-block w-100" alt="Hostel Canteen">
                                        <div
                                            class="carousel-caption d-none d-md-block text-uppercase fascility-carousel">
                                            Hostel Canteen</div>
                                    </div>
                                </div>
                                <button class="carousel-control-prev" type="button" data-bs-target="#recipeCarousel"
                                    data-bs-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Previous</span>
                                </button>
                                <button class="carousel-control-next" type="button" data-bs-target="#recipeCarousel"
                                    data-bs-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Next</span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>



            <div class="d-none d-lg-block">
                <div class="fascility-2 " style="background: linear-gradient(to left, #2e48f2 0%, #40dfff 100%);">
                    <div class=" p-5 align-items-center" style="display: flex;">
                        <div class="col-lg-6 text-center order-md-2">
                            <div class="d-flex justify-content-around align-items-center">
                                <div class="">
                                    <img src="assets/img/doctor-1.jpg" class="img-fluid" alt="Image 1">
                                    <!-- <p>Hostel Room</p> -->
                                </div>
                                <!-- <div class="image-container">
                            <img src="assets/img/bus-2.jpeg" class="img-fluid rounded-circle" alt="Image 2">
                            <p>Hostel Building</p>
                        </div> -->
                            </div>
                        </div>
                        <div class="col-lg-6 order-md-1">
                            <h1 class="text-uppercase text-white">24/7 medical fascilites</h1>
                            <p class="fascility-para text-white">Emergency Care is an essential part of the health
                                system
                                and
                                serves as the first point of contact for many around the world. Especially when there
                                are
                                logistical or financial barriers to healthcare access, people may present for care only
                                when
                                symptomatic with acute illness or injury.</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class=" d-lg-none d-sm-block">
                <div class="fascility-2" style="background: linear-gradient(to left, #2e48f2 0%, #40dfff 100%);">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-md-12 order-md-1 text-center">
                                <h1 class="text-uppercase text-white mb-4">24/7 Medical Facilities</h1>
                                <p class="fascility-para text-white">Emergency Care is an essential part of the health
                                    system and serves as the first point of contact for many around the world.
                                    Especially when there are logistical or financial barriers to healthcare access,
                                    people may present for care only when symptomatic with acute illness or injury.</p>
                            </div>
                            <div class="col-md-12 order-md-2 text-center">
                                <div class="d-flex justify-content-around align-items-center">
                                    <div>
                                        <img src="assets/img/doctor-1.jpg" class="img-fluid" alt="Image 1">
                                        <!-- <p>Hostel Room</p> -->
                                    </div>
                                    <!-- <div class="image-container">
                                    <img src="assets/img/bus-2.jpeg" class="img-fluid rounded-circle" alt="Image 2">
                                    <p>Hostel Building</p>
                                </div> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="d-none d-lg-block">
                <div class="">
                    <div class=" p-5 align-items-center"
                        style="background-size:cover; background: white; display: flex;">
                        <div class="col-lg-6">
                            <h1 class="text-uppercase">Smart Class Room</h1>
                            <p class="fascility-para">Smart classrooms are designed to provide a better learning
                                environment
                                for
                                students. They are teacher-led learning spaces that include technology to help students
                                interact
                                with the content and each other.
                                Here are some components of a smart classroom:
                                Technology: Interactive whiteboards, tablets, laptops, document cameras, charging carts,
                                smart
                                tables, and lecture recording equipment
                                Software: Learning management systems, education apps, and video conferencing tools
                                Other: Smart projection systems, high-definition document cameras, voice typing, Google
                                Lens,
                                and digital podiums
                                Smart classrooms can include content such as: Newspapers, Books, Podcasts, Puzzles.
                                The goal of this content is to promote learning.
                            </p>
                        </div>
                        <div class="col-lg-6 text-center">
                            <div id="recipeCarousels" class="carousel slide" data-bs-ride="carousel">
                                <div class="carousel-inner" role="listbox">
                                    <div class="carousel-item active">
                                        <div class="col-md-12">
                                            <div class="card">
                                                <div class="card-img">
                                                    <img src="assets/img/home16.jpg" class="img-fluid">
                                                </div>
                                                <!-- <div class="card-img-overlay text-uppercase fascility-carousel">Hostel Room</div> -->
                                            </div>
                                        </div>
                                    </div>
                                    <div class="carousel-item">
                                        <div class="col-md-12">
                                            <div class="card">
                                                <div class="card-img">
                                                    <img src="assets/img/home17.jpg" class="img-fluid">
                                                </div>
                                                <!-- <div class="card-img-overlay text-uppercase fascility-carousel">hostel</div> -->
                                            </div>
                                        </div>
                                    </div>
                                    <div class="carousel-item">
                                        <div class="col-md-12">
                                            <div class="card">
                                                <div class="card-img">
                                                    <img src="assets/img/home18.jpg" class="img-fluid">
                                                </div>
                                                <!-- <div class="card-img-overlay text-uppercase fascility-carousel">Hostel canteen</div> -->
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <a class="carousel-control-prev bg-transparent w-aut" href="#recipeCarousels"
                                    role="button" data-bs-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                </a>
                                <a class="carousel-control-next bg-transparent w-aut" href="#recipeCarousels"
                                    role="button" data-bs-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="d-lg-none d-sm-block">
                <div class="container ">
                    <div class="row align-items-center">
                        <div class="col-md-12">
                            <div class="p-3 p-sm-5" style="background-size: cover; background: white;">
                                <div class="row align-items-center">
                                    <div class="col-md-12 col-lg-6 mb-3 mb-lg-0">
                                        <h1 class="text-uppercase">Smart Class Room</h1>
                                        <p class="fascility-para">Smart classrooms are designed to provide a better
                                            learning environment for students. They are teacher-led learning spaces that
                                            include technology to help students interact with the content and each
                                            other. Here are some components of a smart classroom: Technology:
                                            Interactive whiteboards, tablets, laptops, document cameras, charging carts,
                                            smart tables, and lecture recording equipment Software: Learning management
                                            systems, education apps, and video conferencing tools Other: Smart
                                            projection systems, high-definition document cameras, voice typing, Google
                                            Lens, and digital podiums Smart classrooms can include content such as:
                                            Newspapers, Books, Podcasts, Puzzles. The goal of this content is to promote
                                            learning.</p>
                                    </div>
                                    <div class="col-md-12 col-lg-6 text-center">
                                        <div id="recipeCarousels" class="carousel slide" data-bs-ride="carousel">
                                            <div class="carousel-inner" role="listbox">
                                                <div class="carousel-item active">
                                                    <img src="assets/img/smart-1.jpg" class="img-fluid" alt="Image 1">
                                                </div>
                                                <div class="carousel-item">
                                                    <img src="assets/img/smart-2.jpg" class="img-fluid" alt="Image 2">
                                                </div>
                                                <div class="carousel-item">
                                                    <img src="assets/img/smart-3.jpg" class="img-fluid" alt="Image 3">
                                                </div>
                                            </div>

                                            <button class="carousel-control-prev bg-transparent w-auto" type="button"
                                                data-bs-target="#recipeCarousels" data-bs-slide="prev">
                                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                            </button>
                                            <button class="carousel-control-next bg-transparent w-auto" type="button"
                                                data-bs-target="#recipeCarousels" data-bs-slide="next">
                                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>



            <div class="d-none d-lg-block">
                <div class="">
                    <div class="fascility-2" style="background: linear-gradient(to left, #2e48f2 0%, #40dfff 100%);">
                        <div class=" p-5 align-items-center" style=" display: flex;">
                            <div class="col-lg-6 text-center">
                                <div class="d-flex justify-content-around align-items-center">
                                    <div class="">
                                        <img src="assets/img/sports-1.jpg" class="img-fluid" alt="Image 1">
                                        <!-- <p>Hostel Room</p> -->
                                    </div>
                                    <!-- <div class="image-container">
                            <img src="assets/img/bus-2.jpeg" class="img-fluid rounded-circle" alt="Image 2">
                            <p>Hostel Building</p>
                        </div> -->
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <h1 class="text-uppercase text-white">Sports</h1>
                                <p class="fascility-para text-white">Sports facilities are enclosed areas where people
                                    can
                                    exercise
                                    and participate in athletic competitions. They can include:
                                    Gymnasiums, Basketball courts, Swimming pools, Roller and ice rinks, Billiard halls,
                                    Bowling
                                    alleys.
                                    Sports facilities are designed for sports and recreational activities that require a
                                    controlled
                                    environment. They often have features like:
                                    Heating and cooling systems
                                    Indoor lighting
                                    Specific sports-related amenities
                                    Sports facilities can help develop mental health and physical fitness. They can also
                                    promote
                                    physical activity and healthy competition.
                                    Here are some things to consider when designing a new sports facility:
                                    Audience needs and capacity regulations
                                    Which sports will use the field
                                    Maintenance requirements
                                    Potential return on investment
                                    Versatile use options
                                    Some trends in sports and fitness facilities include:
                                    Multi-purpose flexibility
                                    Technology integration
                                    Sustainability and green design
                                    Health and wellness focus
                                    Fan engagement and experience</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="d-lg-none d-sm-block">
                <div class="">
                    <div class="container">
                        <div class="fascility-2"
                            style="background: linear-gradient(to left, #2e48f2 0%, #40dfff 100%);">
                            <div class="row align-items-center">
                                <div class="col-md-12">
                                    <div class="p-3 p-sm-5" style="background: white;">
                                        <div class="row">
                                            <div class="col-12 mb-4 text-center order-2">
                                                <img src="assets/img/sports-1.jpg" class="img-fluid" alt="Image 1">
                                            </div>
                                            <div class="col-12 text-center text-lg-start order-1">
                                                <h1 class="text-uppercase">Sports</h1>
                                                <p class="fascility-para">Sports facilities are enclosed areas where
                                                    people can exercise and participate in athletic competitions. They
                                                    can include: Gymnasiums, Basketball courts, Swimming pools, Roller
                                                    and ice rinks, Billiard halls, Bowling alleys. Sports facilities are
                                                    designed for sports and recreational activities that require a
                                                    controlled environment. They often have features like: Heating and
                                                    cooling systems, Indoor lighting, Specific sports-related amenities.
                                                    Sports facilities can help develop mental health and physical
                                                    fitness. They can also promote physical activity and healthy
                                                    competition. Here are some things to consider when designing a new
                                                    sports facility: Audience needs and capacity regulations, Which
                                                    sports will use the field, Maintenance requirements, Potential
                                                    return on investment, Versatile use options. Some trends in sports
                                                    and fitness facilities include: Multi-purpose flexibility,
                                                    Technology integration, Sustainability and green design, Health and
                                                    wellness focus, Fan engagement and experience.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="d-none d-lg-block">
                <div class="">
                    <div class=" p-5 align-items-center"
                        style="background-size:cover; background: white; display: flex;">
                        <div class="col-lg-6">
                            <h1 class="text-uppercase">Wi-fi Campus</h1>
                            <p class="fascility-para">A Wi-Fi campus provides students, faculty, and staff with access
                                to
                                high-speed internet connectivity. This allows them to access IT resources and content
                                from
                                anywhere on campus.
                                Here are some benefits of Wi-Fi on campus:
                                Easier collaboration
                                Learning beyond the classroom
                                Personalized instruction
                                Accelerating project completion
                                Cost savings
                                Making education more interactive
                                Increased engagement
                                A Wi-Fi campus network can cover the entire campus, including all buildings and the
                                surrounding
                                area. It can also provide seamless roaming and 24/7 availability.
                                A Wi-Fi campus network can include:
                                Optical fiber
                                Access switches
                                Wireless access points
                                Security equipment
                                A good Wi-Fi setup for a college campus typically includes:
                                A high-speed wired data backbone
                                One or more access points
                                Many Wi-Fi access points
                            </p>
                        </div>
                        <div class="col-lg-6 text-center">
                            <div class="d-flex justify-content-around align-items-center">
                                <div class="">
                                    <img src="assets/img/wifi-1.jpg" class="img-fluid" alt="Image 1">
                                    <p class="text-uppercase">wI-FI CAMPUS</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="d-lg-none d-sm-block">
                <div class="container">
                    <div class="p-3 p-sm-5" style="background: white;">
                        <div class="row align-items-center">
                            <div class="col-md-12 col-lg-6 mb-3 mb-lg-0 text-center text-lg-start">
                                <h1 class="text-uppercase">Wi-fi Campus</h1>
                                <p class="fascility-para">A Wi-Fi campus provides students, faculty, and staff with
                                    access to high-speed internet connectivity. This allows them to access IT resources
                                    and content from anywhere on campus. Here are some benefits of Wi-Fi on campus:
                                    Easier collaboration Learning beyond the classroom Personalized instruction
                                    Accelerating project completion Cost savings Making education more interactive
                                    Increased engagement A Wi-Fi campus network can cover the entire campus, including
                                    all buildings and the surrounding area. It can also provide seamless roaming and
                                    24/7 availability. A Wi-Fi campus network can include: Optical fiber Access switches
                                    Wireless access points Security equipment A good Wi-Fi setup for a college campus
                                    typically includes: A high-speed wired data backbone One or more access points Many
                                    Wi-Fi access points</p>
                            </div>
                            <div class="col-md-12 col-lg-6 text-center">
                                <img src="assets/img/wifi-1.jpg" class="img-fluid" alt="Image 1">
                                <p class="text-uppercase">Wi-fi Campus</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="d-none d-lg-block">
                <div class="fascility-2" style="background: linear-gradient(to left, #2e48f2 0%, #40dfff 100%);">
                    <div class=" p-5 align-items-center" style=" display: flex;">
                        <div class="col-lg-6 text-center">
                            <div class="d-flex justify-content-around align-items-center">
                                <div class="">
                                    <img src="assets/img/bus-1.jpg" class="img-fluid" alt="Image 1">
                                    <!-- <p>Hostel Room</p> -->
                                </div>
                                <!-- <div class="image-container">
                <img src="assets/img/bus-2.jpeg" class="img-fluid rounded-circle" alt="Image 2">
                <p>Hostel Building</p>
            </div> -->
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <h1 class="text-uppercase text-white">Transport Facility</h1>
                            <p class="fascility-para text-white">Hostels are low-cost, short-term accommodations that
                                offer
                                basic, shared facilities. Hostels typically have dormitory-style rooms with bunk beds or
                                private
                                rooms with shared facilities, such as bathrooms and kitchens. Hostels may also offer
                                common
                                areas, such as lounges, dining areas, and outdoor spaces, where guests can socialize and
                                relax.
                                Transport facilities are the means of moving people and things from one place to
                                another, or
                                the
                                structures that support this process. Fixed installations, such as roads, railways,
                                airways,
                                waterways, canals, and pipelines Terminals, such as airports, railway stations, bus
                                stations,
                                warehouses, trucking terminals, refueling depots, and seaports For school
                                transportation,
                                some
                                schools have CCTV cameras in their buses to monitor student behavior and ensure their
                                safety
                                and
                                security. The Indian government has made GPS and CCTV compulsory in school buses.</p>
                        </div>
                    </div>
                </div>
            </div>


            <div class="d-lg-none d-sm-block">
                <div class="container">
                    <div class="fascility-2" style="background: linear-gradient(to left, #2e48f2 0%, #40dfff 100%);">
                        <div class="row align-items-center">
                            <div class="col-md-12">
                                <div class="p-3 p-sm-5" style="background: white;">
                                    <div class="row align-items-center">
                                        <div class="col-md-12 col-lg-6 text-center mb-3 mb-lg-0 order-2">
                                            <div class="d-flex justify-content-around align-items-center">
                                                <div>
                                                    <img src="assets/img/bus-1.jpg" class="img-fluid" alt="Image 1">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12 col-lg-6 text-center text-lg-start order-1">
                                            <h1 class="text-uppercase">Transport Facility</h1>
                                            <p class="fascility-para">Hostels are low-cost, short-term accommodations
                                                that offer basic, shared facilities. Hostels typically have
                                                dormitory-style rooms with bunk beds or private rooms with shared
                                                facilities, such as bathrooms and kitchens. Hostels may also offer
                                                common areas, such as lounges, dining areas, and outdoor spaces, where
                                                guests can socialize and relax. Transport facilities are the means of
                                                moving people and things from one place to another, or the structures
                                                that support this process. Fixed installations, such as roads, railways,
                                                airways, waterways, canals, and pipelines. Terminals, such as airports,
                                                railway stations, bus stations, warehouses, trucking terminals,
                                                refueling depots, and seaports. For school transportation, some schools
                                                have CCTV cameras in their buses to monitor student behavior and ensure
                                                their safety and security. The Indian government has made GPS and CCTV
                                                compulsory in school buses.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="d-none d-lg-block">
                <div class="">
                    <div class=" p-5 align-items-center"
                        style="background-size:cover; background: white; display: flex;">
                        <div class="col-lg-6">
                            <h1 class="text-uppercase">Canteen And Cafeteria</h1>
                            <p class="fascility-para">Cafeterias and canteens both provide food and drinks. However,
                                cafeterias
                                often have a larger selection and allow customers to serve themselves. Canteens may have
                                more
                                limited offerings and may be associated with specific types of institutions.
                                Cafeteria facilities may include:
                                Mobile kitchen and cafeteria units
                                Food and beverage serving facilities
                                Storage and preparation areas
                                Cooking, food cooling, and washing facilities
                                Canteens may be equipped with electrical automatic cooking and storing and refrigeration
                                facilities.
                                Canteens are generally small cafeterias or snack bars that offer simple meals and
                                refreshments.
                                They can be found in workplaces or public buildings.
                            </p>
                        </div>
                        <div class="col-lg-6 text-center">
                            <div id="recipeCarouselsd" class="carousel slide" data-bs-ride="carousel">
                                <div class="carousel-inner" role="listbox">
                                    <div class="carousel-item active">
                                        <div class="col-md-12">
                                            <div class="card">
                                                <div class="card-img">
                                                    <img src="assets/img/canteen18.jpg" class="img-fluid">
                                                </div>
                                                <div class="card-img-overlay text-uppercase fascility-carousel">canteen
                                                    Room
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="carousel-item">
                                        <div class="col-md-12">
                                            <div class="card">
                                                <div class="card-img">
                                                    <img src="assets/img/canteen17.jpg" class="img-fluid">
                                                </div>
                                                <div class="card-img-overlay text-uppercase fascility-carousel">canteen
                                                    food
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="carousel-item">
                                        <div class="col-md-12">
                                            <div class="card">
                                                <div class="card-img">
                                                    <img src="assets/img/canteen19.jpg" class="img-fluid">
                                                </div>
                                                <div class="card-img-overlay text-uppercase fascility-carousel">
                                                    cafeteria
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <a class="carousel-control-prev bg-transparent w-aut" href="#recipeCarouselsd"
                                    role="button" data-bs-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                </a>
                                <a class="carousel-control-next bg-transparent w-aut" href="#recipeCarouselsd"
                                    role="button" data-bs-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="d-lg-none d-sm-block">
                <div class="container">
                    <div class="p-3 p-sm-5" style="background: white;">
                        <div class="row align-items-center">
                            <div class="col-md-12 col-lg-6 mb-3 mb-lg-0">
                                <h1 class="text-uppercase">Canteen And Cafeteria</h1>
                                <p class="fascility-para">Cafeterias and canteens both provide food and drinks. However,
                                    cafeterias often have a larger selection and allow customers to serve themselves.
                                    Canteens may have more limited offerings and may be associated with specific types
                                    of institutions. Cafeteria facilities may include: Mobile kitchen and cafeteria
                                    units, Food and beverage serving facilities, Storage and preparation areas, Cooking,
                                    food cooling, and washing facilities. Canteens may be equipped with electrical
                                    automatic cooking and storing and refrigeration facilities. Canteens are generally
                                    small cafeterias or snack bars that offer simple meals and refreshments. They can be
                                    found in workplaces or public buildings.</p>
                            </div>
                            <div class="col-md-12 col-lg-6 text-center">
                                <div id="recipeCarouselsd" class="carousel slide" data-bs-ride="carousel">
                                    <div class="carousel-inner" role="listbox">
                                        <div class="carousel-item active">
                                            <img src="assets/img/canteen-1.jpg" class="img-fluid" alt="Canteen Room">
                                            <div
                                                class="carousel-caption d-none d-md-block text-uppercase fascility-carousel">
                                                Canteen Room</div>
                                        </div>
                                        <div class="carousel-item">
                                            <img src="assets/img/canteen-2.jpg" class="img-fluid" alt="Canteen Food">
                                            <div
                                                class="carousel-caption d-none d-md-block text-uppercase fascility-carousel">
                                                Canteen Food</div>
                                        </div>
                                        <div class="carousel-item">
                                            <img src="assets/img/canteen-3.jpg" class="img-fluid" alt="Cafeteria">
                                            <div
                                                class="carousel-caption d-none d-md-block text-uppercase fascility-carousel">
                                                Cafeteria</div>
                                        </div>
                                    </div>
                                    <a class="carousel-control-prev bg-transparent w-auto" href="#recipeCarouselsd"
                                        role="button" data-bs-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    </a>
                                    <a class="carousel-control-next bg-transparent w-auto" href="#recipeCarouselsd"
                                        role="button" data-bs-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="d-none d-lg-block">
                <div class="fascility-2" style="background: linear-gradient(to left, #2e48f2 0%, #40dfff 100%);">
                    <div class=" p-5 align-items-center" style=" display: flex;">
                        <div class="col-lg-6 text-center">
                            <div class="d-flex justify-content-around align-items-center">
                                <div class="">
                                    <img src="assets/img/bus-1.jpg" class="img-fluid" alt="Image 1">
                                    <!-- <p>Hostel Room</p> -->
                                </div>
                                <!-- <div class="image-container">
                    <img src="assets/img/bus-2.jpeg" class="img-fluid rounded-circle" alt="Image 2">
                    <p>Hostel Building</p>
                </div> -->
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <h2 class="text-uppercase text-white">Industry visit and study tour</h2>
                            <p class="fascility-para text-white">Industrial visits are educational excursions that
                                provide
                                students with practical learning experiences. They help students combine theoretical
                                knowledge
                                with industrial knowledge.
                                Here are some things to consider when planning an industrial visit:
                                Inform the company
                                Draft a memorandum of understanding (MOU)
                                Find a location
                                Be prepared for risks
                                Plan activities in advance
                                Don't forget food
                                Choose a vehicle wisely
                                Here are some things students can learn from industrial visits:
                                Insight into the real working environment
                                How workstations, plants, assembly lines, machines, and systems work
                                How to interact with highly trained and experienced personnel
                                About the latest technology trends
                                How to make decisions about their future job or area of interest
                                When writing a report about an industrial visit, you can include:
                                When and where you started
                                When and where you attended seminars and other events
                                What industries and facilities you visited
                                When the event ended and when you got back</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="d-lg-none d-sm-block">
                <div class="container">
                    <div class="fascility-2" style="background: linear-gradient(to left, #2e48f2 0%, #40dfff 100%);">
                        <div class="p-3 p-sm-5">
                            <div class="row align-items-center">
                                <div class="col-md-12 col-lg-6 text-center mb-3 mb-lg-0 order-2">
                                    <div class="d-flex justify-content-around align-items-center">
                                        <img src="assets/img/bus-1.jpg" class="img-fluid" alt="Image 1">
                                    </div>
                                </div>
                                <div class="col-md-12 col-lg-6 text-white order-1">
                                    <h2 class="text-uppercase">Industry visit and study tour</h2>
                                    <p class="fascility-para">Industrial visits are educational excursions that provide
                                        students with practical learning experiences. They help students combine
                                        theoretical knowledge with industrial knowledge. Here are some things to
                                        consider when planning an industrial visit: Inform the company, Draft a
                                        memorandum of understanding (MOU), Find a location, Be prepared for risks, Plan
                                        activities in advance, Don't forget food, Choose a vehicle wisely. Here are some
                                        things students can learn from industrial visits: Insight into the real working
                                        environment, How workstations, plants, assembly lines, machines, and systems
                                        work, How to interact with highly trained and experienced personnel, About the
                                        latest technology trends, How to make decisions about their future job or area
                                        of interest. When writing a report about an industrial visit, you can include:
                                        When and where you started, When and where you attended seminars and other
                                        events, What industries and facilities you visited, When the event ended and
                                        when you got back.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="d-none d-lg-block">
                <div class="">
                    <div class=" p-5 align-items-center"
                        style="background-size:cover; background: white; display: flex;">
                        <div class="col-lg-6">
                            <h1 class="text-uppercase">Central Library Fascility</h1>
                            <p class="fascility-para">The Central Library plays a vital role in furthering the academic
                                and
                                research mission of Central University of Odisha and facilitates creation and
                                dissemination
                                of
                                knowledge. The range and quality of services offered by the library are comparable to
                                any
                                modern
                                libraries in India of International standard.
                                Soon after the formal appearance of the Central Library in the year 2009, immediate
                                emphasis
                                was
                                given for a good collection development on Text Books and Reference Books. Besides
                                holding
                                an
                                excellent print collection of over 38531+ volumes of books, it also provides access to
                                popular
                                magazines, selected journals, theses, reports, e-books, e-journals and online databases
                                in
                                Sciences, Humanities, and Social Sciences.
                            </p>
                        </div>
                        <div class="col-lg-6 text-center">
                            <div class="d-flex justify-content-around align-items-center">
                                <div class="">
                                    <img src="assets/img/library-1.jpg" class="img-fluid" alt="Image 1">
                                    <p class="text-uppercase">Library</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="d-lg-none d-sm-block">
                <div class="container">
                    <div class="p-3 p-sm-5" style="background: white;">
                        <div class="row align-items-center">
                            <div class="col-md-12 col-lg-6 mb-3 mb-lg-0">
                                <h1 class="text-uppercase">Central Library Facility</h1>
                                <p class="fascility-para">The Central Library plays a vital role in furthering the
                                    academic and research mission of Central University of Odisha and facilitates
                                    creation and dissemination of knowledge. The range and quality of services offered
                                    by the library are comparable to any modern libraries in India of International
                                    standard. Soon after the formal appearance of the Central Library in the year 2009,
                                    immediate emphasis was given for a good collection development on Text Books and
                                    Reference Books. Besides holding an excellent print collection of over 38531+
                                    volumes of books, it also provides access to popular magazines, selected journals,
                                    theses, reports, e-books, e-journals and online databases in Sciences, Humanities,
                                    and Social Sciences.</p>
                            </div>
                            <div class="col-md-12 col-lg-6 text-center">
                                <div class="d-flex justify-content-around align-items-center">
                                    <img src="assets/img/library-1.jpg" class="img-fluid" alt="Image 1">
                                    <!-- <p class="text-uppercase">Library</p> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="d-none d-lg-block">
                <div class="fascility-2 py-5" style="background: linear-gradient(to left, #2e48f2 0%, #40dfff 100%);">
                    <div class=" p-5 align-items-center">
                        <div class="col-lg-6 text-center">
                            <div class="d-flex justify-content-around align-items-center">
                                <div class="">
                                    <img src="assets/img/banking-1.jpg" class="img-fluid" alt="Image 1">
                                    <!-- <p>Hostel Room</p> -->
                                </div>
                                <!-- <div class="image-container">
                        <img src="assets/img/bus-2.jpeg" class="img-fluid rounded-circle" alt="Image 2">
                        <p>Hostel Building</p>
                    </div> -->
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <h1 class="text-uppercase text-white">Banking Services</h1>
                            <p class="fascility-para text-white">Banking services include:
                                Accepting deposits
                                Lending money
                                Facilitating transactions
                                Offering financial products
                                Providing related services
                                Banks also provide services such as:
                                Individual retirement accounts (IRAs)
                                Certificates of deposit (CDs)
                                Currency exchange
                                Safe deposit boxes
                                Some of the most important banking services include:
                                Checking and savings accounts
                                Loan and mortgage services
                                Wealth management
                                Providing credit and debit cards
                                Overdraft services
                                Banking plays a crucial role in the economy by facilitating the flow of money and
                                enabling
                                economic activities.</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="d-lg-none d-sm-block">
                <div class="container">
                    <div class="fascility-2 py-3 py-sm-5"
                        style="background: linear-gradient(to left, #2e48f2 0%, #40dfff 100%);">
                        <div class="p-3 p-sm-5 align-items-center">
                            <div class="row">
                                <div class="col-md-12 col-lg-6 text-center mb-3 mb-lg-0 order-2">
                                    <div class="d-flex justify-content-around align-items-center">
                                        <img src="assets/img/banking-1.jpg" class="img-fluid" alt="Image 1">
                                    </div>
                                </div>
                                <div class="col-md-12 col-lg-6 text-white order-1">
                                    <h1 class="text-uppercase">Banking Services</h1>
                                    <p class="fascility-para">Banking services include: Accepting deposits, Lending
                                        money, Facilitating transactions, Offering financial products, Providing related
                                        services. Banks also provide services such as: Individual retirement accounts
                                        (IRAs), Certificates of deposit (CDs), Currency exchange, Safe deposit boxes.
                                        Some of the most important banking services include: Checking and savings
                                        accounts, Loan and mortgage services, Wealth management, Providing credit and
                                        debit cards, Overdraft services. Banking plays a crucial role in the economy by
                                        facilitating the flow of money and enabling economic activities.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <?php include 'footer.php' ?>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/js/bootstrap.min.js"></script>

    <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
    <script type="text/javascript"
        src="assets/bootstrap-5.0.2-dist/bootstrap-5.0.2/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <script type="text/javascript" src="assets/js/allpage.js?v=1.3"></script>
    <!-- Toastr JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <script>
        // Initialize Wow.js
        new WOW().init();
    </script>
    <script>
        let items = document.querySelectorAll('.carousel .carousel-item')

        items.forEach((el) => {
            const minPerSlide = 4
            let next = el.nextElementSibling
            for (var i = 1; i < minPerSlide; i++) {
                if (!next) {
                    // wrap carousel by using first child
                    next = items[0]
                }
                let cloneChild = next.cloneNode(true)
                el.appendChild(cloneChild.children[0])
                next = next.nextElementSibling
            }
        })
    </script>
</body>

</html>
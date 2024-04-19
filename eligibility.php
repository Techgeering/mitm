<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <title>MITM | Eligibility</title>
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


    <title>MITM | About Us</title>

    <style>
        .toggle-switch {
            display: flex;
            justify-content: center;
            margin-bottom: 20px;
        }

        .toggle-switch button {
            padding: 10px 20px;
            background-color: #eee;
            color: black !important;
            border: none;
            cursor: pointer;
        }

        .toggle-switch button.active {
            background: linear-gradient(to bottom, #2e48f2 0%, #40dfff 100%);
            color: white;
        }

        .video-container {
            width: 40%;
            padding: 10px;
            background: white;
            display: inline-block;
        }

        .responsive-video {
            position: relative;
            display: block;
            width: 100%;
            height: 0;
            padding-bottom: 56.25%;
        }

        .responsive-video iframe,
        .responsive-video video {
            position: absolute;
            width: 100%;
            height: 100%;
        }
    </style>
    <style>
        .tabs {
            padding-top: 30;
        }

        .tabs .nav-tabs {
            border: 0;
        }

        .tabs .nav-link {
            border: 0;
            padding: 12px 15px 12px 0;
            transition: 0.3s;
            color: var(--default-color);
            border-radius: 0;
            border-right: 2px solid rgba(var(--default-color-rgb), 0.1);
            font-weight: 600;
            font-size: 15px;
        }

        .tabs .nav-link:hover {
            color: var(--accent-color);
        }

        .tabs .nav-link.active {
            color: var(--accent-color);
            border-color: var(--accent-color);
        }

        .tabs .tab-pane.active {
            animation: fadeIn 0.5s ease-out;
        }

        .tabs .details h3 {
            font-size: 26px;
            font-weight: 600;
            margin-bottom: 20px;
        }

        .tabs .details p {
            color: rgba(var(--default-color-rgb), 0.8);
        }

        .tabs .details p:last-child {
            margin-bottom: 0;
        }

        @media (max-width: 992px) {
            .tabs .nav-link {
                border: 0;
                padding: 15px;
            }

            .tabs .nav-link.active {
                color: var(--accent-color);
                background: var(--accent-color);
            }
        }
    </style>

</head>

<body>

    <?php include 'navbar.php' ?>
    <!--enquiry start-->
    <?php include 'enquiry.php' ?>
    <!--enquiry end -->

    <div class="toggle-switch" style="margin-top: 200px !important;">
        <button id="mbaGen" class="active">UG</button>
        <button id="mbaHealth">PG</button>
        <button id="mca">POLYTECHNIC</button>
    </div>


    <!-- Content for MBA (GENERAL) -->
    <main id="photoGallery" class="main">
        <div class="container text-center py-2">
            <!-- Courses Course Details Section -->
            <section id="courses-course-details" class="courses-course-details section">

                <div class="container" data-aos="fade-up">

                    <div class="">
                        <div class="">
                            <h3 style="text-align: left;">Overview</h3>
                            <p style="text-align: justify;">
                                Biju Patnaik University of Technology (BPUT) typically sets the criteria and fees for
                                undergraduate courses like Computer Science and Engineering (CSE), Artificial
                                Intelligence and Machine Learning (AI & ML), Mechanical Engineering (ME), Electrical
                                Engineering (EE), Electronics and Electrical Engineering (EEE), and Civil Engineering
                                (CE). This encompasses eligibility requirements, entrance exams (if any), and fee
                                structure. Prospective students are recommended to check BPUT's official announcements
                                for accurate information on fees and eligibility criteria.
                            </p>
                        </div>
                    </div>

                </div>

            </section><!-- /Courses Course Details Section -->

            <!-- Tabs Section -->
            <section id="tabs" class="tabs section mb-5 mt-5">

                <div class="container" data-aos="fade-up" data-aos-delay="100">

                    <div class="mt-4 mt-lg-0">
                        <div class="row tab-content">
                            <div class="tab-pane active show active show col-lg-4 p-5"
                                style="box-shadow: 1px 1px 2px 1px black; background: linear-gradient(to bottom, #2e48f280 0%, #40dfff85 100%);"
                                id="tab-1">
                                <div class="">
                                    <div class=details order-2 order-lg-1">
                                        <h3>Course Details</h3>
                                        <i class="fa fa-graduation-cap" style="font-size: 70px;" aria-hidden="true"></i>
                                        <!-- <p class="fst-italic">Qui laudantium consequatur laborum sit qui ad sapiente dila parde sonata raqer a videna mareta paulona marka</p> -->
                                        <p style="text-align: justify;" class="mt-2">Bachelor of Technology (B.Tech) is
                                            a four-year (8 Semester) full-time undergraduate course offered by MITM.</p>
                                    </div>
                                    <!-- <div class="col-lg-4 text-center order-1 order-lg-2">
                                            <img src="assets/img/tabs/tab-1.png" alt="" class="img-fluid">
                                        </div> -->
                                </div>
                            </div>
                            <div class="tab-pane active show col-lg-4 p-5" style="box-shadow: 1px 1px 2px 1px black;"
                                id="tab-2">
                                <div class="">
                                    <div class="details order-2 order-lg-1">
                                        <h3>Eligibility Criteria</h3>
                                        <i class="fa fa-address-book-o" style="font-size: 70px;" aria-hidden="true"></i>
                                        <!-- <p class="fst-italic">Qui laudantium consequatur laborum sit qui ad sapiente dila parde sonata raqer a videna mareta paulona marka</p> -->
                                        <p style="text-align: justify;" class="mt-2">Candidates must have passed class
                                            12th examination from science stream with Physics, Mathematics,
                                            Chemistry/Biotechnology, Language and any other subject from recognized
                                            board.</p>
                                    </div>
                                    <!-- <div class="col-lg-4 text-center order-1 order-lg-2">
                                            <img src="assets/img/tabs/tab-2.png" alt="" class="img-fluid">
                                        </div> -->
                                </div>
                            </div>
                            <div class="tab-pane active show col-lg-4 p-5"
                                style="box-shadow: 1px 1px 2px 1px black; background: linear-gradient(to bottom, #2e48f280 0%, #40dfff85 100%);"
                                id="tab-3">
                                <div class="">
                                    <div class="details order-2 order-lg-1">
                                        <h3>Admission Details</h3>
                                        <i class="fa fa-book" style="font-size: 70px;" aria-hidden="true"></i>
                                        <!-- <p class="fst-italic">Eos voluptatibus quo. Odio similique illum id quidem non enim fuga. Qui natus non sunt dicta dolor et. In asperiores velit quaerat perferendis aut</p> -->
                                        <p style="text-align: justify;">Must have qualified with a rank in the
                                            Odisha Joint Entrance Examination conducted by <a href="">OJEE</a> and <a
                                                href="">JEE MAIN</a> Board
                                        </p>
                                    </div>
                                    <!-- <div class="col-lg-4 text-center order-1 order-lg-2">
                                            <img src="assets/img/tabs/tab-3.png" alt="" class="img-fluid">
                                        </div> -->
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </section><!-- /Tabs Section -->
        </div>
    </main>

    <!-- Content for MBA (HEALTH MANAGEMENT) -->
    <main id="videoGallery" class="main" style="display: none;">
        <div class="container py-2">
            <!-- Courses Course Details Section -->
            <section id="courses-course-details" class="courses-course-details section">

                <div class="container" data-aos="fade-up">

                    <div class="">
                        <div class="">
                            <h3 style="text-align: left;">Overview</h3>
                            <p style="text-align: justify;">
                                Admission criteria and fees for postgraduate (PG) courses, including Master of Business
                                Administration (MBA), at Biju Patnaik University of Technology (BPUT) are determined by
                                the university. Eligibility typically entails holding a bachelor's degree from a
                                recognized institution, meeting minimum GPA requirements, and possibly submitting
                                standardized test scores like OJEE or equivalent exams. BPUT sets the fee structure,
                                taking into account various factors. Students are recommended to consult official
                                announcements by BPUT for accurate information on fees and eligibility criteria.
                            </p>
                        </div>
                    </div>

                </div>

            </section><!-- /Courses Course Details Section -->

            <!-- Tabs Section -->
            <section id="tabs" class="tabs section mb-5 mt-5">

                <div class="container" data-aos="fade-up" data-aos-delay="100">

                    <div class="mt-4 mt-lg-0">
                        <div class="row tab-content">
                            <div class="tab-pane active show active show col-lg-4 p-5"
                                style="box-shadow: 1px 1px 2px 1px black; background: linear-gradient(to bottom, #2e48f280 0%, #40dfff85 100%);"
                                id="tab-1">
                                <div class="">
                                    <div class=details order-2 order-lg-1">
                                        <h3 class="text-center">Course Details</h3>
                                        <i class="fa fa-graduation-cap" style="font-size: 70px; margin-left: 115px;"
                                            aria-hidden="true"></i>
                                        <!-- <p class="fst-italic">Qui laudantium consequatur laborum sit qui ad sapiente dila parde sonata raqer a videna mareta paulona marka</p> -->
                                        <p class="text-center" style="text-align: justify;">Master of Business
                                            Administration (MBA) is a two-year (4 Semester) full-time postgraduate
                                            course offered by MITM.</p>
                                    </div>
                                    <!-- <div class="col-lg-4 text-center order-1 order-lg-2">
                                            <img src="assets/img/tabs/tab-1.png" alt="" class="img-fluid">
                                        </div> -->
                                </div>
                            </div>
                            <div class="tab-pane active show col-lg-4 p-5" style="box-shadow: 1px 1px 2px 1px black;"
                                id="tab-2">
                                <div class="">
                                    <div class="details order-2 order-lg-1">
                                        <h3 class="text-center">Eligibility Criteria</h3>
                                        <i class="fa fa-address-book-o" style="font-size: 70px; margin-left: 130px;"
                                            aria-hidden="true"></i>
                                        <!-- <p class="fst-italic">Qui laudantium consequatur laborum sit qui ad sapiente dila parde sonata raqer a videna mareta paulona marka</p> -->
                                        <p class="text-center" style="text-align: justify;">Candidate must have passed
                                            Bachelor Degree of minimum 3 Years duration.</p>
                                        <p style="text-align: justify;">Candidate must have obtained at least 50% marks
                                            (45% marks in case of candidates belonging to reserved category) in the
                                            qualifying Examination.</p>
                                    </div>
                                    <!-- <div class="col-lg-4 text-center order-1 order-lg-2">
                                            <img src="assets/img/tabs/tab-2.png" alt="" class="img-fluid">
                                        </div> -->
                                </div>
                            </div>
                            <div class="tab-pane active show col-lg-4 p-5"
                                style="box-shadow: 1px 1px 2px 1px black; background: linear-gradient(to bottom, #2e48f280 0%, #40dfff85 100%);"
                                id="tab-3">
                                <div class="">
                                    <div class="details order-2 order-lg-1">
                                        <h3 class="text-center">Admission Details</h3>
                                        <i class="fa fa-book" style="font-size: 70px; margin-left: 130px;"
                                            aria-hidden="true"></i>
                                        <!-- <p class="fst-italic">Eos voluptatibus quo. Odio similique illum id quidem non enim fuga. Qui natus non sunt dicta dolor et. In asperiores velit quaerat perferendis aut</p> -->
                                        <p class="text-center" style="text-align: justify;">Must have qualified with a
                                            rank in the
                                            Odisha Joint Entrance Examination conducted by <a href="">OJEE</a> Board
                                        </p>
                                    </div>
                                    <!-- <div class="col-lg-4 text-center order-1 order-lg-2">
                                            <img src="assets/img/tabs/tab-3.png" alt="" class="img-fluid">
                                        </div> -->
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </section>
            <!-- /Tabs Section -->

        </div>
    </main>

    <!-- Content for MCA -->
    <main id="mcaContent" class="main" style="display: none;">
        <div class="container py-2">
            <!-- Courses Course Details Section -->
            <section id="courses-course-details" class="courses-course-details section">

                <div class="container" data-aos="fade-up">

                    <div class="">
                        <div class="">
                            <h3 style="text-align: left;">Overview</h3>
                            <p style="text-align: justify;">
                                Admission criteria for Polytechnic branches offering courses in Computer Science and
                                Engineering (CSE), Mechanical Engineering (ME), Mining Engineering (ME), Electrical
                                Engineering (EE), and Civil Engineering (CE) are determined by the respective
                                polytechnic institutions. Eligibility typically requires completion of secondary
                                education or its equivalent, with a specific emphasis on mathematics and science
                                subjects. Some institutions may conduct entrance exams or consider academic performance
                                for admission. Prospective students should consult official announcements from Biju
                                Patnaik University of Technology (BPUT) for precise details regarding eligibility
                                criteria.
                            </p>
                        </div>
                    </div>

                </div>

            </section><!-- /Courses Course Details Section -->

            <!-- Tabs Section -->
            <section id="tabs" class="tabs section mb-5 mt-5">

                <div class="container" data-aos="fade-up" data-aos-delay="100">

                    <div class="mt-4 mt-lg-0">
                        <div class="row tab-content">
                            <div class="tab-pane active show active show col-lg-4 p-5"
                                style="box-shadow: 1px 1px 2px 1px black; background: linear-gradient(to bottom, #2e48f280 0%, #40dfff85 100%);"
                                id="tab-1">
                                <div class="">
                                    <div class=details order-2 order-lg-1">
                                        <h3 class="text-center" >Course Details</h3>
                                        <i class="fa fa-graduation-cap" style="font-size: 70px; margin-left: 11px;" aria-hidden="true"></i>
                                        <!-- <p class="fst-italic">Qui laudantium consequatur laborum sit qui ad sapiente dila parde sonata raqer a videna mareta paulona marka</p> -->
                                        <p  style="text-align: justify;" class="mt-2">Polytechnic Engineering is a
                                            three-year (6 Semester) full-time undergraduate course offered by MITM
                                            Polytechnic.</p>
                                    </div>
                                    <!-- <div class="col-lg-4 text-center order-1 order-lg-2">
                                            <img src="assets/img/tabs/tab-1.png" alt="" class="img-fluid">
                                        </div> -->
                                </div>
                            </div>
                            <div class="tab-pane active show col-lg-4 p-5" style="box-shadow: 1px 1px 2px 1px black;"
                                id="tab-2">
                                <div class="">
                                    <div class="details order-2 order-lg-1">
                                        <h3 class="text-center" >Eligibility Criteria</h3>
                                        <i class="fa fa-address-book-o" style="font-size: 70px; margin-left: 127px;" aria-hidden="true"></i>
                                        <!-- <p class="fst-italic">Qui laudantium consequatur laborum sit qui ad sapiente dila parde sonata raqer a videna mareta paulona marka</p> -->
                                        <p style="text-align: justify;" class="mt-2">Candidates must have passed class
                                            12th examination from science stream with Physics, Mathematics,
                                            Chemistry/Biotechnology, Language and any other subject from recognized
                                            board.</p>
                                    </div>
                                    <!-- <div class="col-lg-4 text-center order-1 order-lg-2">
                                            <img src="assets/img/tabs/tab-2.png" alt="" class="img-fluid">
                                        </div> -->
                                </div>
                            </div>
                            <div class="tab-pane active show col-lg-4 p-5"
                                style="box-shadow: 1px 1px 2px 1px black; background: linear-gradient(to bottom, #2e48f280 0%, #40dfff85 100%);"
                                id="tab-3">
                                <div class="">
                                    <div class="details order-2 order-lg-1">
                                        <h3 class="text-center" >Admission Details</h3>
                                        <i class="fa fa-book" style="font-size: 70px; margin-left: 127px;" aria-hidden="true"></i>
                                        <!-- <p class="fst-italic">Eos voluptatibus quo. Odio similique illum id quidem non enim fuga. Qui natus non sunt dicta dolor et. In asperiores velit quaerat perferendis aut</p> -->
                                        <p style="text-align: justify;">Must have qualified with a rank in the
                                            Odisha Joint Entrance Examination conducted by <a href="">OJEE</a> and <a
                                                href="">JEE MAIN</a> Board
                                        </p>
                                    </div>
                                    <!-- <div class="col-lg-4 text-center order-1 order-lg-2">
                                            <img src="assets/img/tabs/tab-3.png" alt="" class="img-fluid">
                                        </div> -->
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </section>

            <!-- /Tabs Section -->

        </div>
    </main>




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


    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const mbaGen = document.getElementById('mbaGen');
            const mbaHealth = document.getElementById('mbaHealth');
            const mca = document.getElementById('mca');
            const photoGallery = document.getElementById('photoGallery');
            const videoGallery = document.getElementById('videoGallery');
            const mcaContent = document.getElementById('mcaContent'); // Define mcaContent variable

            // Function to switch to photo gallery
            function switchToPhotoGallery() {
                console.log("Switching to photo gallery");
                photoGallery.style.display = 'block';
                videoGallery.style.display = 'none';
                mcaContent.style.display = 'none'; // Hide mcaContent
                mbaGen.classList.add('active');
                mbaHealth.classList.remove('active');
                mca.classList.remove('active');
            }

            // Function to switch to video gallery
            function switchToVideoGallery() {
                console.log("Switching to video gallery");
                photoGallery.style.display = 'none';
                videoGallery.style.display = 'block';
                mcaContent.style.display = 'none'; // Hide mcaContent
                mbaGen.classList.remove('active');
                mbaHealth.classList.add('active');
                mca.classList.remove('active');
            }

            // Function to switch to MCA content
            function switchToMCAContent() {
                console.log("Switching to MCA content");
                photoGallery.style.display = 'none';
                videoGallery.style.display = 'none';
                mcaContent.style.display = 'block'; // Show mcaContent
                mca.classList.add('active');
                mbaGen.classList.remove('active');
                mbaHealth.classList.remove('active');
            }

            // Event listeners for toggle switch buttons
            mbaGen.addEventListener('click', switchToPhotoGallery);
            mbaHealth.addEventListener('click', switchToVideoGallery);
            mca.addEventListener('click', switchToMCAContent);
        });

    </script>


</body>

</html>
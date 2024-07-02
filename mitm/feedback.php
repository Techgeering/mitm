<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <title>MITM | Feedback</title>
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

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" type="text/css" href="assets/css/style.css?v=1.6">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/3.5.0/remixicon.css">

    <!--toaster alert-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>

    <title>MITM | Feedback</title>
</head>
<style>
    .feedback-section {
        background: linear-gradient(to bottom, #40dfff 0%, #2e48f2 100%);
        padding: 30px;
        border-radius: 15px;
        height: 100%;
    }

    .feedback-section h1,
    .feedback-section h4 {
        color: #fff;
        text-align: center;
    }

    .feedback-form {
        border: 1px solid #ccc;
        border-radius: 15px;
        padding: 30px;
    }
</style>

<body>

    <button onclick="topFunction()" id="myBtn" title="Go to top"><i class="fa fa-arrow-up"
            aria-hidden="true"></i></button>

    <!--top nav start for desktop view-->
    <div class="fixed-top top-z-index">
        <div class="top-bgcolor d-none d-lg-block d-md-block d-sm-none">
            <div class="container">
                <div class="row">
                    <div class="col-3">
                        <a href="https://www.facebook.com/share/cEx3aUwFEbeQ4EUQ/?mibextid=qi2Omg" class="top-icon"><i
                                class="fa fa-facebook top-fa-icon" aria-hidden="true"></i></a>
                        <a href="javascript:void(0)" class="top-icon"><i class="fa fa-twitter top-fa-icon twitter-color"
                                aria-hidden="true"></i></a>
                        <a href="javascript:void(0)" class="top-icon"><i
                                class="fa fa-linkedin top-fa-icon linkdin-color" aria-hidden="true"></i></a>
                        <a href="https://www.instagram.com/mitmbhubaneswar?igsh=aDl5M2F4MnBhbTNo" class="top-icon"><i
                                class="fa fa-instagram top-fa-icon instagram-color" aria-hidden="true"></i></a>
                    </div>
                    <div class="col-9">
                        <div class="top-email-no-position">
                            <a href="tel:+9194398 97178" class="top-nav-text no-border-line"><i class="fa fa-phone"></i>
                                094398 97178</a>

                            <a href="mailto:info@mitm.edu.in" class="top-nav-text email-spacing">
                                <i class="fa fa-envelope"></i> info@mitm.edu.in
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--top nav end for desktop view-->
        <!--top nav start for mobile view-->
        <div class="top-bgcolor d-block d-lg-none d-md-none d-sm-block">
            <div class="container">
                <div class="row text-center">
                    <div class="col-lg-6">
                        <a href="tel:+9194398 97178" class="top-nav-text"><i class="fa fa-phone"></i> 094398 97178</a>
                    </div>
                    <div class="col-lg-6">
                        <a href="mailto:info@mitm.edu.in" class="top-nav-text"><i class="fa fa-envelope"></i>
                            info@mitm.com</a>
                    </div>
                </div>
            </div>
        </div>
        <!--top nav end for mobile view-->
        <!--second nav start for desktop view-->
        <div class="d-none d-lg-block d-md-none d-sm-none">

            <div class="second-nav-bg">
                <div class="container">
                    <div class="row">
                        <div class="col-1 second-nav-position">
                            <a href="index">
                                <img src="assets/img/logos1.png" class="img-fluid ms-4" />
                            </a>
                        </div>
                        <div class="col-9 text-center head-name">
                            <h3>
                                Modern Institute of Technology & Management (MITM),BHUBANESWAR
                            </h3>
                            <p>
                                (APPROVED BY AICTE,NEW DELHI,AFFILIATED TO BPUT,SCTE &
                                VT,ODISHA)
                            </p>
                        </div>
                        <div class="col-1 second-nav-position">
                            <img src="assets/img/logo2.png" class="img-fluid" alt="logoimg" />
                        </div>
                        <div class="col-1 second-nav-position">
                            <img src="assets/img/logo31.png" class="img-fluid" alt="logoimg" />
                        </div>
                    </div>
                </div>

                <!-- <div>
                <img class="w-100" src="assets/img/Modern Institute of Technology & Management (MITM) BHUBANESWAR (1).jpg" alt="">
            </div> -->
            </div>

            <!--second nav end for desktop view-->
            <!--third nav start for desktop view-->
            <div class="third-bg-color">
                <div class="container">
                    <div class="navbar-nav menu-position justify-content-center text-white">
                        <ul class="navbar-nav">
                            <li class="nav-item dropdown">
                                <a class="nav-link active third-menu-color dropdown-toggle" href="#" id="DropdownMenu1"
                                    role="button" data-bs-toggle="dropdown" aria-expanded="false">About Us</a>
                                <ul class="dropdown-content dropdown-menu-box-position" aria-labelledby="DropdownMenu1">
                                    <li>
                                        <a class="dropdown-item dropdown-menu-box dropdown-menu-hover"
                                            href="about">About MITM</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item dropdown-menu-box dropdown-menu-hover"
                                            href="chairmansays">Chairperson Message</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item dropdown-menu-box dropdown-menu-hover"
                                            href="principalsays">Principal Message</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item dropdown-menu-box dropdown-menu-hover"
                                            href="javascript:void(0)">Vision & Mission</a>
                                    </li>
                                    <!-- <li>
                                    <a class="dropdown-item dropdown-menu-box dropdown-menu-hover"
                                        href="faculty">Faculties</a>
                                </li>
                                <li>
                                    <a class="dropdown-item dropdown-menu-box dropdown-menu-hover"
                                        href="accredation">Accreditation</a>
                                </li>
                                <li>
                                    <a class="dropdown-item dropdown-menu-box dropdown-menu-hover" href="life">Life
                                        @ MITM</a>
                                </li> -->
                                    <!-- <li><a class="dropdown-item dropdown-menu-box dropdown-menu-hover" href="mission">Vission & Mission</a></li>
                      <li><a class="dropdown-item dropdown-menu-hover" href="infra">Infrastructure</a></li> -->
                                </ul>
                            </li>
                        </ul>
                        <ul class="navbar-nav">
                            <li class="nav-item dropdown">
                                <a class="nav-link active third-menu-color dropdown-toggle" href="#" id="DropdownMenu2"
                                    role="button" data-bs-toggle="dropdown" aria-expanded="false">Programmes</a>
                                <ul class="dropdown-content dropdown-menu-box-position" aria-labelledby="DropdownMenu2">
                                    <li>
                                        <a class="dropdown-item dropdown-menu-box dropdown-menu-hover"
                                            href="ugcourse">UG</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item dropdown-menu-box dropdown-menu-hover"
                                            href="pgcourse">PG</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item dropdown-menu-box dropdown-menu-hover"
                                            href="polytechnic">Polytechnic</a>
                                    </li>
                                    <!-- <li><a class="dropdown-item dropdown-menu-box dropdown-menu-hover" href="prospective">Prospective</a></li>
                      <li><a class="dropdown-item dropdown-menu-hover" href="fees">fees</a></li> -->
                                </ul>
                            </li>
                        </ul>
                        <ul class="navbar-nav">
                            <li class="nav-item dropdown">
                                <a class="nav-link active third-menu-color dropdown-toggle" href="#" id="DropdownMenu2"
                                    role="button" data-bs-toggle="dropdown" aria-expanded="false">Academics</a>
                                <ul class="dropdown-content dropdown-menu-box-position" aria-labelledby="DropdownMenu2">
                                    <li>
                                        <a class="dropdown-item dropdown-menu-box dropdown-menu-hover"
                                            href="faculty">Faculty</a>
                                    </li>
                                    <!-- <li>
                                    <a class="dropdown-item dropdown-menu-box dropdown-menu-hover"
                                        href="javascript:void(0)">All Department</a>
                                </li> -->
                                </ul>
                            </li>
                        </ul>
                        <!-- <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link active third-menu-color"
                                href="https://www.bput.ac.in/">Admissions</a>
                        </li>
                    </ul> -->
                        <ul class="navbar-nav">
                            <li class="nav-item dropdown">
                                <a class="nav-link active third-menu-color dropdown-toggle" href="#" id="DropdownMenu2"
                                    role="button" data-bs-toggle="dropdown" aria-expanded="false">Admissions</a>
                                <ul class="dropdown-content dropdown-menu-box-position" aria-labelledby="DropdownMenu2">
                                    <li>
                                        <a class="dropdown-item dropdown-menu-box dropdown-menu-hover"
                                            href="javascript:void(0)">Eligibility</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item dropdown-menu-box dropdown-menu-hover"
                                            href="javascript:void(0)">Fee Structure</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item dropdown-menu-box dropdown-menu-hover"
                                            href="javascript:void(0)">Scholarship</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link active third-menu-color" href="fascilites">Facilities</a>
                            </li>
                        </ul>
                        <ul class="navbar-nav">
                            <li class="nav-item dropdown">
                                <a class="nav-link active third-menu-color dropdown-toggle" href="#" id="DropdownMenu3"
                                    role="button" data-bs-toggle="dropdown" aria-expanded="false">Examination</a>
                                <ul class="dropdown-content dropdown-menu-box-position" aria-labelledby="DropdownMenu3">
                                    <li>
                                        <a class="dropdown-item dropdown-menu-box dropdown-menu-hover"
                                            href="https://www.bput.ac.in/exam-info">Notice</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item dropdown-menu-box dropdown-menu-hover"
                                            href="http://bputexam.in/schedule.aspx">Schedule</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item dropdown-menu-box dropdown-menu-hover"
                                            href="http://www.bputexam.in/StudentSection/ResultPublished/StudentResult.aspx">Result</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                        <ul class="navbar-nav">
                            <li class="nav-item dropdown">
                                <a class="nav-link active third-menu-color dropdown-toggle" href="#" id="DropdownMenu9"
                                    role="button" data-bs-toggle="dropdown" aria-expanded="false">Placement</a>
                                <ul class="dropdown-content dropdown-menu-box-position" aria-labelledby="DropdownMenu9">
                                    <li>
                                        <a class="dropdown-item dropdown-menu-box dropdown-menu-hover"
                                            href="placementcamp">Overview</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item dropdown-menu-box dropdown-menu-hover"
                                            href="placementcompany">Company</a>
                                    </li>
                                    <!-- <li><a class="dropdown-item dropdown-menu-hover" href="activities">Activities of T&P Cell</a></li> -->
                                </ul>
                            </li>
                        </ul>
                        <ul class="navbar-nav">
                            <li class="nav-item dropdown">
                                <a class="nav-link active third-menu-color dropdown-toggle" href="#" id="DropdownMenu9"
                                    role="button" data-bs-toggle="dropdown" aria-expanded="false">Life @ MITM</a>
                                <ul class="dropdown-content dropdown-menu-box-position" aria-labelledby="DropdownMenu9">
                                    <li>
                                        <a class="dropdown-item dropdown-menu-box dropdown-menu-hover"
                                            href="javascript:void(0)">Infrastructure</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item dropdown-menu-box dropdown-menu-hover"
                                            href="javascript:void(0)">Hostel</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item dropdown-menu-box dropdown-menu-hover"
                                            href="javascript:void(0)">Canteen</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item dropdown-menu-box dropdown-menu-hover"
                                            href="javascript:void(0)">Transportation</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item dropdown-menu-box dropdown-menu-hover"
                                            href="javascript:void(0)">Surrounding</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item dropdown-menu-box dropdown-menu-hover"
                                            href="javascript:void(0)">Sports Complex</a>
                                    </li>

                                </ul>
                            </li>
                        </ul>
                        <!-- <ul class="navbar-nav">
            <li class="nav-item ">
              <a class="nav-link active third-menu-color " href="diploma">Diploma</a>
            </li>
          </ul> -->
                        <!-- <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link active third-menu-color" href="notice">Notice</a>
                        </li>
                    </ul> -->
                        <ul class="navbar-nav">
                            <li class="nav-item dropdown">
                                <a class="nav-link active third-menu-color dropdown-toggle" href="#" id="DropdownMenu9"
                                    role="button" data-bs-toggle="dropdown" aria-expanded="false">Notice</a>
                                <ul class="dropdown-content dropdown-menu-box-position" aria-labelledby="DropdownMenu9">
                                    <li>
                                        <a class="dropdown-item dropdown-menu-box dropdown-menu-hover"
                                            href="javascript:void(0)">BPUT Real Time Notice</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item dropdown-menu-box dropdown-menu-hover"
                                            href="javascript:void(0)">College Notice</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item dropdown-menu-box dropdown-menu-hover"
                                            href="javascript:void(0)">Exam Notice</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item dropdown-menu-box dropdown-menu-hover"
                                            href="committee.html">Committee Members</a>
                                    </li>
                                    <!-- <li><a class="dropdown-item dropdown-menu-hover" href="activities">Activities of T&P Cell</a></li> -->
                                </ul>
                            </li>
                        </ul>
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link active third-menu-color" href="contact">Contact Us</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!--third nav end for desktop view-->
        <!--navbar start for mobile and tab view-->
        <div class="second-nav-bg d-block d-lg-none d-md-block d-sm-block">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="">
                    <a class="navbar-brand" href="index.php"><img src="assets/img/logos1.png" alt=""
                            class="mob-logo"></a>
                    <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation"
                        style="margin-left: 200px; margin-top: 12px;">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="navbar-collapse collapse" id="navbarSupportedContent" style="margin-left: -3px;">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0" style="margin-left: -53px;">
                            <li class="nav-item dropdown nav-side">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    Discover
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <li><a class="dropdown-item" href="about.php">About Us</a></li>
                                    <!-- <li><hr class="dropdown-divider"></li> -->
                                    <li><a class="dropdown-item" href="chairmansays.php">Chairman Speaks</a></li>
                                    <li><a class="dropdown-item" href="principalsays.php">Principal Speaks</a></li>
                                    <li><a class="dropdown-item" href="faculty.php">Faculties</a></li>
                                    <li><a class="dropdown-item" href="accredation.php">Accreditation</a></li>
                                    <li><a class="dropdown-item" href="life.php">Life @ MITM</a></li>
                                </ul>
                            </li>
                            <li class="nav-item dropdown nav-side">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    Programmes
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <li><a class="dropdown-item" href="ugcourse.php">UG</a></li>
                                    <!-- <li><hr class="dropdown-divider"></li> -->
                                    <li><a class="dropdown-item" href="pgcourse.php">PG</a></li>
                                    <li><a class="dropdown-item" href="polytechnic.php">Polytechnic</a></li>
                                </ul>
                            </li>
                            <li class="nav-item nav-side">
                                <a class="nav-link" href="https://www.bput.ac.in/">Admissions</a>
                            </li>
                            <li class="nav-item nav-side">
                                <a class="nav-link" href="fascilites.php">Facilities</a>
                            </li>
                            <li class="nav-item dropdown nav-side">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    Examinations
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <li><a class="dropdown-item" href="https://www.bput.ac.in/exam-info.php">Notice</a>
                                    </li>
                                    <!-- <li><hr class="dropdown-divider"></li> -->
                                    <li><a class="dropdown-item" href="http://bputexam.in/schedule.aspx">Schedule</a>
                                    </li>
                                    <li><a class="dropdown-item"
                                            href="http://www.bputexam.in/StudentSection/ResultPublished/StudentResult.aspx">Results</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item dropdown nav-side">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    Placement
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <li><a class="dropdown-item" href="placementcamp.php">Overview</a></li>
                                    <!-- <li><hr class="dropdown-divider"></li> -->
                                    <li><a class="dropdown-item" href="placementcompany.php">Company</a></li>
                                </ul>
                            </li>
                            <li class="nav-item nav-side">
                                <a class="nav-link" href="notice.php">Notice</a>
                            </li>
                            <li class="nav-item nav-side">
                                <a class="nav-link" href="contact.php">Contact Us</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </div>
    <!--navbar end for mobile and tab view-->
    <!--enquiry start-->
    <?php include 'enquiry.php' ?>
    <!--enquiry end -->
    <div class="container mb-5" style="margin-top: 200px;">
        <div class="row">
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="feedback-section">
                    <h1>Give Your Feedback Here</h1>
                    <h4 class="mt-5">Your feedback is important to us, and we respect your privacy. Rest assured that
                        all details provided in this form will be kept confidential and will not be shared with any
                        third parties without your consent. Thank you for your cooperation.</h4>
                </div>
            </div>
            <div class="col-lg-8 col-md-6 mb-4">
                <form id="feedbackform" class="feedback-form">
                    <h2>Feedback Form</h2>
                    <div class="mb-3">
                        <!-- <h3 class="form-heading"></h3> -->
                        <label for="category" class="form-label">Please Select Your Role</label>
                        <select class="form-select fs-4" id="rolecategory">
                            <!-- <option value="">Choose One</option> -->
                            <option value="Student">Student</option>
                            <option value="Staff">Staff</option>
                            <option value="Parent">Parent</option>
                            <option value="Alumni">Alumni</option>
                            <option value="Employer">Employer</option>
                        </select>
                    </div>

                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" class="form-control" id="feedbackname">
                        </div>
                        <div class="col-md-6">
                            <label for="number" class="form-label">Number</label>
                            <input type="tel" class="form-control" id="feedbacknumber">
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="feedbackemail">
                    </div>
                    <div class="mb-3">
                        <label for="feedback" class="form-label">Feedback <span style="color: red">*</span></label>
                        <textarea class="form-control" id="feedbackmsg" rows="5"></textarea>
                        <small class="form-text text-muted">Please provide your feedback.</small>
                    </div>
                    <label id="error-msg" class="text-danger"></label>
                    <button type="submit" name="feedbacksubmit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>


    <!-- FOOTER section START-->
    <?php include 'footer.php' ?>
    <!-- FOOTER section end-->

    <script type="text/javascript"
        src="assets/bootstrap-5.0.2-dist/bootstrap-5.0.2/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <script type="text/javascript" src="assets/js/allpage.js?v=1.3"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
    <!-- Toastr JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <script>
        // Initialize Wow.js
        new WOW().init();
    </script>
    
    <script>
        $("#feedbackform").submit(function (e) {
            e.preventDefault();

            var category = document.getElementById('rolecategory').value;
            var fname = document.getElementById('feedbackname').value;
            var fnumber = document.getElementById('feedbacknumber').value;
            var femail = document.getElementById('feedbackemail').value;
            var fmessage = document.getElementById('feedbackmsg').value;

            var errormsg = document.getElementById('error-msg');
            var emailf = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9-]+\.[a-zA-Z]{2,}$/;
            var phonepatf = /^[0-9]{10}$/
            var fnameconf = /[A-Za-z\s]{1,50}/
            var error = false

            if (category === "" || fname === "" || fnumber === "" || femail === "" || fmessage === "") {
                errormsg.innerText = "Please fill all the feilds"
            }
            else if (!fname.match(fnameconf)) {
                errormsg.innerText = "Enter a valid name"
            }
            else if (!femail.match(emailf)) {
                errormsg.innerText = "Enter a valid email"
            }
            else if (!fnumber.match(phonepatf)) {
                errormsg.innerText = "please enter valid phone number "
            }
            else {
                errormsg.innerText = "";
                $.ajax({
                    type: "POST",
                    url: "feedback-forminsert.php",
                    data: {
                        feedrole: category,
                        feedname: fname,
                        feednumber: fnumber,
                        feedemail: femail,
                        feedmessage: fmessage
                    },
                    dataType: "json",  // Specify the expected data type
                    success: function (data) {
                        console.log(data); // Log the response for debugging
                        if (data.status === "success") {
                            // Show success message using ToastAlert
                            toastr.success(data.message, 'Success');

                            document.getElementById('rolecategory').value = "";
                            document.getElementById('feedbackname').value = "";
                            document.getElementById('feedbacknumber').value = "";
                            document.getElementById('feedbackemail').value = "";
                            document.getElementById('feedbackmsg').value = "";
                        } else {
                            // Show error message using SweetAlert
                            Swal.fire({
                                icon: 'error',
                                title: 'Error!',
                                text: data.message,
                            });
                        }
                    },
                    error: function (xhr, status, error) {
                        // Handle other AJAX errors if needed
                        console.error("AJAX Error:", xhr, status, error);
                    },
                    complete: function () {
                        $(".loading").hide(); // Hide loading message on completion
                    }
                });
            }

        });
    </script>


</body>

</html>
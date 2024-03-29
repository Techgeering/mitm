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
									<li>
										<a class="dropdown-item dropdown-menu-box dropdown-menu-hover"
											href="javascript:void(0)">All Department</a>
									</li>
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
                                                <img src="assets/img/hostel-1.jpg" class="img-fluid">
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
                                                <img src="assets/img/hostel-2.jpg" class="img-fluid">
                                            </div>
                                            <div class="card-img-overlay text-uppercase fascility-carousel">hostel</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <div class="col-md-12">
                                        <div class="card">
                                            <div class="card-img">
                                                <img src="assets/img/hostel-3.jpg" class="img-fluid">
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
                                                    <img src="assets/img/smart-1.jpg" class="img-fluid">
                                                </div>
                                                <!-- <div class="card-img-overlay text-uppercase fascility-carousel">Hostel Room</div> -->
                                            </div>
                                        </div>
                                    </div>
                                    <div class="carousel-item">
                                        <div class="col-md-12">
                                            <div class="card">
                                                <div class="card-img">
                                                    <img src="assets/img/smart-2.jpg" class="img-fluid">
                                                </div>
                                                <!-- <div class="card-img-overlay text-uppercase fascility-carousel">hostel</div> -->
                                            </div>
                                        </div>
                                    </div>
                                    <div class="carousel-item">
                                        <div class="col-md-12">
                                            <div class="card">
                                                <div class="card-img">
                                                    <img src="assets/img/smart-3.jpg" class="img-fluid">
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
                                                    <img src="assets/img/canteen-1.jpg" class="img-fluid">
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
                                                    <img src="assets/img/canteen-2.jpg" class="img-fluid">
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
                                                    <img src="assets/img/canteen-3.jpg" class="img-fluid">
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

   <!-- FOOTER section START-->
	<footer class="">
		<div class="footer-bg-img" style="background-image: url(assets/img/footerimg.png)">
			<div class="footer-bg-color">
				<div class="container">
					<div class="row text-position">
						<div class="col-lg-2">
							<h4 class="footer-heading-color text-uppercase">Activities & Events</h4>
							<div>
								<a href="javascript:void(0)" class="link-decoration">Festivals</a>
							</div>
							<div>
								<a href="javascript:void(0)" class="link-decoration">Sports</a>
							</div>
							<div>
								<a href="javascript:void(0)" class="link-decoration">Workshops</a>
							</div>
							<div>
								<a href="javascript:void(0)" class="link-decoration">Industry Tours</a>
							</div>
							<div>
								<a href="javascript:void(0)" class="link-decoration">Seminars & Conference</a>
							</div>
							<div>
								<a href="javascript:void(0)" class="link-decoration">Annual Function</a>
							</div>
							<div>
								<a href="javascript:void(0)" class="link-decoration">Tech. Fest</a>
							</div>
							<h4 class="footer-heading-color text-uppercase">Students</h4>
							<div>
								<a href="javascript:void(0)" class="link-decoration">Rules & Regulation</a>
							</div>
							<div>
								<a href="javascript:void(0)" class="link-decoration">Student Affairs</a>
							</div>
							<div>
								<a href="javascript:void(0)" class="link-decoration">Alumni Network</a>
							</div>
						</div>
						<div class="col-lg-2">
							<h4 class="footer-heading-color">ABOUT US</h4>
							<div>
								<a href="javascript:void(0)" class="link-decoration">About MITM</a>
							</div>
							<div>
								<a href="javascript:void(0)" class="link-decoration">Vision & Mission</a>
							</div>
							<div>
								<a href="javascript:void(0)" class="link-decoration">Chairman's Message</a>
							</div>
							<div>
								<a href="javascript:void(0)" class="link-decoration">Vice Chairman's Message</a>
							</div>
							<div>
								<a href="javascript:void(0)" class="link-decoration">Principal's Message</a>
							</div>
							<!-- <h6 class="fw-bold">NEWSLETTER : </h6>
							  <p>We will send out weekly newest article and some great offers</p>
							  <form class="" action="" method="POST" id="newsletterform" role="form">
									 <input type="email" class="form-control mb-2" name="newsletter" id="newsletter" required placeholder="Type your Email">
									 <button class="form-control" type="submit" id="newssubmit" name="newssubmit">Subscribe!</button>
								</form> -->
							<h4 class="footer-heading-color text-uppercase ">Gallery</h4>
							<div>
								<a href="javascript:void(0)" class="link-decoration">Photo Collection</a>
							</div>
							<div>
								<a href="javascript:void(0)" class="link-decoration">Video Collection</a>
							</div>
							<h4 class="footer-heading-color text-uppercase ">Library</h4>
							<div>
								<a href="javascript:void(0)" class="link-decoration">Photos</a>
							</div>
							<div>
								<a href="javascript:void(0)" class="link-decoration">Library In Charge Statement & Photo</a>
							</div>
						</div>
						<div class="col-lg-3">
							<h4 class="footer-heading-color">DEPARTMENTS</h4>
							<div>
								<a href="javascript:void(0)" class="link-decoration">Computer Science & Engineering</a>
							</div>
							<div>
								<a href="javascript:void(0)" class="link-decoration">Electronics & Comm. Engineering</a>
							</div>
							<div>
								<a href="javascript:void(0)" class="link-decoration">Electrical & Electronics
									Engineering</a>
							</div>
							<div>
								<a href="javascript:void(0)" class="link-decoration">Mechanical Engineering</a>
							</div>
							<div>
								<a href="javascript:void(0)" class="link-decoration">Electrical Engineering</a>
							</div>
							<div>
								<a href="javascript:void(0)" class="link-decoration">Civil Engineering</a>
							</div>
							<h4 class="footer-heading-color text-uppercase">research and publications</h4>
							<div>
								<a href="javascript:void(0)" class="link-decoration">Publication Details of Teachers</a>
							</div>
							<!-- <h4 class="footer-heading-color">DIPLOMA</h4>
							<div>
								<a href="javascript:void(0)" class="link-decoration">Civil Engineering</a>
							</div>
							<div>
								<a href="javascript:void(0)" class="link-decoration">Mechanical engineering</a>
							</div>
							<div>
								<a href="javascript:void(0)" class="link-decoration">Electrical Engineering</a>
							</div> -->
						</div>
						<div class="col-lg-2">
							<h4 class="footer-heading-color text-uppercase">Cell Committee</h4>
							<div>
								<a href="javascript:void(0)" class="link-decoration">Anti Ragging Policy</a>
							</div>
							<div>
								<a href="javascript:void(0)" class="link-decoration">Grievance Cell</a>
							</div>
							<div>
								<a href="javascript:void(0)" class="link-decoration">Women’s’ Redressal Cell</a>
							</div>
							<div>
								<a href="javascript:void(0)" class="link-decoration">Admission Cell</a>
							</div>
							<div>
								<a href="javascript:void(0)" class="link-decoration">Help Desk</a>
							</div>
							<!-- <h4 class="footer-heading-color">DIPLOMA</h4>
							<div>
								<a href="javascript:void(0)" class="link-decoration">Anti Ragging Policy</a>
							</div>
							<div>
								<a href="javascript:void(0)" class="link-decoration">Rules and Procedure</a>
							</div> -->
							<h4 class="footer-heading-color text-uppercase">training and PLACEMENTS</h4>
							<div>
								<a href="javascript:void(0)" class="link-decoration">Placement Overview</a>
							</div>
							<div>
								<a href="javascript:void(0)" class="link-decoration">Placement Track Record</a>
							</div>
							<div>
								<a href="javascript:void(0)" class="link-decoration">Our Recruiters</a>
							</div>
						</div>

						<div class="col-lg-3">
							<div class="text-size">
								<h4 class="footer-heading-color">CONTACT US</h4>
								<div class="fw-bold">Corporate Office:</div>
								<div>HIG-44 ,</div>
								<div>
									Infront of Tech-Mahindra, Jayadev Vihar, Bhubaneswar
								</div>
								<div>Dist: Khurda, Odisha, Pin: 751142</div>
								<div>Email Id : info@mitm.com</div>
								<div>Phone No : 094398 97178</div>
								<div class="fw-bold">Campus :</div>
								<div>
									Modern Institute of Technology & Management
									(MITM),Bhubaneswar
								</div>
								<div>Santi Niketan, Ghangapatana</div>
								<div>
									PO: Kantabada, Bhubaneswar Dist: Khurda, Odisha, Pin: 752054
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="bg-dark text-white">
			<p class="mb-0 text-center">
				&copy;<span id="year"></span> All Right Reserved | Powered by
				<a class="techgeering-decoration" href="https://www.techgeering.com/" target="_blank">T<span
						class="e-color">e</span>chgeering</a>
			</p>
		</div>
	</footer>
	<!-- FOOTER section end-->

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
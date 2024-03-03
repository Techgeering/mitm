<!doctype html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<title>MITM | Princial Says</title>
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

	<title>MITM | About Us</title>

	<style>
		section {
			padding: 20px 0;
			overflow: hidden;
		}

		.section-bg {
			background-color: #f3f5fa;
		}

		.section-title {
			text-align: center;
			padding-bottom: 18px;
		}

		.section-title h2 {
			font-size: 32px;
			font-weight: bold;
			text-transform: uppercase;
			margin-bottom: 20px;
			padding-bottom: 20px;
			position: relative;
			color: #37517e;
		}

		.section-title h2::before {
			content: "";
			position: absolute;
			display: block;
			width: 120px;
			height: 1px;
			background: #ddd;
			bottom: 1px;
			left: calc(50% - 60px);
		}

		.section-title h2::after {
			content: "";
			position: absolute;
			display: block;
			width: 40px;
			height: 3px;
			background: #47b2e4;
			bottom: 0;
			left: calc(50% - 20px);
		}

		.section-title p {
			margin-bottom: 0;
		}

		.team .member {
			position: relative;
			box-shadow: 0px 2px 15px rgba(0, 0, 0, 0.1);
			padding: 30px;
			border-radius: 5px;
			background: #fff;
			transition: 0.5s;
			height: 116%;
			margin-bottom: 71px;
		}

		.team .member .pic {
			overflow: hidden;
			width: 180px;
			border-radius: 50%;
		}

		.team .member .pic img {
			transition: ease-in-out 0.3s;
		}

		.team .member:hover {
			transform: translateY(-10px);
		}

		.team .member .member-info {
			padding-left: 30px;
		}

		.team .member h4 {
			font-weight: 700;
			margin-bottom: 5px;
			font-size: 20px;
			color: #37517e;
		}

		.team .member span {
			display: block;
			font-size: 15px;
			padding-bottom: 10px;
			position: relative;
			font-weight: 500;
		}

		.team .member span::after {
			content: "";
			position: absolute;
			display: block;
			width: 50px;
			height: 1px;
			background: #cbd6e9;
			bottom: 0;
			left: 0;
		}

		.team .member p {
			margin: 10px 0 0 0;
			font-size: 14px;
		}

		.team .member .social {
			margin-top: 12px;
			display: flex;
			align-items: center;
			justify-content: flex-start;
		}

		.team .member .social a {
			transition: ease-in-out 0.3s;
			display: flex;
			align-items: center;
			justify-content: center;
			border-radius: 50px;
			width: 32px;
			height: 32px;
			background: #eff2f8;
		}

		.team .member .social a i {
			color: #37517e;
			font-size: 16px;
			margin: 0 2px;
		}

		.team .member .social a:hover {
			background: #47b2e4;
		}

		.team .member .social a:hover i {
			color: #fff;
		}

		.team .member .social a+a {
			margin-left: 8px;
		}

		.principal-head {
			font-size: 18px;
			line-height: 24px;
			width: 100%;
			float: left;
			padding-bottom: 19px;
			margin-bottom: 20px;
			margin-top: 290px;
			position: absolute;
			margin-left: -291px;
			font-weight: 600;
		}

		.principal-head:after {
			position: absolute;
			content: "";
			width: 50px;
			height: 4px;
			background: #00b9fb;
			left: 0;
			bottom: 0;
		}

		.principal-desig {
			margin-top: 323px;
			position: absolute;
			margin-left: -225px;
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
					<div class="col-3 ">
						<a href="javascript:void(0)" class="top-icon"><i class="fa fa-facebook top-fa-icon"
								aria-hidden="true"></i></a>
						<a href="javascript:void(0)" class="top-icon"><i class="fa fa-twitter top-fa-icon twitter-color"
								aria-hidden="true"></i></a>
						<a href="javascript:void(0)" class="top-icon"><i
								class="fa fa-linkedin top-fa-icon linkdin-color" aria-hidden="true"></i></a>
						<a href="javascript:void(0)" class="top-icon"><i
								class="fa fa-instagram top-fa-icon instagram-color" aria-hidden="true"></i></a>
					</div>
					<div class="col-9">
						<div class="top-email-no-position">
							<a href="javascript:void(0)" class="top-nav-text no-border-line"><i
									class="fa fa-phone "></i> 094398 97178</a>

							<a href="javascript:void(0)" class="top-nav-text email-spacing"><i
									class="fa fa-envelope "></i> info@mitm.com</a>
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
						<a href="javascript:void(0)" class="top-nav-text"><i class="fa fa-phone "></i> 094398 97178</a>
					</div>
					<div class="col-lg-6">
						<a href="javascript:void(0)" class="top-nav-text "><i class="fa fa-envelope "></i>
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
							<a href="index.php">
								<img src="assets/img/logos1.png" class="img-fluid">
							</a>
						</div>
						<div class="col-8 text-center head-name">
							<h3>Modern Institute of Technology & Management (MITM),BHUBANESWAR</h3>
							<p>(APPROVED BY AICTE,NEW DELHI,AFFILIATED TO BPUT,SCTE & VT,ODISHA)</p>
						</div>
						<div class="col-1 second-nav-position">
							<img src="assets/img/logo2.png" class="img-fluid" alt="logoimg">
						</div>
						<div class="col-1 second-nav-position">
							<img src="assets/img/logo31.png" class="img-fluid" alt="logoimg">
						</div>
						<div class="col-1 second-nav-position">
							<img src="assets/img/logo4.png" class="img-fluid" alt="logoimg">
						</div>
					</div>
				</div>
			</div>
			<!--second nav end for desktop view-->
			<!--third nav start for desktop view-->
			<div class="third-bg-color">
				<div class="container">
					<div class="navbar-nav menu-position justify-content-center text-white">
						<ul class="navbar-nav">
							<li class="nav-item dropdown">
								<a class="nav-link active third-menu-color dropdown-toggle" href="#" id="DropdownMenu1"
									role="button" data-bs-toggle="dropdown" aria-expanded="false">Discover</a>
								<ul class="dropdown-content dropdown-menu-box-position" aria-labelledby="DropdownMenu1">
									<li><a class="dropdown-item dropdown-menu-box dropdown-menu-hover"
											href="about.php">About Us</a></li>
									<li><a class="dropdown-item dropdown-menu-box dropdown-menu-hover"
											href="chairmansays.php">Chairman Speaks</a></li>
									<li><a class="dropdown-item dropdown-menu-box dropdown-menu-hover"
											href="principalsays.php">Principal Speaks</a></li>
									<li><a class="dropdown-item dropdown-menu-box dropdown-menu-hover"
											href="faculty.php">Faculties</a></li>
									<li><a class="dropdown-item dropdown-menu-box dropdown-menu-hover"
											href="accredation.php">Accredation</a></li>
									<li><a class="dropdown-item dropdown-menu-box dropdown-menu-hover"
											href="life.php">Life @ MITM</a></li>
									<!-- <li><a class="dropdown-item dropdown-menu-box dropdown-menu-hover" href="mission.php">Vission & Mission</a></li>
						  <li><a class="dropdown-item dropdown-menu-hover" href="infra.php">Infrastructure</a></li> -->
								</ul>
							</li>
						</ul>
						<ul class="navbar-nav">
							<li class="nav-item dropdown">
								<a class="nav-link active third-menu-color dropdown-toggle" href="#" id="DropdownMenu2"
									role="button" data-bs-toggle="dropdown" aria-expanded="false">Programmes</a>
								<ul class="dropdown-content dropdown-menu-box-position" aria-labelledby="DropdownMenu2">
									<li><a class="dropdown-item dropdown-menu-box dropdown-menu-hover"
											href="ugcourse.php">UG</a></li>
									<li><a class="dropdown-item dropdown-menu-box dropdown-menu-hover"
											href="pgcourse.php">PG</a></li>
									<li><a class="dropdown-item dropdown-menu-box dropdown-menu-hover"
											href="polytechnic.php">Polytechnic</a></li>
									<!-- <li><a class="dropdown-item dropdown-menu-box dropdown-menu-hover" href="prospective.php">Prospective</a></li>
						  <li><a class="dropdown-item dropdown-menu-hover" href="fees.php">fees</a></li> -->
								</ul>
							</li>
						</ul>
						<ul class="navbar-nav">
							<li class="nav-item ">
								<a class="nav-link active third-menu-color "
									href="https://www.bput.ac.in/">Admissions</a>
							</li>
						</ul>
						<ul class="navbar-nav">
							<li class="nav-item ">
								<a class="nav-link active third-menu-color " href="fascilites.php">Fascilities</a>
							</li>
						</ul>
						<ul class="navbar-nav">
							<li class="nav-item dropdown">
								<a class="nav-link active third-menu-color dropdown-toggle" href="#" id="DropdownMenu3"
									role="button" data-bs-toggle="dropdown" aria-expanded="false">Examination</a>
								<ul class="dropdown-content dropdown-menu-box-position" aria-labelledby="DropdownMenu3">
									<li><a class="dropdown-item dropdown-menu-box dropdown-menu-hover"
											href="https://www.bput.ac.in/exam-info.php">Notice</a></li>
									<li><a class="dropdown-item dropdown-menu-box dropdown-menu-hover"
											href="http://bputexam.in/schedule.aspx">Schedule</a></li>
									<li><a class="dropdown-item dropdown-menu-box dropdown-menu-hover"
											href="http://www.bputexam.in/StudentSection/ResultPublished/StudentResult.aspx">Result</a>
									</li>
									<!-- <li><a class="dropdown-item dropdown-menu-box dropdown-menu-hover" href="department.php">Department</a></li>
						  <li><a class="dropdown-item dropdown-menu-box dropdown-menu-hover" href="cell.php">Cell</a></li>
						  <li><a class="dropdown-item dropdown-menu-box dropdown-menu-hover" href="seminar.php">Seminar & Workshop</a></li>
						  <li><a class="dropdown-item dropdown-menu-hover" href="award.php">Award & Certificate</a></li> -->
								</ul>
							</li>
						</ul>
						<!-- <ul class="navbar-nav">
				<li class="nav-item dropdown">
						<a class="nav-link active third-menu-color dropdown-toggle" href="#" id="DropdownMenu4" role="button" data-bs-toggle="dropdown" aria-expanded="false">Placement</a>
						<ul class="dropdown-content dropdown-menu-box-position" aria-labelledby="DropdownMenu4">
						  <li><a class="dropdown-item dropdown-menu-box dropdown-menu-hover" href="laboratories.php">Laboratories</a></li>
						  <li><a class="dropdown-item dropdown-menu-box dropdown-menu-hover" href="libraary.php">Libraary</a></li>
						  <li><a class="dropdown-item dropdown-menu-box dropdown-menu-hover" href="medical.php">Medical Facility</a></li>
						  <li><a class="dropdown-item dropdown-menu-box dropdown-menu-hover" href="hostel.php">Hostel</a></li>
						  <li><a class="dropdown-item dropdown-menu-box dropdown-menu-hover" href="transport.php">Transport</a></li>
						  <li><a class="dropdown-item dropdown-menu-box dropdown-menu-hover" href="cultural.php">Cultural Events & Sports</a></li>
						  <li><a class="dropdown-item dropdown-menu-box dropdown-menu-hover" href="canteen.php">Canteen</a></li>
						  <li><a class="dropdown-item dropdown-menu-hover" href="wifi.php">Wifi Campus</a></li>
					  </ul>
					</li>
			  </ul> -->
						<!-- <ul class="navbar-nav">
				<li class="nav-item dropdown">
						<a class="nav-link active third-menu-color dropdown-toggle" href="#" id="DropdownMenu6" role="button" data-bs-toggle="dropdown" aria-expanded="false">Lecture Note(s)</a>
						<ul class="dropdown-content dropdown-menu-box-position" aria-labelledby="DropdownMenu6">
						  <li><a class="dropdown-item dropdown-menu-box dropdown-menu-hover" href="btech1stnote.php">B.Tech 1st Semester</a></li>
						  <li><a class="dropdown-item dropdown-menu-box dropdown-menu-hover" href="btech2ndnote.php">B.Tech 2st Semester</a></li>
						  <li><a class="dropdown-item dropdown-menu-box dropdown-menu-hover" href="btech3rdnote.php">B.Tech 3st Semester</a></li>
						  <li><a class="dropdown-item dropdown-menu-box dropdown-menu-hover" href="btech4thnote.php">B.Tech 4st Semester</a></li>
						  <li><a class="dropdown-item dropdown-menu-box dropdown-menu-hover" href="btech5thnote.php">B.Tech 5st Semester</a></li>
						  <li><a class="dropdown-item dropdown-menu-box dropdown-menu-hover" href="btech6thnote.php">B.Tech 6st Semester</a></li>
						  <li><a class="dropdown-item dropdown-menu-hover" href="btech7thnote.php">B.Tech 7st Semester</a></li>
					  </ul>
					</li>
			  </ul>
			  <ul class="navbar-nav">
				<li class="nav-item dropdown">
						<a class="nav-link active third-menu-color dropdown-toggle" href="#" id="DropdownMenu7" role="button" data-bs-toggle="dropdown" aria-expanded="false">Lecture Video(s)</a>
						<ul class="dropdown-content dropdown-menu-box-position" aria-labelledby="DropdownMenu7">
						   <li><a class="dropdown-item dropdown-menu-box dropdown-menu-hover" href="btech1stvideo.php">B.Tech 1st Semester</a></li>
						  <li><a class="dropdown-item dropdown-menu-box dropdown-menu-hover" href="btech2ndvideo.php">B.Tech 2st Semester</a></li>
						  <li><a class="dropdown-item dropdown-menu-box dropdown-menu-hover" href="btech3rdvideo.php">B.Tech 3st Semester</a></li>
						  <li><a class="dropdown-item dropdown-menu-box dropdown-menu-hover" href="btech4thvideo.php">B.Tech 4st Semester</a></li>
						  <li><a class="dropdown-item dropdown-menu-box dropdown-menu-hover" href="btech5thvideo.php">B.Tech 5st Semester</a></li>
						  <li><a class="dropdown-item dropdown-menu-box dropdown-menu-hover" href="btech6thvideo.php">B.Tech 6st Semester</a></li>
						  <li><a class="dropdown-item dropdown-menu-hover" href="btech7thvideo.php">B.Tech 7st Semester</a></li>
					  </ul>
					</li>
			  </ul> -->
						<ul class="navbar-nav">
							<li class="nav-item dropdown">
								<a class="nav-link active third-menu-color dropdown-toggle" href="#" id="DropdownMenu9"
									role="button" data-bs-toggle="dropdown" aria-expanded="false">Placement</a>
								<ul class="dropdown-content dropdown-menu-box-position" aria-labelledby="DropdownMenu9">
									<li><a class="dropdown-item dropdown-menu-box dropdown-menu-hover"
											href="placementoverview.php">Overview</a></li>
									<li><a class="dropdown-item dropdown-menu-box dropdown-menu-hover"
											href="placementcompany.php">Company</a></li>
									<!-- <li><a class="dropdown-item dropdown-menu-hover" href="activities.php">Activities of T&P Cell</a></li> -->
								</ul>
							</li>
						</ul>
						<!-- <ul class="navbar-nav">
				<li class="nav-item ">
				  <a class="nav-link active third-menu-color " href="diploma.php">Diploma</a>
				</li>
			  </ul> -->
						<ul class="navbar-nav">
							<li class="nav-item ">
								<a class="nav-link active third-menu-color " href="notice.php">Notice</a>
							</li>
						</ul>
						<ul class="navbar-nav">
							<li class="nav-item ">
								<a class="nav-link active third-menu-color " href="contact.php">Contact Us</a>
							</li>
						</ul>
						<!-- <ul class="navbar-nav">
				<li class="nav-item ">
				   <a class="nav-link active third-menu-color " href="career.php" >Career</a>
				</li>
			  </ul> -->
					</div>
				</div>
			</div>
		</div>
		<!--third nav end for desktop view-->
		<!--navbar start for mobile and tab view-->
		<div class="second-nav-bg d-block d-lg-none d-md-block d-sm-block">
			<nav class="navbar navbar-expand-lg navbar-light bg-light">
				<div class="" style="width: 100%;">
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
							<li class="nav-item dropdown" style="margin-left: -80px;">
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
									<li><a class="dropdown-item" href="accredation.php">Accredation</a></li>
									<li><a class="dropdown-item" href="life.php">Life @ MITM</a></li>
								</ul>
							</li>
							<li class="nav-item dropdown" style="margin-left: -80px;">
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
							<li class="nav-item" style="margin-left: -80px;">
								<a class="nav-link" href="https://www.bput.ac.in/">Admissions</a>
							</li>
							<li class="nav-item" style="margin-left: -80px;">
								<a class="nav-link" href="fascilites.php">Fascilities</a>
							</li>
							<li class="nav-item dropdown" style="margin-left: -80px;">
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
							<li class="nav-item dropdown" style="margin-left: -80px;">
								<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
									data-bs-toggle="dropdown" aria-expanded="false">
									Placement
								</a>
								<ul class="dropdown-menu" aria-labelledby="navbarDropdown">
									<li><a class="dropdown-item" href="placementoverview.php">Overview</a></li>
									<!-- <li><hr class="dropdown-divider"></li> -->
									<li><a class="dropdown-item" href="placementcompany.php">Company</a></li>
								</ul>
							</li>
							<li class="nav-item" style="margin-left: -80px;">
								<a class="nav-link" href="notice.php">Notice</a>
							</li>
							<li class="nav-item" style="margin-left: -80px;">
								<a class="nav-link" href="contact.php">Contact Us</a>
							</li>

							<!-- <li class="nav-item" style="margin-left: -80px;">
								<a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
							</li> -->

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

	<section id="team" class="team section-bg abt-uss">
		<div class="container" data-aos="fade-up">

			<div class="section-title">
				<h2>From Principal's Desk</h2>
				<!-- <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p> -->
			</div>

			<div class="row">

				<div class="col-lg-12" data-aos="zoom-in" data-aos-delay="100">
					<div class="row">
						<div class="col-lg-4 col-sm-12">
							<img src="assets/img/principalmitm.jpg" alt="" height="65%" width="100%">
						</div>
						<div class="col-lg-8 col-sm-12">
							<h4 class="text-uppercase principal-head">Dr. Dillip Kumar Sahoo</h4>
							<h5 class="text-uppercase fw-bold principal-desig">Principal</h5>
							<h4 class="pricipal-para">“A life of Joy and Happiness is Possible only on the basis of
								Knowledge and Science” says Dr. Sarvepalli Radhakrishna. Education is important for
								every individual in a Nation. Technical Education plays a vital role in the Development
								of any Country.
								Modern Institute of Technology and Management was established in the year of 2008. MITM
								is providing an excellent quality of education and mentoring for the students aspiring
								to be competent professionals in Engineering and Technology. The college has well
								qualified, experienced and dedicated faculty members and supporting staff, state of the
								Art-Laboratory and Workshop facilities, Computer facilities, Library, Air-Conditioned
								Seminar Hall, Cafeteria and Hostel facilities.
								The college has a separate Training and Placement cell called Campus to Corporate. This
								cell Organizes several training programs related to development of Life Skill Such as
								Language Communication Skills and Technical skills to our students. Our efforts are
								directed to accommodate the expectations of every student by the way of enabling them to
								participate in Seminar, Workshops, Conferences, Value added courses in plant training
								and industrial project works.
								We believe that discipline, honesty and hard work together Structures the ladder of
								success. With this vision, we inculcate these attributes in our students to make them
								successful in their lives.
								Dr.Dillip Kumar Sahoo,Ph.D. ,VSSUT.
								Principal
								MITM
								Bhubaneswar

							</h4>
						</div>
					</div>
				</div>

			</div>
	</section><!-- End Team Section -->


	<!-- FOOTER section START-->
	<footer class="">
		<div class="footer-bg-img" style="background-image: url(assets/img/footerimg.png);">
			<div class="footer-bg-color">
				<div class="container ">
					<div class="row text-position">
						<div class="col-lg-2">
							<h4 class="footer-heading-color">QUICK LINKS</h4>
							<div><a href="javascript:void(0)" class="link-decoration">NPTEL</a></div>
							<div><a href="javascript:void(0)" class="link-decoration">Swayam</a></div>
							<div><a href="javascript:void(0)" class="link-decoration">DELNET</a></div>
							<div><a href="javascript:void(0)" class="link-decoration">Placement Overview</a></div>
							<div><a href="javascript:void(0)" class="link-decoration">NDL</a></div>
							<div><a href="javascript:void(0)" class="link-decoration">E-SHODHSINDHU</a></div>
							<div><a href="javascript:void(0)" class="link-decoration">ERP</a></div>
							<div><a href="javascript:void(0)" class="link-decoration">Feedback</a></div>
						</div>
						<div class="col-lg-2">
							<h4 class="footer-heading-color">ABOUT US</h4>
							<div><a href="javascript:void(0)" class="link-decoration">Mission & Vision</a></div>
							<div><a href="javascript:void(0)" class="link-decoration">Chairman's Message</a></div>
							<div><a href="javascript:void(0)" class="link-decoration">Vice Chairman's Message</a></div>
							<div><a href="javascript:void(0)" class="link-decoration">Principal's Message</a></div>
							<!-- <h6 class="fw-bold">NEWSLETTER : </h6>
							  <p>We will send out weekly newest article and some great offers</p>
							  <form class="" action="" method="POST" id="newsletterform" role="form">
									 <input type="email" class="form-control mb-2" name="newsletter" id="newsletter" required placeholder="Type your Email">
									 <button class="form-control" type="submit" id="newssubmit" name="newssubmit">Subscribe!</button>
								</form> -->
						</div>
						<div class="col-lg-3">
							<h4 class="footer-heading-color">DEPARTMENTS</h4>
							<div><a href="javascript:void(0)" class="link-decoration">Computer Science & Engineering</a>
							</div>
							<div><a href="javascript:void(0)" class="link-decoration">Electronics & Comm.
									Engineering</a></div>
							<div><a href="javascript:void(0)" class="link-decoration">Electrical & Electronics
									Engineering</a></div>
							<div><a href="javascript:void(0)" class="link-decoration">Mechanical Engineering</a></div>
							<div><a href="javascript:void(0)" class="link-decoration">Electrical Engineering</a></div>
							<div><a href="javascript:void(0)" class="link-decoration">Civil Engineering</a></div>
							<h4 class="footer-heading-color">DIPLOMA</h4>
							<div><a href="javascript:void(0)" class="link-decoration">Civil Engineering</a></div>
							<div><a href="javascript:void(0)" class="link-decoration">Mechanical engineering</a></div>
							<div><a href="javascript:void(0)" class="link-decoration">Electrical Engineering</a></div>
						</div>
						<div class="col-lg-2">
							<h4 class="footer-heading-color">ADMISSIONS</h4>
							<div><a href="javascript:void(0)" class="link-decoration">Anti Ragging Policy</a></div>
							<div><a href="javascript:void(0)" class="link-decoration">Rules and Procedure</a></div>
							<div><a href="javascript:void(0)" class="link-decoration">Our Career Advisor</a></div>
							<h4 class="footer-heading-color">DIPLOMA</h4>
							<div><a href="javascript:void(0)" class="link-decoration">Anti Ragging Policy</a></div>
							<div><a href="javascript:void(0)" class="link-decoration">Rules and Procedure</a></div>
							<h4 class="footer-heading-color">PLACEMENTS</h4>
							<div><a href="javascript:void(0)" class="link-decoration">Placement Overview</a></div>
							<div><a href="javascript:void(0)" class="link-decoration">Placement Track Record</a></div>
							<div><a href="javascript:void(0)" class="link-decoration">Our Recruiters</a></div>
						</div>

						<div class="col-lg-3">
							<div class="text-size">
								<h4 class="footer-heading-color">CONTACT US</h4>
								<div class="fw-bold">Corporate Office:</div>
								<div>HIG-44 ,</div>
								<div>Infront of Tech-Mahindra, Jayadev Vihar, Bhubaneswar</div>
								<div>Dist: Khurda, Odisha, Pin: 751142</div>
								<div>Email Id : info@mitm.com</div>
								<div>Phone No : 094398 97178</div>
								<div class="fw-bold">Campus : </div>
								<div>Modern Institute of Technology & Management (MITM),Bhubaneswar</div>
								<div>Santi Niketan, Ghangapatana</div>
								<div>PO: Kantabada, Bhubaneswar
									Dist: Khurda, Odisha, Pin: 752054</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="bg-dark text-white">
			<p class="mb-0 text-center">&copy;<span id="year"></span> All Right Reserved | Powered by <a
					class="techgeering-decoration" href="https://www.techgeering.com/" target="_blank">T<span
						class="e-color">e</span>chgeering</a></p>
		</div>
	</footer>
	<!-- FOOTER section end-->

	<script type="text/javascript"
		src="assets/bootstrap-5.0.2-dist/bootstrap-5.0.2/js/bootstrap.bundle.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
	<script type="text/javascript" src="assets/js/allpage.js?v=1.3"></script>
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
	<script>
		// Initialize Wow.js
		new WOW().init();
	</script>
	<!-- Toastr JS -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
</body>

</html>
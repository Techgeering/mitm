<!doctype html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<title>MITM | Notices</title>
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

	<!--toaster alert-->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">

	<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>

	<title>MITM | About Us</title>


	<style>
		.notice-event {
			background: linear-gradient(to left, #2e48f259 0%, #40dfff45 100%);
			animation: animateClr 5s infinite cubic-bezier(0.62, 0.28, 0.23, 0.99);
			overflow-y: auto;
			/* Add overflow-y property to enable vertical scrolling */
			height: 354px;
			margin-top: -10px;
		}

		.notice-event p {
			animation: moveNews 10s linear infinite;
		}

		/* Second Animation */
		.notice-event-2 {
			overflow: hidden;
			margin-top: -8px;
			position: relative;
			height: 360px;
			background-color: #f22e2e17;
		}

		@keyframes moveNews2 {
			0% {
				transform: translateY(830%);
			}

			100% {
				transform: translateY(-460%);
			}
		}

		.notice-event-2 li {
			margin-top: 20px;
			position: relative;
			animation: moveNews2 16s ease-in-out infinite;
		}

		.notice-event-2 li::before {
			content: "";
			position: absolute;
			bottom: 0;
			left: 0;
			width: 100%;
			height: 1px;
			/* Adjust the underline height as needed */
			background-color: #00000057;
			/* Adjust the underline color as needed */
		}


		.calendar-container {
			display: flex;
			align-items: center;
		}

		.calendar-img {
			width: 34px;
			/* Adjust the size as needed */
			height: auto;
			margin-right: 5px;
			/* Adjust spacing as needed */
		}

		.date-and-day {
			font-size: 15px;
		}

		.notice-event p {
			border-bottom: 0.5px solid rgba(0, 0, 0, 0.189);
			padding-bottom: 10px;
			/* Add a black line under every news item except the last one */
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
							<a href="tel:+9194398 97178" class="top-nav-text no-border-line"><i
									class="fa fa-phone "></i> 094398 97178</a>

							<a href="mailto:info@mitm.edu.in" class="top-nav-text email-spacing"><i
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
						<a href="tel:+9194398 97178" class="top-nav-text"><i class="fa fa-phone "></i> 094398 97178</a>
					</div>
					<div class="col-lg-6">
						<a href="mailto:info@mitm.edu.in" class="top-nav-text "><i class="fa fa-envelope "></i>
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
						<div class="col-9 text-center head-name">
							<h3>Modern Institute of Technology & Management (MITM),BHUBANESWAR</h3>
							<p>(APPROVED BY AICTE,NEW DELHI,AFFILIATED TO BPUT,SCTE & VT,ODISHA)</p>
						</div>
						<div class="col-1 second-nav-position">
							<img src="assets/img/logo2.png" class="img-fluid" alt="logoimg">
						</div>
						<div class="col-1 second-nav-position">
							<img src="assets/img/logo31.png" class="img-fluid" alt="logoimg">
						</div>
						<!-- <div class="col-1 second-nav-position">
							<img src="assets/img/logo4.png" class="img-fluid" alt="logoimg">
						</div> -->
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


	<div class="heading-bg-img" style="background-image: url(assets/img/headingbgimg.png); margin-top: 166px; ">
		<div class="heading-bg-color">
			<h1 class="heading-text-position text-uppercase">NOTICE</h1>
		</div>
	</div>




	<section class="container notice-section py-2">
		<div class="row">
			<div class="col-lg-8 col-md-12 col-sm-12 col-12 notice-1">
				<h2 class="text-center text-white text-uppercase notice-head1">
					<i class="fa fa-bell mt-2" aria-hidden="true"></i><span class="m-3">News & Events</span>
					<!-- <button class="btn btn-light my-1" onclick="toggleAnimation()" id="toggleBtn" title="Toggle Animation">
				<i class="fa fa-pause" aria-hidden="true"></i>
			</button> -->
				</h2>
				<div class="notice-event py-2">
					<section>
						<?php include 'Admin/db.php';
						$sql = "SELECT * FROM `mitm_news`where status = 1";
						$Sql_query = mysqli_query($conn, $sql);
						$All_fname = mysqli_fetch_all($Sql_query, MYSQLI_ASSOC);
						foreach ($All_fname as $row) {
							?>
							<p>
								<span class="calendar-container">
									<img class="calendar-img" src="assets/img/calendar.png" alt="Calendar Icon" />
									<span class="date-and-day text-danger">
										<span>
											<?php echo $row['date_of_upload']; ?>
										</span>
									</span>
								</span>
								<span class="news-data">
									<?php echo $row['link']; ?><a href=""></a>
								</span>
							</p>
						<?php } ?>
					</section>
					<!-- <p>
						<span class="calendar-container">
							<img class="calendar-img" src="assets/img/calendar.png" alt="Calendar Icon" />
							<span class="date-and-day text-danger">
								<span>01/01/2024</span>
							</span>
						</span>
						Lorem, ipsum dolor sit amet consectetur adipisicing elit.<a href=""><i class="fa fa-download"
								aria-hidden="true"></i></a>
					</p>
					<p>
						<span class="calendar-container">
							<img class="calendar-img" src="assets/img/calendar.png" alt="Calendar Icon" />
							<span class="date-and-day text-danger">
								<span>01/01/2024</span>
							</span>
						</span>
						Lorem ipsum dolor, sit amet consectetur adipisicing elit.<a href=""><i class="fa fa-picture-o"
								aria-hidden="true"></i></a>
					</p>-->
				</div>
			</div>
			<div class="col-lg-4 col-md-12 col-12">
				<h2 class="text-center text-white text-uppercase notice-head2">
					<i class="fa fa-thumb-tack" aria-hidden="true"></i><span class="m-3">Notices</span>
					<button class="btn btn-light my-2" onclick="toggleAnimationSecond()" id="toggleBtns"
						title="Toggle Animation">
						<i class="fa fa-pause text-danger" aria-hidden="true"></i>
					</button>
				</h2>
				<div class="notice-event-2 px-2 py-2">
					<?php include 'Admin/db.php';
					$sql = "SELECT * FROM `mitm_notice`where status = 1";
					$Sql_query = mysqli_query($conn, $sql);
					$All_fname = mysqli_fetch_all($Sql_query, MYSQLI_ASSOC);
					foreach ($All_fname as $row) {
						?>
						<li>
							<?php echo $row['notice']; ?>
						</li>
						<!-- <li>
							2. Lorem, ipsum dolor sit amet consectetur adipisicing elit.
						</li> -->
						<!-- <li>
						3. Lorem ipsum dolor, sit amet consectetur adipisicing elit.
					</li> -->
					<?php } ?>
				</div>
			</div>
		</div>
	</section>




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

	<!-- Toastr JS -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

	<script>
		// Initialize Wow.js
		new WOW().init();
	</script>
	<script>
		// Second Section
		var animationPausedSecond = false;
		var noticeEventItemsSecond = document.querySelectorAll(".notice-event-2 li");

		function toggleAnimationSecond() {
			if (animationPausedSecond) {
				// Play animation
				noticeEventItemsSecond.forEach(function (item) {
					item.style.animationPlayState = "running";
				});
				document.getElementById("toggleBtns").innerHTML =
					'<i class="fa fa-pause text-danger" aria-hidden="true"></i>';
			} else {
				// Pause animation
				noticeEventItemsSecond.forEach(function (item) {
					item.style.animationPlayState = "paused";
				});
				document.getElementById("toggleBtns").innerHTML =
					'<i class="fa fa-play text-danger" aria-hidden="true"></i>';
			}

			// Toggle the state
			animationPausedSecond = !animationPausedSecond;
		}

		// Add hover event listeners to pause animation on news item hover
		noticeEventItemsSecond.forEach(function (item) {
			item.addEventListener("mouseenter", function () {
				noticeEventItemsSecond.forEach(function (newsItem) {
					newsItem.style.animationPlayState = "paused";
				});
			});

			item.addEventListener("mouseleave", function () {
				if (!animationPausedSecond) {
					noticeEventItemsSecond.forEach(function (newsItem) {
						newsItem.style.animationPlayState = "running";
					});
				}
			});
		});

		// Add hover event listener to pause animation on container hover
		var noticeEventContainerSecond = document.querySelector(".notice-event-2");
		noticeEventContainerSecond.addEventListener("mouseenter", function () {
			noticeEventItemsSecond.forEach(function (newsItem) {
				newsItem.style.animationPlayState = "paused";
			});
		});

		// Add mouseout event listener to resume animation on container mouseout
		noticeEventContainerSecond.addEventListener("mouseleave", function () {
			if (!animationPausedSecond) {
				noticeEventItemsSecond.forEach(function (newsItem) {
					newsItem.style.animationPlayState = "running";
				});
			}
		});
	</script>

</body>

</html>
<!doctype html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<title>MITM | Grievance</title>
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

	<title>MITM | Grievance</title>
	<style>
		.container-box {
			background-color: #fff;
			border-radius: 10px;
			padding: 30px;
			border: 1px solid #dee2e6;
			box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
		}

		.form-control {
			border-radius: 8px;
		}

		.btn-primary {
			border-radius: 8px;
		}

		h1 {
			color: #007bff;
		}

		label {
			font-weight: bold;
		}

		.form-text {
			color: #6c757d;
		}

		textarea.form-control {
			resize: none;
		}
	</style>

	<style>
		@keyframes popup {
			0% {
				transform: scale(1);
			}

			50% {
				transform: scale(1.05);
			}

			100% {
				transform: scale(1);
			}
		}

		.popup {
			animation: popup 1s infinite;
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

	<div class="container mb-5" style="margin-top: 190px !important;">
		<div class="container">
			<div class="container-box">
				<p class="text-center text-danger mb-3 fw-bold popup">To review our grievance cell, <a
						href="assets/pdf/grievanceredressal.pdf" target="_blank">Click here</a>.</p>
				<h1 class="text-center mb-4">Grievance Form</h1>
				<form id="grievanceform">
					<div class="row mb-3">
						<div class="col-md-6">
							<label for="inputName" class="form-label">Name</label>
							<input type="text" class="form-control" id="gname">
						</div>
						<div class="col-md-6">
							<label for="inputRegistrationNo" class="form-label">Registration No</label>
							<input type="text" class="form-control" id="gregistration">
						</div>
					</div>
					<div class="row mb-3">
						<div class="col-md-6">
							<label for="inputBranch" class="form-label">Branch</label>
							<input type="text" class="form-control" id="gbranch">
						</div>
						<div class="col-md-6">
							<label for="inputYear" class="form-label">Year</label>
							<input type="text" class="form-control" id="gyear">
						</div>
					</div>
					<div class="row mb-3">
						<div class="col-md-6">
							<label for="inputGender" class="form-label">Gender</label>
							<select class="form-select" id="ggender" style="font-size: 13px;">
								<option selected disabled>Select Gender</option>
								<option value="male">Male</option>
								<option value="female">Female</option>
								<option value="other">Other</option>
							</select>
						</div>
						<div class="col-md-6">
							<label for="inputPhone" class="form-label">Phone No</label>
							<input type="tel" class="form-control" id="gphone">
						</div>
					</div>
					<div class="mb-3">
						<label for="inputEmail" class="form-label">Email address</label>
						<input type="email" class="form-control" id="gemail" aria-describedby="emailHelp">
						<div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
					</div>
					<div class="mb-3">
						<label for="inputGrievance" class="form-label">Grievance</label>
						<textarea class="form-control" id="ggrievance" rows="5"></textarea>
					</div>
					<label id="error-grievance" class="text-danger"></label>
					<button type="submit" name="submit" class="btn btn-primary">Submit</button>
				</form>
			</div>
		</div>
	</div>

	<?php include 'footer.php' ?>

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
		$("#grievanceform").submit(function (e) {
			e.preventDefault();

			var griname = document.getElementById('gname').value;
			var griregistration = document.getElementById('gregistration').value;
			var gribranch = document.getElementById('gbranch').value;
			var griyear = document.getElementById('gyear').value;
			var grigender = document.getElementById('ggender').value;
			var griphone = document.getElementById('gphone').value;
			var griemail = document.getElementById('gemail').value;
			var grigrievance = document.getElementById('ggrievance').value;

			var errormsg = document.getElementById('error-grievance');
			var emailf = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9-]+\.[a-zA-Z]{2,}$/;
			var phonepatf = /^[0-9]{10}$/
			var fnameconf = /[A-Za-z\s]{1,50}/
			var error = false

			if (griname === "" || griregistration === "" || gribranch === "" || griyear === "" || grigender === "" || griphone === "" || griemail === "" || grigrievance === "") {
				errormsg.innerText = "Please fill all the feilds"
			}
			else if (!griname.match(fnameconf)) {
				errormsg.innerText = "Enter a valid name"
			}
			else if (!griemail.match(emailf)) {
				errormsg.innerText = "Enter a valid email"
			}
			else if (!griphone.match(phonepatf)) {
				errormsg.innerText = "please enter valid phone number "
			}
			else {
				errormsg.innerText = "";
				$.ajax({
					type: "POST",
					url: "grievance-forminsert.php",
					data: {
						gname1: griname,
						gregistration1: griregistration,
						gbranch1: gribranch,
						gyear1: griyear,
						ggender1: grigender,
						gphone1: griphone,
						gemail1: griemail,
						grievance1: grigrievance,
					},
					dataType: "json",  // Specify the expected data type
					success: function (data) {
						console.log(data); // Log the response for debugging
						if (data.status === "success") {
							// Show success message using ToastAlert
							toastr.success(data.message, 'Success');

							document.getElementById('gname').value = "";
							document.getElementById('gregistration').value = "";
							document.getElementById('gbranch').value = "";
							document.getElementById('gyear').value = "";
							document.getElementById('ggender').value = "";
							document.getElementById('gphone').value = "";
							document.getElementById('gemail').value = "";
							document.getElementById('ggrievance').value = "";
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
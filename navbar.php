<?php include 'admin/db.php' ?>
<button onclick="topFunction()" id="myBtn" title="Go to top">
	<i class="fa fa-arrow-up" aria-hidden="true"></i>
</button>

<!--top nav start for desktop view-->
<div class="fixed-top top-z-index">
	<div class="top-bgcolor d-none d-lg-block">
		<div class="container">
			<div class="row">
				<div class="col-3">
					<a href="https://www.facebook.com/share/cEx3aUwFEbeQ4EUQ/?mibextid=qi2Omg" class="top-icon"><i
							class="fa fa-facebook top-fa-icon" aria-hidden="true"></i></a>
					<a href="javascript:void(0)" class="top-icon"><i class="fa fa-twitter top-fa-icon twitter-color"
							aria-hidden="true"></i></a>
					<a href="javascript:void(0)" class="top-icon"><i class="fa fa-linkedin top-fa-icon linkdin-color"
							aria-hidden="true"></i></a>
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
	<div class="top-bgcolor d-lg-none d-md-block d-sm-block">
		<div class="container">
			<div class="row text-center">
				<div class="col-6">
					<a href="tel:+9194398 97178" class="top-nav-text"><i class="fa fa-phone"></i> 094398 97178</a>
				</div>
				<div class="col-6">
					<a href="mailto:info@mitm.edu.in" class="top-nav-text"><i class="fa fa-envelope"></i>
						info@mitm.com</a>
				</div>
			</div>
		</div>
	</div>
	<!--top nav end for mobile view-->
	<!--second nav start for desktop view-->
	<div class="d-none d-lg-block">
		<div class="second-nav-bg">
			<div class="container">
				<div class="row">
					<div class="col-1 second-nav-position">
						<a href="<?php echo $base_url; ?>">
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
									<a class="dropdown-item dropdown-menu-box dropdown-menu-hover" href="about">About
										MITM</a>
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
										href="missionvision">Vision & Mission</a>
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
										href="eligibility">Eligibility</a>
								</li>
								<li>
									<a class="dropdown-item dropdown-menu-box dropdown-menu-hover"
										href="feestructure">Fee Structure</a>
								</li>
								<li>
									<a class="dropdown-item dropdown-menu-box dropdown-menu-hover"
										href="scholarships">Scholarship</a>
								</li>
							</ul>
						</li>
					</ul>
					<!-- <ul class="navbar-nav">
							<li class="nav-item">
								<a class="nav-link active third-menu-color" href="fascilites">Facilities</a>
							</li>
						</ul> -->
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
										href="infrastructure">Infrastructure</a>
								</li>
								<li>
									<a class="dropdown-item dropdown-menu-box dropdown-menu-hover"
										href="hostels">Hostel</a>
								</li>
								<li>
									<a class="dropdown-item dropdown-menu-box dropdown-menu-hover"
										href="canteens">Canteen</a>
								</li>
								<li>
									<a class="dropdown-item dropdown-menu-box dropdown-menu-hover"
										href="transportation">Transportation</a>
								</li>
								<li>
									<a class="dropdown-item dropdown-menu-box dropdown-menu-hover"
										href="surrounding">Surrounding</a>
								</li>
								<li>
									<a class="dropdown-item dropdown-menu-box dropdown-menu-hover"
										href="sportscomplex">Sports Complex</a>
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
										href="collegenotice.php">College Notice</a>
								</li>
								<li>
									<a class="dropdown-item dropdown-menu-box dropdown-menu-hover"
										href="examnotice.php">Exam Notice</a>
								</li>
								<li>
									<a class="dropdown-item dropdown-menu-box dropdown-menu-hover"
										href="committee">Committee Members</a>
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
	<div class="d-none d-lg-none d-md-block">
		<div class="second-nav-bg">
			<div class="container">
				<div class="row">
					<div class="col-1 second-nav-position">
						<a href="<?php echo $base_url; ?>">
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
									<a class="dropdown-item dropdown-menu-box dropdown-menu-hover" href="about">About
										MITM</a>
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
										href="missionvision">Vision & Mission</a>
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
										href="eligibility">Eligibility</a>
								</li>
								<li>
									<a class="dropdown-item dropdown-menu-box dropdown-menu-hover"
										href="feestructure">Fee Structure</a>
								</li>
								<li>
									<a class="dropdown-item dropdown-menu-box dropdown-menu-hover"
										href="scholarships">Scholarship</a>
								</li>
							</ul>
						</li>
					</ul>
					<!-- <ul class="navbar-nav">
							<li class="nav-item">
								<a class="nav-link active third-menu-color" href="fascilites">Facilities</a>
							</li>
						</ul> -->
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
										href="infrastructure">Infrastructure</a>
								</li>
								<li>
									<a class="dropdown-item dropdown-menu-box dropdown-menu-hover"
										href="hostels">Hostel</a>
								</li>
								<li>
									<a class="dropdown-item dropdown-menu-box dropdown-menu-hover"
										href="canteens">Canteen</a>
								</li>
								<li>
									<a class="dropdown-item dropdown-menu-box dropdown-menu-hover"
										href="transportation">Transportation</a>
								</li>
								<li>
									<a class="dropdown-item dropdown-menu-box dropdown-menu-hover"
										href="surrounding">Surrounding</a>
								</li>
								<li>
									<a class="dropdown-item dropdown-menu-box dropdown-menu-hover"
										href="sportscomplex">Sports Complex</a>
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
										href="collegenotice.php">College Notice</a>
								</li>
								<li>
									<a class="dropdown-item dropdown-menu-box dropdown-menu-hover"
										href="examnotice.php">Exam Notice</a>
								</li>
								<li>
									<a class="dropdown-item dropdown-menu-box dropdown-menu-hover"
										href="committee">Committee Members</a>
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
	<div class="second-nav-bg d-lg-none d-md-none d-sm-block">
		<nav class="navbar navbar-expand-lg navbar-light bg-light">
			<div class="">
				<a class="navbar-brand" href="<?php echo $base_url; ?>"><img src="assets/img/logos1.png" alt=""
						class="mob-logo"></a>
				<button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse"
					data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
					aria-expanded="false" aria-label="Toggle navigation" style="margin-left: 200px; margin-top: 12px;">
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
						<!-- <li class="nav-item nav-side">
								<a class="nav-link" href="fascilites.php">Facilities</a>
							</li> -->
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
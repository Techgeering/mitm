<!DOCTYPE html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8" />
	<title>MITM | Home</title>
	<!-- Favicon -->
	<link href="assets/img/logos1.png" rel="icon" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<meta name="description" content="Education Website" />
	<meta name="keywords" content="HTML5, CSS3, JavaScript, bootstrap-5" />
	<meta name="author" content="Techgeering" />
	<!-- <meta http-equiv="refresh" content="30"> -->
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" type="text/css" href="assets/bootstrap-5.0.2-dist/bootstrap-5.0.2/css/bootstrap.min.css" />

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />

	<link rel="stylesheet"
		href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />

	<link rel="stylesheet" type="text/css"
		href="http://fonts.googleapis.com/css?family=Ubuntu:regular,bold&subset=Latin" />

	<link rel="stylesheet"
		href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css" />

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />

	<script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>
	<!--toaster alert-->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">

	<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>

	<script>
		// Initialize Wow.js
		new WOW().init();
	</script>

	<link rel="stylesheet" type="text/css" href="assets/css/style.css?v=<?php echo time() ?>" />
</head>

<body>

	<?php include 'navbar.php' ?>

	<!--enquiry start-->
	<?php include 'enquiry.php' ?>
	<!--enquiry end -->

	<!-- Trigger the modal on page load -->
	<script>
		var myModal = new bootstrap.Modal(
			document.getElementById("welcomeModal")
		);
		myModal.show();
	</script>

	<!-- home page start-->
	<div id="carouselExampleCaptions" class="carousel slide carousel-position" data-bs-ride="carousel"
		style="margin-top: 11px;">
		<div class="carousel-indicators indicator-z-index">
			<button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
				aria-current="true" aria-label="Slide 1"></button>
			<button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
				aria-label="Slide 2"></button>
			<button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
				aria-label="Slide 3"></button>
		</div>
		<div class="carousel-inner" style="height: 437px">
			<div class="carousel-item active img-carousel">
				<img src="assets/img/homecaro1.jpg" class="carousel-img zoom" alt="picture" />
				<div class="carousel-caption carousel-box-position d-none d-md-block">
					<div class="container">
						<!-- <h1 class="animation">education</h1> -->
					</div>
					<!-- <div class="row">
						<div class="col-4">
							<div class="home-text-box">
								<div class="row">
									<div class="col-4">
										<img src="assets/img/home-text-img2.png" class="img-fluid text-img-position"
											alt="img" />
									</div>
									<div class="col-8">
										<h5>BEST INDUSTRY LEADERS</h5>
										<a href="javascript:void(0)" class="box-anchor-text">VIEW MORE
											<i class="fa fa-angle-right" aria-hidden="true"></i></a>
									</div>
								</div>
							</div>
						</div>

						<div class="col-4">
							<div class="home-text-box">
								<div class="row">
									<div class="col-4">
										<img src="assets/img/home-text-img1.png" class="img-fluid text-img-position"
											alt="img" />
									</div>
									<div class="col-8">
										<h5>LEARN COURSES ONLINE</h5>
										<a href="javascript:void(0)" class="box-anchor-text">VIEW MORE
											<i class="fa fa-angle-right" aria-hidden="true"></i></a>
									</div>
								</div>
							</div>
						</div>

						<div class="col-4">
							<div class="home-text-box">
								<div class="row">
									<div class="col-4">
										<img src="assets/img/home-text-img3.png" class="img-fluid text-img-position"
											alt="img" />
									</div>
									<div class="col-8">
										<h5>BOOK LIBRARY & STORE</h5>
										<a href="javascript:void(0)" class="box-anchor-text">VIEW MORE
											<i class="fa fa-angle-right" aria-hidden="true"></i></a>
									</div>
								</div>
							</div>
						</div>
					</div> -->
				</div>
			</div>

			<div class="carousel-item img-carousel">
				<img src="assets/img/homecaro2.jpg" class="carousel-img zoom" alt="picture" />
				<div class="carousel-caption carousel-box-position d-none d-md-block">
					<div class="container">
						<!-- <h1 class="animation2 animation">education2</h1> -->
					</div>
					<!-- <div class="row">
						<div class="col-4">
							<div class="home-text-box">
								<div class="row">
									<div class="col-4">
										<img src="assets/img/home-text-img2.png" class="img-fluid text-img-position"
											alt="img" />
									</div>
									<div class="col-8">
										<h5>BEST INDUSTRY LEADERS</h5>
										<a href="javascript:void(0)" class="box-anchor-text">VIEW MORE
											<i class="fa fa-angle-right" aria-hidden="true"></i></a>
									</div>
								</div>
							</div>
						</div>

						<div class="col-4">
							<div class="home-text-box">
								<div class="row">
									<div class="col-4">
										<img src="assets/img/home-text-img1.png" class="img-fluid text-img-position"
											alt="img" />
									</div>
									<div class="col-8">
										<h5>LEARN COURSES ONLINE</h5>
										<a href="javascript:void(0)" class="box-anchor-text">VIEW MORE
											<i class="fa fa-angle-right" aria-hidden="true"></i></a>
									</div>
								</div>
							</div>
						</div>

						<div class="col-4">
							<div class="home-text-box">
								<div class="row">
									<div class="col-4">
										<img src="assets/img/home-text-img3.png" class="img-fluid text-img-position"
											alt="img" />
									</div>
									<div class="col-8">
										<h5>BOOK LIBRARY & STORE</h5>
										<a href="javascript:void(0)" class="box-anchor-text">VIEW MORE
											<i class="fa fa-angle-right" aria-hidden="true"></i></a>
									</div>
								</div>
							</div>
						</div>
					</div> -->
				</div>
			</div>

			<div class="carousel-item img-carousel">
				<img src="assets/img/homecaro3.jpg" class="carousel-img zoom" alt="picture" />
				<div class="carousel-caption carousel-box-position d-none d-md-block">
					<div class="container">
						<!-- <h1 class="animation animation3">education3</h1> -->
					</div>
					<!-- <div class="row">
						<div class="col-4">
							<div class="home-text-box">
								<div class="row">
									<div class="col-4">
										<img src="assets/img/home-text-img2.png" class="img-fluid text-img-position"
											alt="img" />
									</div>
									<div class="col-8">
										<h5>BEST INDUSTRY LEADERS</h5>
										<a href="javascript:void(0)" class="box-anchor-text">VIEW MORE
											<i class="fa fa-angle-right" aria-hidden="true"></i></a>
									</div>
								</div>
							</div>
						</div>

						<div class="col-4">
							<div class="home-text-box">
								<div class="row">
									<div class="col-4">
										<img src="assets/img/home-text-img1.png" class="img-fluid text-img-position"
											alt="img" />
									</div>
									<div class="col-8">
										<h5>LEARN COURSES ONLINE</h5>
										<a href="javascript:void(0)" class="box-anchor-text">VIEW MORE
											<i class="fa fa-angle-right" aria-hidden="true"></i></a>
									</div>
								</div>
							</div>
						</div>

						<div class="col-4">
							<div class="home-text-box">
								<div class="row">
									<div class="col-4">
										<img src="assets/img/home-text-img3.png" class="img-fluid text-img-position"
											alt="img" />
									</div>
									<div class="col-8">
										<h5>BOOK LIBRARY & STORE</h5>
										<a href="javascript:void(0)" class="box-anchor-text">VIEW MORE
											<i class="fa fa-angle-right" aria-hidden="true"></i></a>
									</div>
								</div>
							</div>
						</div>
					</div> -->
				</div>
			</div>
		</div>
	</div>
	<!-- home page end-->

	<section>
		<div class="overlay"></div>
		<div class="container about-us clearfix py-5">
			<div class="row">
				<div class="col-md-7">
					<h2 class="text-center text-uppercase wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.5s">
						About Us
					</h2>
					<p class="abt-uspara">
						Modern Institute of Technology & Management (MITM), was set up in the year 2008 in the Temple
						city, Bhubaneswar, with a mission to provide higher education in the field of Engineering to the
						under privileged at an affordable cost and means. The Academic value is given and utmost
						importance with an aim to provide a comprehensive and contemporary Engineering education.
					</p>
					<p class="abt-uspara">
						The Institute is recognized by
						Govt. of Odisha, approved by AICTE, New Delhi, is affiliated to Biju Pattnaik
						University of Technology, Rourkela, Odisha. The Institute has also got certification of ISO
						9001:2008 for its Quality Management System.The Institute maintains principled academically
						atmosphere with all round development activities, so that the institute can groom the incoming
						student as a dedicated professional and a better citizen. Owing to this, in addition to our
						normal teaching schedule, we conduct extracurricular activity for their intellectual,
						professional and social development.
					</p>
				</div>
				<div class="col-md-5">
					<h2 class="text-center text-uppercase" style="color: #3498db">
						NOTICE
					</h2>
					<div class="news-events-container">
						<div class="scrolling-news-box">
							<?php include 'admin/db.php';
							$sql = "SELECT * FROM `mitm_notice`where status = 1";
							$Sql_query = mysqli_query($conn, $sql);
							$All_fname = mysqli_fetch_all($Sql_query, MYSQLI_ASSOC);
							foreach ($All_fname as $row) {
								?>
								<div class="news-item">
									<li>
										<a href="#" style="color: #41deff">
											<?php echo $row['notice']; ?>
										</a>
									</li>
								</div>
							<?php } ?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<div class="courses-color">
		<div class="courses-position">
			<h1 class="fw-bold text-white text-uppercase wow bounceInLeft">
				Courses
			</h1>
			<p class="text-white">
				Choose from 130,000 online video courses with new additions published
				every month
			</p>

			<!-- Topic Cards -->
			<div id="cards_landscape_wrap-2">
				<div class="container">
					<div class="row">
						<div class="col-xs-12 col-sm-6 col-md-3 col-lg-2">
							<a href="">
								<div class="card-flyer">
									<div class="text-box">
										<div class="image-box">
											<img src="assets/img/btech.png" alt="" />
										</div>
										<div class="text-container">
											<h6 class="text-white">B.Tech</h6>
											<!-- <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p> -->
										</div>
									</div>
								</div>
							</a>
						</div>
						<div class="col-xs-12 col-sm-6 col-md-3 col-lg-2">
							<a href="">
								<div class="card-flyer">
									<div class="text-box">
										<div class="image-box">
											<img src="assets/img/mtech.png" alt="" />
										</div>
										<div class="text-container">
											<h6 class="text-white">M.Tech</h6>
											<!-- <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p> -->
										</div>
									</div>
								</div>
							</a>
						</div>
						<div class="col-xs-12 col-sm-6 col-md-3 col-lg-2">
							<a href="">
								<div class="card-flyer">
									<div class="text-box">
										<div class="image-box">
											<img src="assets/img/mca.jpg" alt="" />
										</div>

										<div class="text-container">
											<h6 class="text-white">MCA</h6>
											<!-- <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p> -->
										</div>
									</div>
								</div>
							</a>
						</div>
						<div class="col-xs-12 col-sm-6 col-md-3 col-lg-2">
							<a href="">
								<div class="card-flyer">
									<div class="text-box">
										<div class="image-box">
											<img src="assets/img/mba.jpeg" alt="" />
										</div>
										<div class="text-container">
											<h6 class="text-white">MBA</h6>
											<!-- <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p> -->
										</div>
									</div>
								</div>
							</a>
						</div>
						<div class="col-xs-12 col-sm-6 col-md-3 col-lg-2">
							<a href="">
								<div class="card-flyer">
									<div class="text-box">
										<div class="image-box">
											<img src="assets/img/diploma.jpeg" alt="" />
										</div>
										<div class="text-container">
											<h6 class="text-white">Diploma</h6>
											<!-- <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p> -->
										</div>
									</div>
								</div>
							</a>
						</div>
						<div class="col-xs-12 col-sm-6 col-md-3 col-lg-2">
							<a href="">
								<div class="card-flyer">
									<div class="text-box">
										<div class="image-box">
											<img src="assets/img/cs.jpeg" alt="" />
										</div>
										<div class="text-container">
											<h6 class="text-white">Computer Science</h6>
											<!-- <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p> -->
										</div>
									</div>
								</div>
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- TEACHING APPROACH section tart-->
	<div class="teaching-bg-color">
		<div class="container">
			<div class="row">
				<div class="col-lg-6">
					<h1 class="text-center text-uppercase">
						A Comprehensive Teaching Approach
					</h1>
					<p class="para-size">
						Lorem Ipsum est simplement du faux texte employé dans la
						composition et la mise en page avant impression. Le Lorem Ipsum
						est le faux texte standard de l'imprimerie depuis les années 1500,
						quand un imprimeur anonyme assembla ensemble des morceaux de texte
						pour réaliser un livre spécimen de polices de texte. Il n'a pas
						fait que survivre cinq siècles, mais s'est aussi adapté à la
						bureautique informatique, sans que son contenu n'en soit modifié.
						Il a été popularisé dans les années 1960 grâce à la vente de
						feuilles Letraset contenant des passages du Lorem Ipsum, et, plus
						récemment, par son inclusion dans des applications de mise en page
						de texte, comme Aldus PageMaker.
					</p>
				</div>
				<div class="col-lg-6">
					<img src="assets/img/teacher.jpg" class="img-fluid teaching-img-size" alt="techerimg" />
				</div>
			</div>
		</div>
	</div>
	<!-- TEACHING APPROACH section end-->
	<!-- total count section start-->
	<div class="total-no-color" style="background-image: url('assets/img/home7.JPG')">
		<div class="total-no-color-shadow">
			<div class="container">
				<h1 class="facility pt-3 text-uppercase">Facilities</h1>
				<div id="counter" class="on-mobile-screen">
					<div class="item">
						<img src="assets/img/students.png" alt="img" />
						<h1 class="count" data-number="2000"></h1>
						<span class="span-text">Total Pass Students</span>
					</div>
					<div class="item">
						<img src="assets/img/lectureimg.png" alt="img" />
						<h1 class="count" data-number="120"></h1>
						<span class="span-text">Lecturers</span>
					</div>
					<div class="item">
						<img src="assets/img/courses.png" alt="img" />
						<h1 class="count" data-number="100"></h1>
						<span class="span-text">Courses</span>
					</div>
					<div class="item">
						<img src="assets/img/library.png" alt="img" />
						<h1 class="count" data-number="3000"></h1>
						<span class="span-text">Books In Our Library</span>
					</div>
					<div class="item">
						<img src="assets/img/visitiors.png" alt="img" />
						<h1 class="count" data-number="1201"></h1>
						<span class="span-text">Daily Website Visitors</span>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- total count section end-->

	<div class="container py-5">
		<h2 class="text-uppercase text-center">Placement</h2>
		<div class="row">
			<div class="col-12 col-md-4 py-5 placement-data"
				style="background-image: url('assets/img/placementbanner.png');">
				<h2 class="text-center text-primary text-uppercase placement-count">Recruiters</h2>
				<p id="recruitersCount" class="fw-bold text-center text-white placement-count">0</p>
				<h2 class="text-center text-primary text-uppercase placement-count">
					Students Placed
				</h2>
				<p id="studentsPlacedCount" class="fw-bold text-center text-white placement-count">
					0
				</p>
				<h2 class="text-center text-primary text-uppercase placement-count">Alumni</h2>
				<p id="alumniCount" class="fw-bold text-center text-white placement-count">0</p>
			</div>
			<div class="col-12 col-md-7 placement-data py-2">
				<img src="assets/img/comp.jpg" alt="" class="img-fluid" />
				<!-- Add more images or content here -->
			</div>
		</div>
	</div>

	<!-- testimonial section start-->
	<div class="courses-color">
		<div class="container">
			<div class="courses-position">
				<h1 class="text-center text-white">What Alumini Speaks About Us ?</h1>
			</div>

			<div class="owl-carousel owl-theme owl-testimonial">
				<div class="item">
					<div class="carousel-caption1">
						<h4 class="text-white">
							<i class="fa fa-quote-left quota-color-white" aria-hidden="true"></i>
							Lorem ipsum dolor sit amet, consectetur adipiscing elit. In ac
							dapibus justo, a rhoncus dolor. Curabitur quis venenatis odio.
							Maecenas laoreet in libero eget vulputate. Il n'a pas fait que
							survivre cinq siècles, mais s'est aussi adapté à la bureautique
							informatique, sans que son contenu n'en soit modifié.
							<i class="fa fa-quote-right quota-color-white" aria-hidden="true"></i>
						</h4>
						<img src="assets/img/student1.jpg" class="img-fluid img-position" />
						<div class="image-caption">
							<h3 class="text-white">Anamika</h3>
							<h5 class="text-white">
								Student at Modern Institute of Technology & Management (MITM)
							</h5>
						</div>
					</div>
				</div>
				<div class="item">
					<div class="carousel-caption1">
						<h4 class="text-white">
							<i class="fa fa-quote-left quota-color-white" aria-hidden="true"></i>
							Lorem ipsum dolor sit amet, consectetur adipiscing elit. In ac
							dapibus justo, a rhoncus dolor. Curabitur quis venenatis odio.
							Maecenas laoreet in libero eget vulputate. Il n'a pas fait que
							survivre cinq siècles, mais s'est aussi adapté à la bureautique
							informatique, sans que son contenu n'en soit modifié.
							<i class="fa fa-quote-right quota-color-white" aria-hidden="true"></i>
						</h4>
						<img src="assets/img/student1.jpg" class="img-fluid img-position" />
						<div class="image-caption">
							<h3 class="text-white">Tara</h3>
							<h5 class="text-white">
								Student at Modern Institute of Technology & Management (MITM)
							</h5>
						</div>
					</div>
				</div>
				<div class="item">
					<div class="carousel-caption1">
						<h4 class="text-white">
							<i class="fa fa-quote-left quota-color-white" aria-hidden="true"></i>
							Lorem ipsum dolor sit amet, consectetur adipiscing elit. In ac
							dapibus justo, a rhoncus dolor. Curabitur quis venenatis odio.
							Maecenas laoreet in libero eget vulputate. Il n'a pas fait que
							survivre cinq siècles, mais s'est aussi adapté à la bureautique
							informatique, sans que son contenu n'en soit modifié.
							<i class="fa fa-quote-right quota-color-white" aria-hidden="true"></i>
						</h4>
						<img src="assets/img/student1.jpg" class="img-fluid img-position" />
						<div class="image-caption">
							<h3 class="text-white">Sunami</h3>
							<h5 class="text-white">
								Student at Modern Institute of Technology & Management (MITM)
							</h5>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- testimonial section end-->

	<?php include 'footer.php' ?>

	<script type="text/javascript"
		src="assets/bootstrap-5.0.2-dist/bootstrap-5.0.2/js/bootstrap.bundle.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
	<script type="text/javascript" src="assets/js/allpage.js?v=1.3"></script>
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
	<!-- Toastr JS -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

	<script>
		function startCountAnimation(targetId, endValue) {
			let currentCount = 0;
			const countElement = document.getElementById(targetId);
			const interval = setInterval(function () {
				currentCount++;
				countElement.textContent = currentCount;
				if (currentCount === endValue) {
					clearInterval(interval);
				}
			}, 20); // Adjust the interval (speed) as needed
		}

		// Start count animations for each section
		startCountAnimation("recruitersCount", 150);
		startCountAnimation("studentsPlacedCount", 200);
		startCountAnimation("alumniCount", 500);
	</script>
	<script>
		var myModal = new bootstrap.Modal(
			document.getElementById("welcomeModal")
		);
		myModal.show();
	</script>
	<!--for Admission Enquiry Form not Refreshed after send blank abd error input fields-->
	<script>
		$("#mitmenquiry").submit(function (e) {
			e.preventDefault();

			var fullname = document.getElementById("enquiryname").value;
			var emailid = document.getElementById("enquiryemail").value;
			var mobile = document.getElementById("enquiryphone").value;
			var address = document.getElementById("enquiryaddress").value;
			var course = document.getElementById("enquirycourse").value;
			var lexam = document.getElementById("lastexam").value;
			var lexamper = document.getElementById("lastexampct").value;
			var entrancee = document.getElementById("entrance").value;

			var errorstatus = document.getElementById("error-status");
			var emailRegex = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9-]+\.[a-zA-Z]{2,}$/;
			var phonepat = /^[0-9]{10}$/;
			var fnamecon = /[A-Za-z\s]{1,50}/;
			var error = false;

			if (
				fullname === "" ||
				emailid === "" ||
				mobile === "" ||
				address === "" ||
				course === "" ||
				lexam === "" ||
				lexamper === "" ||
				entrancee === ""
			) {
				errorstatus.innerText = "Please fill all the feilds";
			} else if (!fullname.match(fnamecon)) {
				errorstatus.innerText = "Enter a valid name";
			} else if (!emailid.match(emailRegex)) {
				errorstatus.innerText = "Enter a valid email";
			} else if (!mobile.match(phonepat)) {
				errorstatus.innerText = "Enter a valid phone number";
			} else {
				errorstatus.innerText = "";
				$.ajax({
					type: "POST",
					url: "enquiry-forminsert.php",
					data: {
						name: fullname,
						email: emailid,
						phone: mobile,
						address: address,
						course: course,
						lexamapp: lexam,
						lexamper: lexamper,
						entranceapp: entrancee,
					},
					dataType: "json", // Specify the expected data type
					success: function (data) {
						console.log(data); // Log the response for debugging
						if (data.status === "success") {
							// Show success message using ToastAlert
							toastr.success(data.message, "Success");

							document.getElementById("enquiryname").value = "";
							document.getElementById("enquiryemail").value = "";
							document.getElementById("enquiryphone").value = "";
							document.getElementById("enquiryaddress").value = "";
							document.getElementById("enquirycourse").value = "";
							document.getElementById("lastexam").value = "";
							document.getElementById("lastexampct").value = "";
							document.getElementById("entrance").value = "";
						} else {
							// Show error message using SweetAlert
							Swal.fire({
								icon: "error",
								title: "Error!",
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
					},
				});
			}
		});

	</script>
</body>

</html>
<!doctype html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<title>MITM | Faculty</title>
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

	<link rel="stylesheet" type="text/css" href="assets/css/style.css?v=<?php echo time(); ?>">

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/3.5.0/remixicon.css">

	<!--toaster alert-->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">

	<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>

	<title>MITM | About Us</title>
	<style>
		@import url('https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap');
		@import url("https://use.fontawesome.com/releases/v5.13.0/css/all.css");

		:root {
			--font3: 'Roboto', sans-serif;
		}

		.h1,
		h1 {
			font-size: 1.5rem;
			color: #42defb;
		}

		.container-fluid {
			max-width: 1400px;
		}

		.card {
			background: #fff;
			box-shadow: 0 6px 10px rgba(0, 0, 0, .08), 0 0 6px rgba(0, 0, 0, .05);
			border: 1;
			border-radius: 1rem;
			max-width: 300px !important;
		}

		.img-hover-zoom--colorize img {
			border-radius: 50%;
			width: 150px;
			/* Change this to your desired width */
			height: 200px;
			/* Change this to your desired height */
			margin-top: 20px;
			padding: 1px;
			transition: transform .5s;
		}


		.img-hover-zoom--colorize:hover img {
			transform: scale(1.05);
		}

		.card h5 {
			overflow: hidden;
			height: 80px;
			font-weight: 300;
			font-size: 1rem;
		}

		.card h5 a {
			color: black;
			text-decoration: none;
		}

		.role {
			color: black;
			font-size: 12px !important;
		}

		.box {
			display: flex;
			align-items: center;
			justify-content: center;
		}

		.fab {
			font-size: 1.5rem;
			color: darkgray;
			transition: transform .5s;
		}

		.fab:hover {
			color: black;
			transform: scale(1.1);
		}

		.card h2 {
			font-size: 1rem;
		}


		/* MEDIA */

		@media only screen and (min-width: 1200px) {
			.img-hover-zoom--colorize img {
				width: 200px;
			}
		}

		@media only screen and (min-width: 1200px) {

			.h1,
			h1 {
				font-size: 2rem;
			}
		}
	</style>


</head>

<body>

	<?php include 'navbar.php' ?>
	<!--enquiry start-->
	<?php include 'enquiry.php' ?>
	<!--enquiry end -->




	<div class="container p-5" style="margin-top: 175px;">
	<h1 class="all-heading-color text-center fac">FACULTIES</h1>
		<div class="row row-cols-1 row-cols-xs-2 row-cols-sm-2 row-cols-lg-4 g-3">

			<?php include 'admin/db.php';
			$sql = "SELECT * FROM `mitm_faculty`where status = 1 AND college_type= 1";
			$Sql_query = mysqli_query($conn, $sql);
			$All_fname = mysqli_fetch_all($Sql_query, MYSQLI_ASSOC);
			foreach ($All_fname as $row) {
				?>
				<div class="col">
					<div class="card h-100 shadow-sm">
						<div class="text-center">
							<div class="img-hover-zoom img-hover-zoom--colorize">
								<img class="shadow" src="admin/upload/member/<?php echo $row['image']; ?>"
									alt="Another Image zoom-on-hover effect">
							</div>
						</div>
						<div class="card-body">
							<div class="clearfix mb-3">
							</div>
							<div class="my-2 text-center">
								<h1>
									<?php echo $row['faculty_name']; ?>
								</h1>
								<h4>Associate Professor</h4>
							</div>
							<div class="mb-3">
								<h2 class="text-uppercase text-center role">
									<?php echo $row['designation']; ?>
								</h2>
							</div>
						</div>
					</div>
				</div>
			<?php } ?>
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
</body>

</html>
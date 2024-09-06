<!doctype html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<title>MITM | Placement Companies</title>
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
	<!-- <link href="assets/css/style.css?v=1.6" rel="stylesheet"> -->

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/3.5.0/remixicon.css">

	<!--toaster alert-->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">

	<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>

	<title>MITM | About Us</title>

	<style>
		/* Style the tab content */
		.tabcontent {
			display: none;
			padding: 6px 5px;
		}

		.card {
			max-width: 255px;
			height: 220px !important;
			margin: 12px auto;
		}

		.tab .tablinks {
			text-align: center;
		}

		.btn-container {
			display: flex;
			justify-content: center;
			margin: 20px 0;
		}

		.btn-container .btn {
			padding: 10px 20px;
			margin: 0 10px;
			background-color: #007bff;
			color: white;
			border: none;
			border-radius: 5px;
			cursor: pointer;
			transition: background-color 0.3s;
		}

		.btn-container .btn.active {
			background-color: #0056b3;
			/* Different color when active */
		}

		.btn-container .btn:hover {
			background-color: #0056b3;
		}
	</style>
</head>

<body>

	<?php include 'navbar.php' ?>
	<!--enquiry start-->
	<?php include 'enquiry.php' ?>
	<!--enquiry end -->

	<div class="heading-bg-img place-head" style="background-image: url(assets/img/headingbgimg.png);">
		<div class="heading-bg-color">
			<h1 class="heading-text-position text-uppercase">Life @ mitm</h1>
		</div>
	</div>

	<div class="btn-container">
		<button class="btn" onclick="showImages()">Images</button>
		<button class="btn" onclick="showVideos()">Videos</button>
	</div>

	<section class="photo-gallery py-2" id="imageSection">
		<div class="container">
			<div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4 gallery-grid" id="gallery">
				<?php include 'admin/db.php';
				$sql = "SELECT * FROM `mitm_life_image`where status = 1 AND college_type= 1";
				$Sql_query = mysqli_query($conn, $sql);
				$All_fname = mysqli_fetch_all($Sql_query, MYSQLI_ASSOC);
				foreach ($All_fname as $row) {
					?>
					<div class="col">
						<img src="admin/upload/<?php echo $row['image']; ?>" class="img-fluid" alt="">
					</div>
				<?php } ?>
			</div>
		</div>
	</section>

	<section class="photo-gallery py-2" id="videoSection" style="display:none;">
		<div class="container">
			<div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4 gallery-grid" id="videoGallery">
				<?php include 'admin/db.php';
				$sql = "SELECT * FROM `mitm_life_video`where status = 1 AND college_type= 1";
				$Sql_query = mysqli_query($conn, $sql);
				$All_fname = mysqli_fetch_all($Sql_query, MYSQLI_ASSOC);
				foreach ($All_fname as $row) {
					?>
					<iframe width="350" height="300"
						src="https://www.youtube.com/embed/<?php echo $row['video']; ?>?si=E79o4W_2X29Br8lM"
						title="YouTube video player" frameborder="0"
						allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
						frameborder="0" allowfullscreen></iframe>
				<?php } ?>
			</div>
		</div>
	</section>

	<script>
		document.addEventListener('DOMContentLoaded', function () {
			const urlParams = new URLSearchParams(window.location.search);
			const section = urlParams.get('section');

			if (section === 'video') {
				showVideos();
			} else {
				showImages();
			}
		});

		function showImages() {
			document.getElementById('imageSection').style.display = 'block';
			document.getElementById('videoSection').style.display = 'none';
			setActiveButton('Images');
		}

		function showVideos() {
			document.getElementById('imageSection').style.display = 'none';
			document.getElementById('videoSection').style.display = 'block';
			setActiveButton('Videos');
		}

		function setActiveButton(buttonType) {
			const buttons = document.querySelectorAll('.btn-container .btn');
			buttons.forEach(button => {
				button.classList.remove('active');
			});

			if (buttonType === 'Images') {
				buttons[0].classList.add('active');
			} else if (buttonType === 'Videos') {
				buttons[1].classList.add('active');
			}
		}
	</script>


	<?php include 'footer.php' ?>

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"></script>
	<script type="text/javascript"
		src="assets/bootstrap-5.0.2-dist/bootstrap-5.0.2/js/bootstrap.bundle.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
	<script type="text/javascript" src="assets/js/allpage.js?v=<?php echo time(); ?>"></script>

	<script>
		// Initialize Wow.js
		new WOW().init();
	</script>
</body>

</html>
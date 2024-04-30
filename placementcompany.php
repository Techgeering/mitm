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

</head>

<body>

<?php include 'navbar.php' ?>
	<!--enquiry start-->
	<?php include 'enquiry.php' ?>
	<!--enquiry end -->


	<div class="heading-bg-img place-head" style="background-image: url(assets/img/headingbgimg.png);">
		<div class="heading-bg-color">
			<h1 class="heading-text-position text-uppercase">Placement Company</h1>
		</div>
	</div>
	<!--Desktop view-->
	<div class="d-none d-lg-block">
		<div class="container">
			<h4 class="text-uppercase mission-head">Placemnt Companies</h4>
			<div class="row">
				<div class="logos">
					<div class="comp-img ">
						<?php include 'admin/db.php';
						$sql = "SELECT * FROM `mitm_placement`where status = 1";
						$Sql_query = mysqli_query($conn, $sql);
						$All_fname = mysqli_fetch_all($Sql_query, MYSQLI_ASSOC);
						foreach ($All_fname as $row) {
							?>
							<img src="admin/upload/<?php echo $row['image']; ?>" alt="">
						<?php } ?>
					</div>
					<!-- <div class="col-lg-3 comp-img ">
						<img src="assets/img/comp2.jpeg" alt="">
					</div>
					<div class="col-lg-3 comp-img ">
						<img src="assets/img/comp3.png" alt="">
					</div>
					<div class="col-lg-3 comp-img ">
						<img src="assets/img/comp4.png" alt="">
					</div>
					<div class="col-lg-3 comp-img ">
						<img src="assets/img/comp5.jpeg" alt="">
					</div>
					<div class="col-lg-3 comp-img ">
						<img src="assets/img/comp6.jpeg" alt="">
					</div>
					<div class="col-lg-3 comp-img ">
						<img src="assets/img/comp7.jpeg" alt="">
					</div>
					<div class="col-lg-3 comp-img">
						<img src="assets/img/comp8.1.png" alt="">
					</div> -->
				</div>
			</div>
		</div>
	</div>
	<!--End Desktop view-->
	<div class="d-lg-none d-sm-block">
		<div class="container py-5">
			<h4 class="text-uppercase mission-head">Placemnt Companies</h4>
			<div class="">
				<div class="text-center">
					<img src="assets/img/comp1.png" alt="">
				</div>
				<div class="text-center">
					<img src="assets/img/comp2.jpeg" alt="">
				</div>
				<div class="text-center">
					<img src="assets/img/comp3.png" alt="">
				</div>
				<div class="text-center">
					<img src="assets/img/comp4.png" alt="">
				</div>
				<div class="text-center">
					<img src="assets/img/comp5.jpeg" alt="">
				</div>
				<div class="text-center">
					<img src="assets/img/comp6.jpeg" alt="">
				</div>
				<div class="text-center">
					<img src="assets/img/comp7.jpeg" alt="">
				</div>
				<div class="text-center">
					<img src="assets/img/comp8.png" alt="">
				</div>
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
	<!-- Toastr JS -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

	<script>
		// Initialize Wow.js
		new WOW().init();
	</script>

</body>

</html>
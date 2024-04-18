<!doctype html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<title>MITM | Contact Us</title>
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

	<!-- <link rel="stylesheet"
		href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" /> -->

	<!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
		integrity="sha512-c42qTSw/wPZ3/5LBzD+Bw5f7bSF2oxou6wEb+I/lqeaKV5FDIfMvvRp772y4jcJLKuGUOpbJMdg/BTl50fJYAw=="
		crossorigin="anonymous" referrerpolicy="no-referrer" /> -->

	<link rel="stylesheet" type="text/css"
		href="http://fonts.googleapis.com/css?family=Ubuntu:regular,bold&subset=Latin">

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css">

	<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"> -->

	<link rel="stylesheet" type="text/css" href="assets/css/style.css?v=<?php echo time(); ?>">

	<!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/3.5.0/remixicon.css"> -->

	<!-- <title>MITM | About Us</title> -->

	<!--toaster alert-->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">

	<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>

</head>

<body>

<?php include 'navbar.php' ?>
	<!--enquiry start-->
	<?php include 'enquiry.php' ?>
	<!--enquiry end -->

	<div class="heading-bg-img place-head" style="background-image: url(assets/img/headingbgimg.png);">
		<div class="heading-bg-color">
			<h1 class="heading-text-position text-uppercase">contact us</h1>
		</div>
	</div>

	<div class="contact-form py-2">
		<div class="container">
			<div class="bg-light">
				<div class="row">
					<div class="col-lg-8 col-md-12 bg-white rounded-3 cont-form">
						<div class="d-flex mb-3 flex-column">
						</div>
						<h2 class="text-center text-uppercase">Contact Us For The Query</h2>
						<form id="mitmcontact" role="form" class="row mb-3">
							<label id="error-message" class="text-danger"></label>
							<div class="col-md-6 col-sm-12 p-3">
								<input placeholder="first name" type="text" id="fname" />
							</div>

							<div class="col-md-6 col-sm-12 p-3">
								<input placeholder="last name" type="text" id="lname" />
							</div>

							<div class="col-md-6 col-sm-12 p-3">
								<input placeholder="E-mail" type="email" id="cmail" />
							</div>

							<div class="col-md-6 col-sm-12 p-3">
								<input placeholder="phone" type="tel" id="cphone" />
							</div>

							<div class="col-md col-sm-12">
								<textarea placeholder="write your message" id="cmessage" cols="30" rows="1"></textarea>
							</div>

							<div class="text-end mt-4">
								<input class="btn px-4 py-3 btn-primary" name="submit" type="submit"
									value="Send Message" />
							</div>

						</form>
						<!-- <h6 class="text-center text-danger" >*Fill out the form and we will get back to you soon</h6> -->
					</div>
					<div class="col-lg-4 col-md-12 text-white aside px-4 py-5">
						<div class="mb-5">
							<h1 class="h3">Contact Information</h1>
							<p class="opacity-50">
								<small>
									<!-- Fill out the from and we will get back to you whitin 24 hours -->
								</small>
							</p>
						</div>
						<div class="d-flex flex-column px-0">
							<ul class="m-0 p-0">
								<li class="d-flex justify-content-start align-items-center mb-4">
									<span class="opacity-50 d-flex align-items-center me-3 fs-2">
										<ion-icon name="call"></ion-icon>
									</span>
									<span>094398 97178</span>
								</li>
								<li class="d-flex align-items-center r mb-4">
									<span class="opacity-50 d-flex align-items-center me-3 fs-2">
										<ion-icon name="mail"></ion-icon>
									</span>
									<span>info@mitm.com</span>
								</li>
								<li class="d-flex justify-content-start align-items-center mb-4">
									<span class="opacity-50 d-flex align-items-center me-3 fs-2">
										<ion-icon name="pin"></ion-icon>
									</span>
									<span>8P47+2JH, Bidyavihar, Kantabada, Khurdha - Chandaka Road, Bhubaneswar, Odisha
										752054<br />
										Arkansas(AR), 72032
									</span>
								</li>
							</ul>
							<!-- <div class="text-muted text-center">
				  <code>
					Inspiration from :
					<a href="https://dribbble.com/shots/14126196-Contact-Form-01/attachments/5749555?mode=media">
					  Erşad Başbağ
					</a></code>
				  <br />
				  <code>Created By : walid cherhane </code> <br />
				  <code><a class="fs-3" href="https://codepen.io/walidcherhane" target="_blank">
					  <ion-icon name="logo-codepen"></ion-icon>
					</a></code>
				</div> -->
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="maps d-none d-lg-block">
		<div class="p-3">
		<iframe class="ms-1"
				src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d69171.17726727438!2d85.66650561172942!3d20.304965323842012!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a19070d705d9f45%3A0x873ac9e651b338f3!2sModern%20Institute%20of%20Technology%20%26%20Management%20(MITM)!5e0!3m2!1sen!2sin!4v1706508997962!5m2!1sen!2sin"
				 style="border:0; width: 51%; height: 300px;" allowfullscreen="" loading="lazy"
				referrerpolicy="no-referrer-when-downgrade"></iframe>

                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3742.357815541144!2d85.795574!3d20.2854513!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a1909eff52275c3%3A0x74f6557747ebb021!2sMITM%20Office!5e0!3m2!1sen!2sin!4v1713343971092!5m2!1sen!2sin" style="border:0; width: 48%; height: 300px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
		</div>
	</div>
	<div class="maps d-lg-none d-sm-block">
		<div class="">
			<iframe
				src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d69171.17726727438!2d85.66650561172942!3d20.304965323842012!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a19070d705d9f45%3A0x873ac9e651b338f3!2sModern%20Institute%20of%20Technology%20%26%20Management%20(MITM)!5e0!3m2!1sen!2sin!4v1706508997962!5m2!1sen!2sin"
				width="393" height="450" style="border:0;" allowfullscreen="" loading="lazy"
				referrerpolicy="no-referrer-when-downgrade"></iframe>
		</div>
	</div>

	<?php include 'footer.php' ?>

	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
	<script src="assets/bootstrap-5.0.2-dist/bootstrap-5.0.2/js/bootstrap.bundle.min.js"></script>
	<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>

	<!-- Other scripts -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
	<script type="text/javascript" src="assets/js/allpage.js?v=1.3"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>

	<script>
		// Initialize Wow.js
		new WOW().init();
	</script>

	<script src="assets/js/allpage.js?=<?php echo time(); ?>"></script>

	<!-- Toastr JS -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

</body>

</html>

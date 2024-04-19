<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <title>MITM | Fee Structure</title>
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

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
        integrity="sha512-c42qTSw/wPZ3/5LBzD+Bw5f7bSF2oxou6wEb+I/lqeaKV5FDIfMvvRp772y4jcJLKuGUOpbJMdg/BTl50fJYAw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" type="text/css"
        href="http://fonts.googleapis.com/css?family=Ubuntu:regular,bold&subset=Latin">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css">

    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"> -->

    <link rel="stylesheet" type="text/css" href="assets/css/style.css?<?php echo time(); ?>">

    <!--toaster alert-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>


    <title>MITM | About Us</title>

    <style>
        .toggle-switch {
            display: flex;
            justify-content: center;
            margin-bottom: 20px;
        }

        .toggle-switch button {
            padding: 10px 20px;
            background-color: #eee;
            color: black !important;
            border: none;
            cursor: pointer;
        }

        .toggle-switch button.active {
            background: linear-gradient(to bottom, #2e48f2 0%, #40dfff 100%);
            color: white;
        }

        .video-container {
            width: 40%;
            padding: 10px;
            background: white;
            display: inline-block;
        }

        .responsive-video {
            position: relative;
            display: block;
            width: 100%;
            height: 0;
            padding-bottom: 56.25%;
        }

        .responsive-video iframe,
        .responsive-video video {
            position: absolute;
            width: 100%;
            height: 100%;
        }
    </style>
    <style>
        .tabs {
            padding-top: 30;
        }

        .tabs .nav-tabs {
            border: 0;
        }

        .tabs .nav-link {
            border: 0;
            padding: 12px 15px 12px 0;
            transition: 0.3s;
            color: var(--default-color);
            border-radius: 0;
            border-right: 2px solid rgba(var(--default-color-rgb), 0.1);
            font-weight: 600;
            font-size: 15px;
        }

        .tabs .nav-link:hover {
            color: var(--accent-color);
        }

        .tabs .nav-link.active {
            color: var(--accent-color);
            border-color: var(--accent-color);
        }

        .tabs .tab-pane.active {
            animation: fadeIn 0.5s ease-out;
        }

        .tabs .details h3 {
            font-size: 26px;
            font-weight: 600;
            margin-bottom: 20px;
        }

        .tabs .details p {
            color: rgba(var(--default-color-rgb), 0.8);
        }

        .tabs .details p:last-child {
            margin-bottom: 0;
        }

        @media (max-width: 992px) {
            .tabs .nav-link {
                border: 0;
                padding: 15px;
            }

            .tabs .nav-link.active {
                color: var(--accent-color);
                background: var(--accent-color);
            }
        }
    </style>
    <style>
        .serviceBox{
    color: var(--main-color);
    font-family:'Poppins', sans-serif;
    text-align: center;
    padding: 10px 15px 30px;
    position: relative;
    z-index: 1;
}
.serviceBox:before,
.serviceBox:after{
    content: "";
    background: linear-gradient(to left bottom,#eee,#fff,#fff);
    border-radius: 15px;
    position: absolute;
    top: 45px;
    left: 10px;
    right: 10px;
    bottom: 10px;
    box-shadow: 0 5px 8px rgba(0,0,0,0.3);
    z-index: -1;
}
.serviceBox:after{
    background: var(--main-color);
    width: 50%;
    height: 50%;
    border-radius: 0 0 20px 0;
    box-shadow: none;
    top: auto;
    left: auto;
    bottom: 0;
    right: 0;
    z-index: -2;
}
.serviceBox .service-icon{
    color: var(--main-color);
    background: #fff;
    font-size: 40px;
    line-height: 70px;
    width: 70px;
    height: 70px;
    margin: 0 0 30px;
    border-radius: 50px;
    box-shadow: 0 5px 10px rgba(0,0,0,0.3),0 0 0 8px var(--main-color);
}
.serviceBox .title{
    font-size: 19px;
    font-weight: 600;
    text-transform: capitalize;
    margin: 0 10px 10px;
}
.serviceBox .description{
    color: #888;
    font-size: 14px;
    line-height: 22px;
    text-align: justify;
    margin: 0 15px;
}
.serviceBox.golden{ --main-color: #2f4cf2; }
.serviceBox.green{ --main-color: #3fdafe; }
.serviceBox.dark-green{ --main-color: #02917E; }
@media only screen and (max-width: 1199px){
    .serviceBox{ margin: 0 0 30px; }
}
    </style>

</head>

<body>

    <?php include 'navbar.php' ?>
    <!--enquiry start-->
    <?php include 'enquiry.php' ?>
    <!--enquiry end -->


    <div class="heading-bg-img" style="background-image: url(assets/img/headingbgimg.png); margin-top: 135px;">
		<div class="heading-bg-color">
			<h1 class="heading-text-position text-uppercase mt-5">Fee Structure</h1>
		</div>
	</div>
   

    <div class="container mb-5" style="margin-top: 35px;" >
    <div class="row">
        <div class="col-md-4 col-sm-6">
            <div class="serviceBox golden">
                <div class="service-icon">
                    <span><i class="fa fa-university"></i></span>
                </div>
                <h3 class="title">UG Courses</h3>
                <p class="description">Course Fees for B.Tech Courses: ₹2.35 Lakhs (Total Fees).</p>
            </div>
        </div>
        <div class="col-md-4 col-sm-6">
            <div class="serviceBox green">
                <div class="service-icon">
                    <span><i class="fa fa-graduation-cap"></i></span>
                </div>
                <h3 class="title">PG Courses</h3>
                <p class="description">Course Fees for MBA: ₹2.35 Lakhs (Total Fees).</p>
            </div>
        </div>
        <div class="col-md-4 col-sm-6">
            <div class="serviceBox golden">
                <div class="service-icon">
                    <span><i class="fa fa-gears"></i></span>
                </div>
                <h3 class="title">Polytechnic</h3>
                <p class="description">Please visit BPUT site for details about course fees for Polytechnic.</p>
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


    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const mbaGen = document.getElementById('mbaGen');
            const mbaHealth = document.getElementById('mbaHealth');
            const mca = document.getElementById('mca');
            const photoGallery = document.getElementById('photoGallery');
            const videoGallery = document.getElementById('videoGallery');
            const mcaContent = document.getElementById('mcaContent'); // Define mcaContent variable

            // Function to switch to photo gallery
            function switchToPhotoGallery() {
                console.log("Switching to photo gallery");
                photoGallery.style.display = 'block';
                videoGallery.style.display = 'none';
                mcaContent.style.display = 'none'; // Hide mcaContent
                mbaGen.classList.add('active');
                mbaHealth.classList.remove('active');
                mca.classList.remove('active');
            }

            // Function to switch to video gallery
            function switchToVideoGallery() {
                console.log("Switching to video gallery");
                photoGallery.style.display = 'none';
                videoGallery.style.display = 'block';
                mcaContent.style.display = 'none'; // Hide mcaContent
                mbaGen.classList.remove('active');
                mbaHealth.classList.add('active');
                mca.classList.remove('active');
            }

            // Function to switch to MCA content
            function switchToMCAContent() {
                console.log("Switching to MCA content");
                photoGallery.style.display = 'none';
                videoGallery.style.display = 'none';
                mcaContent.style.display = 'block'; // Show mcaContent
                mca.classList.add('active');
                mbaGen.classList.remove('active');
                mbaHealth.classList.remove('active');
            }

            // Event listeners for toggle switch buttons
            mbaGen.addEventListener('click', switchToPhotoGallery);
            mbaHealth.addEventListener('click', switchToVideoGallery);
            mca.addEventListener('click', switchToMCAContent);
        });

    </script>


</body>

</html>
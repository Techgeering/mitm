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
        /* body {
            font-family: Arial;
        } */

        /* Style the tab */
        /* .tab {
            overflow: hidden;
            border: 1px solid #ccc;
            background-color: #f1f1f1;
        } */

        /* Style the buttons inside the tab */
        /* .tab button {
            background-color: inherit;
            float: left;
            border: none;
            outline: none;
            cursor: pointer;
            padding: 14px 16px;
            transition: 0.3s;
            font-size: 17px;
        } */

        /* Change background color of buttons on hover */
        /* .tab button:hover {
            background-color: #ddd;
        } */

        /* Create an active/current tablink class */
        /* .tab button.active {
            background-color: #ccc;
        } */

        /* Style the tab content */
        .tabcontent {
            display: none;
            padding: 6px 5px;
            /* border: 1px solid #ccc; */
            /* border-top: none; */
        }

        .card {
            max-width: 255px;
            height: 220px !important;
            margin: 12px auto;
        }

        .tab .tablinks {
            text-align: center;
        }

        /* .tabcontent .card{
            margin: 12px auto;
        } */

        /* @media screen and (min-width: 768px) {

            //For Laptops
            .container .tab {
                width: 738px;
            }
        }
        @media screen and (min-width: 992px) {

            //For Large Laptops
            .container .tab {
                width: 962px;
            }
        } */
    </style>

</head>

<body>

<?php include 'navbar.php' ?>
    <!--enquiry start-->
    <?php include 'enquiry.php' ?>
    <!--enquiry end -->


    <div class="heading-bg-img place-head" style="background-image: url(assets/img/headingbgimg.png);">
        <div class="heading-bg-color">
            <h1 class="heading-text-position text-uppercase">Campus @ 2024</h1>
        </div>
    </div>

    <div class="container">
        <div class="tab">
            <div class="tab d-flex justify-content-center mb-4">
                <button  class="tablinks btn btn-secondary" onclick="openCity(event, 'London')">2022-23</button>
                <button id="defaultOpen" class="tablinks btn btn-success mx-2" onclick="openCity(event, 'Paris')">2023-24</button>
                <!-- <button class="tablinks ml-2" onclick="openCity(event, 'Tokyo')">2024-2025</button> -->
            </div>
            <div id="London" class="tabcontent py-5">
                <h4 class="text-uppercase mission-head">COMPUTER SCIENCE ENGINEERING
                </h4>
                <div class="row">
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="card rounded bg-primary shadow-sm border-0 pb-4">
                            <div class="card-body m-2">
                                <div class="p-4 text-center card-img-top"><img src="assets\img\Picture1.png" alt="..."
                                        width="100" class="rounded-circle mb-2 img-thumbnail d-block mx-auto">
                                    <h5 class="text-white mb-0">Pramod Mandal</h5>
                                    <p class="small text-white mb-0">Rounak PVT.LTD.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="card rounded bg-success shadow-sm border-0 pb-4">
                            <div class="card-body m-2">
                                <div class="p-4 text-center card-img-top"><img src="assets\img\Picturee1.png" alt="..."
                                        width="100" class="rounded-circle mb-2 img-thumbnail d-block mx-auto">
                                    <h5 class="text-white mb-0">Priyanka Panigrahi</h5>
                                    <p class="small text-white mb-0">Aditya Birla Hindalco Industries LTD.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="card rounded bg-info shadow-sm border-0 pb-4">
                            <div class="card-body m-2">
                                <div class="p-4 text-center card-img-top"><img src="assets\img\Picture2.png" alt="..."
                                        width="100" class="rounded-circle mb-2 img-thumbnail d-block mx-auto">
                                    <h5 class="text-white mb-0">Iswari Bag</h5>
                                    <p class="small text-white mb-0">F.B Power LTD.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="card rounded bg-warning shadow-sm border-0 pb-4">
                            <div class="card-body m-2">
                                <div class="p-4 text-center card-img-top"><img src="assets\img\Picture3.png" alt="..."
                                        width="100" class="rounded-circle mb-2 img-thumbnail d-block mx-auto">
                                    <h5 class="text-white mb-0">Ashok Kumar Jena</h5>
                                    <p class="small text-white mb-0">Sindler India LTD.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <h4 class="text-uppercase mission-head">MECHANICAL ENGINEERING
                </h4>
                <div class="row">
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <!-- Card-->
                        <div class="card rounded bg-primary shadow-sm border-0 pb-4">
                            <div class="card-body m-2">
                                <div class="p-4 text-center card-img-top"><img src="assets\img\Picture1.png" alt="..."
                                        width="100" class="rounded-circle mb-2 img-thumbnail d-block mx-auto">
                                    <h5 class="text-white mb-0">Pramod Mandal</h5>
                                    <p class="small text-white mb-0">Rounak PVT.LTD.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <!-- Card-->
                        <div class="card rounded bg-success shadow-sm border-0 pb-4">
                            <div class="card-body m-2">
                                <div class="p-4 text-center card-img-top"><img src="assets\img\Picturee1.png" alt="..."
                                        width="100" class="rounded-circle mb-2 img-thumbnail d-block mx-auto">
                                    <h5 class="text-white mb-0">Priyanka Panigrahi</h5>
                                    <p class="small text-white mb-0">Aditya Birla Hindalco Industries LTD.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <!-- Card-->
                        <div class="card rounded bg-info shadow-sm border-0 pb-4">
                            <div class="card-body m-2">
                                <div class="p-4 text-center card-img-top"><img src="assets\img\Picture2.png" alt="..."
                                        width="100" class="rounded-circle mb-2 img-thumbnail d-block mx-auto">
                                    <h5 class="text-white mb-0">Iswari Bag</h5>
                                    <p class="small text-white mb-0">F.B Power LTD.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <!-- Card-->
                        <div class="card rounded bg-warning shadow-sm border-0 pb-4">
                            <div class="card-body m-2">
                                <div class="p-4 text-center card-img-top"><img src="assets\img\Picture3.png" alt="..."
                                        width="100" class="rounded-circle mb-2 img-thumbnail d-block mx-auto">
                                    <h5 class="text-white mb-0">Ashok Kumar Jena</h5>
                                    <p class="small text-white mb-0">Sindler India LTD.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <h4 class="text-uppercase mission-head">ELECTRONICS AND COMMUNICATION ENGINEERING
                </h4>
                <div class="row">
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <!-- Card-->
                        <div class="card rounded bg-primary shadow-sm border-0 pb-4">
                            <div class="card-body m-2">
                                <div class="p-4 text-center card-img-top"><img src="assets\img\Picture1.png" alt="..."
                                        width="100" class="rounded-circle mb-2 img-thumbnail d-block mx-auto">
                                    <h5 class="text-white mb-0">Pramod Mandal</h5>
                                    <p class="small text-white mb-0">Rounak PVT.LTD.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <!-- Card-->
                        <div class="card rounded bg-success shadow-sm border-0 pb-4">
                            <div class="card-body m-2">
                                <div class="p-4 text-center card-img-top"><img src="assets\img\Picturee1.png" alt="..."
                                        width="100" class="rounded-circle mb-2 img-thumbnail d-block mx-auto">
                                    <h5 class="text-white mb-0">Priyanka Panigrahi</h5>
                                    <p class="small text-white mb-0">Aditya Birla Hindalco Industries LTD.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <!-- Card-->
                        <div class="card rounded bg-info shadow-sm border-0 pb-4">
                            <div class="card-body m-2">
                                <div class="p-4 text-center card-img-top"><img src="assets\img\Picture2.png" alt="..."
                                        width="100" class="rounded-circle mb-2 img-thumbnail d-block mx-auto">
                                    <h5 class="text-white mb-0">Iswari Bag</h5>
                                    <p class="small text-white mb-0">F.B Power LTD.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <!-- Card-->
                        <div class="card rounded bg-warning shadow-sm border-0 pb-4">
                            <div class="card-body m-2">
                                <div class="p-4 text-center card-img-top"><img src="assets\img\Picture3.png" alt="..."
                                        width="100" class="rounded-circle mb-2 img-thumbnail d-block mx-auto">
                                    <h5 class="text-white mb-0">Ashok Kumar Jena</h5>
                                    <p class="small text-white mb-0">Sindler India LTD.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <h4 class="text-uppercase mission-head">MASTERS IN BUSINESS ADMINISTRATIVE
                </h4>
                <div class="row">
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <!-- Card-->
                        <div class="card rounded bg-primary shadow-sm border-0 pb-4">
                            <div class="card-body m-2">
                                <div class="p-4 text-center card-img-top"><img src="assets\img\Picture1.png" alt="..."
                                        width="100" class="rounded-circle mb-2 img-thumbnail d-block mx-auto">
                                    <h5 class="text-white mb-0">Pramod Mandal</h5>
                                    <p class="small text-white mb-0">Rounak PVT.LTD.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <!-- Card-->
                        <div class="card rounded bg-success shadow-sm border-0 pb-4">
                            <div class="card-body m-2">
                                <div class="p-4 text-center card-img-top"><img src="assets\img\Picturee1.png" alt="..."
                                        width="100" class="rounded-circle mb-2 img-thumbnail d-block mx-auto">
                                    <h5 class="text-white mb-0">Priyanka Panigrahi</h5>
                                    <p class="small text-white mb-0">Aditya Birla Hindalco Industries LTD.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <!-- Card-->
                        <div class="card rounded bg-info shadow-sm border-0 pb-4">
                            <div class="card-body m-2">
                                <div class="p-4 text-center card-img-top"><img src="assets\img\Picture2.png" alt="..."
                                        width="100" class="rounded-circle mb-2 img-thumbnail d-block mx-auto">
                                    <h5 class="text-white mb-0">Iswari Bag</h5>
                                    <p class="small text-white mb-0">F.B Power LTD.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <!-- Card-->
                        <div class="card rounded bg-warning shadow-sm border-0 pb-4">
                            <div class="card-body m-2">
                                <div class="p-4 text-center card-img-top"><img src="assets\img\Picture3.png" alt="..."
                                        width="100" class="rounded-circle mb-2 img-thumbnail d-block mx-auto">
                                    <h5 class="text-white mb-0">Ashok Kumar Jena</h5>
                                    <p class="small text-white mb-0">Sindler India LTD.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <h4 class="text-uppercase mission-head">ELECTRICAL ENGINEERING
                </h4>
                <div class="row">
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <!-- Card-->
                        <div class="card rounded bg-primary shadow-sm border-0 pb-4">
                            <div class="card-body m-2">
                                <div class="p-4 text-center card-img-top"><img src="assets\img\Picture1.png" alt="..."
                                        width="100" class="rounded-circle mb-2 img-thumbnail d-block mx-auto">
                                    <h5 class="text-white mb-0">Pramod Mandal</h5>
                                    <p class="small text-white mb-0">Rounak PVT.LTD.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <!-- Card-->
                        <div class="card rounded bg-success shadow-sm border-0 pb-4">
                            <div class="card-body m-2">
                                <div class="p-4 text-center card-img-top"><img src="assets\img\Picturee1.png" alt="..."
                                        width="100" class="rounded-circle mb-2 img-thumbnail d-block mx-auto">
                                    <h5 class="text-white mb-0">Priyanka Panigrahi</h5>
                                    <p class="small text-white mb-0">Aditya Birla Hindalco Industries LTD.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <!-- Card-->
                        <div class="card rounded bg-info shadow-sm border-0 pb-4">
                            <div class="card-body m-2">
                                <div class="p-4 text-center card-img-top"><img src="assets\img\Picture2.png" alt="..."
                                        width="100" class="rounded-circle mb-2 img-thumbnail d-block mx-auto">
                                    <h5 class="text-white mb-0">Iswari Bag</h5>
                                    <p class="small text-white mb-0">F.B Power LTD.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <!-- Card-->
                        <div class="card rounded bg-warning shadow-sm border-0 pb-4">
                            <div class="card-body m-2">
                                <div class="p-4 text-center card-img-top"><img src="assets\img\Picture3.png" alt="..."
                                        width="100" class="rounded-circle mb-2 img-thumbnail d-block mx-auto">
                                    <h5 class="text-white mb-0">Ashok Kumar Jena</h5>
                                    <p class="small text-white mb-0">Sindler India LTD.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <h4 class="text-uppercase mission-head">CIVIL ENGINEERING
                </h4>
                <div class="row">
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <!-- Card-->
                        <div class="card rounded bg-primary shadow-sm border-0 pb-4">
                            <div class="card-body m-2">
                                <div class="p-4 text-center card-img-top"><img src="assets\img\Picture1.png" alt="..."
                                        width="100" class="rounded-circle mb-2 img-thumbnail d-block mx-auto">
                                    <h5 class="text-white mb-0">Pramod Mandal</h5>
                                    <p class="small text-white mb-0">Rounak PVT.LTD.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <!-- Card-->
                        <div class="card rounded bg-success shadow-sm border-0 pb-4">
                            <div class="card-body m-2">
                                <div class="p-4 text-center card-img-top"><img src="assets\img\Picturee1.png" alt="..."
                                        width="100" class="rounded-circle mb-2 img-thumbnail d-block mx-auto">
                                    <h5 class="text-white mb-0">Priyanka Panigrahi</h5>
                                    <p class="small text-white mb-0">Aditya Birla Hindalco Industries LTD.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <!-- Card-->
                        <div class="card rounded bg-info shadow-sm border-0 pb-4">
                            <div class="card-body m-2">
                                <div class="p-4 text-center card-img-top"><img src="assets\img\Picture2.png" alt="..."
                                        width="100" class="rounded-circle mb-2 img-thumbnail d-block mx-auto">
                                    <h5 class="text-white mb-0">Iswari Bag</h5>
                                    <p class="small text-white mb-0">F.B Power LTD.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <!-- Card-->
                        <div class="card rounded bg-warning shadow-sm border-0 pb-4">
                            <div class="card-body m-2">
                                <div class="p-4 text-center card-img-top"><img src="assets\img\Picture3.png" alt="..."
                                        width="100" class="rounded-circle mb-2 img-thumbnail d-block mx-auto">
                                    <h5 class="text-white mb-0">Ashok Kumar Jena</h5>
                                    <p class="small text-white mb-0">Sindler India LTD.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="Paris" class="tabcontent py-5">
                <h4 class="text-uppercase mission-head">COMPUTER SCIENCE ENGINEERING
                </h4>
                <div class="row">
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <!-- Card-->
                        <div class="card rounded bg-primary shadow-sm border-0 pb-4">
                            <div class="card-body m-2">
                                <div class="p-4 text-center card-img-top"><img src="assets\img\Picture1.png" alt="..."
                                        width="100" class="rounded-circle mb-2 img-thumbnail d-block mx-auto">
                                    <h5 class="text-white mb-0">Pramod Mandal</h5>
                                    <p class="small text-white mb-0">Rounak PVT.LTD.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <!-- Card-->
                        <div class="card rounded bg-success shadow-sm border-0 pb-4">
                            <div class="card-body m-2">
                                <div class="p-4 text-center card-img-top"><img src="assets\img\Picturee1.png" alt="..."
                                        width="100" class="rounded-circle mb-2 img-thumbnail d-block mx-auto">
                                    <h5 class="text-white mb-0">Priyanka Panigrahi</h5>
                                    <p class="small text-white mb-0">Aditya Birla Hindalco Industries LTD.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <!-- Card-->
                        <div class="card rounded bg-info shadow-sm border-0 pb-4">
                            <div class="card-body m-2">
                                <div class="p-4 text-center card-img-top"><img src="assets\img\Picture2.png" alt="..."
                                        width="100" class="rounded-circle mb-2 img-thumbnail d-block mx-auto">
                                    <h5 class="text-white mb-0">Iswari Bag</h5>
                                    <p class="small text-white mb-0">F.B Power LTD.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <h4 class="text-uppercase mission-head">MECHANICAL ENGINEERING
                </h4>
                <div class="row">
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <!-- Card-->
                        <div class="card rounded bg-primary shadow-sm border-0 pb-4">
                            <div class="card-body m-2">
                                <div class="p-4 text-center card-img-top"><img src="assets\img\Picture1.png" alt="..."
                                        width="100" class="rounded-circle mb-2 img-thumbnail d-block mx-auto">
                                    <h5 class="text-white mb-0">Pramod Mandal</h5>
                                    <p class="small text-white mb-0">Rounak PVT.LTD.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <!-- Card-->
                        <div class="card rounded bg-success shadow-sm border-0 pb-4">
                            <div class="card-body m-2">
                                <div class="p-4 text-center card-img-top"><img src="assets\img\Picturee1.png" alt="..."
                                        width="100" class="rounded-circle mb-2 img-thumbnail d-block mx-auto">
                                    <h5 class="text-white mb-0">Priyanka Panigrahi</h5>
                                    <p class="small text-white mb-0">Aditya Birla Hindalco Industries LTD.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <!-- Card-->
                        <div class="card rounded bg-info shadow-sm border-0 pb-4">
                            <div class="card-body m-2">
                                <div class="p-4 text-center card-img-top"><img src="assets\img\Picture2.png" alt="..."
                                        width="100" class="rounded-circle mb-2 img-thumbnail d-block mx-auto">
                                    <h5 class="text-white mb-0">Iswari Bag</h5>
                                    <p class="small text-white mb-0">F.B Power LTD.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <h4 class="text-uppercase mission-head">ELECTRONICS AND COMMUNICATION ENGINEERING
                </h4>
                <div class="row">
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <!-- Card-->
                        <div class="card rounded bg-primary shadow-sm border-0 pb-4">
                            <div class="card-body m-2">
                                <div class="p-4 text-center card-img-top"><img src="assets\img\Picture1.png" alt="..."
                                        width="100" class="rounded-circle mb-2 img-thumbnail d-block mx-auto">
                                    <h5 class="text-white mb-0">Pramod Mandal</h5>
                                    <p class="small text-white mb-0">Rounak PVT.LTD.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <!-- Card-->
                        <div class="card rounded bg-success shadow-sm border-0 pb-4">
                            <div class="card-body m-2">
                                <div class="p-4 text-center card-img-top"><img src="assets\img\Picturee1.png" alt="..."
                                        width="100" class="rounded-circle mb-2 img-thumbnail d-block mx-auto">
                                    <h5 class="text-white mb-0">Priyanka Panigrahi</h5>
                                    <p class="small text-white mb-0">Aditya Birla Hindalco Industries LTD.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <!-- Card-->
                        <div class="card rounded bg-info shadow-sm border-0 pb-4">
                            <div class="card-body m-2">
                                <div class="p-4 text-center card-img-top"><img src="assets\img\Picture2.png" alt="..."
                                        width="100" class="rounded-circle mb-2 img-thumbnail d-block mx-auto">
                                    <h5 class="text-white mb-0">Iswari Bag</h5>
                                    <p class="small text-white mb-0">F.B Power LTD.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <h4 class="text-uppercase mission-head">MASTERS IN BUSINESS ADMINISTRATIVE
                </h4>
                <div class="row">
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <!-- Card-->
                        <div class="card rounded bg-primary shadow-sm border-0 pb-4">
                            <div class="card-body m-2">
                                <div class="p-4 text-center card-img-top"><img src="assets\img\Picture1.png" alt="..."
                                        width="100" class="rounded-circle mb-2 img-thumbnail d-block mx-auto">
                                    <h5 class="text-white mb-0">Pramod Mandal</h5>
                                    <p class="small text-white mb-0">Rounak PVT.LTD.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <!-- Card-->
                        <div class="card rounded bg-success shadow-sm border-0 pb-4">
                            <div class="card-body m-2">
                                <div class="p-4 text-center card-img-top"><img src="assets\img\Picturee1.png" alt="..."
                                        width="100" class="rounded-circle mb-2 img-thumbnail d-block mx-auto">
                                    <h5 class="text-white mb-0">Priyanka Panigrahi</h5>
                                    <p class="small text-white mb-0">Aditya Birla Hindalco Industries LTD.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <!-- Card-->
                        <div class="card rounded bg-info shadow-sm border-0 pb-4">
                            <div class="card-body m-2">
                                <div class="p-4 text-center card-img-top"><img src="assets\img\Picture2.png" alt="..."
                                        width="100" class="rounded-circle mb-2 img-thumbnail d-block mx-auto">
                                    <h5 class="text-white mb-0">Iswari Bag</h5>
                                    <p class="small text-white mb-0">F.B Power LTD.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <h4 class="text-uppercase mission-head">ELECTRICAL ENGINEERING
                </h4>
                <div class="row">
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <!-- Card-->
                        <div class="card rounded bg-primary shadow-sm border-0 pb-4">
                            <div class="card-body m-2">
                                <div class="p-4 text-center card-img-top"><img src="assets\img\Picture1.png" alt="..."
                                        width="100" class="rounded-circle mb-2 img-thumbnail d-block mx-auto">
                                    <h5 class="text-white mb-0">Pramod Mandal</h5>
                                    <p class="small text-white mb-0">Rounak PVT.LTD.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <!-- Card-->
                        <div class="card rounded bg-success shadow-sm border-0 pb-4">
                            <div class="card-body m-2">
                                <div class="p-4 text-center card-img-top"><img src="assets\img\Picturee1.png" alt="..."
                                        width="100" class="rounded-circle mb-2 img-thumbnail d-block mx-auto">
                                    <h5 class="text-white mb-0">Priyanka Panigrahi</h5>
                                    <p class="small text-white mb-0">Aditya Birla Hindalco Industries LTD.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <!-- Card-->
                        <div class="card rounded bg-info shadow-sm border-0 pb-4">
                            <div class="card-body m-2">
                                <div class="p-4 text-center card-img-top"><img src="assets\img\Picture2.png" alt="..."
                                        width="100" class="rounded-circle mb-2 img-thumbnail d-block mx-auto">
                                    <h5 class="text-white mb-0">Iswari Bag</h5>
                                    <p class="small text-white mb-0">F.B Power LTD.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <h4 class="text-uppercase mission-head">CIVIL ENGINEERING
                </h4>
                <div class="row">
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <!-- Card-->
                        <div class="card rounded bg-primary shadow-sm border-0 pb-4">
                            <div class="card-body m-2">
                                <div class="p-4 text-center card-img-top"><img src="assets\img\Picture1.png" alt="..."
                                        width="100" class="rounded-circle mb-2 img-thumbnail d-block mx-auto">
                                    <h5 class="text-white mb-0">Pramod Mandal</h5>
                                    <p class="small text-white mb-0">Rounak PVT.LTD.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <!-- Card-->
                        <div class="card rounded bg-success shadow-sm border-0 pb-4">
                            <div class="card-body m-2">
                                <div class="p-4 text-center card-img-top"><img src="assets\img\Picturee1.png" alt="..."
                                        width="100" class="rounded-circle mb-2 img-thumbnail d-block mx-auto">
                                    <h5 class="text-white mb-0">Priyanka Panigrahi</h5>
                                    <p class="small text-white mb-0">Aditya Birla Hindalco Industries LTD.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <!-- Card-->
                        <div class="card rounded bg-info shadow-sm border-0 pb-4">
                            <div class="card-body m-2">
                                <div class="p-4 text-center card-img-top"><img src="assets\img\Picture2.png" alt="..."
                                        width="100" class="rounded-circle mb-2 img-thumbnail d-block mx-auto">
                                    <h5 class="text-white mb-0">Iswari Bag</h5>
                                    <p class="small text-white mb-0">F.B Power LTD.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- <div id="Tokyo" class="tabcontent py-5">
                <div class="row">
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="card rounded bg-primary shadow-sm border-0 pb-4">
                            <div class="card-body m-2">
                                <div class="p-4 text-center card-img-top"><img src="assets\img\Picture1.png" alt="..."
                                        width="100" class="rounded-circle mb-2 img-thumbnail d-block mx-auto">
                                    <h5 class="text-white mb-0">Pramod Mandal</h5>
                                    <p class="small text-white mb-0">Rounak PVT.LTD.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="card rounded bg-success shadow-sm border-0 pb-4">
                            <div class="card-body m-2">
                                <div class="p-4 text-center card-img-top"><img src="assets\img\Picturee1.png" alt="..."
                                        width="100" class="rounded-circle mb-2 img-thumbnail d-block mx-auto">
                                    <h5 class="text-white mb-0">Priyanka Panigrahi</h5>
                                    <p class="small text-white mb-0">Aditya Birla Hindalco Industries LTD.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> -->
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
    <!-- Bootstrap JS and jQuery (Optional, if needed) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <!-- Toastr JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

    <script>
        // Function to simulate click on London tab by default
        window.onload = function () {
            // Simulate click on the London tab
            document.getElementById("defaultOpen").click();
        };

        function openCity(evt, cityName) {
            var i, tabcontent, tablinks;
            tabcontent = document.getElementsByClassName("tabcontent");
            for (i = 0; i < tabcontent.length; i++) {
                tabcontent[i].style.display = "none";
            }
            tablinks = document.getElementsByClassName("tablinks");
            for (i = 0; i < tablinks.length; i++) {
                tablinks[i].className = tablinks[i].className.replace(" active", "");
            }
            document.getElementById(cityName).style.display = "block";
            evt.currentTarget.className += " active";
        }
    </script>

</body>

</html>
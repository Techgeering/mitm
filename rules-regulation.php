<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <title>MITM | Rules & Regulations</title>
    <!-- Favicon -->
    <link href="../assets/img/logos1.png" rel="icon" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Education Website">
    <meta name="keywords" content="HTML5, CSS3, JavaScript, bootstrap-5">
    <meta name="author" content="Techgeering">
    <!-- <meta http-equiv="refresh" content="30"> -->
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="assets/bootstrap-5.0.2-dist/bootstrap-5.0.2/css/bootstrap.min.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/../assets/owl.carousel.min.css" /> -->

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


    <title>MITM | Rules & Regulations</title>

    <!-- Custom CSS -->
    <style>
        .rules-header {
            color: white;
            text-align: center;
            padding: 50px 0;
            margin-bottom: 30px;
        }

        .rules-header h1 {
            font-size: 3rem;
            font-weight: bold;
            margin-bottom: 0;
        }

        .rules-header p {
            font-size: 1.2rem;
            color: #d3d3d3;
        }

        .rules-section {
            background-color: white;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            margin-bottom: 30px;
        }

        .rules-section h3 {
            color: #007bff;
            font-size: 1.8rem;
            margin-bottom: 20px;
        }

        .rules-section ol {
            padding-left: 20px;
        }

        .rules-section ol li {
            font-size: 1.5rem;
            margin-bottom: 10px;
            color: #555;
            line-height: 1.7;
        }

        .rules-section ol li::marker {
            color: #007bff;
        }

        .rules-section ol li strong {
            color: #333;
        }

        .note {
            background-color: #e9ecef;
            padding: 15px;
            margin-top: 20px;
            border-left: 4px solid #007bff;
        }

        .note p {
            font-size: 1rem;
            margin-bottom: 0;
        }

        /* Mobile Styling */
        @media (max-width: 768px) {
            .rules-header h1 {
                font-size: 2.5rem;
            }

            .rules-section h3 {
                font-size: 1.5rem;
            }

            .rules-section ol li {
                font-size: 0.95rem;
            }
        }
    </style>

</head>

<body>

    <?php include 'navbar.php' ?>
    <!--enquiry start-->
    <?php include 'enquiry.php' ?>
    <!--enquiry end -->


    <!-- Header Section -->
    <section class="rules-header">
        <div class="container">
            <h1>Rules & Regulations</h1>
            <p>Guidelines for Maintaining Discipline and Conduct at MITM</p>
        </div>
    </section>

    <!-- Rules Section -->
    <section class="rules-section container">
        <h2>General Rules</h2>
        <ol>
            <li><strong>Respect:</strong> Every student must respect the rights, property, and opinions of others.</li>
            <li><strong>Attendance:</strong> Students are required to maintain at least 75% attendance in all classes.
                Unapproved absences may result in disciplinary actions.</li>
            <li><strong>Punctuality:</strong> Students must arrive on time for classes and scheduled events. Late
                arrivals disrupt the academic environment.</li>
            <li><strong>Uniform:</strong> Wearing the prescribed uniform is mandatory during college hours. Students
                must adhere to the dress code at all times.</li>
            <li><strong>ID Cards:</strong> Students must carry their college ID cards at all times within the campus
                premises.</li>
        </ol>
    </section>

    <section class="rules-section container">
        <h2>Academic Rules</h2>
        <ol>
            <li><strong>Exams and Assignments:</strong> All students are expected to complete and submit their
                assignments by the due dates. Exam schedules must be adhered to strictly.</li>
            <li><strong>Plagiarism:</strong> Academic dishonesty, including plagiarism and cheating, will result in
                severe consequences, including suspension or expulsion.</li>
            <li><strong>Library Conduct:</strong> Students should maintain silence in the library and handle books and
                materials with care.</li>
        </ol>
    </section>

    <section class="rules-section container">
        <h2>Campus Conduct</h2>
        <ol>
            <li><strong>Cleanliness:</strong> Students are responsible for keeping the campus clean. Littering is
                strictly prohibited.</ </li>
            <li><strong>Prohibited Substances:</strong> Alcohol, drugs, and smoking are not allowed on campus under any
                circumstances.</li>
            <li><strong>Technology Use:</strong> Misuse of college IT resources, including unauthorized use of
                computers, networks, or hacking activities, is not tolerated.</li>
            <li><strong>Harassment:</strong> Any form of bullying, harassment, or discrimination will result in
                immediate disciplinary actions.</li>
        </ol>

        <div class="note">
            <p><strong>Note:</strong> The college reserves the right to amend these rules and regulations at any time.
                Students are required to stay updated with any changes that may occur.</p>
        </div>
    </section>




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
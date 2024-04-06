
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Education Website">
		<meta name="keywords" content="HTML5, CSS3, JavaScript, bootstrap-5">
		<meta name="author" content="Techgeering">
    <!-- <meta http-equiv="refresh" content="30"> -->
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="assets/bootstrap-5.0.2-dist/bootstrap-5.0.2/css/bootstrap.min.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" integrity="sha512-c42qTSw/wPZ3/5LBzD+Bw5f7bSF2oxou6wEb+I/lqeaKV5FDIfMvvRp772y4jcJLKuGUOpbJMdg/BTl50fJYAw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Ubuntu:regular,bold&subset=Latin">

    <link rel="stylesheet" type="text/css" href="assets/css/style.css?v=1.4">

    <title></title>
    <style type="text/css">
    	
    </style>
  </head>
  <body>

  <?php include 'navbar.php' ?>

<!--enquiry start-->
<div id="myfirstcaptch" class="first-captcha">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <div class="admission-enquiry-bg">
  	<h6><i class="fa fa-pencil-square-o" aria-hidden="true"></i>Admission Enquiry For 2023</h6>
  </div>
  <div class="p-3">
  	<div class="row">
  		<div class="col-12">
  			<p class="enquiry-contact-color">Contact on +91-9114488727, +91-9114141172 or Email: admission@biplabinibbsr.com.</p>
  		</div>
  		<div class="col-12">
  			<form action="" method="POST" id="contactform" role="form"> 
               <div class="form-group contact-form-space">
                  <input type="text" required="required" placeholder="Enter Full Name" class="form-control" name="author" id="author">
               </div>
               <div class="form-group contact-form-space"> 
                  <input type="email" required="required" placeholder="Enter Email Id" aria-required="true" class="form-control" name="email" id="email">
              </div>
              <div class="form-group contact-form-space">
                <input type="tel" required="required" placeholder="Enter Mobile No" maxlength="10" class="form-control" aria-required="true"  name="pno" id="pno">
              </div>
              <div class="form-group contact-form-space">
		          <select class="form-select book-form inp" name="catego" id="catego">
				         <option value="1" class="text-primary">Select Course</option>
				         <option value="2" class="text-primary">B.Tech(CSE)</option>
				         <option value="3" class="text-primary">B.Tech(ECE)</option>  
				         <option value="4" class="text-primary">B.Tech(MECH)</option>
				         <option value="5" class="text-primary">B.Tech(CIVIL)</option>
				         <option value="6" class="text-primary">B.Tech(EEE)</option>  
				         <option value="7" class="text-primary">B.Tech LE(ECE)</option>
				         <option value="8" class="text-primary">B.Tech LE(CSE)</option>
				         <option value="9" class="text-primary">B.Tech LE(MECH)</option>         
				  </select>
	          </div>
              <div class="form-group contact-form-space">
                 <textarea required="required" aria-required="true" placeholder="Write Your Message" class="form-control" max-length="10" rows="2" class="form-control" cols="45" name="comment" id="comment"></textarea>
              </div>
              <div class="contact-form-space">
                 <div id="captchaBackground">
				    <div class="row">
				      <div class="col-6">
				        <input id="textBox" type="text" name="text" placeholder="Verification Code" class="form-control">
				      </div>
				      <div class="col-6">
				        <canvas id="captcha">captcha text</canvas>
				      </div>
				    </div>
				    <div class="col-6 form-group contact-form-space">
				      <div id="buttons">
		                 <a class="btn enquiry-btn " type="btn" id="submitButton"><i class="fa fa-paper-plane" aria-hidden="true"></i>Send Enquiry</a>
		               </div>
		             </div>
				    <span id="output"></span>
				  </div>
				</div>
              
  			</form>
  		</div>
  	</div>
  </div>
</div>

<div class="Enquiry-btn-position">
  <a href="javascript:void(0)" class="btn enquiry-btn" type="btn" onclick="openNav()"><i class="fa fa-paper-plane" aria-hidden="true"></i> Admission Enquiry</a>
</div>

<!--enquiry end -->
<!--- about star-->

<div class="carousel-position">
	<div class="heading-bg-img" style="background-image: url(assets/img/headingbgimg.png);">
		<div class="heading-bg-color">
		   <h1 class="heading-text-position">Committee</h1>
	   </div>
	</div>
	<div class="container ">
		<div class="content-position">    
            <div class="row">
      	        <div class="col-lg-6">
      		        <h5 class="text-center">Academic Committee :</h5>
      		        <h5>Objective:</h5>
      		        <p class="para-size"><i class="fa fa-angle-double-right" aria-hidden="true"></i> Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
      		        <p class="para-size"><i class="fa fa-angle-double-right" aria-hidden="true"></i> Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>
      		        <p class="para-size"><i class="fa fa-angle-double-right" aria-hidden="true"></i> Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s .</p>
      	        </div>
      	        <div class="col-lg-6">
      		        <img src="assets/img/" class="img-fluid" alt="committeeimg">
      	        </div>
      	        <div class="col-lg-12">
      		        <h5 class="text-center">Activities of academic cell</h5>
      		        <h5>Activities of academic cell :</h5>
      		        <p class="para-size"><i class="fa fa-angle-double-right" aria-hidden="true"></i> Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s .</p>
      		        <p class="para-size"><i class="fa fa-angle-double-right" aria-hidden="true"></i> Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
      		        <p class="para-size"><i class="fa fa-angle-double-right" aria-hidden="true"></i> Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s .</p>
      		        <p class="para-size"><i class="fa fa-angle-double-right" aria-hidden="true"></i> It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker.</p>

              		<h5 class="text-center">Anti Ragging Committee</h5>
              		<h5>Objective :</h5>
              		<p class="para-size"><i class="fa fa-angle-double-right" aria-hidden="true"></i> Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>
              		<p class="para-size"><i class="fa fa-angle-double-right" aria-hidden="true"></i> Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
              		<p class="para-size"><i class="fa fa-angle-double-right" aria-hidden="true"></i> Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>
              		<p class="para-size"><i class="fa fa-angle-double-right" aria-hidden="true"></i> It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. </p>
        
              		<h5 class="text-center">Anti Ragging Committee’s Functions</h5>
              		<p class="para-size"><i class="fa fa-angle-double-right" aria-hidden="true"></i> Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>
              		<p class="para-size"><i class="fa fa-angle-double-right" aria-hidden="true"></i> Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
              		<p class="para-size"><i class="fa fa-angle-double-right" aria-hidden="true"></i> Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>
              		
              		<h5 class="text-center">The following steps are to be taken by the Anti Raging Committee:</h5>
              		<p class="para-size"><i class="fa fa-angle-double-right" aria-hidden="true"></i> Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>
              		<p class="para-size"><i class="fa fa-angle-double-right" aria-hidden="true"></i> Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever.</p>
              		<p class="para-size"><i class="fa fa-angle-double-right" aria-hidden="true"></i> Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>
              		<p class="para-size"><i class="fa fa-angle-double-right" aria-hidden="true"></i> Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>
        
              		<h5 class="text-center">Women’s Anti-Harassment Committee :</h5>
              		<h5>Objective :</h5>
              		<p class="para-size"><i class="fa fa-angle-double-right" aria-hidden="true"></i> Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>
              		<p class="para-size"><i class="fa fa-angle-double-right" aria-hidden="true"></i> Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever.</p>
              		<p class="para-size"><i class="fa fa-angle-double-right" aria-hidden="true"></i> Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>
              		<h5>Function :</h5>
              		<p class="para-size"><i class="fa fa-angle-double-right" aria-hidden="true"></i> Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>
        
              		<h5 class="text-center">Hostel Committee</h5>
              		<h5>Introduction :</h5>
              		<p class="para-size"><i class="fa fa-angle-double-right" aria-hidden="true"></i> Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. </p>
              		<h5>Aim :</h5>
              		<p class="para-size"><i class="fa fa-angle-double-right" aria-hidden="true"></i> Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever.</p>
              		<h5>Objectives :</h5>
              		<p class="para-size fw-bold"><i class="fa fa-angle-double-right" aria-hidden="true"></i> The students will be able to-</p>
              		<p class="para-size"><i class="fa fa-angle-double-right" aria-hidden="true"></i> Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>
              		<p class="para-size"><i class="fa fa-angle-double-right" aria-hidden="true"></i> Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>
              		<p class="para-size"><i class="fa fa-angle-double-right" aria-hidden="true"></i> Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>
              		<p class="para-size"><i class="fa fa-angle-double-right" aria-hidden="true"></i> Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>
              		<p class="para-size"><i class="fa fa-angle-double-right" aria-hidden="true"></i> Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>
              		<p class="para-size"><i class="fa fa-angle-double-right" aria-hidden="true"></i> Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>
              		<p class="para-size"><i class="fa fa-angle-double-right" aria-hidden="true"></i> Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>
        
              		<h5 class="text-center">Sports Committee</h5>
              		<h5>Objective :</h5>
              		<p class="para-size"><i class="fa fa-angle-double-right" aria-hidden="true"></i> Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>
              		<p class="para-size"><i class="fa fa-angle-double-right" aria-hidden="true"></i> Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever.</p>
              		<p class="para-size"><i class="fa fa-angle-double-right" aria-hidden="true"></i> Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>
              		<h5>SPORTS CALENDER FOR EVEN SEMESTER :</h5>
              		<p class="para-size"><i class="fa fa-angle-double-right" aria-hidden="true"></i> Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>
              		<p class="para-size"><i class="fa fa-angle-double-right" aria-hidden="true"></i> Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>
              		<p class="para-size"><i class="fa fa-angle-double-right" aria-hidden="true"></i> Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>
              		<p class="para-size"><i class="fa fa-angle-double-right" aria-hidden="true"></i> Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>
              		<p class="para-size"><i class="fa fa-angle-double-right" aria-hidden="true"></i> Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>
        
              		<h5 class="text-center">Central Time Table Committee</h5>
              		<h5>Objective:</h5>
              		<p class="para-size"><i class="fa fa-angle-double-right" aria-hidden="true"></i> The mission of the Time-Table Committee is to prepare the Semester Schedule for the College </p>
              		<h5>Responsibilities:</h5>
              		<p class="para-size"><i class="fa fa-angle-double-right" aria-hidden="true"></i> Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>
              		<p class="para-size"><i class="fa fa-angle-double-right" aria-hidden="true"></i> Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>
              		<p class="para-size"><i class="fa fa-angle-double-right" aria-hidden="true"></i> Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>
                </div>
            </div>
	    </div>
    </div>
</div>
<!-- FOOTER section START-->

<?php include 'footer.php' ?>

<!-- FOOTER section end-->





  <script type="text/javascript" src="assets/bootstrap-5.0.2-dist/bootstrap-5.0.2/js/bootstrap.bundle.min.js"></script>     
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" ></script>
  <script type="text/javascript" src="assets/js/allpage.js?v=1.3"></script>

  </body>
</html>
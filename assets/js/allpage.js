/* ----------------------------------------------------------- */
/*  GO TO TOP BUTTON JS
/* ----------------------------------------------------------- */

//Get the button
var mybutton = document.getElementById("myBtn");

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function () {
  scrollFunction();
};

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}
/*=================================*/
/* get footer copy write year js
/*=================================*/
document.getElementById("year").innerHTML = new Date().getFullYear();
/* ----------------------------------------------------------- */
/*  ENQUIRY BUTTON JS
/* ----------------------------------------------------------- */

// let captchaText = document.querySelector('#captcha');
// var ctx = captchaText.getContext("2d");
// ctx.font = "30px Roboto";
// ctx.fillStyle = "#08e5ff";

// let userText = document.querySelector('#textBox');
// let submitButton = document.querySelector('#submitButton');
// let output = document.querySelector('#output');

// let alphaNums = ['A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M', 'N', 'O', 'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z', 'a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z', '0', '1', '2', '3', '4', '5', '6', '7', '8', '9'];
// let emptyArr = [];

// for (let i = 1; i <= 10; i++) {
//  emptyArr.push(alphaNums[Math.floor(Math.random() * alphaNums.length)]);
// }
// var c = emptyArr.join('');
// ctx.fillText(emptyArr.join(''),captchaText.width/5, captchaText.height/4);

// userText.addEventListener('keyup', function(e) {

//  if (e.keyCode === 13) {
//  if (userText.value === c) {
//  output.classList.add("correctCaptcha");
//  output.innerHTML = "Correct!";

//  } else {
//  output.classList.add("incorrectCaptcha");
//  output.innerHTML = "Incorrect, please try again";
//  }
//  }
// });

// submitButton.addEventListener('click', function() {
//  if (userText.value === c) {
//  output.classList.add("correctCaptcha");
//  output.innerHTML = "Correct!";
//  } else {
//  output.classList.add("incorrectCaptcha");
//  output.innerHTML = "Incorrect, please try again";
//  }
// });

$("#mitmcontact").submit(function (e) {
  e.preventDefault();

  var fname = document.getElementById("fname").value;
  var lname = document.getElementById("lname").value;
  var email = document.getElementById("cmail").value;
  var phone = document.getElementById("cphone").value;
  var message = document.getElementById("cmessage").value;

  var errorMessage = document.getElementById("error-message");
  var emailRegex = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9-]+\.[a-zA-Z]{2,}$/;
  var phonepat = /^[0-9]{10}$/;
  var fnamecon = /[A-Za-z\s]{1,50}/;
  var lnamecon = /[A-Za-z\s]{1,50}/;
  var error = false;

  if (
    fname === "" ||
    lname === "" ||
    email === "" ||
    phone === "" ||
    message === ""
  ) {
    errorMessage.innerText = "Please fill all the feilds";
  } else if (!fname.match(fnamecon)) {
    errorMessage.innerText = "Enter a valid name";
  } else if (!lname.match(lnamecon)) {
    errorMessage.innerText = "Enter a valid name";
  } else if (!email.match(emailRegex)) {
    errorMessage.innerText = "Enter a valid email";
  } else if (!phone.match(phonepat)) {
    errorMessage.innerText = "please enter valid phone number ";
  } else {
    errorMessage.innerText = "";
    $.ajax({
      type: "POST",
      url: "contact-forminsert.php",
      data: {
        fname: fname,
        lname: lname,
        email: email,
        phone: phone,
        message: message,
      },
      dataType: "json", // Specify the expected data type
      success: function (data) {
        console.log(data); // Log the response for debugging
        if (data.status === "success") {
          // Show success message using ToastAlert
          toastr.success(data.message, "Success");

          document.getElementById("fname").value = "";
          document.getElementById("lname").value = "";
          document.getElementById("cmail").value = "";
          document.getElementById("cphone").value = "";
          document.getElementById("cmessage").value = "";
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

/*for Admission Enquiry Form not Refreshed after send blank abd error input fields*/
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

/*ENQUIRY BUTTON OPEN & CLOSE*/

function openNav() {
  var screenWidth = window.innerWidth || document.documentElement.clientWidth;
  var width;

  if (screenWidth >= 1200) {
    width = "600px"; // Set width to 600px for large screens
  } else if (screenWidth >= 601 && screenWidth < 1200) {
    width = "500px"; // Set width to 500px for medium screens
  } else {
    width = "436px"; // Set width to 400px for small screens
  }

  document.getElementById("myfirstcaptch").style.width = width;
}

function closeNav() {
  document.getElementById("myfirstcaptch").style.width = "0";
}
/* ----------------------------------------------------------- */
/*  SINGLE COURSE SLIDE JS
/* ----------------------------------------------------------- */
$(document).ready(function () {
  $(".owl-service").owlCarousel({
    loop: true,
    margin: 10,
    nav: true,
    responsive: {
      0: {
        items: 1,
      },
      600: {
        items: 2,
      },
      1000: {
        items: 4,
      },
    },
  });
});
/* ----------------------------------------------------------- */
/*  COUNTER JS
/* ----------------------------------------------------------- */
count = document.querySelectorAll(".count");
let arr = Array.from(count);

arr.map(function (item) {
  let startnumber = 0;

  function counterup() {
    startnumber++;
    item.innerHTML = startnumber;

    if (startnumber == item.dataset.number) {
      clearInterval(stop);
    }
  }

  let stop = setInterval(function () {
    counterup();
  }, 2);
});
/* ----------------------------------------------------------- */
/*  apply captch JS
/* ----------------------------------------------------------- */

/* ----------------------------------------------------------- */
/*  carousel text animation captch JS
/* ----------------------------------------------------------- */
var spanText = function spanText(text) {
  var string = text.innerText;
  var spaned = "";
  for (var i = 0; i < string.length; i++) {
    if (string.substring(i, i + 1) === " ")
      spaned += string.substring(i, i + 1);
    else spaned += "<span>" + string.substring(i, i + 1) + "</span>";
  }
  text.innerHTML = spaned;
};

var headline = document.querySelector(".animation");
//console.log(headline);
spanText(headline);

let animations = document.querySelectorAll(".animation");

animations.forEach((animation) => {
  let letters = animation.querySelectorAll("span");
  letters.forEach((letter, i) => {
    letter.style.animationDelay = i * 0.1 + "s";
  });
});

/* 2nd animation */
var headline2 = document.querySelector(".animation2");
// console.log(headline2);
spanText(headline2);

let animations2 = document.querySelectorAll(".animation2");

animations2.forEach((animation) => {
  let letters = animation.querySelectorAll("span");
  letters.forEach((letter, i) => {
    letter.style.animationDelay = i * 0.1 + "s";
  });
});

/* 3rd animation */
var headline3 = document.querySelector(".animation3");
// console.log(headline3);
spanText(headline3);

let animations3 = document.querySelectorAll(".animation3");

animations3.forEach((animation) => {
  let letters = animation.querySelectorAll("span");
  letters.forEach((letter, i) => {
    letter.style.animationDelay = i * 0.1 + "s";
  });
});

/*==========================================*/
/*testimonial section js
/*==========================================*/
$(document).ready(function () {
  $(".owl-testimonial").owlCarousel({
    loop: true,
    margin: 10,
    autoplay: true,
    nav: true,
    responsive: {
      0: {
        items: 1,
      },
      600: {
        items: 1,
      },
      1000: {
        items: 1,
      },
    },
  });
});

//for CONTACT Form not Refreshed after send blank abd error input fields.

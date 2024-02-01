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

/*ENQUIRY BUTTON OPEN & CLOSE*/

function openNav() {
  document.getElementById("myfirstcaptch").style.width = "370px";
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
let count = document.querySelectorAll(".count");
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

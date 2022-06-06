<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Contact | PM Fitness Solutions</title>

    <link href="//fonts.googleapis.com/css?family=Poppins:300,400,400i,500,600,700&display=swap" rel="stylesheet">
    
    <!-- Template CSS -->
    <link rel="shortcut icon" href="./assets/images/logo.png" type="image/x-icon">
    <link rel="stylesheet" href="assets/css/style-starter.css">
    <script src="//code.jivosite.com/widget/r3mQEs1cwI" async></script>
  </head>
  <body>
<!--header-->
<?php include 'header.php'; ?>
<!--/header-->
<section class="w3l-breadcrumb">
    <div class="breadcrumb-bg breadcrumb-bg-contact py-5">
        <div class="container py-lg-5 py-md-3">
            <h3 class="title-big text-center">Contact Us</h3>
            <!-- <p class="mt-3">Join the Best GYM in Your Town!</p> -->
        </div>
    </div>
</section>
<!-- contact form -->
<section class="w3l-contacts-12 py-5" id="contact">
	<div class="container py-md-3">
		<div class="contacts12-main">
			<div class="title-section">
                <h3 class="main-title-w3 mb-3"><span class="lnr lnr-map-marker"></span> Lagos, Nigeria.</h3>
                <h3 class="main-title-w3 mb-5">Lets talk <span class="lnr ml-2 lnr-phone-handset"></span><a href="tel:08037072002" > 08037072002</a></h3>
                
			</div>
			<form action="#" method="post" class="">
				<div class="main-input">
					<input type="text" name="w3lName" placeholder="Enter your name" class="contact-input" required="" />
					<input type="email" name="w3lSender" placeholder="Enter your mail" class="contact-input" required="" />
					<input type="number" name="w3lPhone" placeholder="Your phone number" class="contact-input" required="" />
					<textarea class="contact-textarea contact-input" name="w3lMessage" placeholder="Enter your message"
						required=""></textarea>
				</div>
				<div class="text-right">
					<button class="btn-primary btn btn-style">Submit</button>
				</div>
			</form>
		</div>
	</div>
</section>
<!-- //contact form -->

<div class="map-iframe">
    <iframe
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d507365.3245583991!2d3.0037633095566476!3d6.547977480168733!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x103b8b2ae68280c1%3A0xdc9e87a367c3d9cb!2sLagos!5e0!3m2!1sen!2sng!4v1654517802118!5m2!1sen!2sng"
        width="100%" height="400" frameborder="0" style="border: 0px;" allowfullscreen=""></iframe>
</div>
 <!-- footers 20 -->
 <section class="w3l-footers-20">
 <?php include 'footer.php'; ?>
   <!-- move top -->
   <button onclick="topFunction()" id="movetop" title="Go to top">
     &#10548;
   </button>
   <script>
     // When the user scrolls down 20px from the top of the document, show the button
     window.onscroll = function () {
       scrollFunction()
     };

     function scrollFunction() {
       if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
         document.getElementById("movetop").style.display = "block";
       } else {
         document.getElementById("movetop").style.display = "none";
       }
     }

     // When the user clicks on the button, scroll to the top of the document
     function topFunction() {
       document.body.scrollTop = 0;
       document.documentElement.scrollTop = 0;
     }
   </script>
   <!-- /move top -->
 </section>


 <script src="assets/js/jquery-3.3.1.min.js"></script>

 <script src="assets/js/theme-change.js"></script><!-- theme switch js (light and dark)-->

 <!-- libhtbox -->
 <script src="assets/js/lightbox-plus-jquery.min.js"></script>

 <script src="assets/js/owl.carousel.js"></script>
 <!-- script for banner slider-->
 <script>
   $(document).ready(function () {
     $('.owl-one').owlCarousel({
       loop: true,
       margin: 0,
       nav: false,
       responsiveClass: true,
       autoplay: false,
       autoplayTimeout: 5000,
       autoplaySpeed: 1000,
       autoplayHoverPause: false,
       responsive: {
         0: {
           items: 1,
           nav: false
         },
         480: {
           items: 1,
           nav: false
         },
         667: {
           items: 1,
           nav: true
         },
         1000: {
           items: 1,
           nav: true
         }
       }
     })
   })
 </script>
 <!-- //script -->

 <!-- script for tesimonials carousel slider -->
 <script>
   $(document).ready(function () {
     $(".owl-two").owlCarousel({
       loop: true,
       margin: 20,
       nav: false,
       responsiveClass: true,
       responsive: {
         0: {
           items: 1,
           nav: false
         },
         768: {
           items: 2,
           nav: false
         },
         1000: {
           items: 3,
           nav: false,
           loop: false
         }
       }
     })
   })
 </script>
 <!-- //script for tesimonials carousel slider -->

 <script>
   $(document).ready(function () {
     $('.owl-carousel-posts').owlCarousel({
       loop: true,
       margin: 0,
       responsiveClass: true,
       autoplay: true,
       autoplayTimeout: 2000,
       autoplaySpeed: 1000,
       autoplayHoverPause: true,
       responsive: {
         0: {
           items: 2,
           nav: false
         },
         480: {
           items: 3,
           nav: true,
           margin: 0
         },
         736: {
           items: 4,
           nav: true,
           margin: 0
         },
         1000: {
           items: 5,
           nav: true,
           margin: 0
         }
       }
     })
   })
 </script>
 <!-- /slider -->

 <!-- script for teams1-->
 <script>
   $(document).ready(function () {
     $('.owl-carousel').owlCarousel({
       loop: true,
       margin: 0,
       responsiveClass: true,
       responsive: {
         0: {
           items: 1,
           nav: true
         },
         400: {
           items: 2,
           nav: true,
           margin: 20
         },
         1000: {
           items: 4,
           nav: true,
           loop: true,
           margin: 25
         }
       }
     })
   })
 </script>
 <!-- //script for teams1-->


 <!-- stats number counter-->
 <script src="assets/js/jquery.waypoints.min.js"></script>
 <script src="assets/js/jquery.countup.js"></script>
 <script>
   $('.counter').countUp();
 </script>
 <!-- //stats number counter -->

 <!-- disable body scroll which navbar is in active -->
 <script>
   $(function () {
     $('.navbar-toggler').click(function () {
       $('body').toggleClass('noscroll');
     })
   });
 </script>
 <!-- disable body scroll which navbar is in active -->

 <!--/MENU-JS-->
 <script>
   $(window).on("scroll", function () {
     var scroll = $(window).scrollTop();

     if (scroll >= 80) {
       $("#site-header").addClass("nav-fixed");
     } else {
       $("#site-header").removeClass("nav-fixed");
     }
   });

   //Main navigation Active Class Add Remove
   $(".navbar-toggler").on("click", function () {
     $("header").toggleClass("active");
   });
   $(document).on("ready", function () {
     if ($(window).width() > 991) {
       $("header").removeClass("active");
     }
     $(window).on("resize", function () {
       if ($(window).width() > 991) {
         $("header").removeClass("active");
       }
     });
   });
 </script>
 <!--//MENU-JS-->

 <script src="assets/js/bootstrap.min.js"></script>

 </body>

 </html>
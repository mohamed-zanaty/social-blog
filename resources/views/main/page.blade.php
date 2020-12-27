<!DOCTYPE html>
<!--
	App by FreeHTML5.co
	Twitter: http://twitter.com/fh5co
	URL: http://freehtml5.co
-->
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>5dmatk</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="Free HTML5 Website Template by FreeHTML5.co" />
	<meta name="keywords" content="free website templates, free html5, free template, free bootstrap, free website template, html5, css3, mobile first, responsive" />
	<meta name="author" content="FreeHTML5.co" />

	<!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<!-- Bootstrap  -->
	<link rel="stylesheet" href="{{asset('app/css/bootstrap.css')}}">
	<!-- Owl Carousel  -->
	<link rel="stylesheet" href="{{asset('app/css/owl.carousel.css')}}">
	<link rel="stylesheet" href="{{asset('app/css/owl.theme.default.min.css')}}">
	<!-- Animate.css -->
	<link rel="stylesheet" href="{{asset('app/css/animate.css')}}">
	<!-- Font Awesome -->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">

	<!-- Theme style  -->
	<link rel="stylesheet" href="{{asset('app/css/style.css')}}">
    <style>
        nav{
            background-color: #3d29d7;

        }
        nav .navbar-brand{
            color: white;
            font-size: 24px;
        }
        nav ul {
            text-align: center;
            margin: auto;
            font-size: 18px;
        }
        nav button {
            color:white !important;
        }
        nav ul li {
            margin-right: 10px;


        }
        nav ul li a{
            color: white;
            font-size: 18px;
            transition: all .3s ease-in-out;
        }
        nav .collapse ul li .active{
            color: #3736c6 !important;

            font-weight: 500;
        }

        nav ul li a:hover{
            border: none !important;
            background: white;
            font-weight:400 ;
            color: #3736c6;
        }

    </style>
</head>
<body>


<div id="fh5co-hero-wrapper" style="">
@include('main.nav')

	<!-- ==========================================================================================================
													   HERO
		 ========================================================================================================== -->


    <div id="page-wrap">
		<div class="container fh5co-hero-inner" style="margin-top: 20px !important;">
			<h1 class="animated fadeIn wow" data-wow-delay="0.4s" >Welcome To Our WebSite</h1>
			<p class="animated fadeIn wow " data-wow-delay="0.67s" style="margin-top: 50px;     width: 54%;
    font-size: 26px;">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et voluptates, aliquid soluta distinctio dolorum tenetur. </p>
			<p class="animated fadeIn wow " style="    width: 54%;
    font-size: 26px;" data-wow-delay="0.67s">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et voluptates, aliquid soluta distinctio dolorum tenetur. </p>

			<img class="fh5co-hero-smartphone animated fadeInRight wow" data-wow-delay="1s" src="{{asset('app/img/phone-image.png')}}" alt="Smartphone">
		</div>

	</div> <!-- first section wrapper -->

</div>
	<!-- ==========================================================================================================
													 ADVANTAGES
		 ========================================================================================================== -->

	<div class="fh5co-advantages-outer" >
		<div class="container">
			<h1 class="second-title"><span class="span-perfect">Perfect</span> <span class="span-features">Features</span></h1>
			<small>Only necessary</small>

			<div class="row fh5co-advantages-grid-columns wow animated fadeIn" data-wow-delay="0.36s">

				<div class="col-sm-4">
					<img class="grid-image" src="{{asset('app/img/icon-1.png')}}" alt="Icon-1">
					<h1 class="grid-title">Usability</h1>
					<p class="grid-desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem cupiditate.</p>
				</div>

				<div class="col-sm-4">
					<img class="grid-image" src="{{asset('app/img/icon-2.png')}}" alt="Icon-2">
					<h1 class="grid-title">Parallax Effect</h1>
					<p class="grid-desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem cupiditate.</p>
				</div>

				<div class="col-sm-4">
					<img class="grid-image" src="{{asset('app/img/icon-3.png')}}" alt="Icon-3">
					<h1 class="grid-title">Unlimited Colors</h1>
					<p class="grid-desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem cupiditate.</p>
				</div>


			</div>
		</div>
	</div>


	<!-- ==========================================================================================================
													  SLIDER
		 ========================================================================================================== -->

	<div class="fh5co-slider-outer wow fadeIn" data-wow-delay="0.36s">
		<h1>SIMPLE WIDGETS</h1>
		<small>Drag and Drop</small>
		<div class="container fh5co-slider-inner">

			<div class="owl-carousel owl-theme">

				<div class="item"><img src="{{asset('app/img/smartphone-2.png')}}" alt=""></div>
				<div class="item"><img src="{{asset('app/img/smartphone-2.png')}}" alt=""></div>
				<div class="item"><img src="{{asset('app/img/iphone.png')}}" alt=""></div>
				<div class="item"><img src="{{asset('app/img/smartphone-2.png')}}" alt=""></div>


			</div>

		</div>
	</div>


	<!-- ==========================================================================================================
													  FEATURES
		 ========================================================================================================== -->

	<div class="curved-bg-div wow animated fadeIn" data-wow-delay="0.15s"></div>
	<div id="fh5co-features" class="fh5co-features-outer">
		<div class="container">

			<div class="row fh5co-features-grid-columns">

				<div class="col-sm-6 in-order-1 wow animated fadeInLeft" data-wow-delay="0.22s">
					<div class="col-sm-image-container">
						<img class="img-float-left" src="{{asset('app/img/smartphone-1.png')}}" alt="smartphone-1">
						<span class="span-new">NEW</span>
						<span class="span-free">Free</span>
					</div>
				</div>

				<div class="col-sm-6 in-order-2 sm-6-content wow animated fadeInRight" data-wow-delay="0.22s">
					<h1>New Features</h1>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam dolor iste beatae ad adipisci, fugiat dignissimos pariatur, dolore nemo suscipit cum nisi earum voluptates nulla! </p>
					<span class="circle circle-first"><i class="fab fa-instagram"></i></span>
					<span class="circle circle-middle"><i class="fab fa-facebook"></i></span>
					<span class="circle circle-last"><i class="fab fa-twitter"></i></span>
				</div>

				<div class="col-sm-6 in-order-3 sm-6-content wow animated fadeInLeft" data-wow-delay="0.22s">
					<h1>REAL-TIME STATISTICS</h1>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam dolor iste beatae ad adipisci, fugiat dignissimos pariatur, dolore nemo suscipit cum nisi earum voluptates nulla! </p>
					<span class="circle circle-first"><i class="fas fa-star"></i></span>
					<span class="circle circle-middle"><i class="far fa-star"></i></span>
					<span class="circle circle-last"><i class="far fa-thumbs-up"></i></span>
				</div>

				<div class="col-sm-6 in-order-4 wow animated fadeInRight" data-wow-delay="0.22s">
					<img class="img-float-right" src="{{asset('app/img/smartphone-2.png')}}" alt="smartphone-2">
				</div>

				<div class="col-sm-6 in-order-5 wow animated fadeInLeft" data-wow-delay="0.22s">
					<div class="col-sm-image-container">
						<img class="img-float-left" src="{{asset('app/img/smartphone-2.png')}}" alt="smartphone-3">
						<span class="span-data">DATA</span>
						<span class="span-percent">100%</span>
					</div>
				</div>
				<div class="col-sm-6 in-order-6 sm-6-content wow animated fadeInRight" data-wow-delay="0.22s">
					<h1>POWERFUL BACKEND</h1>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam dolor iste beatae ad adipisci, fugiat dignissimos pariatur, dolore nemo suscipit cum nisi earum voluptates nulla! </p>
					<span class="circle circle-first">95%</span>
					<span class="circle circle-middle"><i class="fas fa-forward"></i></span>
					<span class="circle circle-last"><i class="fab fa-github"></i></span>

				</div>




			</div> <!-- row -->


		</div>
	</div>


	<!-- ==========================================================================================================
													  REVIEWS
		 ========================================================================================================== -->

	<div id="fh5co-reviews" class="fh5co-reviews-outer">
		<h1>What people are saying</h1>
		<small>Reviews</small>
		<div class="container fh5co-reviews-inner">
			<div class="row justify-content-center">
				<div class="col-sm-5 wow fadeIn animated" data-wow-delay="0.25s">
					<img class="float-left" src="{{asset('app/img/quotes-1.jpg')}}" alt="Quote 1">
					<p class="testimonial-desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quis similique quasi.</p>
					<small class="testimonial-author">John Doe</small>
					<img class="float-right" src="{{asset('app/img/quotes-2.jpg')}}" alt="Quote 2">
				</div>
				<div class="col-sm-5 testimonial-2 wow fadeIn animated" data-wow-delay="0.67s">
					<img class="float-left" src="{{asset('app/img/quotes-1.jpg')}}" alt="Quote 1">
					<p class="testimonial-desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quis similique quasi.</p>
					<small class="testimonial-author">Someone</small>
					<img class="float-right" src="{{asset('app/img/quotes-2.jpg')}}" alt="Quote 2">
				</div>
			</div>

		</div>
	</div>


	<!-- ==========================================================================================================
                                                 BOTTOM
    ========================================================================================================== -->

	<div id="fh5co-download" class="fh5co-bottom-outer">
		<div class="overlay">
			<div class="container fh5co-bottom-inner">
				<div class="row">
					<div class="col-sm-6">
						<h1>How to download the app?</h1>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eaque suscipit, similique animi saepe, ipsam itaque, tempore minus maxime pariatur error unde fugit tenetur.</p>

					</div>
				</div>
			</div>
		</div>
	</div>


	<!-- ==========================================================================================================
                                               SECTION 7 - SUB FOOTER
    ========================================================================================================== -->

	<footer class="footer-outer">
		<div class="container footer-inner">

			<div class="footer-three-grid wow fadeIn animated" data-wow-delay="0.66s">
				<div style="text-align: center">
					<h1 style="text-align: center; color: grey">
                            <b>--5dmatk--</b>
                         </h1>
				</div>
			</div>

			<span class="border-bottom-footer"></span>

			<p class="copyright">&copy; Design By   <a style="color:white;">mohamed zanaty</a>.</p>

		</div>
	</footer>




<!-- main page wrapper -->

	<script src="{{asset('app/js/jquery.min.js')}}"></script>
	<script src="{{asset('app/js/bootstrap.js')}}"></script>
	<script src="{{asset('app/js/owl.carousel.js')}}"></script>
	<script src="{{asset('app/js/wow.min.js')}}"></script>
	<script src="{{asset('app/js/main.js')}}"></script>
</body>
</html>

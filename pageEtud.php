<?php 
$user = "root";
$pass = "";
$db = "bd_pro";
$serv="localhost";

    $BD = mysqli_connect($serv,$user,$pass,$db); 


?>





 <!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="viewport" content="initial-scale=1, maximum-scale=1">
	<title>ebs</title>
	<link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
	<link rel="stylesheet" href="./css/style.css">
	<link rel="stylesheet" href="./css/pageEtud.css">
	<link rel="stylesheet" href="./css/swiper-bundle.min.css">
	<!--<link rel="stylesheet" href="./css/courses-style.css">-->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link rel="icon" type="image/x-icon" href="./images/fav__icon.svg">
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700;900&display=swap" rel="stylesheet">
</head>
<body>
	<navbar>
		<div class="container nav__container">
			<a href="index.html"><img src="images/logo.svg"></a>
			<ul class="nav__menu">
				<li><a href="pageEtud.php">Notre Service</a></li>
				<li><a href="pageProfess.php">Equipe</a></li>
				<li><a href="index.html">FAQ</a></li>
				<li><a href="index.html">Contact</a></li>
				<li><a href="index.html">s'inscrir</a></li>
			</ul>
			<button id="open-menu-btn"><i class="uil uil-bars"></i></button>
			<button id="close-menu-btn"><i class="uil uil-multiply"></i></button>
		</div>
	</navbar>


	<!------------------------------CAI------------------------------------------->

		<div class="container ">
			<h1>CAI :</h1>
			
			<div class="slide-container swiper">
				<div class="slide-content">
					<div class="card-wrapper swiper-wrapper">
						<arcticle class="course card swiper-slide">
							<div class="course__image image-content">
								<img src="./images/course1.jpg">
							</div>
							<div class="course__info">
							  <h4>Responsive website</h4>
							  <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Neque assumenda adipisci, quidem quisquam molestiae repellendus.</p>
							  <a href="courses.php" target="_blank"class="btn btn-primary">learn more</a>
							</div>
							
						</arcticle>

						<arcticle class="course card swiper-slide">
							<div class="course__image image-content">
								<img src="./images/course1.jpg">
							</div>
							<div class="course__info">
							  <h4>Responsive website</h4>
							  <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Neque assumenda adipisci, quidem quisquam molestiae repellendus.</p>
							  <a href="course.html" target="_blank"class="btn btn-primary">learn more</a>
							</div>
							
						</arcticle>

						<arcticle class="course card swiper-slide">
							<div class="course__image image-content">
								<img src="./images/course1.jpg">
							</div>
							<div class="course__info">
							  <h4>Responsive website</h4>
							  <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Neque assumenda adipisci, quidem quisquam molestiae repellendus.</p>
							  <a href="course.html" target="_blank"class="btn btn-primary">learn more</a>
							</div>
							
						</arcticle>
						

					</div>
				</div>
		
				<div class="swiper-button-next swiper-navBtn"></div>
				<div class="swiper-button-prev swiper-navBtn"></div>
				<div class="swiper-pagination"></div>
			</div>

		</div>
	<!------------------------------DAI------------------------------------------->
		
<!--faq-->


	<section class="faqs">
		<h2>Frequently asked questions</h2>
		<div class="container faqs__container">
			<article class="faq">
				<div class="faq__icon"><i class="uil uil-plus-circle"></i></div>
				<div class="question__answer">
					<h4>how do i get started?</h4>
					<p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Fuga.</p>
				</div>
			</article>
			<article class="faq">
			  <div class="faq__icon"><i class="uil uil-plus-circle"></i></div>
			  <div class="question__answer">
				  <h4>how do i get started?</h4>
				  <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Fuga.</p>
			  </div>
		   </article>
		   <article class="faq">
			  <div class="faq__icon"><i class="uil uil-plus-circle"></i></div>
			  <div class="question__answer">
				  <h4>how do i get started?</h4>
				  <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Fuga.</p>
			  </div>
		  </article>
		  <article class="faq">
			  <div class="faq__icon"><i class="uil uil-plus-circle"></i></div>
			  <div class="question__answer">
				  <h4>how do i get started?</h4>
				  <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Fuga.</p>
			  </div>
		  </article>
		  <article class="faq">
			  <div class="faq__icon"><i class="uil uil-plus-circle"></i></div>
			  <div class="question__answer">
				  <h4>how do i get started?</h4>
				  <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Fuga.</p>
			  </div>
		  </article>
		  <article class="faq">
			<div class="faq__icon"><i class="uil uil-plus-circle"></i></div>
			<div class="question__answer">
				<h4>how do i get started?</h4>
				<p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Fuga.</p>
			</div>
		 </article>
		 <article class="faq">
			<div class="faq__icon"><i class="uil uil-plus-circle"></i></div>
			<div class="question__answer">
				<h4>how do i get started?</h4>
				<p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Fuga.</p>
			</div>
		</article>
		<article class="faq">
			<div class="faq__icon"><i class="uil uil-plus-circle"></i></div>
			<div class="question__answer">
				<h4>how do i get started?</h4>
				<p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Fuga.</p>
			</div>
		</article>
		</div>
	</section>



	
</body>
<!-- Swiper JS -->
<script src="js/swiper-bundle.min.js"></script>

<!-- JavaScript -->
<script src="js/script.js"></script>
</html>
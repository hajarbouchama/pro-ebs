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
	 <!--------------------------------------------------------------------------header------------------------------------------------------------>
	 <header>
		<div class="container header__container">
			<div class="header__left">
				<h1>Grow your skill to advance in your BTS career</h1>
				<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi iure expedita, nostrum culpa numquam rem adipisci corrupti quis dolorem quia?</p>
			</div>
			<div class="header__right">
				<div class="header__right-image">
					<img src="./images/etud-hero.svg">
				</div>
			</div>
		</div>
	</header>


	<!------------------------------CAI------------------------------------------->
	<section class="module__header">
		<h2 >Product</h2>
	  </section>

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
							  <h4>cours d'Atelie de genie logiciel</h4>
							  <?php
									$req = $bd->query('SELECT name,file_url FROM files Where Module = "AGL"');
									while ($data = $req->fetch()) {
										echo $data['name'].':'.;
									}
								?>
							  <a href="'.$data['file_url'].'" target="_blank"class="btn btn-primary">learn more</a>
							</div>
							
						</arcticle>

						<arcticle class="course card swiper-slide">
							<div class="course__image image-content">
								<img src="./images/course1.jpg">
							</div>
							<div class="course__info">
							  <h4>cours d'Asseurance qualite et test de logiciel</h4>
							  <?php
									$req = $bd->query('SELECT name,file_url FROM files Where Module = "AQT"');
									while ($data = $req->fetch()) {
										echo $data['name'].':'.;
									}
							  ?>
								<a href="'.$data['file_url']." target="_blank"class="btn btn-primary">learn more</a>
							</div>
							
						</arcticle>

						<arcticle class="course card swiper-slide">
							<div class="course__image image-content">
								<img src="./images/course1.jpg">
							</div>
							<div class="course__info">
							  <h4>cours de gestion de projet</h4>
							  <?php
									$req = $bd->query('SELECT name,file_url FROM files Where Module = "GP"');
									while ($data = $req->fetch()) {
										echo $data['name'].':'.;
									}
								?>
							  <a href="'.$data['file_url'].'" target="_blank"class="btn btn-primary">learn more</a>
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
	<div class="container ">
		<h1>DAI :</h1>
		
		<div class="slide-container swiper">
			<div class="slide-content">
				<div class="card-wrapper swiper-wrapper">
					<arcticle class="course card swiper-slide">
						<div class="course__image image-content">
							<img src="./images/course1.jpg">
						</div>
						<div class="course__info">
						  <h4>cours de PHP</h4>
						  <?php
								$req = $bd->query('SELECT name,file_url FROM files Where Module = "PHP"');
								while ($data = $req->fetch()) {
									echo $data['name'].':';
								}
							?>
						  <a href="'.$data['file_url'].'" target="_blank"class="btn btn-primary">learn more</a>
						</div>
						
					</arcticle>

					<arcticle class="course card swiper-slide">
						<div class="course__image image-content">
							<img src="./images/course1.jpg">
						</div>
						<div class="course__info">
						  <h4>cours de JAVA</h4>
						  <?php
								$req = $bd->query('SELECT name,file_url FROM files Where Module = "JAVA"');
								while ($data = $req->fetch()) {
									echo $data['name'].':';
								}
							?>
						  <a href="'.$data['file_url'].'" target="_blank"class="btn btn-primary">learn more</a>
						</div>
						
					</arcticle>

					<arcticle class="course card swiper-slide">
						<div class="course__image image-content">
							<img src="./images/course1.jpg">
						</div>
						<div class="course__info">
						  <h4>cours de VB.Net</h4>
						  <?php
								$req = $bd->query('SELECT name,file_url FROM files Where Module = "VB"');
								while ($data = $req->fetch()) {
									echo $data['name'].':';
								}
							?>
						  <a href="'.$data['file_url'].'" target="_blank"class="btn btn-primary">learn more</a>
						</div>
						
					</arcticle>

					<arcticle class="course card swiper-slide">
						<div class="course__image image-content">
							<img src="./images/course1.jpg">
						</div>
						<div class="course__info">
						  <h4>cours de Client/Serveur</h4>
						  <?php
								$req = $bd->query('SELECT name,file_url FROM files Where Module = "CS"');
								while ($data = $req->fetch()) {
									echo $data['name'].':';
								}
							?>
						  <a href="'.$data['file_url'].'" target="_blank"class="btn btn-primary">learn more</a>
						</div>
						
					</arcticle>

					
					

				</div>
			</div>
	
			<div class="swiper-button-next swiper-navBtn"></div>
			<div class="swiper-button-prev swiper-navBtn"></div>
			<div class="swiper-pagination"></div>
		</div>

	</div>
<!------------------------------ASI------------------------------------------->
<div class="container ">
	<h1>ASI :</h1>
	
	<div class="slide-container swiper">
		<div class="slide-content">
			<div class="card-wrapper swiper-wrapper">
				
				<arcticle class="course card swiper-slide">
					<div class="course__image image-content">
						<img src="./images/course1.jpg">
					</div>
					<div class="course__info">
					  <h4>Tout sur l'ordinateur :</h4>
					  <?php
							$req = $bd->query('SELECT name,file_url FROM files Where Module = ""');
							while ($data = $req->fetch()) {
								echo $data['name'].':';
							}
						?>
					  <a href="'.$data['file_url'].'" target="_blank"class="btn btn-primary">learn more</a>
					</div>
					
				</arcticle>

			</div>
		</div>

		<div class="swiper-button-next swiper-navBtn"></div>
		<div class="swiper-button-prev swiper-navBtn"></div>
		<div class="swiper-pagination"></div>
	</div>

</div>
<!------------------------------MATH------------------------------------------->
<div class="container ">
	<h1>MATH :</h1>
	
	<div class="slide-container swiper">
		<div class="slide-content">
			<div class="card-wrapper swiper-wrapper">
				
				<arcticle class="course card swiper-slide">
					<div class="course__image image-content">
						<img src="./images/course1.jpg">
					</div>
					<div class="course__info">
					  <h4>math:</h4>
					  <?php
							$req = $bd->query('SELECT name,file_url FROM files Where Module = "M1"');
							while ($data = $req->fetch()) {
								echo $data['name'].':';
							}
						?>
					  <a href="'.$data['file_url'].'" target="_blank"class="btn btn-primary">learn more</a>
					</div>
					
				</arcticle>

				
			</div>
		</div>

		<div class="swiper-button-next swiper-navBtn"></div>
		<div class="swiper-button-prev swiper-navBtn"></div>
		<div class="swiper-pagination"></div>
	</div>

</div>
<!------------------------------ARABE------------------------------------------->
<div class="container ">
	<h1>ARABE :</h1>
	
	<div class="slide-container swiper">
		<div class="slide-content">
			<div class="card-wrapper swiper-wrapper">
				
				<arcticle class="course card swiper-slide">
					<div class="course__image image-content">
						<img src="./images/course1.jpg">
					</div>
					<div class="course__info">
					  <h4>العولمة</h4>
					  <?php
							$req = $bd->query('SELECT name,file_url FROM files Where Module = "awlama"');
							while ($data = $req->fetch()) {
								echo $data['name'].':';
							}
						?>
					  <a href="'.$data['file_url'].'" target="_blank"class="btn btn-primary">learn more</a>
					</div>
					
				</arcticle>

				<arcticle class="course card swiper-slide">
					<div class="course__image image-content">
						<img src="./images/course1.jpg">
					</div>
					<div class="course__info">
					  <h4>الاقتصاد و المجتمع</h4>
					  <?php
							$req = $bd->query('SELECT name,file_url FROM files Where Module = "iktisad"');
							while ($data = $req->fetch()) {
								echo $data['name'].':';
							}
						?>
					  <a href="'.$data['file_url'].'" target="_blank"class="btn btn-primary">learn more</a>
					</div>
					
				</arcticle>

				<arcticle class="course card swiper-slide">
					<div class="course__image image-content">
						<img src="./images/course1.jpg">
					</div>
					<div class="course__info">
					  <h4>الثقافة البصرية </h4>
					  <?php
							$req = $bd->query('SELECT name,file_url FROM files Where Module = "takafa"');
							while ($data = $req->fetch()) {
								echo $data['name'].':';
							}
						?>
					  <a href="'.$data['file_url'].'" target="_blank"class="btn btn-primary">learn more</a>
					</div>
					
				</arcticle>

				<arcticle class="course card swiper-slide">
					<div class="course__image image-content">
						<img src="./images/course1.jpg">
					</div>
					<div class="course__info">
					  <h4>الترجمة </h4>
					  <?php
							$req = $bd->query('SELECT name,file_url FROM files Where Module = "tarjama"');
							while ($data = $req->fetch()) {
								echo $data['name'].':';
							}
						?>
					  <a href="'.$data['file_url'].'" target="_blank"class="btn btn-primary">learn more</a>
					</div>
					
				</arcticle>

			</div>
		</div>

		<div class="swiper-button-next swiper-navBtn"></div>
		<div class="swiper-button-prev swiper-navBtn"></div>
		<div class="swiper-pagination"></div>
	</div>

</div>
<!------------------------------FRANCAIS------------------------------------------->
<div class="container ">
	<h1>FRANCAIS :</h1>
	
	<div class="slide-container swiper">
		<div class="slide-content">
			<div class="card-wrapper swiper-wrapper">
				
				<arcticle class="course card swiper-slide">
					<div class="course__image image-content">
						<img src="./images/course1.jpg">
					</div>
					<div class="course__info">
					  <h4>Grammaire : </h4>
					  <?php
							$req = $bd->query('SELECT name,file_url FROM files Where Module = ""');
							while ($data = $req->fetch()) {
								echo $data['name'].':';
							}
						?>
					  <a href="'.$data['file_url'].'" target="_blank"class="btn btn-primary">learn more</a>
					</div>
					
				</arcticle>

				<arcticle class="course card swiper-slide">
					<div class="course__image image-content">
						<img src="./images/course1.jpg">
					</div>
					<div class="course__info">
					  <h4>Production ecrite : </h4>
					  <?php
							$req = $bd->query('SELECT name,file_url FROM files Where Module = ""');
							while ($data = $req->fetch()) {
								echo $data['name'].':';
							}
						?>
					  <a href="'.$data['file_url'].'" target="_blank"class="btn btn-primary">learn more</a>
					</div>
					
				</arcticle>

				<arcticle class="course card swiper-slide">
					<div class="course__image image-content">
						<img src="./images/course1.jpg">
					</div>
					<div class="course__info">
					  <h4>Argumentation : </h4>
					  <?php
							$req = $bd->query('SELECT name,file_url FROM files Where Module = ""');
							while ($data = $req->fetch()) {
								echo $data['name'].':';
							}
						?>
					  <a href="'.$data['file_url'].'" target="_blank"class="btn btn-primary">learn more</a>
					</div>
					
				</arcticle>



			</div>
		</div>

		<div class="swiper-button-next swiper-navBtn"></div>
		<div class="swiper-button-prev swiper-navBtn"></div>
		<div class="swiper-pagination"></div>
	</div>

</div>
<!------------------------------ANGLAIS------------------------------------------->
<div class="container ">
	<h1>ANGLAIS :</h1>
	
	<div class="slide-container swiper">
		<div class="slide-content">
			<div class="card-wrapper swiper-wrapper">
				
				<arcticle class="course card swiper-slide">
					<div class="course__image image-content">
						<img src="./images/course1.jpg">
					</div>
					<div class="course__info">
					  <h4>Grammar : </h4>
					  <?php
							$req = $bd->query('SELECT name,file_url FROM files Where Module = ""');
							while ($data = $req->fetch()) {
								echo $data['name'].':';
							}
						?>
					  <a href="'.$data['file_url'].'" target="_blank"class="btn btn-primary">learn more</a>
					</div>
					
				</arcticle>

				<arcticle class="course card swiper-slide">
					<div class="course__image image-content">
						<img src="./images/course1.jpg">
					</div>
					<div class="course__info">
					  <h4>Communication : </h4>
					  <?php
							$req = $bd->query('SELECT name,file_url FROM files Where Module = ""');
							while ($data = $req->fetch()) {
								echo $data['name'].':';
							}
						?>
					  <a href="'.$data['file_url'].'" target="_blank"class="btn btn-primary">learn more</a>
					</div>
					
				</arcticle>

				<arcticle class="course card swiper-slide">
					<div class="course__image image-content">
						<img src="./images/course1.jpg">
					</div>
					<div class="course__info">
					  <h4>business : </h4>
					  <?php
							$req = $bd->query('SELECT name,file_url FROM files Where Module = ""');
							while ($data = $req->fetch()) {
								echo $data['name'].':';
							}
						?>
					  <a href="'.$data['file_url'].'" target="_blank"class="btn btn-primary">learn more</a>
					</div>
					
				</arcticle>

				<arcticle class="course card swiper-slide">
					<div class="course__image image-content">
						<img src="./images/course1.jpg">
					</div>
					<div class="course__info">
					  <h4>Vocabulary : </h4>
					  <?php
							$req = $bd->query('SELECT name,file_url FROM files Where Module = ""');
							while ($data = $req->fetch()) {
								echo $data['name'].':';
							}
						?>
					  <a href="'.$data['file_url'].'" target="_blank"class="btn btn-primary">learn more</a>
					</div>
					
				</arcticle>
				

			</div>
		</div>

		<div class="swiper-button-next swiper-navBtn"></div>
		<div class="swiper-button-prev swiper-navBtn"></div>
		<div class="swiper-pagination"></div>
	</div>

</div>
<!------------------------------TEC------------------------------------------->
<div class="container ">
	<h1>TEC :</h1>
	
	<div class="slide-container swiper">
		<div class="slide-content">
			<div class="card-wrapper swiper-wrapper">
				
				<arcticle class="course card swiper-slide">
					<div class="course__image image-content">
						<img src="./images/course1.jpg">
					</div>
					<div class="course__info">
					  <h4>Les bases de la Communication : </h4>
					  <?php
							$req = $bd->query('SELECT name,file_url FROM files Where Module = "M1"');
							while ($data = $req->fetch()) {
								echo $data['name'].':';
							}
						?>
					  <a href="'.$data['file_url'].'" target="_blank"class="btn btn-primary">learn more</a>
					</div>
					
				</arcticle>

				<arcticle class="course card swiper-slide">
					<div class="course__image image-content">
						<img src="./images/course1.jpg">
					</div>
					<div class="course__info">
					  <h4>La Communication orale professionnelle : </h4>
					  <?php
							$req = $bd->query('SELECT name,file_url FROM files Where Module = "M1"');
							while ($data = $req->fetch()) {
								echo $data['name'].':';
							}
						?>
					  <a href="'.$data['file_url'].'" target="_blank"class="btn btn-primary">learn more</a>
					</div>
					
				</arcticle>

				<arcticle class="course card swiper-slide">
					<div class="course__image image-content">
						<img src="./images/course1.jpg">
					</div>
					<div class="course__info">
					  <h4>Communication ecrite interne : </h4>
					  <?php
							$req = $bd->query('SELECT name,file_url FROM files Where Module = "M1"');
							while ($data = $req->fetch()) {
								echo $data['name'].':';
							}
						?>
					  <a href="'.$data['file_url'].'" target="_blank"class="btn btn-primary">learn more</a>
					</div>
					
				</arcticle>

				<arcticle class="course card swiper-slide">
					<div class="course__image image-content">
						<img src="./images/course1.jpg">
					</div>
					<div class="course__info">
					  <h4>Communication ecrite externe : </h4>
					  <?php
							$req = $bd->query('SELECT name,file_url FROM files Where Module = "M1"');
							while ($data = $req->fetch()) {
								echo $data['name'].':';
							}
						?>
					  <a href="'.$data['file_url'].'" target="_blank"class="btn btn-primary">learn more</a>
					</div>
					
				</arcticle>

			</div>
		</div>

		<div class="swiper-button-next swiper-navBtn"></div>
		<div class="swiper-button-prev swiper-navBtn"></div>
		<div class="swiper-pagination"></div>
	</div>

</div>

		
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
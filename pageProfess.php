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
	<link rel="stylesheet" href="./css/pageProfess.css">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link rel="icon" type="image/x-icon" href="./images/fav__icon.svg">
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700;900&display=swap" rel="stylesheet">
</head>
<body>
	 <!--------------------------------------------------------------------------NAVBAR------------------------------------------------------------>
	 <navbar>
		<div class="container nav__container">
			<a href="index.html"><img src="images/logo.svg"></a>
			<ul class="nav__menu">
				<li><a href="index.html">Notre Service</a></li>
				<li><a href="index.html">Equipe</a></li>
				<li><a href="index.html">FAQ</a></li>
				<li><a href="index.html">Contact</a></li>
				<li><a href="index.html">s'inscrir</a></li>
			</ul>
			<button id="open-menu-btn"><i class="uil uil-bars"></i></button>
			<button id="close-menu-btn"><i class="uil uil-multiply"></i></button>
		</div>
	</navbar>
	
	<!--------------------------------------------------------------------------form------------------------------------------------------------>
	
	<section class="upload">
		<h1>Uploader un fichier PDF :</h1>
		<div class="container upload__container">

			<form class="upload__form" method="post" enctype="multipart/form-data">
				<label for="title">titre de coures</label>
				<input type="text" placeholder="titre de cours" required>
				<label for="description">description</label>
				<input type="text" rows="10" placeholder="description">
				<label for="fname">cours en PDF</label>
				<input type="file" name="fichier" required>
				<button type="submit" class="btn btn-primary">Enregister le fichier</button>
			</form>
		</div>
	</section>
	

	<!------------------------------FAQ------------------------------------------->
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
</html>
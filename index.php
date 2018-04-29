<!doctype html> 
<html lang="en">
	<head>
		<title>Tuckk Thatsaya</title>
		<meta charset="UTF-8">
		<meta name="keywords" content="portfolio,freelance,web design,ux,ui">
		<meta name="description" content="portfolioแสดงผลงาน">
		<meta name="author" content="betuckk">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<link href="_template/tk_favicon.png" type="image/png" sizes="16x18" rel="icon">
		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
		<!-- General CSS  -->
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto+Condensed|Anton|QuestrialTajawal">
		<link rel="stylesheet" href="_template/style.css">
		<link rel="stylesheet" href="_template/jquery.circliful.css">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.10/css/all.css" integrity="sha384-+d0P83n9kaQMCwj8F4RJB66tzIwOKmrdb46+porD/OvrJ+37WqIM7UoBtwHO6Nlg" crossorigin="anonymous">
		<!-- General JS -->
		<script src="_template/jquery-3.2.1.min.js"></script>	
	</head>
	<body>
		<header>
			<nav class="navbar navbar-expand-lg navbar-dark fixed-top tk-bg0">
				<div class="container">
					<img src="_template/tk_logo.svg" height="40">
					<div class="tk-clear-0">
						<a href="https://www.facebook.com/betuckk" target="_blank"><img src="_template/tk_social4.svg" width="18"></a>
						<a href="https://www.instagram.com/betuckk" target="_blank"><img src="_template/tk_social5.svg" width="18" class="ml-3"></a>
						<a href="https://twitter.com/betuckk" target="_blank"><img src="_template/tk_social6.svg" width="18" class="ml-3"></a>
					</div>
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-icon"></span>
					</button>
					<div class="collapse navbar-collapse" id="navbarText">
						<ul class="navbar-nav ml-auto text-right tk-linknav">
							<li class="nav-item"><a class="nav-link text-light tk-link" href="#About">ABOUT</a></li>
							<li class="nav-item"><a class="nav-link text-light tk-link" href="#Experiance">EXPERIENCE</a></li>
							<li class="nav-item"><a class="nav-link text-light tk-link" href="#Skills">SKILLS</a></li>
							<li class="nav-item"><a class="nav-link text-light tk-link" href="#Portfolio">PORTFOLIO</a></li>
							<li class="nav-item"><a class="nav-link text-light tk-link" href="#Contact">CONTACT</a></li>
						</ul>
					</div>
				</div>
			</nav>
		</header>
		<main>
			<section id="About" class="tk-wrapabout">
				<div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
					<div class="carousel-inner">
						<div class="carousel-item active tk-bgabout1 text-center">
							<div class="display-4 tk-txt-0 pt-5">THATSAYA SAENGKULAB099999</div>
							<div class="h4">Web Designer / Front-end Developer</div>
							<div class="tk-clear-1 mt-4">
								<a href="https://www.facebook.com/betuckk" target="_blank"><img src="_template/tk_social1.svg" width="40"></a>
								<a href="https://www.instagram.com/betuckk" target="_blank"><img src="_template/tk_social2.svg" width="40" class="ml-3"></a>
								<a href="https://twitter.com/betuckk" target="_blank"><img src="_template/tk_social3.svg" width="40" class="ml-3"></a>
							</div>
							<p class="mt-3 tk-txt-2">Hello everyone! You can call me “Tuckk”.<br>I'm Thai and live in Pathum Thani.</p>
						</div>
						<div class="carousel-item tk-bgabout2">
							<div class="container pt-4">
								<div class="row" style="padding-left:5px;">
									<div class="col-12">
										<div class="display-4 tk-txt-0">ABOUT ME</div>
										<div class="pt-4">&nbsp;&nbsp;&nbsp;I have had a chance to work apart from my career <br>for many jobs</div>
										<div class="pt-2 tk-clear-1">such as<br>
											<div class="display-5 tk-txt-3 ">• selling<br>• stock checking<br>• internet café business development<br>trainee</div>
										</div>
										<div class="text-right tk-clear-1"><span class="h4" style="color:#ffda67;">And now</span> <span class="text-white">I am a freelance web designer.<br>Even though, I had to start from zero but I tried to learn<br> and gave them my all to complete those works.</span></div>
										<div class="text-right tk-clear-0"><span class="h4">And now</span> I am a freelance web designer.<br>Even though, I had to start from zero but I tried to learn<br> and gave them my all to complete those works.</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="text-center tk-avatar"><img src="_template/tk_avatar.png" width="200" style="margin-bottom:-90px;"></div>
			</section>	
			<section id="Experiance">
				<div class="tk-wrapex">
					<div class="container text-center">
						<div class="h3 font-weight-bold text-white">WORK EXPERIENCE</div>
						<?PHP
							require_once('experiance.php');
						?>		
					</div>
				</div>
			</section>
			<section id="Skills">
				<div class="tk-wrapskills">
					<div class="container text-center">
						<div class="h3 font-weight-bold text-dark">MY SKILLS</div>
						<?PHP
							require_once('skills.php');
						?>		
					</div>
				</div>
			</section>
			<section id="Portfolio">
				<div class="tk-wrapfolio">
					<div class="container pt-4 text-center">
						<div class="h3 font-weight-bold text-dark">PORTFOLIO</div>
						<?PHP
							require_once('portfolio.php');
						?>		
					</div>
				</div>
			</section>
			<section id="Contact">
				<div class="tk-wrapcon">
					<div class="tk-map">
						<div class="container pt-4 text-center">
							<div class="h3 font-weight-bold text-white">CONTACT ME</div>
							<?PHP
								require_once('contact.php');
							?>		
						</div>
					</div>
				</div>
			</section>
		</main>
		<footer>
			<div class="footer-copyright py-3 text-center tk-txt-4 tk-bg2">
				© 2018 Tuckk Thatsaya. All rights reserved.
			</div>
		</footer>
		<!--  Bootstrap JS -->
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
		<!-- General JS -->
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
		<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.9.1/jquery-ui.min.js"></script>
		<script>
			$('.tk-link').click(function(event){
				$('html,body').animate({scrollTop:$(this.hash).offset().top}, 500);
				event.preventDefault();
			});
		</script>
		<script src="_template/jquery.circliful.js"></script>
		<script>
			$( document ).ready(function() { 
				$(".tkCircle").circliful({
					animation: 1,
					animationStep: 6,
					foregroundBorderWidth: 10,
					backgroundBorderWidth: 10,
					foregroundColor: '#39c4af',
					iconPosition: 'bottom',
					textColor: '#ee5454',
					textStyle:'font-size:12px;',
				});
			});
		</script>	
		
	</body>
</html>
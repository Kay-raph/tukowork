<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=yes">
	<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.0.7/angular.min.js"></script>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/cookieconsent@3/build/cookieconsent.min.css" />
	<link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link href="assets/css/home.css" rel="stylesheet" />
	<link href="assets/css/footer.css" rel="stylesheet" />
	<link href="assets/css/backtotop.css" rel="stylesheet" />
	<link href="assets/css/coomingsoon.css" rel="stylesheet" />
	<link href="assets/css/slider.css" rel="stylesheet" />
	<link rel="icon" type="image" href="logos/crm8.png" />
	<title>Tuko Works</title>
</head>
<body>
	 <!-- NAVBAR STARTING -->
    <!-- Use navbar class to the navbar logo  
        to the far left of the screen-->
		<nav class=" navbar navbar-expand-lg  
        navbar py-lg-0 " style="position: scroll; background-color: #624cd5;"> 
  
        <a class="navbar-brand" id="logo" href="{{ url('/') }}"> 
  
            <!-- Add logo with size of 150*auto -->
            <img src= 
"./logos/crm8.png" alt="Tuko Works"> 
        </a> 
          
        <button class="navbar-toggler navbar-dark " type="button"
                data-toggle="collapse" 
                data-target="#navbarResponsive"
                aria-controls="navbarResponsive" 
				aria-expanded="false" 
				color="white"
                aria-label="Toggle navigation" style="background-color: transparent; border-radius: 10px; border: 4px solid white;"> 
                  
                <span class="navbar-toggler-icon"></span> 
        </button> 
  
		<div class="collapse navbar-collapse"
		id="navbarResponsive"> 
	<ul class="navbar-nav ml-auto"> 
		<li class="nav-item active"> 
			<a href="{{ url('/findlogin') }}" class="login" click="active current='findlogin'"><i class="fa fa-fw fa fa-sign-in"></i>Sign In</a>
			<span class="sr-only">(current)</span>			   
		</li> 
		<li class="nav-item"> 
			<a href="{{ url('/signup') }}" class="signup" click="active current='signup'"><i class="fa fa-fw fa-user"></i>sign up</a>
		</li> 
		<li class="nav-item"> 
			<a href="{{ url('/about') }}" id="about" class="about" click="active current='about'"><i class="fa fa-fw fa-info-circle"></i>About us</a> 
		</li> 
		<li class="nav-item"> 
			<a href="{{ url('/policy') }}" class="policy" click="active current='home'"><i class="fa fa-fw fa-question-circle"></i>Our Policy</a> 
		</li> 
	</ul> 
</div> 
    </nav> 
	
	<br><br>
	<div class="container">
		<div class="frontb">
			<h1 style="color: #624cd5;">“Connect to talent and jobs anywhere anytime”</h1>
		</div>
		<br><br>
		<a href="{{ url('/findlogin') }}">
			<div class="find">
				<p id="p1">Find Job</p>
			</div>
		</a>
		<a href="{{ url('/postjoblogin') }}">
			<div class="post">
				<p id="p2">Post Job</p>
			</div>
		</a>
		<br><br>
		<div class="fronta">
</div><br>
<hr style="height:3px; border-width:0; color: #624cd5; background-color: #624cd5">
		<br>
		<div class="howitworks">
			<center>
				<h1><b>Want to be part of Agile and Fast Growing Startups?</b></h1>
				<br>
				<h5><b>TukoWorks will give you a perfect match.</b></h5><br>
			<p><b>Finding a Job with Us.<br>HOW IT WORKS</b>
			<br>
			<div class="row">
				<div class="col-sm"><br>
				  STEP 1.
				  <br>
				  <p style="text-transform: uppercase; color: black;">Login or Signup with us.</p>
				  <lottie-player src="https://assets10.lottiefiles.com/packages/lf20_hsedfigg/data.json"  background="transparent"  speed="1"  loop  autoplay></lottie-player>
				</div>
				<div class="col-sm"><br>
				  STEP 2.
				  <br>
				  <p style="color: black; text-transform: uppercase;">Get Connected to a Company.</p>
                  <lottie-player src="https://assets6.lottiefiles.com/packages/lf20_1z0fledt.json"  background="transparent"  speed="1" loop  autoplay></lottie-player>
				</div>
				<div class="col-sm"><br>
				  STEP 3.
				<br>
				<p style="color: black; text-transform: uppercase;">Start Working at a Company.</p>
                <lottie-player src="https://assets3.lottiefiles.com/private_files/lf30_gcroxmlt.json"  background="transparent"  speed="1"  loop  autoplay></lottie-player>
				</div>
			  </div>
			<br>
		</center>
		</div>
			<br>
		<hr style="height:3px; border-width:0; color: #624cd5; background-color: #624cd5">
		<div id="w">
			<h1 style="text-align: center;">Companies We Have Worked With.</h1>
			
			<div class="slidernav">
			  <div id="navbtns" class="clearfix">
				<a href="#" class="previous">prev</a>
				<a href="#" class="next">next</a>
			  </div>
			</div>
			
			<div class="crsl-items" data-navigation="navbtns">
			  <div class="crsl-wrap">
				<div class="crsl-item">
				  <div class="thumbnail">
					
					<a href="http://nyaligolf.com/"><img src="assets/imgs/nyal1.jpeg" alt="nyali golf" width="100%"><span class="postdate">Nyali Golf</span></a>
				  </div>
				</div>
				
				<div class="crsl-item">
				  <div class="thumbnail">
					
					<a href="http://imarikaafrica.com/"><img src="assets/imgs/imar.jpeg" alt="imarika afrika" width="100%" height="auto"><span class="postdate">Imarika Africa</span></a>
				  </div>
				</div>
				
				<div class="crsl-item">
				  <div class="thumbnail">
					
					<a href="https://sarabirealtygroup.co.ke/"><img src="assets/imgs/sarab.jpg" alt="sarabi realty group" width="100%"><span class="postdate">Sarabirealty</span></a>
			  </div>		  
				 <!-- <h3><a href="#">Watercoloring for Beginners</a></h3>
				  
				  <p>Cras eget interdum nunc. Nam suscipit congue augue, id interdum risus adipiscing nec. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Nulla non diam id nisi tempus sodales.</p>
				  
				  <p class="readmore"><a href="#">Read More &raquo;</a></p> -->
				</div>
				
				 <div class="crsl-item">
				  <div class="thumbnail">
					<img src="assets/imgs/fit.jpg" alt="freight in time" width="100%">
					<a href="https://www.freightintime.com/"><span class="postdate">Freight in Time</span></a>
				  </div>
				  <!-- <h3><a href="#">Classic iPods are Back!</a></h3>
				  
				  <p>Phasellus condimentum enim nisl, volutpat dapibus turpis euismod nec. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Donec id elit lorem. Vivamus at eros elit. Nullam cursus euismod purus.</p>
				  
				  <p class="readmore"><a href="#">Read More &raquo;</a></p> -->
				</div> 
			
				
				<div class="crsl-item">
				  <div class="thumbnail">
					<img src="assets/imgs/mediamoja.jpeg" alt="web design magazines" width="100%">
					<a href="https://www.mediamoja.com"><span class="postdate">Media Moja</span></a>
				  </div>		  
				  <!-- <h3><a href="#">The 10 Best Web Design Magazines</a></h3>
				  
				  <p>Morbi quis tempus leo, eget vestibulum quam. Pellentesque ac orci urna. Proin vitae neque vel metus pulvinar luctus vitae eu nulla.</p>
				  
				  <p class="readmore"><a href="#">Read More &raquo;</a></p> -->
				</div> 
			  </div><!-- @end .crsl-wrap -->
			<!-- @end .crsl-items -->
			
		  <!-- @end #w -->
		  <br>
		  <hr style="height:3px; border-width:0; color: #624cd5; background-color: #624cd5">
		  <br>
		</div>
		<script type="text/javascript">
		$(function(){
		  $('.crsl-items').carousel({
			visible: 2,
			itemMinWidth: 100,
			itemEqualHeight: 180,
			itemMargin: 10,
		  });
		  
		  $("a[href=#]").on('click', function(e) {
			e.preventDefault();
		  });
		});
		</script>
	</div>
	</div>
	<footer id="footer" class="footer-1">
		<div class="main-footer widgets-dark typo-light">
		<div class="container">
		<div class="row">
		  
		<div class="col-xs-12 col-sm-6 col-md-3">
		<div class="widget subscribe no-box">
		<a href="{{ url('/') }}"><img src="logos/crm8.png" style="width: 100px; height: auto;"></a>
		<p>“Connect to talent and jobs anywhere anytime”</p>
	</div>
		</div>
		
		<div class="col-xs-12 col-sm-6 col-md-3">
		<div class="widget no-box">
		<h5 class="widget-title" style="color: #ea9c14;">Quick Links<span></span></h5>
		<ul class="thumbnail-widget">
		<li>
		<div class="thumb-content"><a href="#.">Our APIs</a></div>	
		</li>
		<li>
		<div class="thumb-content"><a href="#.">Top Talents</a></div>	
		</li>
		<li>
		<div class="thumb-content"><a href="{{ url('/policy') }}">Our Policy</a></div>	
		</li>
		<li>	
		</li>
		<li>
		<div class="thumb-content"><a href="https://www.techinafrica.com/">News</a></div>	
		</li>
		<li>
		<div class="thumb-content"><a href="#.">Partners</a></div>	
		</li>
		<li>
		<div class="thumb-content"><a href="{{ url('/about') }}">About</a></div>	
		</li>
		</ul>
		</div>
		</div>
		
		<div class="col-xs-12 col-sm-6 col-md-3">
		<div class="widget no-box">
		<h5 class="widget-title" style="color: #ea9c14;">Get Started<span></span></h5>
		<a class="btn" href="/findsignup" target="_blank" style="font-weight: bold; color: #ffffff;">Sign Up With Us Now!</a>
		</div>
		</div>
		
		<div class="col-xs-12 col-sm-6 col-md-3">
		
		<div class="widget no-box">
		<h5 class="widget-title" style="color: #ea9c14;">Contact Us<span></span></h5>
		
		<p><a style="color: wheat; text-decoration: none;" href="mailto:kevmugita@gmail.com" title="Tukoworks.">kevmugita@gmail.com</a></p>
		<ul class="social-footer2">
			<li><a href="#" class="fa fa-facebook"></a></li>
			<li><a href="#" class="fa fa-instagram"></a></li>
			<li><a href="#" class="fa fa-twitter"></a></li>
			<li><a href="#" class="fa fa-linkedin"></a></li>
		</ul>
		</div>
		<h7><strong style="color: #ea9c14;">COMING SOON</strong></h7>
		<div class="row" id="wor">
		<div class="col-sm-12" id="app">
			<div class="appstore">
			<a href="#">
				<img src="logos/appstore.png">
			</a>
		</div>
		</div>
		<br><br>
		<div class="col-sm-12" id="pla">
			<div class="playstore">

				<a href="#">
					<img src="logos/google.png">
				</a>
			</div>
		</div>
	</div>
		<a id="back2Top" title="Back to top" href="#" style="text-decoration: none;">&#10148;</a>
		</div>
		
		</div>
		</div>
		</div>
		</div>
		  
		<div class="footer-copyright">
		<div class="container">
		<div class="row">
		<div class="col-md-12 text-center">
		<p>Tuko Works © 2020. All rights reserved.</p>
		</div>
		</div>

		</div>
		</footer>
		<script src="https://cdn.jsdelivr.net/npm/cookieconsent@3/build/cookieconsent.min.js" data-cfasync="false"></script>
		<script>
		window.cookieconsent.initialise({
		  "palette": {
			"popup": {
				"background": "#624cd5",
			  "text": "white"
			},
			"button": {
			  "background": "crimson"
			}
		  },
		  "theme": "classic",
		  "position": "bottom-right"
		});
		</script>
	</body>
	<script type="text/javascript" src="assets/js/jquery-1.11.0.min.js"></script>
	<script type="text/javascript" src="assets/js/responsiveCarousel.min.js"></script>
	<script src="assets/js/backtotop.js"></script>
<script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
</html>
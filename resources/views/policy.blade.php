<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
	<link href="assets/css/home.css" rel="stylesheet" />
	<link href="assets/css/footer.css" rel="stylesheet" />
	<link href="asets/css/backtotop.css" rel="stylesheet" />
	<link href="assets/css/coomingsoon.css" rel="stylesheet" />
	<link rel="stylesheet" type="text/css" media="all" href="assets/css/slider.css">
	<link rel="icon" type="image" href="logos/crm8.png" />
    <link href="assets/css/policy.css" rel="stylesheet" type="text/css" />
    <title>Tuko Works Policy</title>
</head>
<body>
    
    <nav class=" navbar navbar-expand-lg  
    navbar py-lg-0 " style="position: scroll; background-color: #624cd5;"> 

    <a class="navbar-brand" id="logo" href="/"> 

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
                    <a href="{{ url('/findsignup') }}" class="signup" click="active current='signup'"><i class="fa fa-fw fa-user"></i>sign up</a>
                </li> 
                <li class="nav-item"> 
                    <a href="{{ url('/about') }}" id="about" class="about" click="active current='about'"><i class="fa fa-fw fa-info-circle"></i>About us</a> 
                </li> 
                <li class="nav-item"> 
                    <a href="{{ url('/') }}" class="home" click="active current='home'"><i class="fa fa-fw fa-home"></i>Home</a> 
                </li> 
            </ul> 
    </div> 
</nav> 
<div class="container">
    <br><br>
<h1 style="text-transform: uppercase; font-size: 1.5em; font-weight: bolder; text-decoration: underline;"><strong>Our Policies</strong></h1>
<p style="font-size: 1.4em; color: #ea9c14; text-decoration: underline; font-weight: bold; text-align: center;">Equal opportunities Policy(EEO)</p>
<p style="color: #000;">This equal employment opportunity policy is the pillar of a healthy and productive working environment.
     Everyone should feel supported and valued to work productively so we are invested in treating everyone with respect and consideration.
    <br>
    Our equal opportunity employer policy applies to all employees, job candidates, freelancers, contractors, stakeholders, partners and visitors.

    Equal opportunity is for everyone, 
    but it mainly concerns members of underrepresented groups – they’re the ones who are traditionally disadvantaged in the work selection.
     We don’t guarantee employment or promotions for people in those groups,
     but we will treat them fairly and avoid discriminating against them either via conscious or unconscious biases.
    <br>
    Being an equal opportunity company means that we provide the same opportunities for hiring,
     advancement and benefits to everyone without discriminating due to protected characteristics like:
<ul>
    <li>Age</li>
    <li>Sex / Gender</li>
    <li>Sexual orientation</li>
    <li>Ethnicity / Nationality</li>
    <li>Religion</li>
    <li>Disability</li>
    <li>Medical history</li>
</ul>
<style>
    li{
        list-style-type: circle;
        color: #624cd5;
    }
</style>
</p>
<br>
<p style="color: crimson; font-weight: bolder; font-size: 1.4em;"><marquee>Let's Grow together!!</marquee></p>
</div>
<br>
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
    <div class="thumb-content"><a href="#.">Our Policy</a></div>	
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
    <a class="btn" href="findsignup.html" target="_blank" style="font-weight: bold; color: #ffffff;">Sign Up With Us Now!</a>
    </div>
    </div>
    
    <div class="col-xs-12 col-sm-6 col-md-3">
    
    <div class="widget no-box">
    <h5 class="widget-title" style="color: #ea9c14;">Contact Us<span></span></h5>
    
    <p><a style="color: wheat; text-decoration: none;" href="mailto:kevmugita@gmail.com" title="crimsongroup.">kevmugita@gmail.com</a></p>
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
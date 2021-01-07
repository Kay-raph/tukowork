<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://apis.google.com/js/api:client.js"></script>
    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Main css -->
    <link rel="stylesheet" href="assets/css/signupin.css">
    <link rel="icon" type="image" href="logos/crm8.png" />
    <title> Find Sign in</title>
    <script src=
        "GET https://api.linkedin.com/v2/me"></script>
</head>
<body>
    <script>
        var googleUser = {};
        var startApp = function() {
          gapi.load('auth2', function(){
            // Retrieve the singleton for the GoogleAuth library and set up the client.
            auth2 = gapi.auth2.init({
              client_id: '872915356120-vd7uo9iaam3jsevjgnpnasf9ra9nmdbl.apps.googleusercontent.com',
              cookiepolicy: 'single_host_origin',
              // Request scopes in addition to 'profile' and 'email'
              //scope: 'additional_scope'
            });
            attachSignin(document.getElementById('customBtn'));
          });
        };
      
        function attachSignin(element) {
          console.log(element.id);
          auth2.attachClickHandler(element, {},
              function(googleUser) {
                document.getElementById('name').innerText = "Signed in: " +
                    googleUser.getBasicProfile().getName();
              }, function(error) {
                alert(JSON.stringify(error, undefined, 2));
              });
        }
        </script>
    <div class="nav">
        <a href="{{ url('/') }}"><i id="fafa" class="fa fa-fw fa-home"></i></a> 
    </div>
    <div class="main">
         <!-- Sing in  Form -->
         <section class="sign-in">
            <div class="container">
                <div class="signin-content">
                    <div class="signin-image">
                       <figure> <lottie-player src="https://assets10.lottiefiles.com/packages/lf20_qdiq7qa5.json"  background="#FFFFFF"  speed="1" loop  autoplay></lottie-player> </figure>  
             <a href="{{ url('/findsignup') }}" class="signup-image-link">Create an account</a>
             
                    </div>
                   
                   
                    <div class="signin-form">
                        <h2 class="form-title">Sign in to Find a Job</h2>
                        <form method="POST" class="register-form" id="login-form">
                            <div class="form-group">
                                <label for="your_email"><i class="zmdi zmdi-account material-icons-email"></i></label>
                                <input type="email" name="your_email" id="your_email" placeholder="Your Email" required/>
                            </div>
                            <div class="form-group">
                                <label for="your_pass"><i class="zmdi zmdi-lock"></i></label>
                                <input type="password" name="your_pass" id="your_pass" placeholder="Password" required/>
                            </div>
                            <div class="form-group">
                                <input type="checkbox" name="remember-me" id="remember-me" class="agree-term" />
                                <label for="remember-me" class="label-agree-term"><span><span></span></span>Remember me</label>
                            </div>
                            <div class="form-group form-button">
                                <input type="submit" name="signin" id="signin" class="form-submit" value="Log in"/>
                            </div>
                        </form>
                        <div class="social-login">
                            <span class="social-label">Or login with</span>
                            <ul class="socials">
                                <li><a href="#"><i class="display-flex-center zmdi zmdi-facebook"></i></a></li>
                                <li><a href="#"><i class="display-flex-center zmdi zmdi-linkedin"></i></a></li>
                                <li><a href=""><i id="customBtn"  class="display-flex-center zmdi zmdi-google"></i></a></li>
                                
                                  <div id="name"></div>
                                  <script>startApp();</script>
                            </ul>
                        </div>
                    </div>
                </div>
                
            </div>
        </section>

    </div>
      <!-- JS -->
      <script src="assets/vendor/jquery/jquery.min.js"></script>
      <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
      <script src="assets/js/main.js"></script>
</body>
</html>
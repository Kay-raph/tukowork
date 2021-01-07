<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" type="image" href="logos/crm8.png" />
    <title>Find Sign Up</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Main css -->
    <link rel="stylesheet" href="assets/css/signupin.css">
</head>
<body>
    <div class="nav">
        <a href="{{ url('/') }}"><i id="fafa" class="fa fa-fw fa-home"></i></a> 
    </div>

    <div class="main">

        <!-- Sign up form -->
        <section class="signup">
            <div class="container">
                <div class="signup-content">
                    <div class="signup-form">
                        <h2 class="form-title">Sign up to find a Job</h2>
                        <form method="POST" class="register-form" id="form">
                            
                            
                            <div class="form-group">
                                <label for="name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="name" id="name" placeholder="Your Name" required/>
                            </div>
                            <div class="form-group">
                                <label for="email"><i class="zmdi zmdi-email"></i></label>
                                <input type="email" name="email" id="email" placeholder="Your Email" required/>
                            </div>
                            <div class="form-group">
                                <label for="pass"><i class="zmdi zmdi-lock"></i></label>
                                <input type="password" name="pass" id="pass" placeholder="Password" required/>
                            </div>
                            <div class="form-group">
                                <label for="re-pass"><i class="zmdi zmdi-lock-outline"></i></label>
                                <input type="password" name="re_pass" id="re_pass" placeholder="Repeat your password" required/>
                            </div>
                            <div class="form-group">
                                <p><b>Select Gender</b></p>
                                <select style="border-radius: 5px; border-color: #624cd5; padding: 5px; color: #624cd5;" required>
                                    <option selected disabled>--Select gender--</option>
                                    <option>Male</option>
                                    <option>Female</option>
                                </select>
                            </div>
                            <div class="form-group">
                                    <p><b>Level of Experience</b></p>
                 <select style="border-radius: 5px; border-color: #624cd5; padding: 5px; color: #624cd5;" required>
                     <option selected disabled>--Select Experience level--</option>
                     <option>Entry Level</option>
                     <option>Junior Level</option>
                     <option>Senior Level</option>
                 </select>
                </div>
                 <div class="form-group">
                                <p><b>Professional Documents</b></p>
                                <br><br>
                                
                    <label class="file-upload">
                        <input type="file" required style="font-size: small; color: #ea914c; cursor: pointer; border: 2px solid #624cd5; border-radius: 10px; padding: 5px;"/>
                    </label>

                   <br>
                            </div>
                            <div class="form-group">
                                <input type="checkbox" name="agree-term" id="agree-term" class="agree-term" />
                                <label for="agree-term" class="label-agree-term"><span><span></span></span>I agree to  Terms of service/Policy</label>
                            </div>
                            <div class="form-group form-button">
                                <input type="submit" name="signup" id="submit" class="form-submit" value="Sign Up"/>
                                <center>
                                    <p id="response" style="color: red;"><b></b></p>
                        <span id="error_msg"></span>
                                </center>
                            </div>
                        
                        </form>
                    </div>
                    <div class="signup-image">
                        <figure><lottie-player src="https://assets8.lottiefiles.com/packages/lf20_7qwrqbxo.json"  background="transparent"  speed="1" loop  autoplay></lottie-player></figure>
                        <a href="{{ url('/findlogin') }}" class="signup-image-link">Already a member?</a>
                    </div>
                     
                </div>
                
            </div>
        </section>

    
    </div>

    <!-- JS -->
    <script src="assets/vendor/jquery/jquery.min.js"></script>
    <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
    <script src="assets/js/main.js"></script>
    <script src="assets/js/findsignup.js"></script>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Twitter Login Form</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta name="keywords" content="Form,flex, ,Twitter form ,sachindusahan,html,css" />
<link rel="stylesheet" href="./style.css"/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="icon" type="image/x-icon" href="/images/twitter.3.ico">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
 <!-- Alertify sakit sa ulo -->
<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/alertify.min.css"/>
<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/bootstrap.min.css"/>
<style>
    .DL{
        background-color: transparent;
        margin: 0% 0% 0 20%; 
        
    }
</style>
</head>
<body style="background: black;">

   <?php include ('modals.php')?>

    <!---Content-->
    <div class="container align-items-center justify-content-center" style="margin: 11% 0 0 10%;">
        <div class="row">
          <div class="col-sm">
            <img src="images/x_Logo.png" alt="" class="logo-img">
          </div>
          <div class="col-sm content">
            <div class="col-sm">
                <h1 class="font-weight-bold text-light happening-now-title">Happening now</h1>
            </div>
            <div class="w-100"></div>
            <br>
            <div class="col-sm">
                <h1 class="font-weight-bold text-light"> Join today.</h1>
            </div>
            <br>
            <div class="col-sm">
                <button class="btn btn-light btns " style=" border-radius: 30px ;"><i class="fa-brands fa-google"></i> Sign up with Google</button>
            </div>
            <div class="col-sm">
                <button class="btn btn-light btns " style=" border-radius: 30px ;"><i class="fa-brands fa-apple"></i> Sign up with Apple</button>
            </div>
            <div class="col-sm line" >
                <div class="row">
                    <div class="col">
                      <hr class="dash" style="width: 80%;  color: white;"> 
                    </div>
                    <div class="col">
                      <p class="text-light" style="display: inline-block; margin-left: -30%; margin-right: 0;">
                        or
                      </p> 
                    </div>
                    <div class="col">
                      <hr style="width: 85%; margin-left: -130%; color: white;">
                    </div>
                </div>
            </div>
            <div class="col-sm">
                <button class="btn btn-primary btns " style=" border-radius: 30px ;">Create account</button>
            </div> 
            <div class="col-sm text-link">
                <p style="font-size: 11px; color: rgb(113, 118, 123);">
                    By signing up, you agree to the 
                    <a href="#" style="text-overflow: unset; color: rgb(29, 155, 240); text-decoration: none;">
                        Terms of Service
                    </a> 
                    and 
                    <a href="#" style="text-overflow: unset; color: rgb(29, 155, 240); text-decoration: none;">
                        Privacy <br> Policy
                    </a>, 
                    including 
                    <a href="#" style="text-overflow: unset; color: rgb(29, 155, 240); text-decoration: none;">
                        Cookie Use
                    </a>.
                </p>
            </div>
            <br><br>
            <div class="col-sm">
                <h5 class="font-weight-bold text-light">Already have an account?</h5>
            </div>
            <div class="col-sm">  
                <a class="nav-link" data-bs-toggle="modal" data-bs-target="#logIn"> 
                    <button class="btn btn-outline-primary btns " style=" border-radius: 30px ;">
                    Sign in
                    </button>
                </a>
            </div>
          </div>
        </div>
       
      </div> 
      <footer class="d-flex flex-column align-items-center">
        <div class="footer-links text-center">
            <a href="#" class="mb-2">About</a>
            <a href="#" class="mb-2">Download the X app</a>
            <a href="#" class="mb-2">Help Center</a>
            <a href="#" class="mb-2">Terms of Service</a>
            <a href="#" class="mb-2">Privacy Policy</a>
            <a href="#" class="mb-2">Cookie Policy</a>
            <a href="#" class="mb-2">Accessibility</a>
            <a href="#" class="mb-2">Ads info</a>
            <a href="#" class="mb-2">Blog</a>
            <a href="#" class="mb-2">Status</a>
            <a href="#" class="mb-2">Careers</a>
            <a href="#" class="mb-2">Brand Resources</a>
            <a href="#" class="mb-2">Advertising</a>
            <a href="#" class="mb-2">Marketing</a>
            <a href="#" class="mb-2">X for Business</a>
            <a href="#" class="mb-2">Developers</a>
            <a href="#" class="mb-2">Directory</a>
            <a href="#" class="mb-2">© 2024 X Corp.</a>
        </div>
        <!-- <p class="copyright mt-3">© 2024 X Corp.</p> -->
    </footer>

    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
    <script src="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/alertify.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        alertify.set('notifier', 'position', 'top-right');
        alertify.success('Hello');

        function Login() {
                console.log('Login function called');
                var username = document.getElementById("username").value;
                var usernameInputSecondModal = document.getElementById("usernameSecondModal");

                if (username == "DL" ) {
                    usernameInputSecondModal.value = username;
                    usernameInputSecondModal.placeholder = username;
                    $('#passWord').modal('show');
                    $('#logIn').modal('hide');
                    
                } 
                else if (username == "" ) {
                    alertify.error('Fill up the Username field!') ;
                } 
                else {
                    alertify.error('Wrong Username');
                }
            }
            function Signin() {
                var password = document.getElementById("password").value;
                var username = document.getElementById("username").value;

                if (username == "DL" && password == "123") {
                    alertify.success('You are logged in as DL!');
                    window.open ('calculator.html');  
                } 
                else if (username == "" && password == "") {
                    alertify.error('Empty fields! Please fill all the fields.') ;
                } 
                else if (username == "") {
                    alertify.error('Empty username');
                } 
                else if (password == "") {
                    alertify.error('Empty password');
                } 
                else {
                    alertify.error('Wrong Username or Password');
                }
            }
    </script>
</body>
</html>
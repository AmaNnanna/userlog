<div id="main-wrapper" class="oxyy-login-register bg-dark">
  <div class="container">
    <div class="row no-gutters min-vh-100 py-5"> 
      <!-- Welcome Text
      ========================= -->
      <div class="col-lg-7 shadow-lg">
        <div class="hero-wrap d-flex align-items-center rounded-lg rounded-right-0 h-100">
          <div class="hero-mask opacity-9 bg-primary"></div>
          <div class="hero-bg hero-bg-scroll" style="background-image:url('<?= $assets ?>/images/login-bg.jpg');"></div>
          <div class="hero-content mx-auto w-100 h-100 d-flex flex-column">
            <div class="row no-gutters">
              <div class="col-10 col-lg-10 mx-auto">
                <div class="logo mt-5 mb-5 mb-lg-0"> <a href="index.html" title="Oxyy"><img src="<?= $assets ?>/images/logo-light.png" alt="Oxyy"></a> </div>
              </div>
            </div>
            <div class="row no-gutters my-auto">
              <div class="col-10 col-lg-10 mx-auto">
                <h1 class="text-11 text-white mb-3">You're new here!</h1>
                <p class="text-5 text-white line-height-4 mb-4">Sign up with your email and personal details to get started!</p>
                <a class="btn btn-dark rounded-pill shadow-none video-btn py-1 px-3 d-inline-flex align-items-center mb-5" href="#" data-src="https://www.youtube.com/embed/7e90gBu4pas" data-toggle="modal" data-target="#videoModal"><span class="mr-2 text-7"><i class="fas fa-play-circle"></i></span>Watch demo</a> </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Welcome Text End --> 
      
      <!-- Register Form
      ========================= -->
      <div class="col-lg-5 shadow-lg d-flex align-items-center rounded-lg rounded-left-0 bg-dark">
        <div class="container my-auto py-5">
          <div class="row">
            <div class="col-11 col-lg-10 mx-auto">
              <h3 class="text-white text-center mb-4">Sign Up</h3>
              <form id="registerForm" action="./registrationform" class="form-dark" method="POST">
                <div class="form-group">
                  <label class="text-light" for="fullName">Full Name</label>
                  <input type="text" name="fullName" class="form-control" id="fullName" required="" placeholder="Enter Your Name">
                </div>
                <div class="form-group">
                  <label class="text-light" for="emailAddress">Email Address</label>
                  <input type="email" name="emailAddress" class="form-control" id="emailAddress" required="" placeholder="Enter Your Email">
                </div>
                <div class="form-group">
                  <label class="text-light" for="phoneNumber">Phone Number</label>
                  <input type="number" name="phoneNumber" class="form-control" id="fullName" required="" placeholder="Enter Your Phone Number">
                </div>
                <div class="form-group">
                  <label class="text-light" for="loginPassword">Password</label>
                  <input type="password" name="loginPassword" class="form-control" id="loginPassword" required="" placeholder="Enter Password">
                </div>
                <div class="form-group">
                  <label class="text-light" for="gender">Gender</label><br />
                  <label class="text-light">Male</label><input name="gender" type="radio" value="Male" required="">
                  <label class="text-light" for="gender">Female</label><input name="gender" value="Female" type="radio" required="">
                </div>
                <div class="form-group">
                  <div class="form-check text-2 custom-control custom-checkbox">
                    <input id="agree" required aria-required="true" name="agree" class="custom-control-input" type="checkbox">
                    <label class="custom-control-label text-light" for="agree">I agree to the <a href="#">Terms</a> and <a href="#">Privacy Policy</a>.</label>
                  </div>
                </div>
                <button class="btn btn-primary btn-block my-4" type="submit">Sign Up</button>
              </form>
              <div class="d-flex align-items-center my-3">
                <hr class="flex-grow-1 border-dark">
                <span class="mx-2 text-2 text-muted">Or with Social Profile</span>
                <hr class="flex-grow-1 border-dark">
              </div>
              <div class="d-flex  flex-column align-items-center mb-4">
                <ul class="social-icons social-icons-circle">
                  <li class="social-icons-facebook"><a href="#" data-toggle="tooltip" data-original-title="Log In with Facebook"><i class="fab fa-facebook-f"></i></a></li>
                  <li class="social-icons-twitter"><a href="#" data-toggle="tooltip" data-original-title="Log In with Twitter"><i class="fab fa-twitter"></i></a></li>
                  <li class="social-icons-google"><a href="#" data-toggle="tooltip" data-original-title="Log In with Google"><i class="fab fa-google"></i></a></li>
                  <li class="social-icons-linkedin"><a href="#" data-toggle="tooltip" data-original-title="Log In with Linkedin"><i class="fab fa-linkedin-in"></i></a></li>
                </ul>
              </div>
              <p class="text-2 text-center text-light">Already have an account? <a class="btn-link" href="login">Sign In</a></p>
            </div>
          </div>
        </div>
      </div>
      <!-- Register Form End --> 
    </div>
  </div>
</div>

<!-- Video Modal
========================= -->
<div class="modal fade" id="videoModal" tabindex="-1" role="dialog">
  <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
    <div class="modal-content bg-transparent border-0">
      <button type="button" class="close text-white opacity-10 ml-auto mr-n3 font-weight-400" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      <div class="modal-body p-0">
        <div class="embed-responsive embed-responsive-16by9">
          <iframe class="embed-responsive-item" id="video" allow="autoplay"></iframe>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Video Modal end --> 

<!-- Styles Switcher -->
<div id="styles-switcher" class="left">
  <h5>Color Switcher</h5>
  <hr>
  <ul class="mb-0">
    <li class="blue" data-toggle="tooltip" title="Blue" data-path="#"></li>
    <li class="indigo" data-toggle="tooltip" title="Indigo" data-path="<?= $assets ?>/css/color-indigo.css"></li>
    <li class="purple" data-toggle="tooltip" title="Purple" data-path="<?= $assets ?>/css/color-purple.css"></li>
    <li class="pink" data-toggle="tooltip" title="Pink" data-path="<?= $assets ?>/css/color-pink.css"></li>
    <li class="red" data-toggle="tooltip" title="Red" data-path="<?= $assets ?>/css/color-red.css"></li>
    <li class="orange" data-toggle="tooltip" title="Orange" data-path="<?= $assets ?>/css/color-orange.css"></li>
    <li class="yellow" data-toggle="tooltip" title="Yellow" data-path="<?= $assets ?>/css/color-yellow.css"></li>
    <li class="teal" data-toggle="tooltip" title="Teal" data-path="<?= $assets ?>/css/color-teal.css"></li>
    <li class="green" data-toggle="tooltip" title="Green" data-path="<?= $assets ?>/css/color-green.css"></li>
    <li class="cyan" data-toggle="tooltip" title="Cyan" data-path="<?= $assets ?>/css/color-cyan.css"></li>
    <li class="brown" data-toggle="tooltip" title="Brown" data-path="<?= $assets ?>/css/color-brown.css"></li>
  </ul>
  <button class="btn switcher-toggle"><i class="fas fa-cog"></i></button>
</div>

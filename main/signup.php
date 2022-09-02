<!DOCTYPE html>
<html lang="en">
  
<!-- Mirrored from htmlstream.com/front-dashboard/authentication-signup-basic.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 01 Aug 2022 08:12:52 GMT -->
<head>
    <!-- Required Meta Tags Always Come First -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Title -->
    <title>Sign Up | Moneyvarsity -  Dashboard </title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="favicon.ico">

    <!-- Font -->
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&amp;display=swap" rel="stylesheet">

    <!-- CSS Implementing Plugins -->
    <link rel="stylesheet" href="assets/css/vendor.min.css">
    <link rel="stylesheet" href="assets/vendor/icon-set/style.css">

    <!-- CSS Front Template -->
    <link rel="stylesheet" href="assets/css/theme.minc619.css?v=1.0">
  </head>

  <body>
    <!-- ========== MAIN CONTENT ========== -->
    <main id="content" role="main" class="main">
      <div class="position-fixed top-0 right-0 left-0 bg-img-hero" style="height: 32rem; background-image: url(assets/svg/components/abstract-bg-4.svg);">
        <!-- SVG Bottom Shape -->
        <figure class="position-absolute right-0 bottom-0 left-0">
          <svg preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 1921 273">
            <polygon fill="#fff" points="0,273 1921,273 1921,0 "/>
          </svg>
        </figure>
        <!-- End SVG Bottom Shape -->
        <!-- End SVG Shapes -->
      </div>

      <!-- Content -->
      <div class="container py-5 py-sm-7">
        

        <div class="row justify-content-center">
          <div class="col-md-7 col-lg-5">
            <!-- Card -->
            <div class="card card-lg mb-5">
              <div class="card-body">
                <!-- Form -->
                <form class="js-validate" action="engine.php" method="post">

                  <div class="text-center">
                    <div class="mb-5">
                      <h1 class="display-4">Create your account</h1>
                      <p>Already have an account? <a href="signin.php">Sign in here</a></p>
                    </div>

              
                  </div>
                  <label class="input-label" for="fullNameSrEmail">Full name</label>

                  <!-- Form Group -->
                  <div class="form-row">
                    <div class="col-sm-6">
                      <div class="js-form-message form-group">
                        <input type="text" class="form-control form-control-lg" name="fname" id="fullNameSrEmail" placeholder="Mark" aria-label="Mark" required data-msg="Please enter your first name.">
                      </div>
                    </div>
          <input type="text"  name="upline" value="<?php echo $_GET['id']; ?>"  style="display:none;" />
                    
                    <div class="col-sm-6">
                      <div class="js-form-message form-group">
                        <input type="text" class="form-control form-control-lg" name="lname" placeholder="Williams" aria-label="Williams" required data-msg="Please enter your last name.">
                      </div>
                    </div>
                  </div>
                  <!-- End Form Group -->

                  <!-- Form Group -->
                  <div class="js-form-message form-group">
                    <label class="input-label" for="signupSrEmail">Your email</label>

                    <input type="email" class="form-control form-control-lg" name="email" id="signupSrEmail" placeholder="Markwilliams@example.com" aria-label="Markwilliams@example.com" required data-msg="Please enter a valid email address.">
                  </div>
                  <!-- End Form Group -->

                  <!-- Form Group -->
                  <div class="js-form-message form-group">
                    <label class="input-label" for="signupSrPassword">Password</label>

                    <div class="input-group input-group-merge">
                      <input type="password" class="js-toggle-password form-control form-control-lg" name="pass" id="signupSrPassword" placeholder="8+ characters required" aria-label="8+ characters required" required
                             data-msg="Your password is invalid. Please try again."
                             data-hs-toggle-password-options='{
                               "target": [".js-toggle-password-target-1", ".js-toggle-password-target-2"],
                               "defaultClass": "tio-hidden-outlined",
                               "showClass": "tio-visible-outlined",
                               "classChangeTarget": ".js-toggle-passowrd-show-icon-1"
                             }'>
                      <div class="js-toggle-password-target-1 input-group-append">
                        <a class="input-group-text" href="javascript:;">
                          <i class="js-toggle-passowrd-show-icon-1 tio-visible-outlined"></i>
                        </a>
                      </div>
                    </div>
                  </div>
                  <!-- End Form Group -->

                  <!-- Form Group -->
                  <div class="js-form-message form-group">
                    <label class="input-label" for="signupSrConfirmPassword">Confirm password</label>

                    <div class="input-group input-group-merge">
                      <input type="password" class="js-toggle-password form-control form-control-lg" name="confirmpassword" id="signupSrConfirmPassword" placeholder="8+ characters required" aria-label="8+ characters required" required
                             data-msg="Password does not match the confirm password."
                             data-hs-toggle-password-options='{
                               "target": [".js-toggle-password-target-1", ".js-toggle-password-target-2"],
                               "defaultClass": "tio-hidden-outlined",
                               "showClass": "tio-visible-outlined",
                               "classChangeTarget": ".js-toggle-passowrd-show-icon-2"
                             }'>
                      <div class="js-toggle-password-target-2 input-group-append">
                        <a class="input-group-text" href="javascript:;">
                          <i class="js-toggle-passowrd-show-icon-2 tio-visible-outlined"></i>
                        </a>
                      </div>
                    </div>
                  </div>
                  <!-- End Form Group -->

                  <!-- Checkbox -->
                  <div class="js-form-message form-group">
                    <div class="custom-control custom-checkbox">
                      <input type="checkbox" class="custom-control-input" id="termsCheckbox" name="termsCheckbox" required data-msg="Please accept our Terms and Conditions.">
                      <label class="custom-control-label text-muted" for="termsCheckbox"> I accept the <a href="#">Terms and Conditions</a></label>
                    </div>
                  </div>
                  <!-- End Checkbox -->

                  <button type="submit" name="signup" class="btn btn-lg btn-block btn-primary mb-2">Create an account</button>

                  <button type="submit" class="btn btn-block btn-link">
                    or Start your 30-day trial <i class="tio-chevron-right"></i>
                  </button>
                </form>
                <!-- End Form -->
              </div>
            </div>
            <!-- End Card -->

            <!-- Footer -->
            <!-- <div class="text-center">
              <small class="text-cap mb-4">Trusted by the world's best teams</small>

              <div class="w-85 mx-auto">
                <div class="row justify-content-between">
                  <div class="col">
                    <img class="img-fluid" src="assets/svg/brands/gitlab-gray.svg" alt="Image Description">
                  </div>
                  <div class="col">
                    <img class="img-fluid" src="assets/svg/brands/fitbit-gray.svg" alt="Image Description">
                  </div>
                  <div class="col">
                    <img class="img-fluid" src="assets/svg/brands/flow-xo-gray.svg" alt="Image Description">
                  </div>
                  <div class="col">
                    <img class="img-fluid" src="assets/svg/brands/layar-gray.svg" alt="Image Description">
                  </div>
                </div>
              </div>
            </div> -->
            <!-- End Footer -->
          </div>
        </div>
      </div>
      <!-- End Content -->
    </main>
    <!-- ========== END MAIN CONTENT ========== -->


    <!-- JS Implementing Plugins -->
    <script src="assets/js/vendor.min.js"></script>

    <!-- JS Front -->
    <script src="assets/js/theme.min.js"></script>

    <!-- JS Plugins Init. -->
    <script>
      $(document).on('ready', function () {
        // INITIALIZATION OF SHOW PASSWORD
        // =======================================================
        $('.js-toggle-password').each(function () {
          new HSTogglePassword(this).init()
        });


        // INITIALIZATION OF FORM VALIDATION
        // =======================================================
        $('.js-validate').each(function() {
          $.HSCore.components.HSValidation.init($(this), {
            rules: {
              confirmPassword: {
                equalTo: '#signupSrPassword'
              }
            }
          });
        });
      });
    </script>

    <!-- IE Support -->
    <script>
      if (/MSIE \d|Trident.*rv:/.test(navigator.userAgent)) document.write('<script src="assets/vendor/babel-polyfill/polyfill.min.js"><\/script>');
    </script>
  </body>

<!-- Mirrored from htmlstream.com/front-dashboard/authentication-signup-basic.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 01 Aug 2022 08:12:52 GMT -->
</html>
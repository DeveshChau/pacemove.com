<!DOCTYPE html>
<html lang="en" class="no-js">
  <head>
    <meta charset="utf-8">
    <title>PaceMove
    </title>
    <meta name="description" content="Packers and Movers">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="../code/css/style.css">
    <!-- html code start-->
    <link href="../html/css/font-awesome.min.css" type="text/css" rel="stylesheet" />
    <link href="../html/css/animate.min.css" rel="stylesheet" media="screen and (min-width: 767px)">  
    <link href="../html/css/style.css" type="text/css" rel="stylesheet" />
    <link href="../html/css/media_screen.css" type="text/css" rel="stylesheet" />
    <!-- html code end-->
  </head>
  <body class="" onload="myFunction()" style="margin:0;">
    <div id="loader">
    </div> 
    <header>
      <!-- html code start -->
      <div class="nav-toggle">
        <div class="nav-toggle-bar">
        </div>
      </div>
      <div class="left">
        <a href="../code/index.php">
          <img src="../html/images/logo.png" alt=""/>
        </a>
        <div class="index_mob_mobile">
          <a href="tel:8888308218"> 888 830 82 18
          </a> 
        </div>
      </div>
      <div class="mid">
        <div class="mid_left index_mob_desktop">
          <img src="../html/images/call-ico.png" alt=""/>
          <a href="tel:8888308218">  888 830 82 18
          </a> 
        </div>
        <a href="#" data-toggle="modal" data-target="#exampleModal" class="mid_right" >Request A Callback
        </a>
        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modal title
                </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;
                  </span>
                </button>
              </div>
              <div class="modal-body">
                <form data-toggle="validator" role="form"> 
                  <div class="form-group">
                    <label for="">Enter Mobile Number
                    </label>
                    <input type="tel" class="form-control"  pattern="^[789]\d{9}$" id="callback-mobile" placeholder="Enter mobile number" required>
                    <div class="help-block with-errors">
                    </div>
                  </div>
                  <br>
                  <div class="form-group" style="text-align: center;">
                    <button type="button" class="btn btn-primary  btn-lg " id="callback-submit">Submit
                    </button>
                  </div>  
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
      <nav class="nav">
        <ul class="navul">
          <li>
            <a href="../code/index.php">Home
            </a>
          </li>
          <li  class="active">
            <a href="../html/about_us.php">About us 
            </a>
          </li>
          <li>
            <a href="../html/service.php">Services
            </a>
          </li>
          <li>
            <a href="../html/blog.php">Blog
            </a>
          </li>
          <li>
            <a href="../html/referral.php">Referral
            </a>
          </li>
          <li>
            <a href="#" data-toggle="modal" data-target="#track">Login
            </a>
          </li>
        </ul> 
        <!-- html code end -->
        <?php if (isset($_SESSION['usermobile'])) { ?>
        <div class="dropdown">
          <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <?php echo $_SESSION['usermobile']?>
          </a>
          <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
            <a class="dropdown-item" href="logout.php">Logout
            </a>
          </div>
        </div>
        <?php } else{ ?>
        <div class="modal fade" id="track" tabindex="-1" role="dialog" aria-labelledby="otpModalLabel" aria-hidden="true" >
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-body">
                <ul role="tablist">
                  <li class="nav-item active" hidden>
                    <a class="nav-link" href="#track-mobile-modal">Pickup
                    </a>
                  </li>
                  <li class="nav-item" hidden>
                    <a class="nav-link" href="#track-otp-modal">Drop
                    </a>
                  </li>                   
                </ul>
                <div class="tab-content" id="bookingTabContent">
                  <div class="tab-pane fade show active" id="track-mobile-modal" role="tabpanel" aria-labelledby="track-mobile-modal-tab">                
                    <form data-toggle="validator" role="form">  
                      <div class="form-group">
                        <label for="header-track-user-mobile">Enter Mobile Number
                        </label>
                        <input type="tel" class="form-control"  pattern="^[789]\d{9}$" id="header-track-user-mobile" placeholder="Enter mobile number" required>
                        <div class="help-block with-errors">
                        </div>
                      </div>
                      <br>
                      <div class="form-group" style="text-align: center;">
                        <button type="button" class="btn btn-primary  btn-lg " id="header-track-next">Next
                        </button>
                      </div>  
                    </form>
                  </div>        
                  <div class="tab-pane fade" id="track-otp-modal" role="tabpanel" aria-labelledby="track-otp-modal-tab">                
                    <form data-toggle="validator" role="form">                      
                      <div class="form-group">
                        <label for="header-track-otp">Enter OTP
                        </label>
                        <input type="tel" class="form-control" id="header-track-otp" placeholder="Enter 4 Digit OTP"  pattern="^\d{4}$" required>
                        <div class="help-block with-errors">
                        </div>
                      </div>
                      <br>
                      <div class="form-group">
                        <button type="button" class="btn btn-primary" id="header-track-otp-submit" style="text-align: center;">Submit
                        </button>
                        <a class="float-right" id="retry-otp" href="#">Resend OTP
                        </a>
                      </div>  
                    </form>
                  </div>        
                </div>
              </div>
            </div>
          </div>
        </div>
        <?php } ?>      
      </nav>
    </header>
    <!-- html code start -->
    <section class="subpage_panel_pune">
      <div class="contanear">
        <div class="footer_cont_pune">
          <div class="footer_cont_box_pune">
            <h2>Sitemap
            </h2>
            <ul>
              <li>
                <a href="../code/index.php">Home
                </a>
              </li>
              <li>
                <a href="about_us.php">About Us
                </a>
              </li>
              <li>
                <a href="service.php">Services
                </a>
              </li>
              <li>
                <a href="pune.php">Relocation service Pune
                </a>
              </li>
              <li>
                <a href="pune.php">Packers and Movers in Pune
                </a>
              </li>
              <li>
                <a href="pune.php">Packers and Movers in Pimpri Chinchwad
                </a>
              </li>
              <li>
                <a href="privacy-policy.php">Privacy Policy
                </a>
              </li>
              <li>
                <a href="payment-policy.php">Payment Policy
                </a>
              </li> 
              <li>
                <a href="home-policy.php">Home Shifting Policy
                </a>
              </li>
              <li>
                <a href="vehicle-shifting-policy.php.php">Vehicle Shifting Policy
                </a>
              </li> 
              <li>
                <a href="incurance-policy.php">Vehicle Shifting Policy
                </a>
              </li> 
            </ul>
          </div>
        </div>
        </section>	
      <?php
        include 'footer.php';
      ?>
      </body>
    </html>

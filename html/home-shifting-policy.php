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
          <li>
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
    <section class="privacy_page_banner">
    </section> 
    <section class="subpage_panel" >
      <section class="service_page_pune">
        <div class="contanear">
          <title>Privacy Policy
          </title>
          <!-- header start form here -->
          <div class="row "style = "margin-top: 81px;">
            <div class="col-sm-12">
              <h2>Home Shifting Policy
              </h2>
              <ul style="padding-top:10px; ">
                <li>
                  Please note that, in case of a change in shipment details like items, floor or location, the quote might change accordingly.You are requested to share the detailed and correct information with us at the time of booking.
                </li>
                <li>
                  You are advised not to entertain any kind of tip requests of PACEMOVE Partner personals. 
                </li>
                <li>
                  You have to make payment according to the payment terms of the accepted quotation. Delay in the payment from your side can cause a delay in the shipment. PACEMOVE or its Partner won’t be responsible for it.
                </li>
                <li>
                  Household goods like Split AC, Kitchen Chimney, Any kind of fan,  Wall-mounted TV, Geyser, Wall-mounted Water Purifier/R.O., Hydraulic Bed will 
                  <span style="font-weight:400">not be dismantled and assembled 
                  </span>by PACEMOVE Partner. You are advised to keep all these items dismantled before the shifting date.
                </li>
                <li>
                  Any kind of skilled job such as Carpentry, Electrician and Plumber etc. will not be done by PACEMOVE Partner.
                </li>
                <li>
                  Cartons and packing materials are properties of the PACEMOVE Partner.Customer has to 
                  <span style="font-weight:400">return the cartons and packing material
                  </span> to the PACEMOVE Partner immediately after delivery.In case, customer wants to keep the cartons and packing material, extra charges need to be paid to the PACEMOVE Partner.
                </li>
                <li>
                  In case of non-availability of customer at drop location at the time of delivery, customer is liable to pay holding charges.
                </li>
                <li>
                  Regions specific "mathadi" or union issues/charges need to be sorted out by the customer. PACEMOVE Partner is not bound for unloading of the goods in such regions. (Regions known for these issues : Entire Kerala state, Pune)
                </li>
                <li> You should examine shipment&#39;s condition at the time of delivery 
                  <span style="font-weight:400">before signing on delivery
                    confirmation receipt.
                  </span> If any complaint has to be registered, it should be done 
                  <span style="font-weight:400">at the time of
                    delivery 
                  </span>only. A complaint should be registered by sending a mail to support@PACEMOVE.in with
                  the attached images of the goods.
                </li>
                <li>Part Truck Load (Sharing) shipments might take 3 to 5 days or more to load and dispatch from the pickup city based on the availability of the transport services.
                </li>
                <li>
                  If the loading vehicle is not able to enter inside society premises due to geographical restrictions and is packed away, our partners can charge extra amount for it. You are requested to inform about it in advance.
                </li>
                <li>
                  All the society permissions relating to the societies (if any) of the pickup and drop address have to be taken care by the customer in advance. Restrictions, if any, relating to the society, i.e. use of an elevator, society entrance timings etc, have to be notified by the customer in advance to us.
                </li>
                <li>
                  If you want to make some changes in shipment information or want to reschedule pickup date, you need to inform PACEMOVE first instead of directly informing to our partner. In such cases, we won't be able to help you on any kind of issues without this critical information.
                </li>
              </ul> 
            </div>
          </div>  
          </section>
        <section class="bottom_panel">
          <div class="contanear">
            <div class="bottom_panel_left">
              <h2>Attach with us
              </h2>
              <a href="#">
                <i class="fa fa-facebook" aria-hidden="true">
                </i>
              </a>
              <a href="#">
                <i class="fa fa-twitter" aria-hidden="true">
                </i>
              </a>
              <a href="#">
                <i class="fa fa-google-plus" aria-hidden="true">
                </i>
              </a>
              <a href="#">
                <i class="fa fa-pinterest" aria-hidden="true">
                </i>
              </a>
              <a href="#">
                <i class="fa fa-instagram" aria-hidden="true">
                </i>
              </a>
            </div>
            <div class="bottom_panel_right">
              <h2>pacemove
              </h2>
              <p>
                <i class="fa fa-map-marker" aria-hidden="true">
                </i>
                Pacemove Relocations, 116/A, Sector No.23, Pradhikaran, Nigdi, Pune- 411044
              </p>
              <p>
                <i class="fa fa-phone" aria-hidden="true">
                </i>
                + 91 888 830 82 18
              </p>
              <p>
                <i class="fa fa-envelope" aria-hidden="true">
                </i>
                <a href="mailto:info@pacemove.com">info@pacemove.com
                </a>
              </p>
            </div>
          </div>
        </section>
        <footer>
          <div class="contanear">
            <div class="footer_cont">
              <div class="footer_cont_box">
                <ul>
                  <li>
                    <a href="about_us.php">About us
                    </a>
                  </li>
                  <li>
                    <a href="sitemap.php">Sitemap
                    </a>
                  </li>
                  <li>
                    <a href="privacy-policy.php">Privacy Policy
                    </a>
                  </li>
                </ul>
              </div>
              <div class="footer_cont_box">
                <ul>
                  <li>
                    <a href="pune.php">Packers and Movers Pune
                    </a>
                  </li>
                  <li>
                    <a href="pune.php">Packers and Movers Pimpri Chinchwad
                    </a>
                  </li>
                  <li>
                    <a href="pune.php">Relocation service Pune
                    </a>
                  </li>
                </ul>
              </div>
              <div class="footer_cont_box">
                <ul>
                  <li>
                    <a href="insurance-policy.php">Insurance Policy
                    </a>
                  </li>
                  <li>
                    <a href="home-shifting-policy.php">Home Shifting Policy
                    </a>
                  </li>
                  <li>
                    <a href="vehicle-shifting-policy.php">Vehicle Shifting Policy
                    </a>
                  </li> 
                </ul>
              </div>
              <div class="footer_cont_box">
                <img src="images/logo-foot.png" alt=""/>
              </div>
            </div>
            <div class="bottom_footer">©2018. Pacemove. All Rights Reserved
            </div>
          </div>
        </footer>
        <?php include '../code/footer.php' ?>
        <script src="js/scrolla.jquery.min.js">
        </script>
        <script type="text/javascript">
          $('.animate').scrolla({
            mobile: true,
            once: true
          }
                               );
        </script>
        <script src="../code/callback.js">
        </script>
        <script src="js/nav.js">
        </script>
        <script>
          var myVar;
          function myFunction() {
            myVar = setTimeout(showPage, 3000);
          }
          function showPage() {
            document.getElementById("loader").style.display = "none";
            document.getElementById("myDiv").style.display = "block";
          }
        </script>   
        </body>
      </html>

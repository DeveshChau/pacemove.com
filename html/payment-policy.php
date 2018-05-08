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
              <h2>Payment Policy
              </h2>
              <p class="sub-text">In order to confirm a booking customer has to accept a quotation by making online payment to PACEMOVE. Multiple payments options (Online and Cash) will be provided by PACEMOVE to the customer for receiving payments. Customer has to follow the payment terms of the selected quotation. Convenience fees or charges might be applicable on some payment options.
              </p>
              <p class="sub-text">PACEMOVE can ask customers to send transaction receipts or proofs for the payments made to PACEMOVE or their partners.
              </p>
              <p class="sub-text">Payments will be considered as “received”, only after the transactions are reflected on payment gateway portals or on account statements.
              </p>
              <p class="sub-text">Payment terms of a quotation are valid only if there is no change in the booking information provided by customer.
              </p>
              <p class="sub-text">Quotation amount might change if there is any change in the booking information.
              </p>
              <p class="sub-text">PACEMOVE uses multiple payment gateways to receive payments from customers. Additional transaction charges (up-to 2.5%) might be applicable on some payment gateways.
              </p>
              <p class="sub-text">Payment option can’t be changed after accepting a quotation. Customer is liable to make the entire payment according to the payment option selected initially.
              </p>
              <p class="sub-text">If customer wants to change the payment option later, PACEMOVE will charge additional convenience fees.
              </p>
              <p class="sub-text">You need to confirm the booking at-least 3 working days before the pickup date date, so that we and our partner can plan your shipment, make necessary arrangements and provide you a hassle-free shifting experience.
              </p>
              <p class="sub-text">Any delay in the payments from customer can cause delay in the shipment delivery. PACEMOVE or their partners will not be responsible for this. We will also not be able to help you to get any kind of compensation from partner for any loss/damage to your shipment.
              </p>
            </div>
          </div>
          <div class="row m-t-20">
            <div class="col-sm-12">
              <h3>Cancellation/Refund Policy
              </h3>
              <p class="sub-text">The Shipments booked through our app/website/call centre can be cancelled on user's request and the refund shall be given as per the cancellation terms & policy:
              </p>
              <ul class="items-list">
                <li>24 hours before the pickup date, the cancellation charge is 100% of the confirmation fee. No refund will be provided against the cancellation
                </li>
                <li>48 hours before the pickup date, the cancellation charge is 50% of the total booking confirmation fee of the shipment
                </li>
                <li>Between 48 hours and 1 week before the pickup date the cancellation charge is 30% of the booking confirmation fee
                </li>
                <li>1 week before the pickup date there is no cancellation charge
                </li>
                <li>If the booking is canceled on or after pick update, no refund will be provided against the cancellation.
                </li>
              </ul>
              <p class="sub-text">Customer has to inform the cancellation plan within 7 days of booking confirmation date.
                <br>No refund will be given to the customer, if he requested for cancellation after 7 days of booking confirmation date.
                <br>No refund will be given if cancellation is due to change in payment terms caused by change in booking details provided by customer.
                <br>
                <br>Payment for Insurance Premium is non-refundable. You are eligible to avail Insurance within next 365 days from payment date.
              </p>
              <p class="sub-text">No refund will be given if cancellation is due to disagreement on any policy after confirmation of the booking.
              </p>
              <p class="sub-text">In case of cancellation, the refund shall be generated and refunded within 15 working days of the date of cancellation.
                <br>
                <br>
              </p>
            </div>
          </div>
          <div class="row m-t-20">
            <div class="col-sm-12">
              <h3>Rescheduling Policy
              </h3>
              <p class="sub-text">The Shipments booked through our app/website/call centre can be rescheduled on user's request for an additional fee as per the rescheduling terms & policy:
              </p>
              <ul class="items-list">
                <li>If a user requests rescheduling for the shipment 4 Working days prior the pickup date, there is no rescheduling charge
                </li>
                <li>Between 2-4 working days prior the pickup date, the extra rescheduling fee is 30% of the total booking confirmation fee
                </li>
                <li>Before 2 working days prior the pickup date, extra rescheduling fee is 50% of the total booking confirmation fee 
                </li>
              </ul>
              <p class="sub-text">In case of rescheduling, the rescheduling fee should be paid before the new pickup date.
                <br>Customer can reschedule the pickup date only once.
              </p>
            </div>
          </div>
          <div class="row m-t-20">
            <div class="col-sm-12">
              <h3>Vendor Reassigning Policy
              </h3>
              <p class="sub-text">If assigned vendor in not available to serve the customer, another vendor will be assigned to cater the job.In this case, customer can request for cancellation of the booking (refund will be generated) or he can select newly  assigned vendor by accepting the payment terms of new vendor’s quotation.
              </p>
            </div>
          </div>
        </div>
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
  <script src="js/nav.js">
  </script>
  <script src="../code/callback.js">
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
  <!--Start of Tawk.to Script-->
  <script type="text/javascript">
    var Tawk_API=Tawk_API||{
    }
    , Tawk_LoadStart=new Date();
    (function(){
      var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
      s1.async=true;
      s1.src='https://embed.tawk.to/5ad86007227d3d7edc241ab1/default';
      s1.charset='UTF-8';
      s1.setAttribute('crossorigin','*');
      s0.parentNode.insertBefore(s1,s0);
    }
    )();
  </script>
  <!--End of Tawk.to Script-->
  </body>
</html>

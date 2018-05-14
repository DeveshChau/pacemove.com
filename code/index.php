<?php
      session_start();
if(isset($_POST['submit']))
{
  $name=$_REQUEST['name'];
  $email=$_REQUEST['email'];
  $contact=$_REQUEST['phone'];
  $msg=$_REQUEST['org'];
  $designation=$_REQUEST['designation'];
  $body="Name: ".$name."\r\n ".
"Email: ".$email."\r\n ".
"Contact: ".$contact."\r\n ".
"Organisation :".$msg."\r\n ".
"Designation :".$designation;
  $header= $name."<".$name.">";
  if(mail("aman@pacemove.com","Contact Mail Information",$body,$header))
  {
    $_SESSION['ERR']= "Thanks for contacting with us. We will get back to you soon.";
    header("location:index.php");
    exit;
  }
  else{
    $_SESSION['ERR']="Mail not send";
    header("location:index.php");
    exit;
  }
}
?>
<!DOCTYPE html>
<html lang="en" class="no-js">
  <head>
    <meta charset="utf-8">
    <title>PaceMove
    </title>
    <meta name="description" content="Packers and Movers">
    <meta name="viewport" content="initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta name="author" content="">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/style.css">
    <!-- html code start-->
    <link href="../html/css/font-awesome.min.css" type="text/css" rel="stylesheet" />
    <link href="../html/css/animate.min.css" rel="stylesheet" media="screen and (min-width: 300px)">  
    <link href="../html/css/style.css" type="text/css" rel="stylesheet" />
    <link href="../html/css/media_screen.css" type="text/css" rel="stylesheet" />
    <!-- html code end-->
  </head>
  <body class="indexbody" onload="myFunction()" style="margin:0;">
    <header>
      <!-- html code start -->
      <div class="nav-toggle">
        <div class="nav-toggle-bar">
        </div>
      </div>
      <div class="left">
        <a href="index.php">
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
          <li class="active">
            <a href="index.php">Home
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
            <?php echo $_SESSION['username']?>
          </a>
          <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
            <a class="dropdown-item" href="logout.php">Logout
            </a>
          </div>
        </div>
        <?php } else{ ?>
        <div class="modal fade" id="track" tabindex="-1" role="dialog" aria-labelledby="otpModalLabel" aria-hidden="true" data-backdrop="static">
          <div class="modal-dialog" role="document" >
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
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close
                        </button>
                      </div>  
                    </form>
                  </div>        
                  <div class="tab-pane fade" id="track-otp-modal" role="tabpanel" aria-labelledby="track-otp-modal-tab" >                 
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
    <section class="banner_panel">
      <div class="contanear">
        <a href="http://pacemove.com/code/details.php">Start Your Move
        </a>
        <div class="banner_panel_imgpanel animate" data-animate="slideInRight" data-duration="1s" data-delay="0s">
          <img src="../html/images/car.png" width="299"  alt="" />
        </div>
      </div>
    </section>
    <section class="step_panel">
      <div class="contanear">
        <h2>3 simple steps to move your home!
        </h2>
        <article>
          <div class="step_panel_box">
            <div class="step_panel_box_left">1.
            </div>
            <div class="step_panel_box_right">Enter Origin & Destination
            </div>
          </div>
          <img src="../html/images/step-arrow.png"  alt="" class="step_panel_arrow"/>
        </article>
        <article>
          <div class="step_panel_box">
            <div class="step_panel_box_left">2.
            </div>
            <div class="step_panel_box_right">Select Articles to be moved
            </div>
          </div>
          <img src="../html/images/step-arrow.png"  alt="" class="step_panel_arrow"/>
        </article>
        <article>
          <div class="step_panel_box">
            <div class="step_panel_box_left">3.
            </div>
            <div class="step_panel_box_right">Make Payment
            </div>
          </div>
        </article>
      </div>
    </section>
    <section class="why_choose_us_panel">
      <div class="why_choose_us_panel_left">
        <h2>Why Choose from us?
        </h2>
        <p class="animate" data-animate="bounceIn" data-duration="1s" data-delay="0s">
          <img src="../html/images/ftr-ico1.png" alt=""/> 
          <span>DIRECT SERVICE.
          </span> We believe in providing direct service to the customer without involving the vendors to give the best service.
        </p>
        <p class="animate" data-animate="bounceIn" data-duration="1s" data-delay="0.2s">
          <img src="../html/images/ftr-ico4.png" alt=""/> 
          <span>DEDICATED MOVE CO-ORDINATOR.
          </span> We assign a dedicated move co-ordinator who will always be in contact with you while the relocation process. 
        </p>
        <p class="animate" data-animate="bounceIn" data-duration="1s" data-delay="1s">
          <img src="../html/images/ftr-ico3.png" alt=""/> 
          <span>TRANSPARENT PRICING.
          </span>We charge only for what we deliver there are no hidden charges.
        </p>
        <p class="animate" data-animate="bounceIn" data-duration="1s" data-delay="0.8s">
          <img src="../html/images/ftr-ico2.png" alt=""/> 
          <span>REAL-TIME MONITORING.
          </span> We will keep you updated with your move and give timely update while you can sit and relax at your place.
        </p>
        <p class="animate" data-animate="bounceIn" data-duration="1s" data-delay="0.4s">
          <img src="../html/images/ftr-ico1.png" alt=""/> 
          <span>SUPERIOR CUSTOMER SUPPORT.
          </span> We provide 24*7 customer support for any or every need of the customer. Customer satisfaction is what we believe in.
        </p>
      </div>
    </section>
    <section class="about_panel">
      <div class="contanear">
        <h2>About us
        </h2>
        <p>
          <strong>PACEMOVE, moving goods and happiness. 
          </strong>
        </p>
        <p>We at PACEMOVE believe in direct communication with customers hence we do relocation by our self. With experience and knowledge of the relocation sector, we always do what is best for our customers. The smile on the face of the customer at the delivery location while receiving the goods is all PACEMOVE strive for. Customers satisfaction is the top priority for the pacemove.
        </p>
        <p>PACEMOVE is bounded for the On-time delivery, Utmost care in packaging, Overall interaction, and Responsiveness. We are always reasonable with our pricing. Pacemove is the ultimate one-stop solution for the relocation and logistics service in Pune.
        </p>
      </div>
    </section>
    <section class="map_panel map_panel_img">

      <div class="map_panel_form">
        <h3>Arrange a pacemove walkthrough at your organization?
        </h3>
        <?php 
if(isset($_SESSION['ERR']))
{
?>
        <p style="color:#ff0000;">
          <?php echo $_SESSION['ERR'];unset($_SESSION['ERR']);?>
        </p>
        <?php } ?>
        <form  id="contact" method="post" action="" data-toggle="validator">
          <div class="map_panel_form_left">
            <label>Your Name*
            </label>
            <input type="text" name="name" class="form-control" required>
            <div class="help-block with-errors">
            </div>
          </div>
          <div class="map_panel_form_right form-group">
            <label>Email ID*
            </label>
            <input type="email" class="form-control" name="email" required>
            <div class="help-block with-errors">
            </div>
          </div>
          <div class="map_panel_form_left">
            <label>Company/Organisation*
            </label>
            <input type="text" name="org">
          </div>
          <div class="map_panel_form_right">
            <label>Designation
            </label>
            <input type="text" name="designation">
          </div>
          <div class="map_panel_form_left form-group">
            <label>Phone*
            </label>
            <input type="tel" name="phone" pattern="^[789]\d{9}$" required>
            <div class="help-block with-errors">
            </div>
          </div>
          <div class="map_panel_form_right">
            <input type="submit" value="Submit Information" name="submit">
          </div>
        </form>
      </div>
    </section>
    <section class="bottom_panel">
      <div class="contanear">
        <div class="bottom_panel_left">
          <h2>Attach with us
          </h2>
          <a href="https://www.facebook.com/pacemove/">
            <i class="fa fa-facebook" aria-hidden="true">
            </i>
          </a>
          <a href="https://mobile.twitter.com/PaceMove">
            <i class="fa fa-twitter" aria-hidden="true">
            </i>
          </a>
          <a href="https://business.google.com/pacemove">
            <i class="fa fa-google-plus" aria-hidden="true">
            </i>
          </a>
          <a href="https://www.pinterest.com/Pacemove123/">
            <i class="fa fa-pinterest" aria-hidden="true">
            </i>
          </a>
          <a href="https://www.instagram.com/pacemove/">
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
            <a href="mailto:support@pacemove.com">support@pacemove.com
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
                <a href="../html/about_us.php">About us
                </a>
              </li>
              <li>
                <a href="../html/sitemap.php">Sitemap
                </a>
              </li>
              <li>
                <a href="../html/privacy-policy.php">Privacy Policy
                </a>
              </li>
            </ul>
          </div>
          <div class="footer_cont_box">
            <ul>
              <li>
                <a href="../html/pune.php">Packers and Movers Pune
                </a>
              </li>
              <li>
                <a href="../html/../html/pune.php">Packers and Movers Pimpri Chinchwad
                </a>
              </li>
              <li>
                <a href="../html/pune.php">Relocation service Pune
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
                <a href="../html/home-shifting-policy.php">Home Shifting Policy
                </a>
              </li>
              <li>
                <a href="../html/vehicle-shifting-policy.php">Vehicle Shifting Policy
                </a>
              </li> 
            </ul>
          </div>
          <div class="footer_cont_box">
            <img src="../html/images/logo-foot.png" alt=""/>
            <a href="https://msg91.com/startups/?utm_source=startup-banner">
              <img src="https://msg91.com/images/startups/msg91Badge.png" width="120" height="90" title="MSG91 - SMS for Startups" alt="Bulk SMS - MSG91">
            </a>
          </div>
        </div>
        <div class="bottom_footer">©2018. Pacemove. All Rights Reserved
        </div>
        </footer>
      <?php include 'footer.php' ?>  
      <script src="../html/js/scrolla.jquery.min.js">
      </script>
      <script type="text/javascript">
        $('.animate').scrolla({
          mobile: true
        }
                             );
      </script>
      <script src="../html/js/nav.js">
      </script>
      <script src="callback.js">
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
  <!-- html code end -->

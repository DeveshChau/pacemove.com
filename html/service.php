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
  <body class="indexbody" onload="myFunction()" style="margin:0;">
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
          <li class="active">
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
    <section class="service_page_banner">
      <div class="contanear">
        <h3>SERVICES
        </h3>
      </div>
    </section>
    <section class="subpage_panel">
      <div class="contanear">
        <div class="solution_panel1 animate" data-animate="fadeInLeft" data-duration="1s" data-delay="0s">
          <img src="images/sol-img2.jpg"  alt="" class="solution_panel_image"/>
          <article>
            <h3>Packers and movers
            </h3>
            <p> When it comes to relocation Pacemove have played an important role in providing the best solution to the home shifting and relocation issues. Our technology provides new and innovative ways to the customers. At Pacemove we take away all your worries so that you can sit back and relax while we do all the hard work and take care of transporting all your precious stuff in a very professional way. Pacemove focuses on Staff courtesy, Timeliness, Utmost care in packaging, Overall interaction, Responsiveness and all of this for a reasonable price. We want your experience to be absolutely delightful with Pacemove. 
            </p>
          </article>
        </div>
        <div class="solution_panel1 animate" data-animate="fadeInRight" data-duration="1s" data-delay="0s">
          <img src="images/sol-img1.jpg"  alt="" class="solution_panel_image"/>
          <article>
            <h3>Corporate shifting
            </h3>
            <p>All the packing processes are done under the guidance and supervision of our packaging experts, who work tirelessly making sure that the goods are perfectly packed and don't get damaged during transportation. Our team of experts keeps a stringent eye on every activity that takes place during the packing and moving of goods from one place to the other. We are one of the leading packers and movers in India and render valuable packing and moving services to our esteemed clients. Our years of experience have enabled us to have an expertise in packing and moving services that have no near competition. Our work exhibits excellent quality and that is one factor where we never compromise thus we use superior quality materials to pack our products. 
            </p>
          </article>
        </div>
        <div class="solution_panel1 animate" data-animate="fadeInLeft" data-duration="1s" data-delay="0s">
          <img src="images/sol-img3.jpg"  alt="" class="solution_panel_image"/>
          <article>
            <h3>Vehicle shifting
            </h3>
            <p> Pacemove targets to deliver the best and reliable vehicle transport services. Our first and only goals are to pick-up and deliver your vehicle safely and at the agreed time. We always provide affordable vehicle carrier services to our clients, that ensure fastest possible shipping and delivery. With our network spread throughout the length and breadth of the country, We ensure speedy, swift and safe transit of vehicle at the desired destination in nationwide. We take extensive attention of our clients' vehicles during the shifting, which guarantees no damage to your vehicle. We accomplish this by keeping each and every customer informed of the entire auto transportation process from the reservation up to the delivery. 
            </p>
          </article>
        </div>
        <div class="solution_panel1 animate" data-animate="fadeInRight" data-duration="1s" data-delay="0s">
          <img src="images/sol-img4.jpg"  alt="" class="solution_panel_image"/>
          <article>
            <h3>Warehousing
            </h3>
            <p> We have established a well-maintained warehouse to stock your consignments. We also offer assistance in ensuring goods, so that during transportation if any mishappening occurs then customers can get indemnity for the same. We provide goods warehousing services at various offices that are waterproof and all the proper care is taken to keep your valuable in the best condition. We understand our client’s concern for safe storage and warehousing of their goods and valuables. We have spacious warehouses in for any kind of industrial goods and valuables. Our industrial and office warehousing services involve the latest security equipment. We also offer air-conditioned storage facilities. Along with taking up moving and packing assignment, For this, we hold a capacious warehouse that can easily accommodate the need for small as well as big business houses. 
            </p>
          </article>
        </div>
        <div class="solution_panel1 animate" data-animate="fadeInLeft" data-duration="1s" data-delay="0s">
          <img src="images/sol-img5.jpg"  alt="" class="solution_panel_image"/>
          <article>
            <h3>Logistics
            </h3>
            <p>We hold expertise in offering a quality range of logistics facility to ensure secure and safe transit of goods from one place to another. Our diligent team assists us in transferring all kinds of goods from the existing place to its final destination as per the client’s information. This makes us easier to transport goods to any nook and corner of the world with an ease at the doorstep of the client. So for any mode of logistics services we are always there for you. Clients satisfaction is an utmost priority for us thus we believe in serving the excellence to our clients. 
            </p>
          </article>
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

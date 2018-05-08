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
              <h2>Insurance Policy
              </h2>
              <h3>CLAUSES 
              </h3>
              <li>Inland Transit ( Rail or Road )-Clause B (Basic Cover). 
              </li>
              <li>Strikes, Riots, Civil Commotion Clause (Inland Transit not in conjuction with Ocean going Voyage). 
              </li>
              <li>Transit by Courier Clause. 
              </li>
              <li> Institute Radioactive Contamination, Chemical, Biological, Bio-Chemical And Electromagnetic Weapons Exclusions Clause 10.11.2003. 
              </li>
              <li>Institute Cyber Attack Exclusion Clause 10.11.2003. 
              </li>
              <li>Private Carrier Limitation of Liability (Inland Transit) Clause. 
              </li>
              <li>Cargo Termination of Transit Clause (Terrorism). 
              </li>
              <li>Termination of Storage in transit Clause 2009. 
              </li>
              <li>Institute Replacement Clause 1.1.1934. 
              </li>
              <li>Replacement (Second-hand Machinery) Clause. 
              </li>
              <li>Pair & Sets Clause. 
              </li>
              <li>Important Notice Clause. 
              </li>
              <li>Open Policy Conditions. 
              </li>
              <li>Sanction Limitation and Exclusion Clause.
              </li>
            </div>
          </div>
          <div class="row m-t-20">
            <div class="col-sm-12">
              <h3>WARRANTIES
              </h3>
              <ul class="items-list">
                <li> Warranted that goods are transported in closed wagons and/or trucks to be covered with tarpaulin or any other water proof material to avoid ingress of water during the inland leg of journey unless containerised 
                </li>
                <li> Warranted vehicle clean and fit to carry cargo. 
                </li>
                <li> Warranted deck cargo(unless in fully enclosed metal containers) shall be covered on Institute Cargo Clause (C) perils in case of transit by sea. 
                </li>
                <li> Warranted coverage is strictly as per INCOTERMS in the sales contract 
                </li>
                <li> Warranted Vessel should not be more then 25 years age 
                </li>
                <li> Warranted that packing should be sufficient enough to withstand the intended journey of transit 
                </li>
                <li> Warranted for all consignments moving in insured's own vehicles or in absence of recovery rights settlement to be made on 75% basis 
                </li>
                <li> Warranted that if the weight of the cargo exceeds the registration laden weight/licensed carrying capacity of the vehicle as mentioned in the Registration Certificate of the vehicle then any loss or damage arising out of such a transit is not covered in the policy.
                </li> 
              </ul>
            </div>
          </div>
          <div class="row m-t-20">
            <div class="col-sm-12">
              <h3>OTHER TERMS AND CONDITIONS 
              </h3>
              <ul class="items-list">
                <li> Open policies are subject to retention of minimum deposit premium of Rs.5000/- or premium collected where actual premium is less than Rs.5000. Refund of premium shall be applicable only for policies where the premium collected during the policy period is more than Rs.5000/- 
                </li>
                <li>  Where the premium collected during the policy period is more than Rs.5000/- refund applicable shall be premium collected less premium on actual declaration during the policy periodÂ or premium collected less Rs.5000/- whichever is less. 
                </li>
                <li>  All dispatches made during the previous month shall be declared within 10th of the succeeding month. 
                </li>
                <li>  The Per Sending and Per Location Limit represent the maximum amount that the insurer shall pay in respect of any one accident or series of event. In circumstances where this policy extends to cover duty under Imports, Per sending limit with respect to Imports shall include the amount of such duty.
                </li>
                <li>  In respect of any Limit per sending and / or Limit per location exceeding the above mentioned limits the insurer should be informed prior to inception of the risk and written agreement taken as to rate and terms. 
                </li>
                <li>  Any declaration made to the company which does not fall within the terms and conditions of the policy would be considered to be null & void ab initio and the company would in no way beheld liable for any consequence arising out of the declaration. 
                </li>
                <li>  Liability for monitors / lcd screens/ x-ray tubes/ Cameras and lences covered only is limited to 75% of the assessed loss. 
                </li>
                <li>  All internal breakdown losses will be excluded unless accompanied by external physical damage. 
                </li>
                <li>  Cover shall cease on arrival of the vessel / aircraft at the destination port / airport in case of the following countries Nepal, Myanmar, Bhutan Bangladesh, Pakistan, Sri lanka Afghanistan, Algeria, Mauritius, Iraq, Lebanon, and all the countries of the African continent,For transit by rail/ road in respect of Myanmar, Nepal, Bhutan, Bangladesh & Pakistan, the cover shall cease on arrival of the carrying vehicle/ railway at the Indian border.
                </li> 
                <li>  Transhipment Clause.
                </li>
                <li>  Private Carrier warranty (recovery rights settlement to be made on 85% basis) .
                </li>
                <li>  Reduce excess by minimum of Rs. 7500/- eecl. 
                </li>
              </ul>
            </div>
          </div>
          <div class="row m-t-20">
            <div class="col-sm-12">
              <h3>EXCLUSIONS 
              </h3>
              <ul class="items-list">
                <li> Excluding shortage and leakage from sound and sealed packing.
                </li>
                <li> (Applicable for shipments through Gulf of Aden) Excluding loss or damage to cargo on account of Somalian piracy and like operations in Gulf of Aden, Somalia and Yemen waters provided vessel is registered with Maritime securitycentre, Horn of Africa (MSC - HOA), prior to transit. 
                <li> Excluding loss or damage due to rust, corrosion, oxidation,discoloration,mechanical, electrical, electronic derangement,denting,chipping and scratching For National Insurance company. Authorised Signatory absolutely.
                </li>
                <li>Excluding shipments in bulk / Cargo carried in loose form. 
                </li>
                <li> Excluding mysterious & or un explained losses. 
                </li>
                <li> Excluding quality & or Contamination losses. 
                </li>
                <li> Excluding loss or damage due to jolts and jerks.
                </li> 
                <li> Excluding loss or damage to fuses and filaments.
                </li>
                <li> Excluding loss or damage to software or electronic data.
                </li>
                <li> Excluding shortages from parcels / packages delivered in extremely sound condition.
                </li>
                <li> Excluding shipments from/ to Iran,Iraq, Sudan, North Korea, Cuba ,Somalia and other countries identified by United Nations and/or Government of India.
                </li>
              </ul>
            </div>
          </div>
          <div class="row m-t-20">
            <div class="col-sm-12">
              <h3>Claim Process- 
              </h3>
              <h4>Procedure
              </h4>
              <p class="sub-text">
                <b>Registration and Survey:
                </b> In the event of a claim, upon intimation, the claim is instantly registered and surveyors appointed as per Regulatory norms.
              </p>
              <p class="sub-text">
                <b>Assessment and Documentation:
                </b> Our appointed surveyor would seek the requisite documents.
              </p>
              <p class="sub-text">
                <b>Settlement and Treatment of salvage:
                </b> Claims fulfilling policy terms and conditions, considered for settlement. Salvage disposal would be done with the consent of the insured.
              </p>
              <h4>Assistance
              </h4>
              <p class="sub-text"> In the event of meeting with an incident, by which a claim can arise, please call any of our offices or call 1-800-200-55-44, our 24-hour national toll free number, with the following basic information
              </p>                      
              <ul class="items-list">
                <li>Your Contact numbers
                </li>
                <li>Policy Number
                </li>
                <li>Name of Insured
                </li>
                <li>Date & Time of Loss
                </li>
                <li>Location of Loss
                </li>
                <li>Contact details at Loss Location
                </li>
                <li>Nature of Loss
                </li>
                <li>Estimate of loss
                </li>
              </ul>
              <p class="sub-text">In addition to our commitment for processing clams fairly and smoothly, we offer services to minimize the losses to our customers. Some of our recent initiatives include.
              </p>
              <li>Monsoon Preparedness Brochures
              </li>
              <li>E-Auction to maximize Salvage value
              </li>
              <li>Post-Loss Risk Analysis to improve Risk Management techniques
              </li>
              <br>
              <br>
              <br>
              <br>
            </div>
          </div>
        </div>
        </div>
      </div>  
    </section>
  <?php
    include 'footer.php'
  ?>
  </body>
</html>

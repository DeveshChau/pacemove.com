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
            <?php echo $_SESSION['username']?>
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
              <h2>Privacy Policy
              </h2>
              <p class="sub-text">Pacemove Relocations (the ”Company”, “we”, “us”, or “Pacemove”) is committed to ensuring that your privacy is protected. This Privacy Policy explains how we collect, use, share and protect information about you. You should check this page from time to time to ensure that you are happy with any changes.
              </p>
              <p>We respect your privacy and do not tolerate spam and will never sell, rent, lease or give away your information (name, address, email, etc.) to any third party. Nor will we send you unsolicited email.
              </p>
              <p>If you choose to give your name and email address into one or more of our site's inquiry forms, we will send you emails relating to the inquiry generated by you. You may opt out of receiving future mailings from our mailing lists by calling Pacemove Support 888 830 82 18.
              </p>
              <p class="sub-text">The Privacy Policy covers both our “online” (e.g., web and mobile services, including any web sites operated by us, however accessed and/or used, whether via personal computers, mobile devices or otherwise) and “offline” (e.g., collection of data through mailings, telephone, or in person) activities owned, operated, provided, or made available by the Company. Our “online” and “offline” activities are collectively referenced as the “Services.” This Privacy Policy also applies to your use of interactive features or downloads that: (i) we own or control; (ii) are available through the Services; or (iii) interact with the Services and post or incorporate this Privacy Policy.
              </p>
              <p class="sub-text uppercase">BY USING OUR SERVICES OR BY OTHERWISE GIVING US YOUR INFORMATION, YOU AGREE TO THE TERMS OF THIS PRIVACY POLICY.
              </p>
              <p class="sub-text">Please review the following carefully so that you understand our privacy practices. If you do not agree to this Privacy Policy, do not use any of our Services or give us any of your information. In addition, please review our Terms and Conditions, which may apply to your use of our websites and mobile applications. This Privacy Policy is incorporated by reference into the applicable Terms and Conditions.
              </p>
              <p class="sub-text">If you have questions about this Privacy Policy, please contact us at 
                <a href="mailto:support@pacemove.com" title="support@pacemove.com">support@pacemove.com
                </a>
              </p>
              <h3 class="uppercase">1. WHAT INFORMATION DO WE COLLECT?
              </h3>
              <h4 class="uppercase m-t-20">(a) INFORMATION YOU PROVIDE TO US
              </h4>
              <div class="indented">
                <p class="sub-text">
                  We may ask you to provide us with certain categories of information such as personal information, which is information that could reasonably be used to identify you personally, such as your name, e-mail address, and mobile number (“Personal Information”). We may collect this information through various forms and in various places through the Services, including account registration forms, contact us forms, or when you otherwise interact with us. When you sign up to use the Services, you create a user profile. To request for our services, apart from your Personal Information, you also provide us details of origin of shipping, destination of shipping, location addresses, list or photos of items to be shipped. The current data fields that might be requested for are:
                  <br>
                  Email
                  <br>
                  Name 
                  <br>
                  Addresses of origin and destination 
                  <br>
                  Mobile phone Number 
                  <br>
                  Pin Code 
                  <br>
                  List or photos of items 
                  <br>
                  Type of apartment
                  <br>
                </p>
                <p class="sub-text">
                  Apart from these you may also provide ratings and review for the Vendors engaged by you. This information is not categorized under Personal information. This will be published on the Site for other customers to view and take a decision on the Vendor. To give credibility to the rating, a user will be able to request to see your contact details while he/she is considering the particular vendor for their requirement. Your contact details will only be revealed with your permission.
                </p>
              </div>
              <h4 class="uppercase m-t-20">(b) INFORMATION WE COLLECT AS YOU ACCESS AND USE OUR SERVICES
              </h4>
              <div class="indented">
                <p class="sub-text">
                  In addition to any Personal Information or other information that you choose to submit to us, we and our third-party service providers (“TSP”s) may use a variety of technologies that automatically (or passively) collect certain information whenever you visit or interact with the Services (“Usage Information”). This Usage Information may include the browser that you are using, the URL that referred you to our Services, all of the areas within our Services that you visit, and the time of day, among other information. We may use Usage Information for a variety of purpose, including to enhance or otherwise improve the Services. In addition, we collect your IP address or other unique identifier (“Device Identifier”) for your computer, mobile or other device used to access the Services (any, a “Device”). A Device Identifier is a number that is automatically assigned to your Device used to access the Services, and our computers identify your Device by its Device Identifier. Usage Information may be non-identifying or may be associated with you. Whenever we associate Usage Information or a Device Identifier with your Personal Information, we will treat it as Personal Information.
                </p>
                <p class="sub-text">
                  In case of booking via call centre, Pacemove will record the calls for quality and training purposes. 
                </p>
                <p class="sub-text">
                  In addition, tracking information is collected as you navigate through our Services, including, but not limited to geographic areas. Most GPS enabled mobile devices can define one’s location to within 50 feet. We collect this information for various purposes – including determining origin or destination, or the charge for the transportation you requested via our Services, to provide you with customer support, to send you promotions and offers, to enhance our Services, and for our internal business purposes. Usage Information may be collected using a cookie. 
                </p>
                <p class="sub-text">
                  If you do not want information to be collected through the use of cookies, your browser allows you to deny or accept the use of cookies. Cookies can be disabled or controlled by setting a preference within your web browser or on your Device. If you choose to disable cookies or Flash cookies on your Device, some features of the Services may not function properly or may not be able to customize the delivery of information to you. You should be aware that the Company cannot control the use of cookies (or the resulting information) by third-parties, and use of third party cookies is not covered by our Privacy Policy. 
                </p>
              </div>
              <h4 class="uppercase m-t-20">(c) INFORMATION THIRD PARTIES PROVIDE ABOUT YOU
              </h4>
              <div class="indented">
                <p class="sub-text">
                  We may, from time to time, supplement the information we collect about you through our web site or Mobile Application with outside records from third parties in order to enhance our ability to serve you, to tailor our content to you and to offer you opportunities to purchase products or services that we believe may be of interest to you. We may combine the information we receive from those sources with information we collect through the Services. In those cases, we will apply this Privacy Policy to any Personal Information received, unless we have disclosed otherwise.
                </p>
              </div>
              <h4 class="uppercase m-t-20">(d) INFORMATION COLLECTED BY MOBILE APPLICATIONS
              </h4>
              <div class="indented">
                <p class="sub-text">
                  Our Services are primarily provided through an application on your mobile, tablet computer or similar device (“Mobile Application”). You agree that we may collect and use technical data and related information, including but not limited to, technical information about your device, system and application software, and peripherals, that is gathered periodically to facilitate the provision of software updates, product support and other services to you (if any) related to such Mobile Applications. When you use any of our Mobile Applications, the Mobile Application may automatically collect and store some or all of the following information from your mobile device (“Mobile Device Information”), including without limitation:
                </p>
                <ul class="items-list">
                  <li>Your preferred language and country site (if applicable)
                  </li>
                  <li>Your phone number or other unique device identifier assigned to your mobile device – such as the International Mobile Equipment Identity or the Mobile Equipment ID number
                  </li>
                  <li>The IP address of your mobile device
                  </li>
                  <li>The manufacturer and model of your mobile device
                  </li>
                  <li>Your mobile operating system
                  </li>
                  <li>The type of mobile Internet browsers you are using
                  </li>
                  <li>Your geolocation
                  </li>
                  <li>Information about how you interact with the Mobile Application and any of our web sites to which the Mobile Application links, such as how many times you use a specific part of the mobile application over a given time period, the amount of time you spend using the Mobile Application, how often you use the Mobile Application, actions you take in the Mobile Application and how you engage with the Mobile Application
                  </li>
                  <li>Information to allow us to personalize the services and content available through the Mobile Application
                  </li>
                </ul>
                <p class="sub-text">
                  We may use information automatically collected by the Mobile Application (including the Mobile Device Information) in the following ways:
                </p>
                <ul class="items-list">
                  <li>To operate and improve our Mobile Applications, other Services, our company’s services, and tools
                  </li>
                  <li>To create aggregated and anonymized information to determine which Mobile Application features are most popular and useful to users, and for other statistical analyses.
                  </li>
                  <li>To prevent, discover and investigate violations of this Privacy Policy or any applicable terms of service or terms of use for the Mobile Application, and to investigate fraud, chargeback or other matters
                  </li>
                  <li>To customize the content or services on the Mobile Application for you, or the communications sent to you through the Mobile Application.
                  </li>
                </ul>
                <p class="sub-text">With respect to geo-location data we track through your Mobile Device, we use that geo-location information for various purposes – including for you to be able to vselect the origin or destination easily. Except as otherwise permitted in this Privacy Policy, we will not share this information with third parties for any purpose and will only use this information for the sole purpose of providing you with the ability to request services via Pacemove’s Mobile Application. You may at any time no longer allow our Mobile Application to use your location by turning this feature off at the Mobile Device level.
                </p>
                <p class="sub-text">We also provide some of your Personal Information (such as your name , origin and destination addresses, contact number, item details) to the Vendor whose quote you have selected. The selected Vendor may share that information with its employees, partners or agents (that are providing the shipping/relocation service) and will also be able to access your Personal Information, including your geo-location data. We may associate your unique mobile Device Identifier or Mobile Application usage information with any Personal Information you provide, but we will treat the combined information as Personal Information.
                </p>
                <p class="sub-text">Personal Information may also be collected and shared with third-parties if there is content from the Mobile Application that you specifically and knowingly upload to, share with or transmit to an email recipient, online community, website, or to the public, e.g. uploaded photos, posted reviews or comments, or information about you or the service that you choose to share with others through features which may be provided on our Services. This uploaded, shared or transmitted content will also be subject to the privacy policy of the email, online community website, social media or other platform to which you upload, share or transmit the content. 
                </p>
              </div>
              <h3 class="uppercase m-t-30">2. USE OF INFORMATION COLLECTED
              </h3>
              <div class="indented">
                <p class="sub-text">
                  Our primary goal in collecting your Personal information or Usage Information is to provide you with an enhanced experience when using the Services.
                </p>
                <p class="sub-text">
                  Based upon the Personal Information you provide us when registering for an account, we may send you a welcoming email to verify your username and password. We will also communicate with you in response to your inquiries, to provide the services you request, and to manage your account. We will communicate with you by email, telephone, or SMS or text message, in accordance with your wishes.
                </p>
                <p class="sub-text">
                  We use your information to closely monitor which features of the Services are used most, to allow you to view your order history, view any promotions we may currently be running, and to determine which features we need to focus on improving, including usage patterns and geographic locations to determine where we should offer or focus services, features and/or resources. 
                </p>
                <p class="sub-text">
                  We use the information collected from our Mobile Application so that we are able to serve you the correct app version depending on your device type, for troubleshooting and in some cases, marketing purposes.
                </p>
                <p class="sub-text">
                  We use your Internet Protocol (IP) address to help diagnose problems with our computer server, and to administer our web site(s). Your IP address is used to help identify you, but contains no personal information about you
                </p>
                <p class="sub-text">
                  We will send you strictly service-related announcements on rare occasions when it is necessary to do so. For instance, if our Services are temporarily suspended for maintenance, we might send you an email. Generally, you may not opt-out of these communications, which are not promotional in nature. If you do not wish to receive them, you have the option to deactivate your account.
                </p>
                <p class="sub-text">
                  In addition, we may use your Personal Information or Usage Information that we collect about you:
                <ul class="items-list list-as-numbers">
                  <li>to provide you with information or services or process transactions that you have requested or agreed to receive including to send you electronic newsletters, or to provide you with special offers or promotional materials on behalf of us or third parties
                  </li>
                  <li>to process your registration with the Services, including verifying your information is active and valid
                  </li>
                  <li>to improve the Services or our services, to customize your experience with the Services, or to serve you specific content that is most relevant to you
                  </li>
                  <li>to enable you to participate in a variety of the Services’ features such as online or mobile entry sweepstakes, contests or other promotions
                  </li>
                  <li>to contact you with regard to your use of the Services and, in our discretion, changes to the Services and/or the Services’ policies
                  </li>
                  <li>for internal business purposes
                  </li>
                  <li>for inclusion in our data analytics and
                  </li>
                  <li>for purposes disclosed at the time you provide your information or as otherwise set forth in this Privacy Policy.
                  </li>
                </ul>
                </p>
              <p class="sub-text">
                Please note that information submitted to the Services via a “contact us” or other similar function may not receive a response.
              </p>                        
            </div>
            <h3 class="uppercase m-t-30">3. HOW AND WHEN DO WE DISCLOSE INFORMATION TO THIRD PARTIES?
            </h3>
            <div class="indented">
              <p class="sub-text">
                We may share non-personally identifiable information, such as aggregated user statistics and log data, with third parties for industry analysis, demographic profiling, to deliver targeted advertising about other products or services, or for other business purposes. We do not sell, share, rent or trade the information we have collected about you, including Personal Information, other than as disclosed within this Privacy Policy or at the time you provide your information. We do not share your Personal Information with third parties for those third parties’ direct marketing purposes unless you consent to such sharing at the time you provide your Personal Information. Pacemove shall be entitled to disclose to all of its group companies or any of its Vendors or any government body as so required by the law or by directive or request from such government body or any third party, your particulars in the possession of Pacemove in any way as Pacemove, in its absolute discretion, deems fit or if it considers it in its interests to do so.
              </p>
            </div>
            <h4 class="uppercase m-t-20">(a) WHEN YOU AGREE TO RECEIVE INFORMATION FROM THIRD PARTIES.
            </h4>
            <div class="indented">
              <p class="sub-text">
                You may be presented with an opportunity to receive information and/or marketing offers directly from third parties. If you do agree to have your Personal Information shared, your Personal Information will be disclosed to such third parties and all information you disclose will be subject to the privacy policy and practices of such third parties. We are not responsible for the privacy policies and practices of such third parties and, therefore, you should review the privacy policies and practices of such third parties prior to agreeing to receive such information from them. If you later decide that you no longer want to receive communication from a third party, you will need to contact that third party directly.
              </p>
            </div>
            <h4 class="uppercase m-t-20">(b) THIRD PARTIES PROVIDING SERVICES ON OUR BEHALF.
            </h4>
            <div class="indented">
              <p class="sub-text">
                We use third party (TP) companies and individuals to facilitate our Services, provide or perform certain aspects of the Services on our behalf – such as Vendors and companies they work for to provide the Services, and other third-parties to host the Services, design and/or operate the Services’ features, track the Services’ analytics, process payments, engage in anti-fraud and security measures, provide customer support, provide geo-location information to our drivers, enable us to send you special offers, host our job application form, perform technical services (e.g., without limitation, maintenance services, database management, web analytics and improvement of the Services‘ features), or perform other administrative services. We may provide these TPs with access to user information, including Personal Information, this information sharing is limited to only the information needed by the vendor to carry out the services they are performing for you or for us. Each of these vendors are obligated not to disclose or use Personal Information for any other purpose.
              </p>
              <p class="sub-text">
                While we may use third party analytics TSPs to evaluate and provide us with information about the use of the Services and viewing of our content, we do not share Personal Information with these analytics TSPs, but they may set and access their own cookies, web beacons and embedded scripts on your Device and they may otherwise collect or have access to information about you, including non-personally identifiable information. We use a third party hosting provider who hosts our support section of our website. Information collected within this section of our web site is governed by our Privacy Policy.
              </p>
            </div>
            <h4 class="uppercase m-t-20">(c) CO-BRANDED SERVICES..
            </h4>
            <div class="indented">
              <p class="sub-text">
                Certain aspects of the Services may be provided to you in association with third parties (“Co-Branded Services”) such as sponsors and charities, and may require you to disclose Personal Information to them. Such Co-Branded Services will identify the third party. If you elect to register for products and/or services through the Co- Branded Services, you may be providing your information to both us and the third party. Further, if you sign-in to a Co-Branded Service with a username and password obtained through our Services, your Personal Information may be disclosed to the identified third parties for that Co-Branded Service and will be subject to their posted privacy policies.
              </p>
            </div>
            <h4 class="uppercase m-t-20">(d) CONTESTS AND PROMOTIONS.
            </h4>
            <div class="indented">
              <p class="sub-text">
                We may offer contests, and other promotions (any, a “Promotion”) through the Services that may require registration. By participating in a Promotion, you are agreeing to official rules that govern that Promotion, which may contain specific requirements of you, including, allowing the sponsor of the Promotion to use your name, voice and/or likeness in advertising or marketing associated with the Promotion. If you choose to enter a Promotion, Personal Information may be disclosed to third parties or the public in connection with the administration of such Promotion, including, in connection with winner selection, prize fulfilment, and as required by law or permitted by the Promotion’s official rules, such as on a winners list. 
              </p>
              <p class="sub-text">
                Any schemes, Privilege / gift voucher and rewards (Programs) are subject to the respective terms & conditions of the scheme.
              </p>
            </div>
            <h4 class="uppercase m-t-20">(e) ADMINISTRATIVE AND LEGAL REASONS.
            </h4>
            <div class="indented">
              <p class="sub-text">
                We cooperate with government and law enforcement officials and private parties to enforce and comply with the law. Thus, we may access, use, preserve, transfer and disclose your information (including Personal Information), including disclosure to third parties such as government or law enforcement officials or private parties as we reasonably determine is necessary and appropriate:
              <ul class="items-list list-as-romans">
                <li>to satisfy any applicable law, regulation, subpoenas, governmental requests or legal process
                </li>
                <li>to protect and/or defend the Terms and Conditions for online and mobile Services or other policies applicable to any online and mobile Services, including investigation of potential violations thereof
                </li>
                <li>to protect the safety, rights, property or security of the Company, our Services or any third party
                </li>
                <li>to protect the safety of the public for any reason
                </li>
                <li>to detect, prevent or otherwise address fraud, security or technical issues; an /or
                </li>
                <li>to prevent or stop activity we may consider to be, or to pose a risk of being, an illegal, unethical, or legally actionable activity. Further, we may use IP address or other Device Identifiers, to identify users, and may do so in cooperation with third parties such as copyright owners, internet TSPs, wireless TSPs and/or law enforcement agencies, including disclosing such information to third parties, all in our discretion. Such disclosures may be carried out without notice to you.
                </li>
              </ul>
              </p>
          </div>
          <h4 class="uppercase m-t-20">(f) BUSINESS TRANSFER..
          </h4>
          <div class="indented">
            <p class="sub-text">
              We may share your information, including your Personal Information and Usage Information with our parent, subsidiaries and affiliates for internal reasons. We also reserve the right to disclose and transfer all such information:
            <ul class="items-list list-as-romans">
              <li>to a subsequent owner, co-owner or operator of the Services or applicable database. or
              </li>
              <li>in connection with a corporate merger, consolidation, restructuring, the sale of substantially all of our membership interests and/or assets or other corporate change, including, during the course of any due diligence process.
              </li>
            </ul>
            </p>
        </div>
        <h3 class="uppercase m-t-30">4. ONLINE BEHAVIOURAL ADVERTISING
        </h3>
        <div class="indented">
          <p class="sub-text">
            Targeted advertising (also known as Behavioral Advertising) uses information collected on an individual's web or mobile browsing behavior such as the pages they have visited or the searches they have made. This information is then used to select which advertisements should be displayed to a particular individual on websites other than our web site(s). For example, if you have shown a preference for nursing while visiting our web site(s), you may be served an advertisement for nursing-related programs when you visit a site other than our web site(s). The information collected is only linked to an anonymous cookie ID (alphanumeric number); it does not include any information that could be linked back to a particular person, such as their name, address or credit card number. The information used for targeted advertising either comes from us or through third party website publishers.
          </p>
        </div>
        <h3 class="uppercase m-t-30">5. THIRD PARTY CONTENT AND LINKS TO THIRD PARTY SERVICES
        </h3>
        <div class="indented">
          <p class="sub-text">
            The Services may contain content that is supplied by a third party, and those third parties may collect web site usage information and your Device Identifier when web pages from any online or mobile Services are served to your browser. In addition, when you are using the Services, you may be directed to other sites or applications that are operated and controlled by third parties that we do not control. We are not responsible for the privacy practices employed by any of these third parties. For example, if you click on a banner advertisement, the click may take you away from one of our websites onto a different web site. These other web sites may send their own cookies to you, independently collect data or solicit Personal Information and may or may not have their own published privacy policies. We encourage you to note when you leave our Services and to read the privacy statements of all third party web sites or applications before submitting any Personal Information to third parties.
          </p>
        </div>
        <h3 class="uppercase m-t-30">6. SOCIAL MEDIA FEATURES AND WIDGETS
        </h3>
        <div class="indented">
          <p class="sub-text">
            Our online and mobile Services may include social media features, such as the Facebook Like button, and widgets such as a “Share This” button, or interactive mini- programs that run on our online and mobile Services. These features may collect your IP address, which page you are visiting on our online or mobile Services, and may set a cookie to enable the feature to function properly. Social media features and widgets are either hosted by a third party or hosted directly on our online Services. Your interactions with these features and widgets are governed by the privacy policy of the company providing them.
          </p>
        </div>
        <h3 class="uppercase m-t-30">7. CHANGE OF INFORMATION AND CANCELLATION OF ACCOUNT
        </h3>
        <div class="indented">
          <p class="sub-text">
            You are responsible for maintaining the accuracy of the information you submit to us, such as your contact information provided as part of account registration. If your Personal Information changes, or if you no longer desire our Services, you may correct, delete inaccuracies, or amend information by making the change on our member information page or by contacting us through support@Pacemove.in. We will make good faith efforts to make requested changes in our then active databases as soon as reasonably practicable. You may also cancel or modify your communications that you have elected to receive from the Services by following the instructions contained within an e-mail or by logging into your user account and changing your communication preferences. If you wish to cancel your account or request that we no longer use your information to provide you services, contact us through support@Pacemove.in. We will retain your Personal Information and Usage Information (including geo-location) for as long as your account with the Services is active and as needed to provide you services. Even after your account is terminated, we will retain your Personal Information and Usage Information (including geo-location, order history, and transaction history) as needed to comply with our legal and regulatory obligations, resolve disputes, conclude any activities related to cancellation of an account, investigate or prevent fraud and other inappropriate activity, to enforce our agreements, and for other business reason. After a period of time, your data may be anonymized and aggregated, and then may be held by us as long as necessary for us to provide our Services effectively, but our use of the anonymized data will be solely for analytic purposes.
          </p>
        </div>
        <h3 class="uppercase m-t-30">8. SECURITY
        </h3>
        <div class="indented">
          <p class="sub-text">
            The Personal Information and Usage Information we collect is securely stored within our databases, and we use standard, industry-wide, commercially reasonable security practices such as encryption, firewalls and SSL (Secure Socket Layers) for protecting your information - such geo-location information. However, as effective as encryption technology is, no security system is impenetrable. We cannot guarantee the security of our databases, nor can we guarantee that information you supply won't be intercepted while being transmitted to us over the Internet or wireless communication, and any information you transmit to the Company you do at your own risk. We recommend that you not disclose your password to anyone.
          </p>
        </div>
        <h3 class="uppercase m-t-30">9. CHANGES TO THE PRIVACY POLICY
        </h3>
        <div class="indented">
          <p class="sub-text">
            From time to time, we may update this Privacy Policy to reflect changes to our information practices. Any changes will be effective immediately upon the posting of the revised Privacy Policy. We encourage you to periodically review this page for the latest information on our privacy practices.
          </p>
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

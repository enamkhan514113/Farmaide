<?php include"dbconnect.php"; ?>

<!DOCTYPE html>
<html lang="en-US">
    <!--[if lt IE 7 ]> 
    <html lang="en" class="innerpage no-js ie6">
        <![endif]-->
        <!--[if IE 7 ]>    
        <html lang="en" class="innerpage no-js ie7">
            <![endif]-->
            <!--[if IE 8 ]>    
            <html lang="en" class="innerpage no-js ie8">
                <![endif]-->
                <!--[if (gte IE 9)|!(IE)]><!-->
                <head>
                    <meta charset="UTF-8">
                    <meta content="IE=edge" http-equiv="X-UA-Compatible">
                    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
                    <!-- Title  -->
                    <title> Farmaide - A helping Hand for your farm </title>
                    <!-- Favicon -->
                    <link rel="shortcut icon" href="images/icon.png">
                    <!-- Bootstrap -->
                    <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
                    <!-- Owl Carousel -->
                    <link href="assets/css/owl.carousel.min.css" rel="stylesheet" type="text/css">
                    <!-- Animate -->
                    <link href="assets/css/animate.min.css" rel="stylesheet" type="text/css">
                    <!-- Lightbox -->
                    <link href="assets/css/lightbox.css" rel="stylesheet" type="text/css">
                    <!-- Font Awesome -->
                    <link href="assets/css/font-awesome.min.css" rel="stylesheet" type="text/css">
                    <!-- Theme Styles -->
                    <link href="assets/css/styles.css" rel="stylesheet" type="text/css">
                    <link href="assets/css/responsive.css" rel="stylesheet" type="text/css">
                    
                    <link rel="stylesheet" href="assets/youtube_popup/grt-youtube-popup.css">
                   
                </head>
                <body>
                    <!-- Preloader
                    <div class="page-load">
                        <div class="loader">
                            <img src="assets/images/loader1.gif" class="loader-image" alt="loader">
                            <img src="assets/images/loader-mb.gif" class="loader-image loader-image-mb" alt="loader-mb">
                        </div>
                    </div>
                    Preloader end -->
                    <!-- Video Lab wrapper -->
                    <div class="wrapper wrapper-video-lab">
                        <div class="header-bg">
                            <header class="header-top">
                                <?php include 'header_top.php';?>
                                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" style="display: inline-flex;
    flex-direction: row;
    align-items: center;
    justify-content: flex-end;
    padding-right: 84px;" >
    <p style="color: white;"> Language/ভাষা</p>
                <ul class="socials socials-red">
                    <li>
                        <a href="/farmaide/index.php">
                        <b> English </b>
                        </a>
                    </li>
                    <li>
                        <a href="/farmaide/Bangla/index.php">
                        <b> বাংলা </b>
                        </a>
                    </li>
                </ul>
            </div>
                            </header>
                            <!-- Header -->
                            <header class="header-bottom">
                                <nav class="navbar navbar-expand-md navbar-invert navbar-custom">
                                  <?php include 'menu.php';?>
                                </nav>
                            </header>
                            <!-- Header end -->
                            <!-- Section Welcome -->
                            <div class="section-welcome">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-xs-12 col-sm-12 col-md-9 col-lg-9">
                                            <h2 class="section-welcome-title">কৃষক</h2>
                                            <p class="section-welcome-text">একটি দেশের জন্য সবচাইতে মূল্যবান নাগরিক, যারা নিজেদের জীবন দেশের জন্য উৎসর্গ করে।</p>
                                            <a href="story.php" class="btn btn-md btn-r section-welcome-btn">তাদের গল্প</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        
                        </div>
                    <!-- Section Welcome end -->
                
                        <!-- Section About -->
                        <section class="homebg" style="background: linear-gradient(rgb(0, 0, 0), rgb(34, 34, 34));">
                        <div class="section-about">
                            <div class="container">
                                <div class="row tc">
                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                        <h3>আমারা মূলত কি নিয়ে কাজ করি?</h3>
                                        <ul class="circles circles--red">
                                            <li>
                                                <span></span>
                                            </li>
                                            <li>
                                                <span></span>
                                            </li>
                                            <li>
                                                <span></span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                                        <div class="section-about-block mb-space">
                                           
                                            <h4 class="section-about-block--title"><b>০১.</b> কৃষক এবং বিনিয়োগকারীদের একত্রীকরণ</h4>
                                    
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                                        <div class="section-about-block mb-space">
                                            
                                            <h4 class="section-about-block--title"><b>০২.</b> দেশের উৎপাদন এবং এর প্রাসাঙ্গিক তথ্য ও উপাত্ত প্রদান</h4>
                                           
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                                        <div class="section-about-block">
                                
                                            <h4 class="section-about-block--title"><b>০৩.</b> কৃষিখাতে বিনিয়োগের জন্য বিনিয়োগকারীদের সঠিক দিকনির্দেশনা প্রদান।</h4>
                                            
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                                        <div class="section-about-block">
                                
                                            <h4 class="section-about-block--title"><b>০৪.</b> নিজ পণ্য সরাসরি বিক্রয়ের মাধ্যমে কৃষকদের অর্থনৈতিক উন্নতি সাধন</h4>
                                            
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                                        <div class="section-about-block">
                                
                                            <h4 class="section-about-block--title"><b>০৫.</b> আধুনিক ও উন্নত কৃষি ব্যাবস্থার জন্য কৃষকদের প্রয়োজনীয় উপকরণ সরবরাহ</h4>
                                        
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                                        <div class="section-about-block">
                                
                                            <h4 class="section-about-block--title"><b>০৬.</b> সর্বপরি কৃষক ও বিনিয়োগকারীদের যথাযথ সেবা প্রদান</h4>
                                        
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Section About end -->
                        <!-- Section Mision -->
                        <div class="section-portfolio">
                            <div class="container-fluid">
                                <div class="row" >
                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                        <h3>এই প্রকল্পের উদ্দেশ্য</h3>
                                        <ul class="circles circles--red">
                                            <li>
                                                <span></span>
                                            </li>
                                            <li>
                                                <span></span>
                                            </li>
                                            <li>
                                                <span></span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="row section-portfolio-row">
                                <p style="align-items: center; font-family:'Poppins';font-weight: 400;font-size: 18px;line-height: 2;margin: auto; margin: auto 5em; color:#376804;">
                                <b>আমাদের লক্ষ্য হলো বাংলাদেশের কৃষকরা যাতে তাদের জমিতে সর্বোচ্চ‌ এবং মানুন্নত উৎপাদনের সক্ষম হয় তার জন্য প্রয়োজনীয় সংযোগ সরঞ্জামের ব্যবস্থা করার মাধ্যমে কৃষকদের আত্ম ক্ষমতায়ন বৃদ্ধি করা। আমরা এমন একটি প্ল্যাটফর্ম তৈরির প্রত্যাশা রাখি যা কৃষক এবং বিনিয়োগকারীদের এক বিন্দুতে এলে দেশের কৃষির খাতে সহযোগিতা, নতুন উদ্ভাবন এবং উৎপাদন বৃদ্ধিতে বাংলাদেশকে আরও সক্ষম করবে। উন্নত প্রযুক্তি, কৃষকদের জন্য অনলাইন মার্কেটপ্লেস, এবং কৃষি খাতে নিশ্চিত উন্নয়ন সাধনের মাধ্যমে আমরা বাংলাদেশের কৃষক এবং সাধারণ মানুষের জন্য উজ্জ্বল ভবিষ্যৎ গড়ে তুলতে সদা সর্বদা নিবেদিত।</b>
                                </p>
                                </div>
                            </div>
                        </div>
                        </section>
                        <!-- Section Mision end -->

                        <!-- Section Clients
                        <div class="section-clients">
                            <div class="container">
                                <div class="row">
                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                        <h3 class="section-clients-title">CLIENTS</h3>
                                        <ul class="circles circles--red">
                                            <li>
                                                <span></span>
                                            </li>
                                            <li>
                                                <span></span>
                                            </li>
                                            <li>
                                                <span></span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="row justify-content-center  align-t">
                                     <marquee behavior="scroll" direction="left" scroll onmouseover="this.setAttribute('scrollamount', 0, 0);this.stop();" onmouseout="this.setAttribute('scrollamount', 9, 0);this.start();" scrollamount="9" valign="center">
                                   
                                        <img src="images/clients/new/BIFFLnew.png" alt="our-clients4" width="100">&nbsp;&nbsp;&nbsp;&nbsp;
                                        <img src="images/clients/new/Actionaidnew.png" alt="our-clients1" width="100">&nbsp;&nbsp;&nbsp;&nbsp;
                                        <img src="images/clients/new/BITAnew.png" alt="our-clients5" width="100">&nbsp;&nbsp;&nbsp;&nbsp;
                                        <img src="images/clients/new/BNWLAnew.png" alt="our-clients2" width="100">&nbsp;&nbsp;&nbsp;&nbsp;
                                        <img src="images/clients/new/CVCFLnew.png" alt="our-clients6" width="100">&nbsp;&nbsp;&nbsp;&nbsp;
                                        <img src="images/clients/new/ifarmernew.png" alt="our-clients7" width="100">&nbsp;&nbsp;&nbsp;&nbsp;
                                        <img src="images/clients/new/IPDCnew.png" alt="our-clients8" width="100">&nbsp;&nbsp;&nbsp;&nbsp;
                                        <img src="images/clients/new/MaricoBDnew.png" alt="our-clients9" width="100">&nbsp;&nbsp;&nbsp;&nbsp;
                                        <img src="images/clients/new/Asiaticmclnew.png" alt="our-clients3" width="100">&nbsp;&nbsp;&nbsp;&nbsp;
                                        <img src="images/clients/new/MJFnew.png" alt="our-clients10" width="100">&nbsp;&nbsp;&nbsp;&nbsp;
                                        <img src="images/clients/new/MTBnew.png" alt="our-clients11" width="100">&nbsp;&nbsp;&nbsp;&nbsp;
                                        <img src="images/clients/new/Sampreetinew.png" alt="our-clients12" width="100">&nbsp;&nbsp;&nbsp;&nbsp;
                                        <img src="images/clients/new/STBnew.png" alt="our-clients13" width="100">&nbsp;&nbsp;&nbsp;&nbsp;
                                        <img src="images/clients/new/GIZnew.png" alt="our-clients14" width="100">&nbsp;&nbsp;&nbsp;&nbsp;
                                        <img src="images/clients/new/IOLnew.png" alt="our-clients15" width="100">&nbsp;&nbsp;&nbsp;&nbsp;
                                        <img src="images/clients/new/ICCBnew.png" alt="our-clients16" width="100">&nbsp;&nbsp;&nbsp;&nbsp;
                                        <img src="images/clients/new/Thedailystarnew.png" alt="our-clients17" width="100">&nbsp;&nbsp;&nbsp;&nbsp;
                                        <img src="images/clients/new/SEEPnew.png" alt="our-clients18" width="100">&nbsp;&nbsp;&nbsp;&nbsp;
                                        <img src="images/clients/new/Plannew.png" alt="our-clients19" width="100">&nbsp;&nbsp;&nbsp;&nbsp;
                                        <img src="images/clients/new/Runnernew.png" alt="our-clients20" width="100">&nbsp;&nbsp;&nbsp;&nbsp;
                                        <img src="images/clients/new/sisimpurnew.png" alt="our-clients21" width="100">&nbsp;&nbsp;&nbsp;&nbsp;
                                     </marquee>
                                </div>
                            </div>
                            
                           
                        </div>
                        Section Clients end -->
                        <!-- Section Proposition -->
                        <div class="section-proposition">
                            <div class="container">
                                <div class="row align-items-center">
                                    <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
                                        <div class="section-proposition-title">
                                            <h3 style="font-size: 74px; color:#ffffff;">চলুন, একসাথে শুরু করি</h3>
                                            <h3 style="color: #ff0000;">নতুন কিছু</h3>
                                            <div class="section-proposition-text">
                                                <p style="color: #ffffff;font: size 20px;font-weight: bold;line-height: 1.4;padding-top: 20px;letter-spacing: 3px;text-align: justify;">
                                                বাংলাদেশ, এই অঞ্চলের কৃষক এবং বিনিয়োগকারীদের জন্য ফার্মেইড একটি আশার আলো হিসেবে উদ্ভবিত হয়েছে। আমাদের প্ল্যাটফর্ম কৃষক এবং বিনিয়োগকারীদের মধ্যে সংযোগ সৃষ্টির মাধ্যমে‌ কৃষিকাজের উন্নয়ন সাধনে প্রয়োজনীয় সরঞ্জাম সরবরাহ করে। উন্নত প্রযুক্তির ব্যবহার এবং সফল মার্কেটপ্লেস ব্যবহারের মাধ্যমে ফার্মের বাংলাদেশের কৃষিখাতে প্রতিষ্ঠান গুলির মধ্যে পরিবর্তন সাধন সহ এক অসীম সম্ভাবনার দুয়ার খুলে দিয়েছে। এই পরিবর্তন সাধনের পথে সকলের সহযোগিতা আমাদের একান্ত কাম্য।</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 tr mb-center">
                                        <a href="#contacts" class="section-proposition-btn btn btn-r btn-lg">যোগাযোগের জন্য অনুরোধ করুন</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Section Proposition end -->
                        <!-- Section Contacts -->
                        <div class="section-contacts tc" id="contacts">
                            <div class="container">
                                <div class="row">
                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                        <h3>যোগাযোগ</h3>
                                        <ul class="circles circles--red">
                                            <li>
                                                <span></span>
                                            </li>
                                            <li>
                                                <span></span>
                                            </li>
                                            <li>
                                                <span></span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="row justify-content-center">
                                    <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
                                        <div class="section-contacts-form">
                                            <form method="POST" action="sendmail.php" id="contactform" name="contactform">
                                                <div class="section-contacts-form-row">
                                                    <div class="section-contacts-form-group mb-space">
                                                        <input type="text" class="section-contacts-form-field  form-control" id="form_name" name="form_name" placeholder="নাম">
                                                    </div>
                                                    <div class="section-contacts-form-group mb-space">
                                                        <input type="text" class="section-contacts-form-field  form-control" id="form_email" name="form_email" placeholder="ইমেইল">
                                                    </div>
                                                </div>
                                                <div class="section-contacts-form-row">
                                                    <div class="section-contacts-form-group mb-space">
                                                        <textarea class="section-contacts-form-field section-contacts-form-textarea  form-control" id="form_message" name="form_message" placeholder="বার্তা"></textarea>
                                                    </div>
                                                </div>
                                                <div class="result-success"></div>
                                                <div class="result-error"></div>
                                                <input type="submit" class="btn btn-lg btn-r" value="পাঠিয়ে দিন">
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Section Contacts end -->
                        <!-- Footer -->
                        <footer class="footer">
                            <?php include 'footer.php';?>
                        </footer>
                        <!-- Footer end -->
                        <a class="to-top" id="buttonToTop"></a>
                    </div>
                    <!-- Video Lab wrapper end -->
                    <!-- Jquery -->
                    <script src="assets/js/jquery-3.2.1.min.js"></script>
                    <!-- Lightbox -->
                    <script src="assets/js/lightbox.js"></script>
                    <!-- Bootstrap -->
                    <script src="assets/js/bootstrap.min.js"></script>
                    <!-- Wow -->
                    <script src="assets/js/wow.min.js"></script>
                    <!-- Owl Carousel -->
                    <script src="assets/js/owl.carousel.min.js"></script>
                    <!-- Form validation -->
                    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.17.0/jquery.validate.min.js"></script>
                    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery.form/3.51/jquery.form.js"></script>
                    <!-- Init Script  -->
                    <script src="assets/js/init.js"></script>
                    <script src="assets/youtube_popup/grt-youtube-popup.js"></script>
                    <!-- Initialize GRT Youtube Popup plugin -->
		<script>
			// Demo video 1
			$(".youtube-link").grtyoutube({
				autoPlay:true,
				theme: "dark"
			});

			// Demo video 2
			$(".youtube-link-dark").grtyoutube({
				autoPlay:false,
				theme: "light"
			});
		</script>
                </body>
            </html>
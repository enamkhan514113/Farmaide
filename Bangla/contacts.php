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
    <!-- Contacts Wrapper -->
    <div class="wrapper wrapper-contacts">
        <!-- Header -->
        <header class="header-top">
            <?php include 'header_top.php';?>
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" style="display: inline-flex;
    flex-direction: row;
    align-items: center;
    justify-content: flex-end;
    padding-right: 84px;" >
    <p style="color: Black;"> Language/ভাষা</p>
                <ul class="socials socials-red">
                    <li>
                        <a href="/farmaide/contacts.php">
                        <b> English </b>
                        </a>
                    </li>
                    <li>
                        <a href="/farmaide/Bangla/contacts.php">
                        <b> বাংলা </b>
                        </a>
                    </li>
                </ul>
            </div>
        </header>
        <header class="header-bottom">
            <nav class="navbar navbar-expand-md navbar-custom">
                <?php include 'menu.php';?>
            </nav>
        </header>
        <!-- Header end -->
        <!-- Section Page Info -->
        <div class="section-page-info">
            <div class="container">
                <div class="row row-jc">
                    <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                        <h3 class="section-page-info-title mb-space">
                            হোক যোগাযোগ
                        </h3>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 tr-d">
                        <div class="section-page-info-breadcrumbs">
                            <a href="index.php" class="home">হোম</a>
                            <a href="#" class="current">যোগাযোগ</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Section Page Info -->
        <!-- Section Contacts -->
        <div class="section-contacts tc">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-5 col-lg-5">
                        <ul class="section-contacts-nav">
                            <li class="section-contacts-item">
                                <img src="images/phone.png" width="50" alt="contacts-img1" class="section-contacts-image">
                                <div class="section-contacts-info">
                                    <span class="section-contacts-text">আপনাদের প্রয়োজনে পাশে আছি যেকোন সময়ে।</span>
                                    <a href="tel:+8801983-091400" class="section-contacts-link">+৮৮০১৯৮৩-০৯১৪০০</a>
                                    <a href="tel:+8801952-763885" class="section-contacts-link">+৮৮০১৯৫২-৭৬৩৮৮৫</a>
                                </div>
                            </li>
                            <li class="section-contacts-item">
                                <img src="images/place.png" width="50" alt="contacts-img2" class="section-contacts-image">
                                <div class="section-contacts-info">
                                    <span class="section-contacts-text">আমাদের ঠিকানা</span>
                                    <a href="https://goo.gl/maps/6A5JwPPCHRB4WD6E8" class="section-contacts-link">লেভেল ৬-৭, ড্যাফোডিল প্লাজা,<br>৪/২ সোবাহানবাগ রোড, ঢাকা ১২০৭।</a>
                                </div>
                            </li>
                            <li class="section-contacts-item">
                                <img src="images/mail.png" width="50" alt="contacts-img3" class="section-contacts-image">
                                <div class="section-contacts-info">
                                    <span class="section-contacts-text">মেইল</span>
                                    <a href="#" class="section-connect-link">Support@farmaide.com </a>
                                    <a href="#" class="section-connect-link">info@farmaide.com</a>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-7 col-lg-7">
                        <div class="section-contacts-form">
                             <form method="POST" action="sendmail.php" id="contactform" name="contactform">
                                <div class="section-contacts-form-row">
                                    <div class="section-contacts-form-group mb-space">
                                        <input type="text" class="section-contacts-form-field  form-control" id="form_name" name="form_name" placeholder="নাম">
                                    </div>
                                    <div class="section-contacts-form-group mb-space">
                                        <input type="text" class="section-contacts-form-field form-control" id="form_email" name="form_email" placeholder="ইমেইল">
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
        <!-- Section Map -->
        <div id="map" class="section-map"></div>
        <!-- Section Map end -->
        <!-- Section Proposition
        <div class="section-proposition">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
                        <div class="section-proposition-title">
                            <h2>SOMETHING AMAZING</h2>
                            <h3 style="color: #ff0000;">TOGETHER</h3>
                            <div class="section-proposition-text">
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 tr mb-center">
                        <a href="#" class="section-proposition-btn btn btn-red btn-lg">REQUEST A CALLBACK</a>
                    </div>
                </div>
            </div>
        </div>
        Section Proposition end -->
        <!-- Footer -->
        <footer class="footer">
            <?php include 'footer.php';?>
        </footer>
        <!-- Footer end -->
        <a class="to-top" id="buttonToTop"></a>
    </div>
    <!-- Contacts Wrapper end -->
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
    <!-- Google Map -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAAusM7J96858QvL7TxPbu4L3hgqpN-JKg&amp"></script>
    <script>
        google.maps.event.addDomListener(window, 'load', init);

        function init() {
            var map = new google.maps.Map(document.getElementById('map'), {
                center: {
                    lat: 23.768132,
                    lng: 90.352813
                },
                zoom: 11,
                styles: [{
                    "elementType": "geometry",
                    "stylers": [{
                        "color": "#f5f5f5"
                    }]
                }, {
                    "elementType": "labels.icon",
                    "stylers": [{
                        "visibility": "off"
                    }]
                }, {
                    "elementType": "labels.text.fill",
                    "stylers": [{
                        "color": "#616161"
                    }]
                }, {
                    "elementType": "labels.text.stroke",
                    "stylers": [{
                        "color": "#f5f5f5"
                    }]
                }, {
                    "featureType": "administrative.land_parcel",
                    "elementType": "labels",
                    "stylers": [{
                        "visibility": "off"
                    }]
                }, {
                    "featureType": "administrative.land_parcel",
                    "elementType": "labels.text.fill",
                    "stylers": [{
                        "color": "#bdbdbd"
                    }]
                }, {
                    "featureType": "poi",
                    "elementType": "geometry",
                    "stylers": [{
                        "color": "#eeeeee"
                    }]
                }, {
                    "featureType": "poi",
                    "elementType": "labels.text",
                    "stylers": [{
                        "visibility": "off"
                    }]
                }, {
                    "featureType": "poi",
                    "elementType": "labels.text.fill",
                    "stylers": [{
                        "color": "#757575"
                    }]
                }, {
                    "featureType": "poi.business",
                    "stylers": [{
                        "visibility": "off"
                    }]
                }, {
                    "featureType": "poi.park",
                    "elementType": "geometry",
                    "stylers": [{
                        "color": "#e5e5e5"
                    }]
                }, {
                    "featureType": "poi.park",
                    "elementType": "labels.text",
                    "stylers": [{
                        "visibility": "off"
                    }]
                }, {
                    "featureType": "poi.park",
                    "elementType": "labels.text.fill",
                    "stylers": [{
                        "color": "#9e9e9e"
                    }]
                }, {
                    "featureType": "road",
                    "elementType": "geometry",
                    "stylers": [{
                        "color": "#ffffff"
                    }]
                }, {
                    "featureType": "road.arterial",
                    "elementType": "labels",
                    "stylers": [{
                        "visibility": "off"
                    }]
                }, {
                    "featureType": "road.arterial",
                    "elementType": "labels.text.fill",
                    "stylers": [{
                        "color": "#757575"
                    }]
                }, {
                    "featureType": "road.highway",
                    "elementType": "geometry",
                    "stylers": [{
                        "color": "#dadada"
                    }]
                }, {
                    "featureType": "road.highway",
                    "elementType": "labels",
                    "stylers": [{
                        "visibility": "off"
                    }]
                }, {
                    "featureType": "road.highway",
                    "elementType": "labels.text.fill",
                    "stylers": [{
                        "color": "#616161"
                    }]
                }, {
                    "featureType": "road.local",
                    "stylers": [{
                        "visibility": "off"
                    }]
                }, {
                    "featureType": "road.local",
                    "elementType": "labels",
                    "stylers": [{
                        "visibility": "off"
                    }]
                }, {
                    "featureType": "road.local",
                    "elementType": "labels.text.fill",
                    "stylers": [{
                        "color": "#9e9e9e"
                    }]
                }, {
                    "featureType": "transit.line",
                    "elementType": "geometry",
                    "stylers": [{
                        "color": "#e5e5e5"
                    }]
                }, {
                    "featureType": "transit.station",
                    "elementType": "geometry",
                    "stylers": [{
                        "color": "#eeeeee"
                    }]
                }, {
                    "featureType": "water",
                    "elementType": "geometry",
                    "stylers": [{
                        "color": "#c9c9c9"
                    }]
                }, {
                    "featureType": "water",
                    "elementType": "labels.text.fill",
                    "stylers": [{
                        "color": "#9e9e9e"
                    }]
                }]
            });
            var image = 'assets/images/map-marker.png';
            var beachMarker = new google.maps.Marker({
                position: {
                    lat: 23.768132,
                    lng: 90.352813
                },
                map: map,
                icon: image
            });
        }
    </script>
    <!-- Init Script  -->
    <script src="assets/js/init.js"></script>
</body>

</html>
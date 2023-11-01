<?php include"dbconnn2.php"; ?>

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
                    <title> EyeDrop Films | Reel > Real</title>
                    <!-- Favicon -->
                    <link rel="shortcut icon" href="images/favecon.png">
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
                    <link href="assets/css/table.css" rel="stylesheet" type="text/css">

                    <link rel="stylesheet" href="assets/youtube_popup/grt-youtube-popup.css">
                   
                </head>
                <body>
                
                    <!-- Video Lab wrapper -->
                    <div class="wrapper wrapper-video-lab">
                        <div class="header-bg-p">
                            <header class="header-top">
                                <?php include 'header_top.php';?>
                            </header>
                            <!-- Header -->
                            <header class="header-bottom">
                                <nav class="navbar navbar-expand-md navbar-invert navbar-custom">
                                  <?php include 'menu.php';?>
                                </nav>
                            </header>
                            <!-- Header end -->
                        
                        </div>
                      
                   
                        
                <div class="section-portfolio">
                    <div class="container-fluid">
                        <div class="row">
                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                        <h3>Soils</h3>
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
                                        <p style="align-items: center; font-family:'Poppins';font-weight: 400;font-size: 18px;line-height: 2;margin: auto; margin: auto 5em; color:#376804;">
 Results of reconnaissance soil surveys conducted in the recent past have enabled scientists to divide the country
into 19 soil type units (The Soils of East Pakistan, 1969: H. Brammer). These units along with their soil characteristics
and places of occurrence are indicated in the Table below </p>
                                    </div>
                        </div>
                    </div>
                </div>
<div>
<table>
    <div style="background-color: #24333f; width:511.17px;">
        <thead>
            <tr>
                <th>SL No.</th>
                <th>Type of Soil</th>
                <th>Characteristics</th>
                <th>Places of occurrence </th>
            </tr>
        </thead>
        <tbody>
            <?php
            // Loop through the result and display the data
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td>".$row["Sl_no"]."</td>";
                    echo "<td>".$row["Soil_type"]."</td>";
                    echo "<td>".$row["Characteristics"]."</td>";
                    echo "<td>".$row["Area"]."</td>";
                    echo "</tr>";
                }
            } else {
                echo "<tr><td colspan='4'>No data found</td></tr>";
            }
            ?>
        </tbody>
    </div>
    </table>

    <?php
    // Close the database connection
    $conn->close();
    ?>
</div>
                        <!-- Section Portfolio end -->

                     
              
                       
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
                    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.form/3.51/jquery.form.js"></script>
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
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
                    <link href="assets/css/table.css" rel="stylesheet" type="text/css">

                    <link rel="stylesheet" href="assets/youtube_popup/grt-youtube-popup.css">
                   
                </head>
                <body>
                    <!-- Video Lab wrapper -->
                    <div class="wrapper wrapper-video-lab">
                        <div class="header-bg-p">
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
                        <a href="/farmaide/databases.php">
                        <b> English </b>
                        </a>
                    </li>
                    <li>
                        <a href="/farmaide/Bangla/databases.php">
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
                        <!-- database -->
                        </div>
                                <div class="row">
                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                        <div class="section-about-template-info" style="padding: 30px 4em;">
                                            <h4 class="section-about-template-subtitle" style="font-size: 20px;font-weight:bold;letter-spacing: 1px;line-height: 50px;">
                                            Welcome to our Agricultural Data Hub!</h4>
                                            <p class="section-about-template-text" style="font-size: 16px;letter-spacing: 1px;line-height: 50px;text-align:justify;">
                                            This page is a treasure trove of valuable insights and information for anyone interested in the world of agriculture. Here, you'll find a comprehensive collection of diverse agricultural data, ranging from crop production statistics and market trends to climate patterns and soil health indicators. Whether you're a farmer, an investor, or simply curious about the fascinating world of agriculture, this hub will provide you with the knowledge you need to make informed decisions and stay ahead in this ever-evolving industry. Explore the data, unlock new perspectives, and harness the power of information to drive agricultural success.
                                           
                                        </div>
                                    </div>
</div>
<button class="btn btn-md btn-r section-welcome-btn-1" style="width: 97.4%;text-align: left;margin-left: 18px;">Type of soil in Bangladesh</button>
<!-- Add buttons for other districts here -->
<div class="content">
<div class="section-portfolio">
                    <div class="container-fluid">
                        <div class="row">
                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                        <h3>Soils' Types</h3>
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
                
<div>
<table>
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
            if ($result1->num_rows > 0) {
                while ($row = $result1->fetch_assoc()) {
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
    </table>
</div>
</div>
</div>

<button class="btn btn-md btn-r section-welcome-btn-1" style="width: 97.4%;text-align: left;margin-left: 18px;">Agriculture Calender of Bangladesh</button>
<div class="content">
<div class="section-portfolio">
                    <div class="container-fluid">
                        <div class="row">
                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
    <img src="/farmaide/images/AgricultureCalendarEnglish.png" alt="hhh">
</div></div></div></div></div>

<button class="btn btn-md btn-r section-welcome-btn-1" style="width: 97.4%;text-align: left;margin-left: 18px;">Crops Production Statistics in Dhaka Division</button>
<div class="content">
<div class="section-portfolio">
                    <div class="container-fluid">
                        <div class="row">
                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                        <h3>Area wise Divisional Crops Production Data. (Dhaka)</h3>
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
                                        National estimates of Dhaka Divisional area and production of four major cereals are shown in the table below:
                                    </p>
                                    </div>
                        </div>
                    </div>
                
<div>
<table>
        <thead>
            <tr>
                <th>Crop Name</th>
                <th>Devoted Area in Acres</th>
                <th>Production in per Acres (Kg)</th>
                <th>Total Production in (M.Tons)</th>
            </tr>
        </thead>
        <tbody>
            <?php
            // Loop through the result and display the data
            if ($result2->num_rows > 0) {
                while ($row = $result2->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td>".$row["Corp_Name"]."</td>";
                    echo "<td>".$row["Area_devoted"]."</td>";
                    echo "<td>".$row["Prodinper_Area"]."</td>";
                    echo "<td>".$row["Total_Production"]."</td>";
                    echo "</tr>";
                }
            } else {
                echo "<tr><td colspan='4'>No data found</td></tr>";
            }
            ?>
        </tbody>
    </table>
</div>
</div>
</div>

<button class="btn btn-md btn-r section-welcome-btn-1" style="width: 97.4%;text-align: left;margin-left: 18px;">Summary of Crop Statistics (2022)</button>
<div class="content">
<div class="section-portfolio">
                    <div class="container-fluid">
                        <div class="row">
                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                        <h3>The area, yield rate and volume of production of major and minor crops 2022</h3>
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
                                        National estimates of area and production of major and minor Crops are shown in the table below:
                                    </p>
                                    </div>
                        </div>
                    </div>
                
<div>
<table>
        <thead>
            <tr>
                <th>Crop Name</th>
                <th>Devoted Area in Acres</th>
                <th>Production in per Acres (Kg)</th>
                <th>Total Production in (M.Tons)</th>
            </tr>
        </thead>
        <tbody>
            <?php
            // Loop through the result and display the data
            if ($result3->num_rows > 0) {
                while ($row = $result3->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td>".$row["Crop_Name_mc"]."</td>";
                    echo "<td>".$row["Area_devoted_mc"]."</td>";
                    echo "<td>".$row["Prodinper_Area_mc"]."</td>";
                    echo "<td>".$row["Total_Production_mc"]."</td>";
                    echo "</tr>";
                }
            } else {
                echo "<tr><td colspan='4'>No data found</td></tr>";
            }
            ?>
        </tbody>
    </table>
</div>
</div>
</div>
<?php
    // Close the database connection
    $conn->close();
    ?>         
                        <!-- Section Portfolio
                        <div class="section-portfolio">
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                        <h3>OUR PORTFOLIO</h3>
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
                                  
                                    
                                      <//?php   
                                   // $sql=0;
                                   // $result_news = mysqli_query($conn, "SELECT * FROM `video_gallery`  ORDER by cdate DESC ");
                
                                    //while($row_news = mysqli_fetch_array($result_news)){
                                   // $sql++;     
                                ?>
                                    
                                    <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 p-20" style="margin-top: 20px;">
                                        <div class="section-portfolio-item section-portfolio-item--1 mb-space" style="background: url('http://i.ytimg.com/vi/<//?php echo $row_news["video_link"]; ?>/sddefault.jpg'); background-repeat: no-repeat; background-size: cover; background-position: center;">
                                            <div class="section-portfolio-item-hover">
                                                <div class="section-portfolio-item-caption">
                                                    <h4 class="section-portfolio-item-name"><//?php echo $row_news["title"]; ?></h4>
                                                    <h4 class="section-portfolio-item-type"><//?php echo $row_news["cat"]; ?></h4>
                                                </div>
                                                <a href="#" youtubeid="<//?php echo $row_news["video_link"]; ?>" class="section-portfolio-item-play youtube-link">
                                                     
                                                </a>
                                                <span class="section-portfolio-item-date"><//?php echo $row_news["cdate"]; ?></span>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    
                                 <//?php }?> 
                                    
                                  
                                    

                                </div>
                                
                             
                            </div>
                            Section Portfolio end -->
                        </div>
                    

                     
              
                       
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
        <!--dropdowm-->
        <script>
var coll = document.getElementsByClassName("btn btn-md btn-r section-welcome-btn-1");
var i;

for (i = 0; i < coll.length; i++) {
  coll[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var content = this.nextElementSibling;
    if (content.style.display === "block") {
      content.style.display = "none";
    } else {
      content.style.display = "block";
    }
  });
}
</script>
                </body>
            </html>
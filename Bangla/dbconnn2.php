<?php
// Establish a database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "infofarmaid_db";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Query to retrieve data from the tables
$sql1 = "SELECT Sl_no_b, Soil_type_b, Characteristics_b, Area_b FROM Soil_report_Bangla";
$result1 = $conn->query($sql1);

$sql2 = "SELECT Corp_Name_b, Area_devoted_b, Prodinper_Area_b, Total_Production_b FROM Dhaka_Corps_Bangla";
$result2 = $conn->query($sql2);

$sql3 = "SELECT Crop_Name_mc_b, Area_devoted_mc_b, Prodinper_Area_mc_b, Total_Production_mc_b FROM major_cereal_bangla";
$result3 = $conn->query($sql3);
?>
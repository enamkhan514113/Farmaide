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
$sql1 = "SELECT Sl_no, Soil_type, Characteristics, Area FROM Soil_report";
$result1 = $conn->query($sql1);

$sql2 = "SELECT Corp_Name, Area_devoted, Prodinper_Area, Total_Production FROM Dhaka_Corps";
$result2 = $conn->query($sql2);

$sql3 = "SELECT Crop_Name_mc, Area_devoted_mc, Prodinper_Area_mc, Total_Production_mc FROM major_cereal";
$result3 = $conn->query($sql3);
?>
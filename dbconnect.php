<?php
error_reporting(E_ALL & ~E_NOTICE & ~E_STRICT & ~E_DEPRECATED);

define('TIMEZONE','Asia/Dhaka');
date_default_timezone_set(TIMEZONE);

$userdb="root";
$passdb="";
$db="omps_db";

$conn = mysqli_connect('localhost',$userdb,$passdb);

$submitted_date=date("d-m-Y h:s");

mysqli_select_db($conn, $db);

if(!isset($_GET['page']) ||$_GET['page']==0){$page=1;}else{$page=$_GET['page'];}





function web_footer(){
	global $conn;
	$result_footer = 'mysql_query'("SELECT * FROM page_setting WHERE id=1");
	$row_footer = 'mysql_fetch_array'($result_footer);
	$page_footer=$row_footer["page_footer"];
    echo $page_footer;
}
//--------------------------------------------
function cdate($lead_date){
    $c_date = date("F d, Y", strtotime($lead_date));
    $currentDate = $c_date;
    $engDATE = array(1,2,3,4,5,6,7,8,9,0,'January','February','March','April','May','June','July','August','September','October','November','December','Saturday','Sunday','Monday','Tuesday','Wednesday','Thursday','Friday');
    $bangDATE = array('১','২','৩','৪','৫','৬','৭','৮','৯','০','জানুয়ারী','ফেব্রুয়ারী','মার্চ','এপ্রিল','মে','জুন','জুলাই','আগস্ট','সেপ্টেম্বর','অক্টোবর','নভেম্বর','ডিসেম্বর','শনিবার','রবিবার','সোমবার','মঙ্গলবার','ুধবার','বৃহস্পতিবার','শুক্রবার' );
    $cu_date = str_replace($engDATE, $bangDATE, $currentDate);
    echo $cu_date;
}

function subcat_name($sc_name){
    global $conn;
    $result_subcat = mysqli_query($conn,"SELECT * FROM category_sub WHERE id='$sc_name'");     
    $row_subcat= mysqli_fetch_array($result_subcat); 
    $sc= $row_subcat["subcat_name"];
    echo $sc;
}


function cat($cat){
    global $conn;
    $result_cat = mysqli_query($conn,"SELECT * FROM category WHERE id='$cat'");     
    $row_cat= mysqli_fetch_array($result_cat); 
    echo $row_cat["category_name"];
}

function author($author_id){
     //Author---
    global $conn;
    $result_author = mysqli_query($conn,"SELECT * FROM author WHERE id=".$author_id);     
    $row_author = mysqli_fetch_array($result_author);
    echo $row_author["full_name"];
}

?>
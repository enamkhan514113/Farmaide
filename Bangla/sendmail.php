<?php 
// show errors
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

if(count($_POST) < 1){
    $result = array(
        'type' => 'error',
        'text' => 'Could not send mail!'
    );
    echo(json_encode($result));
    exit;
}

$form_data = array();

$mailHeaders = "MIME-Version: 1.0" .PHP_EOL; 
$mailHeaders .= "Content-Type: text/html; charset=utf-8" . PHP_EOL; 
$mailHeaders .= "From: <infofarmaide@gmail.com>" . PHP_EOL;
$mailHeaders .= "Reply-To: infofarmaide@gmail.com" .  PHP_EOL;
$mailHeaders .= "X-Mailer: PHP/" . phpversion();

$_p = '';
$_p .=  '<b>Date</b>: ' . date('Y-m-d H:i:s') . '<br/>';
foreach ($_POST as $key => $value) {
    $_key = isset($form_data[$key ]) ? $form_data[$key ] : $key ;
    $_p .=  '<b>' . $_key . '</b>: ' . $value . '<br/>';
}

$mailMessage = '<html><head></head><body>' .$_p  . '</body></html>';


$mailTo = 'infofarmaide@gmail.com'; //insert your email here
$mailSubject = 'New message from Farmaide'; //here you can change subject of your email message
$result = '';

$sendMail = mail($mailTo, $mailSubject, $mailMessage, $mailHeaders);
if($sendMail !== false ) {
    $result = array(
        'type' => 'done',
        'text' => 'Thank you for your email!'
    );
    echo (json_encode($result));
    exit;
} 
$result = array(
    'type' => 'error',
    'text' => 'Could not send mail!'
);
echo(json_encode($result));
exit;
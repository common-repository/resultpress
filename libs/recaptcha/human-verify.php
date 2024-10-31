<?php 


function resultpress_get_secrate_key(){
    global $options;
    $private = resultpress_get_option('recaptcha_private_key');
    
    return $private;
}



if (isset ($_POST [ 'g-recaptcha-response'])) { 
    $captcha = $_POST [ 'g-recaptcha-response']; 
} 

$response=file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret='.$private.'&response=".$captcha."&remoteip=".$_SERVER['REMOTE_ADDR']);

if ($response.success == false) {
    echo '0'; 
} else { 
    echo '1'; 
}
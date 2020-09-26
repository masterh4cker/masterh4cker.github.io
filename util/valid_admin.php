<! ----------------------------------------------------------------------------------------------------------------
--
#Original Author: Tabatha Foes                                    
#Date Created: 9/24/2020                    
#Version:  1.0                                                  
#Date Last Modified: 9/24/2020                              
#Modified by: Tabatha Foes                                          
#Modification log:     9/24/2020 -- Created util
 --
------------------------------------------------------------------------------------------------------------------>
<?php
require_once('model/database.php');
require_once('model/admin_db.php');

$email = '';
$password = '';    
if (isset($_SERVER['PHP_AUTH_USER']) && isset($_SERVER['PHP_AUTH_PW'])) {
    $email = $_SERVER['PHP_AUTH_USER'];
    $password = $_SERVER['PHP_AUTH_PW'];    
}

if (!is_valid_admin_login($email, $password)) {
    header('WWW-Authenticate: Basic realm="Admin"');
    header('HTTP/1.0 401 Unauthorized');
    include('index.html');
    exit();
}
?>

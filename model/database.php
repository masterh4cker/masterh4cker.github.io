<! ----------------------------------------------------------------------------------------------------------------
--
#Original Author: Tabatha Foes                                    
#Date Created: 9/11/2020                    
#Version:  1.0                                                  
#Date Last Modified: 9/11/2020                              
#Modified by: Tabatha Foes                                          
#Modification log:     9/11/2020 -- Created PHP for database
 --
------------------------------------------------------------------------------------------------------------------>
<?php
    $dsn = 'mysql:host=localhost;dbname=tfportfolio';
    $username = 'tf_user';
    $password = 'Pa$$w0rd';

    try {
        $db = new PDO($dsn, $username, $password);
    } catch (PDOException $e) {
        $error_message = $e->getMessage();
        include('database_error.php');
        exit();
    }
?>
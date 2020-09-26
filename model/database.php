<! ----------------------------------------------------------------------------------------------------------------
--
#Original Author: Tabatha Foes                                    
#Date Created: 9/11/2020                    
#Version:  1.0                                                  
#Date Last Modified: 9/11/2020                              
#Modified by: Tabatha Foes                                          
#Modification log:     9/11/2020 -- Created PHP for database
                       9/24/20 -- created constructors 


------------------------------------------------------------------------------------------------------------------>
<?php
class Database {
    private static $dsn = 'mysql:host=localhost;dbname=tfportfolio';
    private static $username = 'tf_user';
    private static $password = 'Pa$$w0rd';
    private static $db;

    private function __construct() {}

    public static function getDB () {
        if (!isset(self::$db)) {
            try {
                self::$db = new PDO(self::$dsn,
                                     self::$username,
                                     self::$password);
            } catch (PDOException $e) {
                $error_message = $e->getMessage();
               // include('../errors/database_error.php');
                echo "Connection error";
                exit();
            }
        }
        return self::$db;
    }
}
//    $dsn = 'mysql:host=localhost;dbname=tfportfolio';
//    $username = 'tf_user';
//    $password = 'Pa$$w0rd';
//
//    try {
//        $db = new PDO($dsn, $username, $password);
//    } catch (PDOException $e) {
//        $error_message = $e->getMessage();
//        include('database_error.php');
//        exit();
//    }
?>
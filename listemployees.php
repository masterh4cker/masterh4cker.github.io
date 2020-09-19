
<! ----------------------------------------------------------------------------------------------------------------
--
#Original Author: Tabatha Foes                                    
#Date Created: 9/4/2020                    
#Version:  1.0                                                  
#Date Last Modified: 9/16/2020                              
#Modified by: Tabatha Foes                                          
#Modification log:     9/16/20 -- added list employees using classes and objects.
 --
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
class Employee {
    private $id;
    private $first_name;
    private $LAST_NAME;

    public function __construct($id, $first_name, $LAST_NAME) {
        $this->id = $id;
        $this->first_name = $first_name;
        $this->LAST_NAME = $LAST_NAME;
        
    }

    public function getID() {
        return $this->id;
    }

    public function setID($value) {
        $this->id = $value;
    }

    public function getFirstName() {
        return $this->first_name;
    }

    public function setFirstName($value) {
        $this->first_name = $value;
    }
    public function getLastName() {
        return $this->LAST_NAME;
    }

    public function setLastName($value) {
        $this->LAST_NAME = $value;
    }
}
    class EmployeeDB{
        
    public static function getEmployees() {
        $db = Database::getDB();
        $query = 'SELECT * FROM employee ORDER BY LAST_NAME';
        $statement = $db->prepare($query);
        $statement->execute();
        
    $employee = array();
        foreach ($statement as $row) {
            $employee = new Employee($row['employeeID'],
                                     $row['first_name'],
                                     $row['LAST_NAME']);
        
            $employees[] = $employee;
        }
        return $employees;

    }
}
$employees = EmployeeDB::getEmployees();
?>

<!-- Below is how I created my thank you page -->
<!DOCTYPE html>
<html lang="en">
<head>
 <style>
<?php include 'css/bootstrap.min.css'; ?>
</style>
  <title>Employee Listing</title>
</head>
<body>
        <nav class="navbar navbar-dark navbar-expand-lg fixed-top bg-white portfolio-navbar gradient">
        <div class="container"><a class="navbar-brand logo" href="#">Tabatha Foes</a><button data-toggle="collapse" class="navbar-toggler" data-target="#navbarNav"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse"
                id="navbarNav">
                <ul class="nav navbar-nav ml-auto">
                    <li class="nav-item" role="presentation"><a class="nav-link active" href="index.html">Home</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="projects-grid-cards.html">Projects</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="about.html">About</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="hire-me.html">Contact</a></li>
                     <li class="nav-item" role="presentation"><a class="nav-link" href="admin.php">Admin</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <main class="page lanidng-page">
        <section class="portfolio-block block-intro">
            <div class="container">
                
                <div class="about-me">
                    <h1>Employees</h1>
                    
                    
            </div>
            <ul>
                <?php foreach($employees as $employee) : ?>
                <li>
                <?php echo $employee->getLastName() . " " . $employee->getFirstName(); ?>
                <li>
                <?php endforeach; ?>
            </ul>
        </section>
</body>
</html>



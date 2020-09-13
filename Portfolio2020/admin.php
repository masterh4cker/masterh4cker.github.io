
<! ----------------------------------------------------------------------------------------------------------------
--
#Original Author: Tabatha Foes                                    
#Date Created: 9/11/2020                    
#Version:  1.0                                                  
#Date Last Modified: 9/11/2020                              
#Modified by: Tabatha Foes                                          
#Modification log:     9/11/2020 -- Created PHP for admin
 --
------------------------------------------------------------------------------------------------------------------>
<?php
    require_once('database.php');
    //echo "Connectuin ok";
    
    // Get category ID
if (!isset($empID)) {
    $empID = filter_input(INPUT_GET, 'empID', 
            FILTER_VALIDATE_INT);
    if ($empID == NULL || $empID == FALSE) {
        $empID = 1;
    }
}
// Get all employee
$query = 'SELECT * FROM employee
                       ORDER BY employeeID';
$statement = $db->prepare($query);
$statement->execute();
$employees = $statement->fetchAll();
$statement->closeCursor();

// Get visitors for employee
$queryVisitors = 'SELECT * FROM visitor
                  WHERE employeeID = :employeeID
                  ORDER BY visitor_id';
$statement3 = $db->prepare($queryVisitors);
$statement3->bindValue(':employeeID', $empID);
$statement3->execute();
$visitors = $statement3->fetchAll();
$statement3->closeCursor();


  


?>

<!-- Below is how I created my thank you page -->
<!DOCTYPE html>
<html lang="en">
<head>
<style>
<?php include 'nbproject/assets/bootstrap/css/bootstrap.min.css'; ?>
</style>
  <title>Admin</title>
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
                </ul>
            </div>
        </div>
    </nav>
    <main class="page lanidng-page">
        <section class="portfolio-block block-intro">
            <div class="container">
                
                <div class="about-me">
             <h3> Select an employee to view messages <h3>
            <?php foreach ($employees as $employee) : ?>
            <li><a href=".?empID=<?php echo $employee['employeeID']; ?>">
                    <?php echo $employee['first_name']; ?>
                </a>
               
            </li>
            <?php endforeach; ?>
            <table>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Message</th>
                <th>Date</th>
                <th>&nbsp;</th>
            </tr>

            <?php foreach ($visitors as $visitor) : ?>
            <tr>  
                <td><?php echo $visitor['visitor_name']; ?></td>
                <td><?php echo $visitor['visitor_email']; ?></td>
                <td><?php echo $visitor['visitor_msg']; ?></td>
                <td><?php echo $visitor['visit_date']; ?></td>
                <td><form action="delete_visitor.php" method="post">
                    <input type="hidden" name="visitor_id"
                           value="<?php echo $visitor['visitor_id']; ?>">
                    <input type="hidden" name="employeeID"
                           value="<?php echo $visitor['employeeID']; ?>">
                    <input type="submit" value="Delete">
                  
                </form></td>
            </tr>
            <?php endforeach; ?>
        </table>

                   
        </section>
</body>
</html>



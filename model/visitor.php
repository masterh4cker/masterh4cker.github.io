<! ----------------------------------------------------------------------------------------------------------------
--
#Original Author: Tabatha Foes                                    
#Date Created: 9/17/2020                    
#Version:  1.0                                                  
#Date Last Modified: 9/18/2020                              
#Modified by: Tabatha Foes                                          
#Modification log:     9/17/20 -- Created PHP for visitor
9/18/2020 -- Reconstructed entire project; CSS now runs properly

 --
------------------------------------------------------------------------------------------------------------------>
<?php

function getVisitorByEmp($empID){
// Get visitors for employee
   // global $db;
    try{
        $db = Database::getDB();
       $queryVisitors = 'SELECT * FROM visitor
                  WHERE employeeID = :employeeID
                  ORDER BY visitor_id';
$statement3 = $db->prepare($queryVisitors);
$statement3->bindValue(':employeeID', $empID);
$statement3->execute();
$visitors = $statement3->fetchAll();
$statement3->closeCursor();
                
    } catch (PDOException $e) {
        include('../model/database_error.php');

    }

return $visitors;
}
function delVisitor($visitor_id){
   // global $db;
    try{
        $db = Database::getDB();
        $query = 'DELETE FROM visitor
              WHERE visitor_id = :visitor_id';
    $statement = $db->prepare($query);
    $statement->bindValue(':visitor_id', $visitor_id);
    $statement->execute();
    $statement->closeCursor(); 
      } catch (PDOException $e) {
        include('../model/database_error.php');

    }

return $visitors;
}

function addVisitor($visitor_name, $visitor_email, $visitor_msg){
    //global $db;
    try{
        $db = Database::getDB();
    $query = 'INSERT INTO visitor
    (visitor_name, visitor_email, visitor_msg, visit_date, employeeID)
                      VALUES
                         (:visitor_name, :visitor_email, :visitor_msg, NOW(), 1)';
            $statement = $db->prepare($query);
            $statement->bindValue(':visitor_name', $visitor_name);
            $statement->bindValue(':visitor_email', $visitor_email);
            $statement->bindValue(':visitor_msg', $visitor_msg);
            $statement->execute();
            $statement->closeCursor();
             } catch (PDOException $e) {
        include('../model/database_error.php');

    }

return $visitors;
}
            
?>


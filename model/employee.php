<! ----------------------------------------------------------------------------------------------------------------
--
#Original Author: Tabatha Foes                                    
#Date Created: 9/4/2020                    
#Version:  1.0                                                  
#Date Last Modified: 9/4/2020                              
#Modified by: Tabatha Foes                                          
#Modification log:     9/16/20 -- Created employee php
9/18/2020 -- Reconstructed entire project; CSS now runs properly

 --
------------------------------------------------------------------------------------------------------------------>
<?php
function getEmployees(){
    global $db;
$query = 'SELECT * FROM employee
                       ORDER BY employeeID';
$statement = $db->prepare($query);
$statement->execute();
$employees = $statement->fetchAll();
$statement->closeCursor();
return $employees;
}


?>

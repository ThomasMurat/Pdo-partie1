<?php 
function getAllClientList(){
    try { 
    // $db devient une instance de l'objet PDO
    $db = new PDO('mysql:host=pdo-partie1;dbname=colyseum;charset=utf8', 'root', ''); 
    } catch(Exception $error) {
        die($error->getMessage());
    }
    $allClientListQuery = $db->query(
        'SELECT `lastName`, `firstName`, DATE_FORMAT(`birthDate`, \'%d/%m/%Y\') as `birthDateFr`, `clients`.`cardNumber`, `type` 
        FROM `clients`  
        LEFT JOIN `cards` ON `cards`.`cardNumber` = `clients`.`cardNumber`
        LEFT JOIN `cardtypes` ON `cardtypes`.`id` = `cards`.`cardTypesId`;'
    );
    $data = $allClientListQuery->fetchAll(PDO::FETCH_OBJ); //data est un tableau d'objets
    return $data;
}


    
 

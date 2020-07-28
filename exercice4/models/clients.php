<?php 
function getHaveFidelityCardClientList(){
    try { 
    // $db devient une instance de l'objet PDO
    $db = new PDO('mysql:host=pdo-partie1;dbname=colyseum;charset=utf8', 'root', ''); 
    } catch(Exception $error) {
        die($error->getMessage());
    }
    $haveFidelityCardClientQuery = $db->query(
        'SELECT `clients`.`lastName`, `clients`.`firstName`, `clients`.`birthDate` 
        FROM `clients`  
        INNER JOIN `cards` ON `cards`.`cardNumber` = `clients`.`cardNumber`
        INNER JOIN `cardtypes` ON `cardtypes`.`id` = `cards`.`cardTypesId`
        WHERE `cardtypes`.`type` = \'fidélité\';'
    );
    $data = $haveFidelityCardClientQuery->fetchAll(PDO::FETCH_OBJ); //data est un tableau d'objets
    return $data;
}


    
 

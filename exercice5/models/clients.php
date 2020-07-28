<?php 
function getClientListByNameAsc(){
    try { 
    // $db devient une instance de l'objet PDO
    $db = new PDO('mysql:host=pdo-partie1;dbname=colyseum;charset=utf8', 'root', ''); 
    } catch(Exception $error) {
        die($error->getMessage());
    }
    $clientListByNameAscQuery = $db->query(
        'SELECT `lastName`, `firstName` 
        FROM `clients`
        WHERE `lastName` LIKE \'M%\'  
        ORDER BY `lastName` ASC;'
    );
    $data = $clientListByNameAscQuery->fetchAll(PDO::FETCH_OBJ); //data est un tableau d'objets
    return $data;
}


    
 

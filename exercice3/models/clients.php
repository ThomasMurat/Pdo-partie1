<?php 
function connectToDb(){
    try { 
        // $db devient une instance de l'objet PDO
        $db = new PDO('mysql:host=pdo-partie1;dbname=colyseum;charset=utf8', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION)); 
        } catch(Exception $error) {
            die($error->getMessage());
        }
}

function getFirstTwentyClientList(){
    connectToDb();
    $firstTwentyClientQuery = $db->query(
        'SELECT `clients`.`lastName`, `clients`.`firstName`, `clients`.`birthDate` 
        FROM `clients` 
        LIMIT 20;'
    );
    $data = $firstTwentyClientQuery->fetchAll(PDO::FETCH_OBJ); //data est un tableau d'objets
    return $data;
}


    
 

<?php 
function getShowTypesList(){
    try { 
    // $db devient une instance de l'objet PDO
    $db = new PDO('mysql:host=pdo-partie1;dbname=colyseum;charset=utf8', 'root', ''); 
    } catch(Exception $error) {
        die($error->getMessage());
    }
    $allshowTypesQuery = $db->query(
        'SELECT `showtypes`.`type` FROM `showTypes`'
    );
    $data = $allshowTypesQuery->fetchAll(PDO::FETCH_OBJ); //data est un tableau d'objets
    return $data;
}


    
 

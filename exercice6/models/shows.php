<?php 
function getShowListByTitleAsc(){
    try { 
    // $db devient une instance de l'objet PDO
    $db = new PDO('mysql:host=pdo-partie1;dbname=colyseum;charset=utf8', 'root', ''); 
    } catch(Exception $error) {
        die($error->getMessage());
    }
    $clientListByNameAscQuery = $db->query(
        'SELECT `title`, `performer`, DATE_FORMAT(`date`, \'%d/%m/%Y\') as `dateFr`, `startTime` 
        FROM `shows`  
        ORDER BY `title` ASC;'
    );
    $data = $clientListByNameAscQuery->fetchAll(PDO::FETCH_OBJ); //data est un tableau d'objets
    return $data;
}


    
 

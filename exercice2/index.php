<?php 
include 'models/showTypes.php';
include 'controllers/indexController.php'; 
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Pdo-partie1-exo1</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" />
    <link rel="stylesheet" media="screen" type="text/css" href="assets/css/style.css" />
</head>
<body class="container-fluid">
<div class="row">
    <nav class="navbar navbar-expand-sm bg-primary w-100">
        <ul id="mainMenuList" class="navbar-nav w-100"><?php
            foreach($showTypeList as $showType){ ?>
                <li class="nav-item col-3 d-flex"><a class="text-white text-center nav-link w-100" href="#"><?= $showType->type ?></a></li><?php      
            } ?>
        </ul> 
    </nav>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</body>
</html>
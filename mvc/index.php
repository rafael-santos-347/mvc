<?php

    require('Models/Estudante.php');
    $estudantes = Estudante::getALL();
    
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script defer src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
    <title>MVC</title>
</head>
<body>
    <?php require('header.html'); ?>
    <main class="py-3 mt-4">
    <?php 
    
    foreach($estudantes as $linha){
        
        
   
    ?>

        <div class="card w-50 mx-auto mb-5">
            <div class="card-header">
                <span><?= $linha['nome']; ?></span>
            </div>
            <div class="card-body">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
            </div>
            <div class="card-footer d-flex align-items-center justify-content-end">
                <a href="https://wa.me/<?= $linha['telefone']; ?>" target="_blank" class="btn btn-success"><i class="fab fa-whatsapp" style="font-size: 30px;"></i></a>
            </div>
        </div>

    <?php
         ;}   

    ?>
        
    </main>
   
</body>
</html>
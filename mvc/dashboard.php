<?php

    require('Models/Estudante.php');
    $estudantes = Estudante::getCount();

?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.min.js" integrity="sha512-d9xgZrVZpmmQlfonhQUvTR7lMPtO7NkZMkA0ABN3PHCbKA5nqylQ/yWlFAyY6hYgdF1Qh6nYiuADWwKB4C2WSw==" crossorigin="anonymous"></script>
    <title>MVC</title>
</head>
<body>
    <?php require('header.html'); ?>
    <main class="py-3 h-75 container-fluid bg-secondary d-flex align-items-center justify-content-center">
        <div class="card w-50 d-flex align-items-center justify-content-center ">
            <canvas id="myChart" width="150" height="100"></canvas>
            <script async>
                let ctx = document.getElementById("myChart").getContext('2d');
                let myChart = new Chart(ctx, {
                    type: 'pie',
                    data: {
                        labels: ['Monitores', 'Alunos'],
                        datasets: [{data: [2, <?= $estudantes[0]['contador'];?>],
                        backgroundColor: ['#be2121','#2172be']
                    }]
                    }
                    });
            </script>

        </div>
   
    </main>
   
</body>
</html>
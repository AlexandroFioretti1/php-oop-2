<!-- 
Immaginiamo le classi per modellizzare un personal computer. 
Un computer desktop é un computer.
Un computer portatile é un computer.

Creiamo la classe computer come parent class ed estendiamola per le classi desktop e laptop.
Creiamo un set di dati in forma di array di oggetti e stampiamoli a schermo in una card usando bootstrap.
Nella card, indichiamo anche che tipo di prodotto stiamo visualizzando (desktop, laptop) creando un apposito metodo poliforfo in ciascuna sottoclasse 
-->

<?php

include __DIR__ . "/Computer.php";
include __DIR__ . "/Desktop.php";
include __DIR__ . "/Portatile.php";
include __DIR__ . "/db.php";


?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>php-oop-1</title>
</head>

<body>

    <?php foreach ($computers as $computer) : ?>
        <div class="col-6 mx-auto">
            <div class="card m-4">
                <div class="card-header">
                    <h3><?php echo $computer->marca ?></h3>
                </div>
                <div class="card-body">
                    <ul>
                        <li>
                            <h6><?php echo $computer->processore ?></h6>
                        </li>
                        <li>
                            <h6><?php echo $computer->memoria ?></h6>
                        </li>
                        <li>
                            <h6><?php echo $computer->sistema ?></h6>
                        </li>
                        <li>
                            <h6><?php echo $computer->schedavideo ?></h6>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    <?php endforeach ?>
</body>

</html>
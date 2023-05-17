<!-- 
Immaginiamo le classi per modellizzare un personal computer. 
Un computer desktop é un computer.
Un computer portatile é un computer.

Creiamo la classe computer come parent class ed estendiamola per le classi desktop e laptop.
Creiamo un set di dati in forma di array di oggetti e stampiamoli a schermo in una card usando bootstrap.
Nella card, indichiamo anche che tipo di prodotto stiamo visualizzando (desktop, laptop) creando un apposito metodo poliforfo in ciascuna sottoclasse 
-->


<?php

class Computer
{
    public $processore;
    public $memoria;
    public $sistema;
    public $archiviazione;

    public function __construct(string $processore, string $memoria, string $sistema, string $archiviazione)
    {
        $this->processore = $processore;
        $this->memoria = $memoria;
        $this->sistema = $sistema;
        $this->archiviazione = $archiviazione;
    }
}


class Desktop extends Computer
{
    public $case;
    public $alimentazione;
    public $sistema;
    public $raffreddamento;

    public function __construct(string $processore, string $memoria, string $sistema, string $archiviazione, string $case, string $alimentazione, string $raffreddamento)
    {
        parent::__construct($processore, $memoria, $sistema, $archiviazione);
        $this->case = $case;
        $this->alimentazione = $alimentazione;
        $this->raffreddamento = $raffreddamento;
    }
}


class Portatile extends Computer

{
    public $display;
    public $mousepad;
    public $batteria;
    public $webcam;

    public function __construct($processore, $memoria, $sistema, $archiviazione, $display, $mousepad, $batteria, $webcam)

    {
        parent::__construct($processore, $memoria, $sistema, $archiviazione);
        $this->display = $display;
        $this->mousepad = $mousepad;
        $this->batteria = $batteria;
        $this->webcam = $webcam;
    }
}



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



    <div class="container ">

    </div>


</body>

</html>
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
    public $Processore;
    public $Memoria;
    public $Sistema;
    public $Archiviazione;

    public function __construct(string $Processore, string $Memoria, string $Sistema, string $Archiviazione)
    {
        $this->Processore = $Processore;
        $this->Memoria = $Memoria;
        $this->Sistema = $Sistema;
        $this->Archiviazione = $Archiviazione;
    }
    public function nuovoFilm()
    {
        echo "Processore: " . $this->Processore;
        echo "Memoria: " . $this->Memoria;
        echo "Sistema: " . $this->Sistema;
        echo "Archiviazione: " . $this->Archiviazione;
    }
}


class Desktop extends Computer
{
    public $Case;
    public $Alimentazione;
    public $Sistema;
    public $Raffreddamento;

    public function __construct(string $Case, string $Alimentazione, string $Sistema, string $Raffreddamento)
    {
        $this->Case = $Case;
        $this->Alimentazione = $Alimentazione;
        $this->Sistema = $Sistema;
        $this->Raffreddamento = $Raffreddamento;
    }
    public function nuovoFilm()
    {
        echo "Case: " . $this->Case;
        echo "Alimentazione: " . $this->Alimentazione;
        echo "Sistema: " . $this->Sistema;
        echo "Raffreddamento: " . $this->Raffreddamento;
    }
}


class Portatile extends Computer

{
    public $Display;
    public $Mousepad;
    public $Batteria;
    public $Webcam;

    public function __construct(string $Display, string $Mousepad, string $Batteria, string $Webcam)
    {
        $this->Display = $Display;
        $this->Mousepad = $Mousepad;
        $this->Batteria = $Batteria;
        $this->Webcam = $Webcam;
    }
    public function nuovoFilm()
    {
        echo "Display: " . $this->Display;
        echo "Mousepad: " . $this->Mousepad;
        echo "Batteria: " . $this->Batteria;
        echo "Webcam: " . $this->Webcam;
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
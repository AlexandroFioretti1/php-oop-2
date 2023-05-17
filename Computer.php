
<?php

class Computer
{
    public $marca;
    public $processore;
    public $memoria;
    public $sistema;
    public $schedavideo;


    public function __construct(string $marca, string $processore, string $memoria, string $sistema, string $schedavideo)
    {
        $this->marca = $marca;
        $this->processore = $processore;
        $this->memoria = $memoria;
        $this->sistema = $sistema;
        $this->schedavideo = $schedavideo;
    }
}

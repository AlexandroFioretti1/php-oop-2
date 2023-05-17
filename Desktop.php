<?php

class Desktop extends Computer
{
    public $case;
    public $alimentazione;
    public $raffreddamento;

    public function __construct(string $marca, string $processore, string $memoria, string $sistema, string $schedavideo, string $case, string $alimentazione, string $raffreddamento)
    {
        parent::__construct($marca, $processore, $memoria,  $sistema, $schedavideo);
        $this->case = $case;
        $this->alimentazione = $alimentazione;
        $this->raffreddamento = $raffreddamento;
    }
}

<?php

class Portatile extends Computer

{
    public $display;
    public $mousepad;
    public $batteria;
    public $webcam;

    public function __construct(string $marca, string $processore, string $memoria, string $sistema, string $schedavideo, string $display, string $mousepad, string $batteria, string $webcam)

    {
        parent::__construct($marca, $processore, $memoria, $sistema, $schedavideo);
        $this->display = $display;
        $this->mousepad = $mousepad;
        $this->batteria = $batteria;
        $this->webcam = $webcam;
    }
}

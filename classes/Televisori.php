<?php

require_once 'Prodotti.php';

class Televisori extends Prodotti {
    protected $scontoQuantita;
    public $dimensioni;
    public $smartTv;

    public function __construct($_codice, $_nome, $_quantita, $_scontoQuantita = 1) {
        parent::__construct($_codice, $_nome, $_quantita);
        $this->scontoQuantita = $_scontoQuantita;
    }

    public function getPrice() {
        $prezzoPieno = parent::getPrice();
        $prezzoScontato = $this->prezzo * $this->quantita * $this->scontoQuantita;
        return [$prezzoPieno, $prezzoScontato];

    }
}

?>
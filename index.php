<!-- Crea e modella classi, a piacere, per gestire i prodotti di un magazzino. -->
<?php

require_once 'classes/Prodotti.php';
require_once 'classes/Cellulari.php';

/* richiesta prodotti generici */

$richiesta1 = new Prodotti('gen123', 'articoli_vari', 50);

$richiesta1->setPrize(199);
var_dump($richiesta1);

var_dump('Prezzo prodotti: ' . $richiesta1->getPrize());

/* richiesta cellulari con sconto quantita */

$richiestaCellulari = new Cellulari('cell123', 'samsung_galaxy', 50, 0.8);
$richiestaCellulari->setPrize(299);

var_dump($richiestaCellulari);

var_dump('Prezzo pieno cellulari: ' . $richiestaCellulari->nome . ' ' . $richiestaCellulari->getPrize()[0]);
var_dump('Prezzo scontato cellulari: ' . $richiestaCellulari->nome . ' ' . $richiestaCellulari->getPrize()[1]);

?>
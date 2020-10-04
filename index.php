<!-- Crea e modella classi, a piacere, per gestire i prodotti di un magazzino. -->
<?php

require 'classes/Prodotti.php';
require_once 'classes/Cellulari.php';
require_once 'classes/Televisori.php';
require_once 'classes/Lavatrici.php';

/* richiesta prodotti generici */

$richiesta1 = new Prodotti('gen123', 'articoli_vari', 50);

$richiesta1->setPrice(199);
var_dump($richiesta1);

var_dump('Prezzo prodotti: ' . $richiesta1->getPrice());

/* richiesta cellulari con sconto quantita */

$richiestaCellulari = new Cellulari('cell123', 'samsung_galaxy', 50, 0.8);
$richiestaCellulari->setPrice(299);

var_dump($richiestaCellulari);

var_dump('Prezzo pieno cellulari: ' . $richiestaCellulari->nome . ' ' . $richiestaCellulari->getPrice()[0]);
var_dump('Prezzo scontato cellulari: ' . $richiestaCellulari->nome . ' ' . $richiestaCellulari->getPrice()[1]);

/* richiesta televisori con sconto quantita */

$richiestaTelevisori = new Televisori('tel456', 'samsungH43', 100, 0.7);
$richiestaTelevisori->setPrice(399);

var_dump($richiestaTelevisori);

var_dump('Prezzo pieno Televisori: ' . $richiestaTelevisori->nome . ' ' . $richiestaTelevisori->getPrice()[0]);
var_dump('Prezzo scontato Televisori: ' . $richiestaTelevisori->nome . ' ' . $richiestaTelevisori->getPrice()[1]);

/* richiesta lavatrici non hanno sconto quantità */

$richiestaLavatrici = new Prodotti('gen123', 'boschWX542Z', 5);

$richiestaLavatrici->setPrice(599);
var_dump($richiestaLavatrici);

var_dump('Prezzo Lavatrici: ' . $richiestaLavatrici->nome . ' ' . $richiestaLavatrici->getPrice());

?>





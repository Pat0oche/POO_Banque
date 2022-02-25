<?php
function chargerClasse($classe){
    require $classe . '.php';
    }
spl_autoload_register('chargerClasse');

$JeanDupont = new Titulaire("DUPONT", "Jean", "25-12-1987", "Paris");
$c1 = new Compte ("Compte courant", 1539.99, "€", $JeanDupont);
$c2 = new Compte ("Compte épargne", 15233.79, "€", $JeanDupont);
// echo $JeanDupont;
echo $JeanDupont->listerComptes();
echo $c1;

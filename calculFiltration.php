<?php
/**
 * Created by IntelliJ IDEA.
 * User: Manu
 * Date: 12/12/2018
 * Time: 18:57
 */
$notes= array(10,20);
$somme_notes = 0;
$i = 0;
foreach($notes as $cle=>$valeur)
{
    $i++; // On incrémente la variable qui nous dit combien de tour on fait
    $somme_notes+=$valeur;
// équivaut a $somme_notes = $somme_notes + $valeur
}
$moyenne = $somme_notes / $i;
echo $moyenne."\n";
// En fonction de la température, je cherche la durée idéale de filtration
switch (true) {
    case ($moyenne <= 10):
        echo "la température est inférieure à 10 => 2h de filtration";
        $dureeFiltration=2;
        break;
    case ($moyenne > 10 && $moyenne <= 12):
        echo "la température est comprise entre 10 et 12 => 4h de filtration";
        $dureeFiltration=4;
        break;
    case ($moyenne > 12 && $moyenne <= 16):
        echo "la température est comprise entre 12 et 16 => 6h de filtration";
        $dureeFiltration=6;
        break;
    case ($moyenne > 16 && $moyenne <= 24):
        echo "la température est comprise entre 16 et 24 => 8h de filtration";
        $dureeFiltration=8;
        break;
    case ($moyenne > 24 && $moyenne <= 27):
        echo "la température est comprise entre 24 et 27 => 12h de filtration";
        $dureeFiltration=12;
        break;
    case ($moyenne > 27 && $moyenne <= 30):
        echo "la température est comprise entre 24 et 27 => 20h de filtration";
        $dureeFiltration=20;
        break;
    case ($moyenne > 30):
        echo "la température est supérieure à 30 => 24h de filtration";
        $dureeFiltration=24;
        break;
    default :
        echo 'Je ne sais pas qui vous êtes !!!';
}
// je connais la durée de filtration, je cherche de manière aléatoire les créneaux horaires en evitant les doublons
$heureChoisi=array();
for ($t = 0; $t < $dureeFiltration; $t++)
{
    $heure=rand (1, 24);
    while (in_array($heure,$heureChoisi)) {
        $heure=rand (1, 24);
    }
    $heureChoisi[$t]=$heure;

}
// je trie mon tableau de manière croissante
asort($heureChoisi);
$j=0;
// pour chaque créneaux horaires je mets en route la filtration et
foreach($heureChoisi as $cle=>$valeur)
{
    echo ' heure = '. $valeur . ' -';
    $j++;
}
?>


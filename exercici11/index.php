 <?php
// Escriu una linia en el fitxer. 
// fitxer.txt te que estar dins la mateixa carpeta que el index.php
// el fputs posar dins el fitxers i el posa al final.
// 

$nom= "Aleix";
$cognoms = "Malaret Verges";
$comentaris = "Aquest es el comentari al exercici 11";

$arxiu = fopen("fitxer.txt", "w");

fputs($arxiu, $nom.$cognoms.$comentaris);

fclose($arxiu);

?>
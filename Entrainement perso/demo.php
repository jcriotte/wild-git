<?php
$notes = [];

while ($saisie !== "fin") {
    $saisie = readline('Veuillez saisie une note ou le mot fin : ');
    if ($saisie !== 'fin') {
        $notes[] = (int)$saisie;
    }
}

echo "voici le tableau des notes : \n";

foreach ($notes as $note) {
    echo 'voici la note : ' . "$note\n";
}

?>
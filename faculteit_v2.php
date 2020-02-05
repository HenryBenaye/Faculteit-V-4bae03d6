<?php
    echo("Van welk getal wil je de faculteit weten?").PHP_EOL;
    $keuze = readline("");
    $antwoord = 1;
    $i = 1;
    
    while($i <= $keuze){
        $antwoord = $i * $antwoord;
        $i++;

    }
    echo($antwoord);

?>
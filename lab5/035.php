<?php

    $liczba_rat = $_POST['lat'] * 12;
    $kwota_kredytu = $_POST['rata'] * $liczba_rat;

    print("{$_POST['imie']} <br>");
    print("{$_POST['nazwisko']} <br>");
    print("Liczba rat: {$liczba_rat} <br>");
    print("Całkowita kwota kredytu: {$kwota_kredytu}")

?>

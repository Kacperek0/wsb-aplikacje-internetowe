<?php

    $iter = 0;

    foreach ($_POST['gatunek'] as $key => $value) {
        print("{$value}, <br>");
        $iter++;
    }

    print("Wybrałeś {$iter} gatunków muzycznych.")
?>

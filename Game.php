<?php

    // use Hewan;
    // use Fight;
    require "Hewan.php";
    require "Fight.php";
    include "Elang.php";
    include "Harimau.php";

    $elang1 = new Elang("Andromeda");
    $harimau1 = new Harimau("Bimasakti");

    $elang1->attraksi();
    echo "<br>";
    $harimau1->attraksi();
    echo "<br>";

    $elang1->getInfoHewan();
    echo "<br>";
    $harimau1->getInfoHewan();
    echo "<br>";

    $elang1->serang($harimau1);
    echo "<br>";
    $harimau1->getInfoHewan();
    echo "<br>";

    $elang1->diserang($harimau1);
    echo "<br>";
    $elang1->getInfoHewan();
?>
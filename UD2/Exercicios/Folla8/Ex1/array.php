<?php

$puntos = array("Ana" => 123, "Belén" => 14, "Felipe" => 3, "Moncho" => 245, "Artur" => 10);

sort($puntos);

foreach ($puntos as $persoa => $puntuacion) {
    echo " $persoa ten $puntuacion puntos<br>";
}
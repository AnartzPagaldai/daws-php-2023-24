<?php
$arr = ["Brasil", "Portugal", "Islandia", "Mexico", "Filipinas", "Marruecos"];

echo getIndex($arr, "Islandia");

function getIndex($arr, $nombre) {
    for ($i = 0; $i < count($arr); $i++) {
        if (($arr[$i]) === $nombre) {
            return $i;
        }
    }
    return -1;
}


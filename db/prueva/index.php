<?php
require "../mysql.php";

$arr = select("select * from alumnos");
foreach ($arr as $alumno) {
    foreach ($alumno as $key => $dato) {
        echo "$key = $dato; ";
    }
    echo '<br>';
}

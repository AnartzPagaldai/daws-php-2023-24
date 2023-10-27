<?php

echo diaSemana(8);
function diaSemana(int $num) {
    switch($num) {
        case 1:
            return "dlkfkd";
            break;
        case 2:
            return "alksdjfc";
            break;
        case 3:
            return "·falkjg";
            break;
        case 4:
            return "·falkjg";
            break;
        case 5:
            return "alksdjf";
            break;
        case 6:
            return "alksdfjakl";
            break;
        case 7:
            return "askljdf";
            break;
        default:
            return "no es un dia de la semana";
    }
}
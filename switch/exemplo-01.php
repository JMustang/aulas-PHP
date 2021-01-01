<?php

$diaDaSemana = date("w");
switch ($diaDaSemana) {

    case 1:
    echo "domingo";
    break;

    case 2:
    echo "segunda-feira";
    break;

    case 3:
    echo "terça-feira";
    break;

    case 4:
    echo "quarta-feira";
    break;

    case 5:
    echo "quinta-feira";
    break;

    case 6:
    echo "sexta-feira";
    break;

    case 7:
    echo "sabado";
    break;

    default:
    echo "data invalida";

}

?>
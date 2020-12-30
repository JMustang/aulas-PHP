<?php

$qualSuaIdade = 70;

$idadeCrianca = 12;
$idadeMaior = 18;
$idadeVelho = 65;


if ($qualSuaIdade < $idadeCrianca){
    echo "criança";
} else if ($qualSuaIdade < $idadeMaior) {
    echo "Adolecente";
} else if ($qualSuaIdade < $idadeVelho) {
    echo "Adulto";
} else {
    echo "Idoso";
}

?>
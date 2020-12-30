<?php

function ola($texto="mundo", $periodo){

    return "Ola $texto! $periodo! <br>";

}
echo ola("","mundo");
echo ola("","boa noite");
echo ola("Glaucio","boa tarde");
echo ola("João","");

?>
<?php
//Tomar cuidado na hora de passar os parâmetros
//Se for na mesma pasta coloca "nomedoarquivo.php";
//Se o arquivo estiver dentro de uma pasta ao lado do arquivo que vc estiver usando
//coloca assim: "pasta/nomedoarquivo.php";
//Se for em aluma pasta anterior, fazer .. conforme os níveis: "../pasta/nomedoarquivo.php";

include "include01.php";

$resultado = soma(10, 20);

echo $resultado;

//Diferenças entre include e require:
//Require: obriga que o arquivo exista e que o arquivo esteja funcionando corretamente;
//Include tenta funcionar mesmo que não exista o arquivo ou que ele não esteja funcionando;

//USAR SEMPRE REQUIRE_ONCE para evitar chamar duas vezes o arquivo: require_once

?>
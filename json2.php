<?php
//json encode transforma array em json
//json decode transforma json formatado em array (colocar , true se não vira objeto

$json = '[{"nome":"Jo\u00e3o","idade":20},{"nome":"Glaucio","idade":25}]';

$data = json_decode($json, true);

var_dump($data);
?>


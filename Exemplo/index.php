<?php
require_once('../src/Filter.php');

$data['id'] = Filter::postInt('usuario_id', 3);
$data['nome'] = Filter::postString('usuario_nome');
$data['email'] = Filter::postEmail('usuario_email');
$data['money'] = Filter::postFloat('usuario_money');
$data['ativo'] = Filter::postBoolean('usuario_ativo');
$data['bad_language'] = Filter::postBadString('bad_language');

echo('<pre>');
print_r($data);
echo('</pre>');

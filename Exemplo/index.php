<?php
require_once('../src/Secury.php');

$data['id'] = secury::postInt('usuario_id', 3);
$data['nome'] = secury::postString('usuario_nome');
$data['email'] = secury::postEmail('usuario_email');
$data['money'] = secury::postFloat('usuario_money');
$data['ativo'] = secury::postBoolean('usuario_ativo');
$data['bad_language'] = secury::postBadString('bad_language');
$data['csrf'] = secury::csrfEnd();

echo('<pre>');
print_r($data);
echo('</pre>');

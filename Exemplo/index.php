<?php
require_once('../Filter.php');

$data['id'] = Filter::postInt('usuario_id');
$data['nome'] = Filter::postString('usuario_nome');
$data['email'] = Filter::postEmail('usuario_email');
$data['money'] = Filter::postFloat('usuario_money');
$data['ativo'] = Filter::postBoolean('usuario_ativo');

echo('<pre>');
print_r($data);
echo('</pre>');

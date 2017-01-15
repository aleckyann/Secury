<?php
require_once('../src/Secury.php');

$data['id'] = post::int('usuario_id', 3);
$data['nome'] = post::string('usuario_nome');
$data['email'] = post::email('usuario_email');
$data['money'] = post::float('usuario_money');
$data['ativo'] = post::boolean('usuario_ativo');
$data['bad_language'] = post::badString('bad_language');
$data['csrf'] = csrf::verify();

echo('<pre>');
print_r($data);
echo('</pre>');

<?php
require_once('../src/Secury.php');

$data['id'] = post::int('usuario_id', 3);
$data['nome'] = post::string('usuario_nome');
$data['email'] = post::email('usuario_email');
$data['money'] = post::float('usuario_money');
$data['ativo'] = post::boolean('usuario_ativo');
$data['bad_language'] = post::badString('bad_language');
$data['csrf'] = csrf::verify();
$data['name'] = $_SESSION['@secury'];

echo "<h3>RESULT REQUEST:</h3><hr>";
echo('<pre>');
print_r($data);
echo('</pre>');
echo('<hr>');

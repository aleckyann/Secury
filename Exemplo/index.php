<?php
require_once('../Filter.php');

$data['id'] = Filter::int('usuario_id', 'p');
$data['nome'] = Filter::string('usuario_nome', 'p');
$data['email'] = Filter::email('usuario_email', 'p');
$data['money'] = Filter::float('usuario_money', 'p');
$data['ativo'] = Filter::boolean('usuario_ativo', 'p');

echo('<pre>');
print_r($data);
echo('</pre>');

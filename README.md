# filter_input_php


Pare de usar as funções $_GET e $_POST para gravar dados em suas variáveis. Isto torna sua aplicação extremamente frágil a injections.
===

---
### Basta adicionar o arquivo 'filter_input.php' e utilizar as funções de acordo a entrada:
```require "filter_input.php";```

---
### Para receber uma requisição post você pode fazer de 3 maneiras, sinta-se a vontade para usar a que achar mais confortável:
```
$email = $filter_email('email', 'p');

$email = $filter_email('email', 'post');

$email = $filter_email('email', 'POST');
```

---
### Para requisições do tipo GET, você também pode optar por 3 formas diferentes:
```
$id = $filter_int('id', 'g');

$id = $filter_int('id', 'get');

$id = $filter_int('id', 'GET');
```

---
### Você poderá usar 5 tipos de filtros:
VALIDAR EMAILS:     
```$email_seguro = filter_email('name_da_requisicao', 'tipo_da_requisicao');```

VALIDAR INTEIROS:   
```$inteiro_seguro = filter_int('name_da_requisicao', 'tipo_da_requisicao');```

VALIDAR FLOATS:     
```$float_seguro = filter_float('name_da_requisicao', 'tipo_da_requisicao');```

VALIDAR STRINGS:    
```$string_segura = filter_string('name_da_requisicao', 'tipo_da_requisicao');```

VALIDAR BOOLEANOS:  
```$boolean_seguro= filter_boolean('name_da_requisicao', 'tipo_da_requisicao');```

# filter_input_php

### Para começar usar os filtros basta adicioná-los em seu arquivo de load ou controllers:
---
```
require_once('Filter.php');
```

### Para receber uma requisição post você pode fazer de 3 maneiras, sinta-se a vontade para usar a que achar mais confortável:
---
```
$email = Filter::email('email', 'p');

$email = Filter::email('email', 'post');

$email = Filter::email('email', 'POST');
```

### Para requisições do tipo GET, você também pode optar por 3 formas diferentes:
---
```
$id = Filter::int('id', 'g');

$id = Filter::int('id', 'get');

$id = Filter::int('id', 'GET');
```

### Você poderá usar 5 tipos de filtros:
---
```
VALIDAR EMAILS:     Filter::email('name_da_requisicao', 'tipo_da_requisicao');

VALIDAR INTEIROS:   Filter::email('name_da_requisicao', 'tipo_da_requisicao');

VALIDAR FLOATS:     Filter::email('name_da_requisicao', 'tipo_da_requisicao');

VALIDAR STRINGS:    Filter::email('name_da_requisicao', 'tipo_da_requisicao');

VALIDAR BOOLEANOS:  Filter::email('name_da_requisicao', 'tipo_da_requisicao');
```

### Caso sua requisição não seja válida é retornada uma string com valor:
 ```'false'```
---

# filter_input_php
===

### Para começar usar os filtros basta adicioná-los em seu arquivo de load ou controllers:
---
```
require_once('Filter.php');
```
## Ou com composer:
```
composer require aleckyann/filter:dev-master
```

### Para receber e filtrar requisições post, exemplo:
---
```
$email = Filter::postEmail('email');
```

### Para receber e filtrar requisições get, exemplo:
---
```
$id = Filter::getInt('id');
```

### Você poderá usar 5 tipos de filtros para requisições do tipo GET e 5 para requisições do tipo POST, veja:
---

VALIDAR EMAILS:
```     
Filter::getEmail('name_da_requisicao');

Filter::postEmail('name_da_requisicao');
```

VALIDAR INTEIROS:
```  
Filter::getInt('name_da_requisicao');

Filter::postInt('name_da_requisicao');
```

VALIDAR FLOATS:
```     
Filter::getFloat('name_da_requisicao');

Filter::postFloat('name_da_requisicao');
```

VALIDAR STRINGS:
```   
Filter::getString('name_da_requisicao');

Filter::postString('name_da_requisicao');
```

VALIDAR BOOLEANOS:
```
Filter::getBoolean('name_da_requisicao');

Filter::postBoolean('name_da_requisicao');
```

### Caso sua requisição não seja válida é retornada uma string com valor 'false'
---

Os filtros podem proteger sua aplicação de diversos injections, tais como: PHP injection, script injection, html injection |  XSS, além de tipar a entrada de dados.


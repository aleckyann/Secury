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


> Caso sua requisição|entrada de dados não seja válida é retornada uma string com valor 'false'

FILTRAR STRING E PROTEGÊ-LAS DE PALAVRIADOS INAPROPRIAPODES|BAD LANGUAGES:
```
Filter::getBadString('name_da_requisicao');

Filter::postBadString('name_da_requisicao');
```
> Caso usuário envie um palavrão(bad language), este é trocado por '#$%@!'


---

### VOCÊ TAMBÉM PODERÁ DEFINIR VALORES MÍNIMOS E MÁXIMOS PARA SUAS ENTRADAS PASSANDO O SEGUNDO E TERCEIRO ARGUMENTO DAS FUNÇÕES, VEJA:
```
Filter::postString('name_da_requisicao', 1, 40);
```
>Este código retornará `false` caso a string de entrada seja menor que 1 caracter ou maior que 40 caracteres.

Caso queira apenas definir um comportamento "required", atribua 1 como segundo argumento da função, dessa forma valores como `null` vão retornar `false`, Veja:
```
Filter::postInt('name_da_requisicao', 1);
```

Os filtros podem proteger sua aplicação de diversos injections, tais como: PHP injection, script injection, html injection |  XSS, além de tipar a entrada de dados.
A tipagem de suas entradas oferece uma robustes maior à suas aplicações.

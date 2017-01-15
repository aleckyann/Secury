# Secury
===

* Tipagem de suas variáveis, atravéz do controle das entradas GET e POST:
  * Números inteiros: `0, 1, 2, 3, 4, 5, 88, 572, ...`
  * Números decimais(float): `0.21, 1.333333. 93.33, ...`
  * Strings: `Olá mundo, hakunamatata, ...`
  * Emails: `teste@gmail.com, example@example.com.br, ...``
  * Boolean: `0, 1, false, true`
  * bad_languages: `censured :)`

* Controle de tamanho das variáveis:
  * max length.
  * min length.

* Comportamento required para variáveis(GET e POST).
* Proteção contra Javascript injections.
* Proteção contra HTML injections.
* Proteção conta PHP injections.
* Proteção contra XSS genéricos.
* Funções de proteção contra CSRF:
  * Cria unput dinâmicamente com token.
  * Verifica post recebido do input.

### Para começar usar os filtros basta adicioná-los em seu arquivo de load ou controllers:
---
```
require_once('secury.php');
```
## Ou com composer:
```
composer require aleckyann/secury:dev-master
```

### Para receber e filtrar requisições post, exemplo:
---
```
$email = post::email('email');
```

### Para receber e filtrar requisições get, exemplo:
---
```
$id = get::int('id');
```

### Você poderá usar 5 tipos de filtros para requisições do tipo GET e 5 para requisições do tipo POST, veja:
---

VALIDAR EMAILS:
```     
get::email('name_da_requisicao');

post::email('name_da_requisicao');
```

VALIDAR INTEIROS:
```  
get::int('name_da_requisicao');

post::int('name_da_requisicao');
```

VALIDAR FLOATS:
```     
get::float('name_da_requisicao');

post::float('name_da_requisicao');
```

VALIDAR STRINGS:
```   
get::string('name_da_requisicao');

post::string('name_da_requisicao');
```

VALIDAR BOOLEANOS:
```
get::boolean('name_da_requisicao');

post::boolean('name_da_requisicao');
```

> Caso sua requisição|entrada de dados não seja válida é retornada uma string com valor 'false'

FILTRAR STRING E PROTEGÊ-LAS DE PALAVRIADOS INAPROPRIAPODES|BAD LANGUAGES:
```
get::badString('name_da_requisicao');

post::badString('name_da_requisicao');
```
> Caso usuário envie um palavrão(bad language), este é trocado por '#$%@!'


---

### VOCÊ TAMBÉM PODERÁ DEFINIR VALORES MÍNIMOS E MÁXIMOS PARA SUAS ENTRADAS PASSANDO O SEGUNDO E TERCEIRO ARGUMENTO DAS FUNÇÕES, VEJA:
```
post::string('name_da_requisicao', 1, 40);
```
>Este código retornará `false` caso a string de entrada seja menor que 1 caracter ou maior que 40 caracteres.

Caso queira apenas definir um comportamento "required", atribua 1 como segundo argumento da função, dessa forma valores como `null` vão retornar `false`, Veja:
```
post::int('name_da_requisicao', 1);
```

Os filtros podem proteger sua aplicação de diversos injections, tais como: PHP injection, script injection, html injection |  XSS, além de tipar a entrada de dados.
A tipagem de suas entradas oferece uma robustes maior à suas aplicações.


CSRF protection
---

Para proteger suas requisições de ataques CSRF, faça como este exemplo:

```
<form>
<input type="email" name="login">
<input type="password" name="senha">
csrf::form();
<input type="submit" value="Enviar">
</form>
```
>Este método gera um input com um token de segurança, que é gerado automaticamente de forma dinâmica.

Em seguida, em seu controller, faça a verificação atravéz de outro método:
```
$login = post::email('login');
$senha = post::string('senha');
$resultadoCSRF = csrf::verify();

if($resultadoCSRF == false){
  header('Location: index');
} else {
  login($pdo, $login, $senha);
}
```

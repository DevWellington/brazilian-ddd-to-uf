# BrazilianDddToUF
O Brazilian DDD To UF atende as necessidades das aplicações que necessitam por algum movito converter (ou até validar) o Número do DDD de um telefone para a UF.

## Requisitos

PHP 5.4 ou Superior.

## Instalação

A maneira mais fácil de instalar BrazilianDddToUF é utilizando o
[Composer](http://getcomposer.org/). Criando um arquivo `composer.json` 
para o seu projeto, adicione:

```JSON
{
    "require": {
        "DevWellington/brazilian-ddd-to-uf": "dev-master"
    }
}
```

E depois rode os comandos:

    $ curl -s http://getcomposer.org/installer | php
    $ php composer.phar install

Agora inclua o autoload gerado pelo Composer para ter acesso à biblioteca:

```PHP
<?php

require 'vendor/autoload.php';

echo \BrazilianDddToUF\Convert\ConvertDDDtoUF::getUF(31);
```

##Exemplos:


Exemplo 1

Converter DDD para UF
```PHP
<?= \BrazilianDddToUF\Convert\ConvertDDDtoUF::getUF(31) ?>

Result: 
MG        
```

Exemplo 2

Converter DDD para Nome do Estado
```PHP
<?= \BrazilianDddToUF\Convert\ConvertDDDtoStateName::getStateName(31) ?>

Result: 
Minas Gerais        

```

Exemplo 3

Converter DDD para um Array com a UF e o Nome do Estado
```PHP
<?= var_dump(\BrazilianDddToUF\Convert\ConvertDDD::getArrayDDDandStateName(31)); ?>

Result: 
array(2) {
  ["UF"]=>
  string(2) "MG"
  ["StateName"]=>
  string(12) "Minas Gerais"
}
```
Exemplo 4

Validar o DDD
```PHP
<?= var_dump(\BrazilianDddToUF\Validate\Validate::isValid(9)); ?>

Result: 
bool(false)
```

###License
Esta biblioteca está licenciada sob a licença MIT - veja o arquivo de licença para mais detalhes.

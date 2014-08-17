<?php
header('Content-Type: text/html; charset=utf-8');
require_once "../vendor/autoload.php";

?>

<h1>Conversor de DDD para Estados do Brasil.</h1>

<p>O <strong>Brazilian DDD To UF</strong> atende as necessidades das aplicações que necessitam por algum movito
    converter (ou até validar) o Número do DDD de um telefone para a UF, veja abaixo os exemplos;
</p>

<h2>Exemplo 1</h2>
<ul>
	<li>Converter DDD para UF</li>
</ul>
<blockquote>
    <p><pre>
&lt;?= \BrazilianDddToUF\Convert\ConvertDDDtoUF::getUF(31) ?&gt;

<strong>Result: <br /></strong><?= \BrazilianDddToUF\Convert\ConvertDDDtoUF::getUF(31) ?>
        </pre>
    </p>

</blockquote>

<h2>Exemplo 2</h2>
<ul>
    <li>Converter DDD para Nome do Estado</li>
</ul>
<blockquote>
    <p><pre>
&lt;?= \BrazilianDddToUF\Convert\ConvertDDDtoUF::getUF(31) ?&gt;

<strong>Result: <br /></strong><?= \BrazilianDddToUF\Convert\ConvertDDDtoStateName::getStateName(31) ?>
        </pre>
    </p>

</blockquote>

<h2>Exemplo 3</h2>
<ul>
    <li>Converter DDD para um Array com a UF e o Nome do Estado</li>
</ul>
<blockquote>
    <p><pre>
&lt;?= var_dump(\BrazilianDddToUF\Convert\ConvertDDD::getArrayDDDandStateName(31)); ?&gt;

<strong>Result: <br /></strong><?= var_dump(\BrazilianDddToUF\Convert\ConvertDDD::getArrayDDDandStateName(31)); ?>
        </pre>
    </p>

</blockquote>


<h2>Exemplo 4</h2>
<ul>
    <li>Validar o DDD</li>
</ul>
<blockquote>
    <p><pre>
&lt;?= var_dump(\BrazilianDddToUF\Validate\Validate::isValid(9)); ?&gt;

<strong>Result: <br /></strong><?= var_dump(\BrazilianDddToUF\Validate\Validate::isValid(9)); ?>
        </pre>
    </p>

</blockquote>

<p>
    Para ter acesso ao código acesse o <a href="//gitHub.com/DevWellington/brazilian-ddd-to-uf">GitHub</a>,
    que está disponibilizado pela licença MIT;
</p>

















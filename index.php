<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplo 10</title>
</head>
<body>
    <h1>PHP com POO - Exemplo 10</h1>
    <hr>
    <h2>Assuntos abordados:</h2>
    <ul>
        <li>Composer: gerenciador de dependência PHP</li>
        <li>Configurar o projeto com Composer usando 
        <code>composer.json</code></li>
        <li>Autoload de classes evitando muitos requires e/ou require manuais</li>
    </ul>

<?php
use Fornecedor\Pagamento;
use Prestador\Pagamento as PrestadorPagamento;
use Tabajara\{Escola, MEI, PessoaFisica as PF, PessoaJuridica as PJ};

require_once "vendor/autoload.php";

$pagamentoFornecedor = new Pagamento;
$pagamentoPrestador = new PrestadorPagamento;
?>

<pre><?=var_dump($pagamentoFornecedor)?></pre>
<pre><?=var_dump($pagamentoPrestador)?></pre>

<hr>

<?php
$clientePF = new PF;
$clientePJ = new PJ;
$clienteMEI = new MEI;

$clientePF->setNome("Beltrano");
$clientePJ->setNomeFantasia("Poeira em alto mar");
$clienteMEI->setAreaDeAtuacao("TI");
?>
<p>Cliente: <?=$clientePF->getNome()?></p>

<hr>

<?php
$escola = new Escola;
var_dump($escola);
?>






</body>
</html>
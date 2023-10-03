<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplo 9</title>
</head>
<body>
    <h1>PHP com POO - Exemplo 9</h1>
    <hr>
    <h2>Assuntos abordados:</h2>
    <ul>
        <li>Namespaces: agrupamento e organização de recursos (classes, funções, constantes)</li>
        <li>Prevenção de conflitos entre classes de mesmo nome</li>
        <li>Configurar e usar <code>namespaces</code> e <code>alias</code></li>
    </ul>

<?php
/* Só de fazer o require/importação das classes (SEM NAMESPACE),
já dá erro no servidor devido a terem o mesmo nome. */

use Fornecedor\Pagamento;
use Prestador\Pagamento as PrestadorPagamento;

// Use individual (um pra cada classe)
// use Tabajara\MEI;
// use Tabajara\PessoaFisica;
// use Tabajara\PessoaJuridica;

// Use com uma lista de classes
use Tabajara\{MEI, PessoaFisica as PF, PessoaJuridica as PJ};

require_once "src/fornecedores/Pagamento.php";
require_once "src/prestadores/Pagamento.php";

// Forma 1 de usar classes com namespaces
// $pagamentoFornecedor = new Fornecedor\Pagamento;
// $pagamentoPrestador = new Prestador\Pagamento;

// Forma 2 de usar classes com namespaces
// use Fornecedor\Pagamento;
// use Prestador\Pagamento as PrestadorPagamento; // ALIAS (APELIDO)

// $pagamentoFornecedor = new Pagamento;
// $pagamentoPrestador = new PrestadorPagamento; // objeto através do alias

$pagamentoFornecedor = new Pagamento;
$pagamentoPrestador = new PrestadorPagamento;
?>

<pre><?=var_dump($pagamentoFornecedor)?></pre>
<pre><?=var_dump($pagamentoPrestador)?></pre>

<hr>

<!-- Exercícios: 
- Crie objetos cliente PF, cliente PJ e cliente MEI 
- Coloque alguns dados usando setters
- Exiba alguns dados no HTML
-->

<?php
require_once "src/PessoaFisica.php";
require_once "src/PessoaJuridica.php";
require_once "src/MEI.php";

$clientePF = new PF;
$clientePJ = new PJ;
$clienteMEI = new MEI;

$clientePF->setNome("Beltrano");
$clientePJ->setNomeFantasia("Poeira em alto mar");
$clienteMEI->setAreaDeAtuacao("TI");
?>
<p>Cliente: <?=$clientePF->getNome()?></p>


</body>
</html>
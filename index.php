<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplo</title>
</head>
<body>
    <h1>PHP com POO - exemplo 3</h1>
    <hr>
    <h2>Assuntos abordados:</h2>
    <ul>
       <li>método construtor com atribuição obrigatoria de valores aos parâmetros/propriedades do objeto</li>
       <li>uso do <code>$this</code> para acesso às propriedades dentro do abjeto</li>
    </ul>

    <?php
        require_once "src/Cliente.php";
        $clienteA = new Cliente("Fulano", "fulano@gmail.com");
        $clienteB = new Cliente("Ozzy", "ozzy@gmail.com");

        $clienteA->telefones = ["11-1324-0300"];
    ?>

    <pre><?=var_dump($clienteA, $clienteB)?></pre>
    
</body>
</html>
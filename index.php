<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplo 04</title>
</head>
<body>
    <h1>PHP com POO - exemplo 4</h1>
    <hr>
    <h2>Assuntos abordados:</h2>
    <ul>
       <li>Encapsulamento</li>
       <li>Modificadores de visibilidade</li>
    </ul>

    <?php
        require_once "src/Cliente.php";

        $clienteA = new Cliente;

        //o código abaixo dará erro pois a propriedades é privada!
        // $clienteA->nome = "Tiago";

        //usando o setter para atribuir valor à propriedade privada "nome"

        $clienteA->setNome("Fulano");
    ?>

<p>nome: <?=$clienteA->getNome()?></p>
<pre><?=var_dump($clienteA)?></pre>
</body>
</html>
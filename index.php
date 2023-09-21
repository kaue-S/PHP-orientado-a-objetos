<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplo</title>
</head>
<body>
    <h1>PHP com POO - exemplo 1</h1>
    <hr>
    <h2>Assuntos abordados:</h2>
    <ul>
        <li>Criação de classe</li>
        <li>Importação do arquivo de classe</li>
        <li>Criação de instâncias/objetos</li>
    </ul>

    <?php
    //importando a classe
        require_once "src/Cliente.php";

        //criando instância da classe (Objetos!)
        $clienteA = new Cliente;
        $clienteB = new Cliente;
    ?>

</body>
</html>
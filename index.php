<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplo</title>
</head>
<body>
    <h1>PHP com POO - exemplo 2</h1>
    <hr>
    <h2>Assuntos abordados:</h2>
    <ul>
        <li>Acesso direto às propriedades</li>
        <li>Atribuição e leitura de dados</li>
        <li>Chamada de método</li>
        <li>Uso do <code>$this</code> para acessar recursos dentro da propria classe</li>
    </ul>

    <?php
        require_once "src/Cliente.php";

        //instâncias da classe (Objetos!)
        $clienteA = new Cliente;
        $clienteB = new Cliente;

        //acesso e atribuição
        $clienteA->nome = "Kauê";
        $clienteA->telefones = ["11-2135-0300", "11-9666-5555"];
        $clienteA->email = "kaue506@gmail.com";
        $clienteA->senha = password_hash("123abc", PASSWORD_DEFAULT);

        $clienteB->nome = "Isaac";
        $clienteB->email = "isaac@gmail.com";
    ?>

    <hr>

    <h2>Dados dos objetos</h2>
    <h3> <?=$clienteA->nome?> </h3>
    <p>E-mail: <?=$clienteA->email?></p>
    <p>Telefones: <?=$clienteA->telefones[0]?> | <?=$clienteA->telefones[1]?></p>
    <p>Telefones (convertendo para string) <?=implode(" | ",$clienteA->telefones)?></p>

    <p>Telefones (usando loop)</p>

    <ul>
        <?php
            foreach($clienteA->telefones as $telefone){ ?>
                <li><?=$telefone?></li>
        <?php } ?>
        
    </ul>

    <h2>Acesasndo os dados através de um método</h2>
    <?=$clienteA->exibirDados()?>
    <?=$clienteB->exibirDados()?>

    <pre><?=var_dump($clienteA, $clienteB)?></pre>
</body>
</html>
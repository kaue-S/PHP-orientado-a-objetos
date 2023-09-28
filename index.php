<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        ul{
            list-style: none;
        }

        article{
            background-color: beige;
            width: 300px;
            padding: 5px;
        }
    </style>
    <title>Exemplo 05</title>
</head>
<body>
    <h1>PHP com POO - exemplo 6</h1>
    <hr>
    <h2>Assuntos abordados:</h2>
    <ul>
        <li>Polimorfismo</li>
        <li>Sobreposição de métodos</li>
    </ul>

    <?php
        require_once "src/PessoaFisica.php";
        require_once "src/PessoaJuridica.php";

        $clientePF = new PessoaFisica;

        $clientePF->setNome("Fulaninho");
        $clientePF->setEmail("fulano@email.com");
        $clientePF->setIdade("30");
        $clientePF->setCpf("123.456.789-84");

        $clientePJ = new PessoaJuridica;

        $clientePJ->setNome("Beltrano S/A");
        $clientePJ->setEmail("blabalbal@gmail.com");
        $clientePJ->setAno(2000);
        $clientePJ->setCnpj("43.546.0001/000.41");
        $clientePJ->setNomeFantasia(" bla bla bla Informática");
    ?>

    <section>
        <?=$clientePF->exibirDados()?>
        <?=$clientePJ->exibirDados()?>
    </section>
</body>
</html>
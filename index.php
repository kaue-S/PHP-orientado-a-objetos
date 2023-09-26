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
    <h1>PHP com POO - exemplo 5</h1>
    <hr>
    <h2>Assuntos abordados:</h2>
    <ul>
       <li>Herança (super classe e sub classe)</li>
       <li>Métodos/propriedades protegidos (acessiveis apenas pelas classes em que foram definidos e pelas subclasses)</li>
       <li>Classe abstrata: não permitir isntâncias/objetos, serve apenas de modelo para subclasses</li>
       <li>classe final: não permite herança, ou seja, não aceita a criação de subclasses.</li>
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

    <article>
        <ul>
            <li>
                ClientePJ
            </li>
            <li>Nome: <?=$clientePJ->getNome()?></li>
            <li>Email: <?=$clientePJ->getEmail()?></li>
            <li>Ano Fundação: <?=$clientePJ->getAno()?></li>
            <li>Cnpj: <?=$clientePJ->getCnpj()?></li>
            <li>Nome Fantasia: <?=$clientePJ->getNomeFantasia()?></li>
        </ul>
    </article>

    <?php
        require_once "src/MEI.php";
        $clienteMei = new MEI;
        $clienteMei->setNome("Marina Tanaka");
        $clienteMei->setAno(2023);
        $clienteMei->setNomeFantasia("Tanaka empreendimentos");
        $clienteMei->setAreaDeAtuacao("Ervas medicinais");
    ?>

    <pre><?=var_dump($clienteMei)?></pre>

    <?php
        require_once "src/Cliente.php";
        $clienteGenerico = new Cliente;
    ?>

    <pre><?=var_dump($clienteGenerico)?></pre>
</body>
</html>
<?php

    class Cliente {
        //propriedades
        public string $nome;
        public string $email;
        public string $senha;
        public array $telefones;

       /* método construtor
       Permite configurar a forma de inicialização do objeto, exigindo a atribuição de dados no momento de criar o objeto/instância.
       O construtor é sempre chamado de froma automática assim que o objeto é criado. */

       public function __construct(string $nome, string $email) {
        //atribuindo os valores dos parâmetros às propriedades
            $this->nome = $nome;
            $this->email = $email; 
          
       }
  
    }

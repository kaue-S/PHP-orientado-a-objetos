<?php

    class Cliente {
        //propriedades
        public string $nome;
        public string $email;
        public string $senha;
        public array $telefones;

        //metodos (ou comportamento)
        public function exibirDados():void{
            echo "<section>";
            echo "<h2> $this->nome </h2>";
            echo "<h2> $this->email </h2>";
            echo "</section>";
        }
    }
?>
<?php

    class Cliente {
        //propriedades
        private string $nome;
        private string $email;
        private string $senha;

        //Métodos getter/setters

        public function setNome(string $nome):void {
            $this->nome = $nome;
        }

        public function getNome():string {
            return $this->nome;
        }
    }

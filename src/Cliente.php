<?php

    class Cliente {
        //propriedades
        private string $nome;
        private string $email;
        private string $senha;
        private string $situacao = "a definir";

        //Métodos getter/setters

        //nome
        public function setNome(string $nome):void {
            $this->nome = $nome;
        }

        public function getNome():string {
            return $this->nome;
        }

        //email
        public function setEmail(string $email) : void {
            $this->email = filter_var($email, FILTER_SANITIZE_EMAIL);
        }

        public function getEmail() : string {
            return $this->email;
        }

        //senha
        public function setSenha(string $senha) : void {
            $this->senha = password_hash($senha, PASSWORD_DEFAULT);
        }   

        public function getSenha() : string{
            return $this->senha;
        } 



        //Visibilidade protected: estes getter e setter só poderão ser usados apneas aqui (classe cliente) e nas subclasses (pessoaFisica e PessoaJuridica)
        protected function getSituacao(): string
        {
                return $this->situacao;
        }

        protected function setSituacao(string $situacao): self
        {
                $this->situacao = $situacao;

                return $this;
        }
    }

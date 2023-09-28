<?php
require_once "src/Cliente.php";
    class PessoaJuridica extends Cliente {
        private int $ano;
        private string $cnpj;
        private string $nomeFantasia;

        public function __construct()
        {       //acessando o método setter protegido (existente em cliente)
                $this->setSituacao("Em análise");
        }
       

        public function exibirDados(): void {
                echo "<h3>Método exibirDados - Classe PessoaJuridica</h3>";
                echo "<h4>" .$this->getNome()."</h4>";
                echo "<p> Situação: " .$this->getSituacao()."</p>";
                echo "<p> Nome fantasia: " .$this->nomeFantasia."</p>";
        }

        public function getAno(): int
        {
                return $this->ano;
        }

        public function setAno(int $ano): self
        {
                $this->ano = $ano;

                return $this;
        }

        public function getCnpj(): string
        {
                return $this->cnpj;
        }

        public function setCnpj(string $cnpj): self
        {
                $this->cnpj = $cnpj;

                return $this;
        }

        public function getNomeFantasia(): string
        {
                return $this->nomeFantasia;
        }

        public function setNomeFantasia(string $nomeFantasia): self
        {
                $this->nomeFantasia = $nomeFantasia;

                return $this;
        }
    }
?>
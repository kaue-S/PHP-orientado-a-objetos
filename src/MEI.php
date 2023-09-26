<?php
    require_once "src/PessoaJuridica.php";

    //classe final não permite estender recursos para novas subclasses, ou seja, não permita herança.
    final class MEI extends PessoaJuridica{
        private string $areaDeAtuacao;

        public function getAreaDeAtuacao(): string {
                return $this->areaDeAtuacao;
        }

        public function setAreaDeAtuacao(string $areaDeAtuacao): self {
                $this->areaDeAtuacao = $areaDeAtuacao;
                return $this;
        }
    }
?>
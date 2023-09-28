<?php
    class Utilitarios {
        //propriedade estática
        public static string $dataAtual;

        //Método estático
        public static function obterData(){
            //permite o acesso à propriedade estática. 
            self::$dataAtual = date("d/m/y");
        }

        public static function definirAtendimento(int $idade):string {
            return $idade >=60 ? "prioridade" : "normal";
        }
    }
?>
<?php
    require_once('libs/Smarty.class.php');
    class ClaseVista{
        private $smarty;
        public function imprimirInicio(){
            $smarty = new Smarty();
            $smarty->display('inicio.tpl');
        }
        public function imprimirComandos($comandos){
            $this->smarty->asing($comandos);         
        }
        public function imprimirFunciones($funciones){
            $this->smarty->asing($funciones);         
        }
    }
<?php
    require_once('libs/Smarty.class.php');
    class ClaseVista{
        public function imprimirInicio(){
            $smarty = new Smarty();
            $smarty->display('inicio.tpl');
        }
        
    }
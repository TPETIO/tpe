<?php
require_once 'models/unmodelo.model.php';//enlazo con archivo de modelo.
require_once 'views/unavista.view.php';//enlazo con archivo de vista.

class NombreClase {
    private $modelo;//creo 2 variables de donde iniciar las clases.
    private $vista;
    public function __construct() {//cuando se llama a la clase el CONSTRUCT realiza una accion por default.
        $this->modelo = new ClaseModelo();//inicio las clases dentro de las variables.
        $this->vista = new ClaseVista();
    }

    public function mostrarInicio(){
        $this->vista->imprimirInicio();
    }
}
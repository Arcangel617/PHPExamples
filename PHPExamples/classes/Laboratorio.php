<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Laboratorio
 *
 * @author arcangel
 */
class Laboratorio {
    
    private $nombre;
    private $domicilio;
    private $telefono;
    private $compraMinima;
    private $diaEntrega;
    
    /**
     * Como PHP no admite la sobrecarga de métodos, para poder crear un
     * constructor sobrecargado tendremos que realizar la sobrecarga a mano.
     * 
     * Un ejemplo puede ser el siguiente:
     * 
     */
    
    public function __construct() {
        
        // obtengo un array con los parámetros enviados a la función
        $params = func_get_args();
        // saco el número de parámetros que estoy recibiendo
        $numParams = func_num_args();
        
        // cada constructor de un número dado de parámetros tendrá un nombre de
        // función atendiendo al siguiente modelo __construct1() __construct2()...
        $constructor = '__construct'.$numParams;
        
        // compruebo si hay un constructor con ese número de parámetros
        if(method_exists($this, $constructor)){
            // si existe esa función, se invoca reenviando los parametros que
            // recibe el constructor original
            call_user_func_array(array($this,$constructor),$params);
        }
        
    }
    
    private function __construct1($p_nombre){
        $this->setNombre($p_nombre);
    }
    
    private function __construct2($p_nombre,$p_domicilio){
        $this->setNombre($p_nombre);
        $this->setDomicilio($p_domicilio);
    }
    
    private function __construct3($p_nombre,$p_domicilio,$p_telefono){
        $this->setNombre($p_nombre);
        $this->setDomicilio($p_domicilio);
        $this->setTelefono($p_telefono);
    }

    /**
     * El ejemplo fué extraido del siguiente artículo:
     * http://www.desarrolloweb.com/articulos/sobrecarga-constructores-php.html
     * 
     */
    
    
    private function setNombre($p_nombre) {
        $this->nombre = $p_nombre;
    }

    public function setDomicilio($p_domicilio) {
        $this->domicilio = $p_domicilio;
    }

    public function setTelefono($p_telefono) {
        $this->telefono = $p_telefono;
    }

    public function setCompraMinima($p_compraMinima) {
        $this->compraMinima = $p_compraMinima;
    }

    public function setDiaEntrega($p_diaEntrega) {
        $this->diaEntrega = $p_diaEntrega;
    }

    public function getNombre() {
        return $this->nombre;
    }

    public function getDomicilio() {
        return $this->domicilio;
    }

    public function getTelefono() {
        return $this->telefono;
    }

    public function getCompraMinima() {
        return $this->compraMinima;
    }

    public function getDiaEntrega() {
        return $this->diaEntrega;
    }

    public function mostrar(){
        echo 'Laboratorio: <u>'.$this->getNombre().'</u><br />';
        echo 'Domicilio: <u>'.$this->getDomicilio().'</u> - Teléfono: <u>'.$this->getTelefono().'</u><br />';
    }
    
}

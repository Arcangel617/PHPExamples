<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of CajaDeAhorro
 *
 * @author arcangel
 */
class CajaDeAhorro {
    
    private $nroCuenta;
    private $saldo;
    private $extraccoinesPosibles;
    private $titular;
    
    
    public function __construct() {
        $params     = func_get_args();
        $num_params = func_num_args();
        
        $construct = '__construct'.$num_params;
        
        if(method_exists($this, $construct)){
            call_user_func_array(array($this,$construct), $params);
        }
    }
    
    private function __construct2($p_nroCuenta,$p_titular){
        $this->setNroCuenta($p_nroCuenta);
        $this->setTitular($p_titular);
        $this->setSaldo(0);
        $this->setExtraccoinesPosibles(0);
    }
    
    private function __construct3($p_nroCuenta,$p_titular,$p_saldo){
        $this->setNroCuenta($p_nroCuenta);
        $this->setTitular($p_titular);
        $this->setSaldo($p_saldo);
        $this->setExtraccoinesPosibles(0);
    }

    public function getNroCuenta() {
        return $this->nroCuenta;
    }

    public function getSaldo() {
        return $this->saldo;
    }
    
    public function getTitular(){
        return $this->titular;
    }

    public function getExtraccoinesPosibles() {
        return $this->extraccoinesPosibles;
    }

    private function setNroCuenta($nroCuenta) {
        $this->nroCuenta = $nroCuenta;
    }
    
    private function setTitular($p_titular){
        $this->titular =$p_titular;
    }

    private function setSaldo($saldo) {
        $this->saldo = $saldo;
    }

    private function setExtraccoinesPosibles($extraccoinesPosibles) {
        $this->extraccoinesPosibles = $extraccoinesPosibles;
    }

    private function puedeExtraer($p_importe){
        return true;
    }
    
    public function extraer($p_importe){
        return 0;
    }
    
    public function xQNoPuedeExtraer($p_importe){
        return 0;
    }
    
    public function depositar(){
        return 0;
    }
    
    public function mostrar(){
        echo '';
    }
    
    
}

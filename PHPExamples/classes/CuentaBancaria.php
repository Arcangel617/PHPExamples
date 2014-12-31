<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of CuentaBancaria
 *
 * @author arcangel
 */
class CuentaBancaria {
    
    private $nroCuenta;
    private $saldo;
    private $titular;
    
    public function __construct(){
        $params     = func_get_args();
        $num_params = func_num_args();
        
        $constructor = '__construct'.$num_params;
        
        if(method_exists($this, $constructor)){
            call_user_func_array(array($this,$constructor), $params);
        }
    }
    
    private function __construct2($p_nroCuenta,$p_titular){
        $this->setNroCuenta($p_nroCuenta);
        $this->setTitular($p_titular);
        $this->setSaldo(0);
    }
    
    private function __construct3($p_nroCuenta,$p_titular,$p_saldo){
        $this->setNroCuenta($p_nroCuenta);
        $this->setTitular($p_titular);
        $this->setSaldo($p_saldo);
    }


    public function getNroCuenta() {
        return $this->nroCuenta;
    }

    public function getSaldo() {
        return $this->saldo;
    }

    public function getTitular() {
        return $this->titular;
    }

    private function setNroCuenta($nroCuenta) {
        $this->nroCuenta = $nroCuenta;
    }

    private function setSaldo($saldo) {
        $this->saldo = $saldo;
    }

    private function setTitular($titular) {
        $this->titular = $titular;
    }

    public function depositar($p_importe){
        $this->setSaldo($this->getSaldo()+$p_importe);
        return $this->getSaldo();
    }
    
    public function extraer($p_importe){
        $this->setSaldo($this->getSaldo()-$p_importe);
        return $this->getSaldo();
    }
    
    public function mostrar(){
        echo '- Cuenta Bancaria -<br />';
        echo 'Titular: <u>'.$this->getTitular()->nomYApe().'</u> (<u>'.$this->getTitular()->edad().'</u> años)<br />';
        echo 'Saldo: <u>'.round($this->getSaldo(),2).'</u><br />';
    }
    
    public function toString(){
        return $this->getNroCuenta().' '.$this->getTitular()->nomYApe().' '.$this->getSaldo();
    }
    
}

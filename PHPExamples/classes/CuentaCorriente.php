<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of CuentaCorriente
 *
 * @author arcangel
 */
class CuentaCorriente {
    
    private $nroCuenta;
    private $saldo;
    private $limiteDescubierto;
    private $titular;
    
    public function __construct(){
        $params     = func_get_args();
        $num_params = func_num_args();
        
        $construct = '__construct'.$num_params;
        
        if(method_exists($this, $construct)){
            call_user_func_array(array($this,$construct), $params);
        }
    }
    
    public function __construct2($p_nroCuenta,$p_titular){
        $this->setNroCuenta($p_nroCuenta);
        $this->setTitular($p_titular);
        $this->setSaldo(0);
        $this->setLimiteDescubierto(500);
    }
    
    public function __construct3($p_nroCuenta,$p_titular,$p_saldo){
        $this->setNroCuenta($p_nroCuenta);
        $this->setTitular($p_titular);
        $this->setSaldo($p_saldo);
        $this->setLimiteDescubierto(500);
    }


    public function getNroCuenta() {
        return $this->nroCuenta;
    }

    public function getSaldo() {
        return $this->saldo;
    }

    public function getLimiteDescubierto() {
        return $this->limiteDescubierto;
    }

    public function setNroCuenta($nroCuenta) {
        $this->nroCuenta = $nroCuenta;
    }

    public function setSaldo($saldo) {
        $this->saldo = $saldo;
    }

    public function setLimiteDescubierto($limiteDescubierto) {
        $this->limiteDescubierto = $limiteDescubierto;
    }
    
    public function getTitular() {
        return $this->titular;
    }

    public function setTitular($titular) {
        $this->titular = $titular;
    }

    private function puedeExtraer($p_importe){
        if(($this->getSaldo()+$this->getLimiteDescubierto()) > $p_importe){
            return true;
        }else{
            $this->xQNoPuedeExtraer($p_importe);
        }
    }
    
    public function extraer($p_importe){
        if($this->puedeExtraer($p_importe)){
           $this->setSaldo($this->getSaldo()-$p_importe); 
        }
    }
    
    public function xQNoPuedeExtraer($p_importe){
        return 'El importe de extracción sobrepasa el límite descubierto';
    }
    
    public function depositar($p_importe){
        $this->setSaldo($this->getSaldo()+$p_importe);
        return $this->getSaldo();
    }
    
    
    
    public function mostrar(){
        echo '- Cuenta Corriente - <br />';
        echo 'Nro. Cuenta: <u>'.$this->getNroCuenta().'</u> - Saldo: <u>'.$this->getSaldo().'</u><br />';
        echo 'Titular: <u>'.$this->getTitular()->nomYApe().'</u><br />';
        echo 'Descubierto: <u>'.$this->getLimiteDescubierto().'</u><br />';
        
    }

    
    
}

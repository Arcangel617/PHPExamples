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
        $this->setExtraccoinesPosibles(10);
    }
    
    private function __construct3($p_nroCuenta,$p_titular,$p_saldo){
        $this->setNroCuenta($p_nroCuenta);
        $this->setTitular($p_titular);
        $this->setSaldo($p_saldo);
        $this->setExtraccoinesPosibles(10);
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
        if(($this->getSaldo() > $p_importe) && ($this->getExtraccoinesPosibles() > 0)){
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
        if($this->getExtraccoinesPosibles() == 0){
            return 'No tiene habilitadas mas extracciones!';
        }else{
            return 'No puede extraer mas que el saldo!';
        }
    }
    
    public function depositar($p_importe){
        $this->setSaldo($this->getSaldo()+$p_importe);
        return $this->getSaldo();
    }
    
    public function mostrar(){
        echo '- Caja de Ahorro - <br />';
        echo 'Nro. Cuenta: <u>'.$this->getNroCuenta().'</u> - Saldo: <u>'.$this->getSaldo().'</u><br />';
        echo 'Titular: <u>'.$this->getTitular()->nomyApe().'</u><br />';
        echo 'Extracciones posibles: <u>'.$this->getExtraccoinesPosibles().'</u><br />';
    }
    
    
}

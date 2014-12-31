<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Circulo
 *
 * @author arcangel
 */
class Circulo {
    
    private $radio;
    private $centro;
    
    public function __construct() {
        $params     = func_get_args();
        $num_params = func_num_args();
        
        $constructor = '__construct'.$num_params;
        
        if(method_exists($this, $constructor)){
            call_user_func_array(array($this,$constructor), $params);
        }
    }
    
    public function __construct0() {
        $this->setCentro(new Punto());
        $this->setRadio(0);
    }


    public function __construct2($p_radio, $p_centro) {
        $this->setRadio($p_radio);
        $this->setCentro($p_centro);
    }

    
    public function getRadio() {
        return $this->radio;
    }

    public function getCentro() {
        return $this->centro;
    }

    public function setRadio($radio) {
        $this->radio = $radio;
    }

    public function setCentro($centro) {
        $this->centro = $centro;
    }
    
    public function desplazar($p_dx,$p_dy){
        $this->getCentro()->desplazar($p_dx,$p_dy);
    }
    
    public function caracteristicas(){
        echo '********** <i>Círculo</i> *************<br />';
        echo 'Centro: '.$this->getCentro()->coordenadas().' - Radio: '.round($this->getRadio(),2).'<br />';
        echo 'Superficie: '.round($this->superficie(),2).' - Perímetro: '.round($this->perimetro(),2).'<br />';
    }
    
    public function perimetro(){
        return pi()*2*$this->getRadio();
    }
    
    public function superficie(){
        return pi()*pow($this->getRadio(), 2);
    }
    
    public function distanciaA($p_otroCirculo){
        return $this->getCentro()->distanciaA($p_otroCirculo->getCentro());
    }
    
    public function elMayor($p_otroCirculo){
        if($p_otroCirculo->superficie() > $this->superficie()){
            return $p_otroCirculo;
        }else{
            return $this;
        }
    }

}

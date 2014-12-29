<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Rectangulo
 *
 * @author arcangel
 */
class Rectangulo {
    
    private $origen;
    private $ancho;
    private $alto;
    
    public function __construct(){
        $params     = func_get_args();
        $num_params = func_num_args();
        
        $constructor = '__construct'.$num_params;
        
        if(method_exists($this, $constructor)){
            call_user_func_array(array($this,$constructor), $params);
        }
    }
    
    private function __construct2($p_ancho,$p_alto){
        $this->setAlto($p_alto);
        $this->setAncho($p_ancho);
        $this->setOrigen(new Punto());
    }
    
    private function __construct3($p_ancho,$p_alto,$p_origen){
        $this->setAlto($p_alto);
        $this->setAncho($p_ancho);
        $this->setOrigen($p_origen);
    }


    public function getOrigen() {
        return $this->origen;
    }

    public function getAncho() {
        return $this->ancho;
    }

    public function getAlto() {
        return $this->alto;
    }

    private function setOrigen($origen) {
        $this->origen = $origen;
    }

    private function setAncho($ancho) {
        $this->ancho = $ancho;
    }

    private function setAlto($alto) {
        $this->alto = $alto;
    }

    public function desplazar($p_dx,$p_dy){
        $this->getOrigen()->desplazar($p_dx,$p_dy);
    }
    
    public function caracteristicas(){
        echo '********* <i>Rectángulo</i> ***********<br />';
        echo 'Origen: '.$this->getOrigen()->coordenadas().'- Alto: '.$this->getAlto().'- Ancho: '.$this->getAncho().'<br />';
        echo 'Superficie: '.round($this->superficie(),2).' - Perímetro: '.round($this->perimetro(),2).'<br />';
    }
    
    public function perimetro(){
        return ($this->getAlto()*2)+($this->getAncho()*2);
    }
    
    public function superficie(){
        return $this->getAlto()*$this->getAncho();
    }
    
    public function distanciaA($p_otroRectangulo){
        return $this->getOrigen()->distanciaA($p_otroRectangulo->getOrigen());
    }
    
    public function elMayor($p_otroRectangulo){
        if($p_otroRectangulo->superficie() > $this->superficie()){
            return $p_otroRectangulo;
        }else{
            return $this;
        }
    }
}

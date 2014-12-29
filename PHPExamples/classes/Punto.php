<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Punto
 *
 * @author arcangel
 */
class Punto {
    
    private $x;
    private $y;
    
    public function __construct() {
        $params     = func_get_args();
        $num_params = func_num_args();
        
        $constructor = '__construct'.$num_params;
        
        if(method_exists($this, $constructor)){
            call_user_func_array(array($this,$constructor), $params);
        }
    }
    
    public function __construct0(){
        $this->setX(0);
        $this->setY(0);
    }
    
    public function __construct2($p_x,$p_y) {
        $this->setY($p_y);
        $this->setX($p_x);
    }


    public function getX() {
        return $this->x;
    }

    public function getY() {
        return $this->y;
    }

    private function setX($p_x) {
        $this->x = $p_x;
    }

    private function setY($p_y) {
        $this->y = $p_y;
    }

    public function distanciaA($p_ptoDistante){
        
        $d = sqrt(pow(($p_ptoDistante->getX() - $this->getX()), 2) + pow(($p_ptoDistante->getY() - $this->getY()), 2)); 
        return $d;
    }
    
    public function desplazar($p_dx,$p_dy){
        $this->setX($this->getX()+$p_dx);
        $this->setY($this->getY()+$p_dy);
    }
    
    public function mostrar(){
        echo 'Punto. X: <u>'.round($this->getX(),1).'</u>, Y: <u>'.round($this->getY(),1).'</u>';
    }
    
    public function coordenadas(){
        return '('.round($this->getX(),1).','.round($this->getY(),1).')';
    }
    
    
}

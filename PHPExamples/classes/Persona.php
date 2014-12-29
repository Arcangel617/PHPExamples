<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of persona
 *
 * @author arcangel
 */
class Persona {
    
    private $nroDni;
    private $nombre;
    private $apellido;
    private $anioNacimiento;
    
    public function __construct($p_nroDni,$p_nombre,$p_apellido,$p_anioNacimiento) {
        $this->setNroDni($p_nroDni);
        $this->setNombre($p_nombre);
        $this->setApellido($p_apellido);
        $this->setAnioNacimiento($p_anioNacimiento);
    }
    
    private function setNroDni($p_nroDni) {
        $this->nroDni = $p_nroDni;
    }

    private function setNombre($p_nombre) {
        $this->nombre = $p_nombre;
    }

    private function setApellido($p_apellido) {
        $this->apellido = $p_apellido;
    }

    private function setAnioNacimiento($p_anioNacimiento) {
        $this->anioNacimiento = $p_anioNacimiento;
    }
    
    public function getNroDni() {
        return $this->nroDni;
    }

    public function getNombre() {
        return $this->nombre;
    }

    public function getApellido() {
        return $this->apellido;
    }

    public function getAnioNacimiento() {
        return $this->anioNacimiento;
    }

    public function edad(){
        
        return date('Y') - $this->getAnioNacimiento();
    }
    
    public function nomYApe(){
        return $this->getNombre().' '.$this->getApellido();
    }
    
    public function apeYNom(){
        return $this->getApellido().' '.$this->getNombre();
    }
    
    public function mostrar(){
        echo 'Nombre y Apellido: <u> '.$this->nomYApe().' </u><br />';
        echo 'DNI: <u> '.$this->getNroDni().'</u>  Edad: <u> '.$this->edad().' </u><br />';
    }


}

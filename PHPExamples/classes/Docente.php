<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Docente
 *
 * @author arcangel
 */
class Docente {
    
    private $nombre;
    private $grado;
    private $sueldoBasico;
    private $asignacionFamiliar;
    
    public function __construct($p_nombre,$p_sueldoBasico,$p_asigFamiliar){
        $this->setNombre($p_nombre);
        $this->setSueldoBasico($p_sueldoBasico);
        $this->setAsignacionFamiliar($p_asigFamiliar);
    }


    public function getNombre() {
        return $this->nombre;
    }

    public function getGrado() {
        return $this->grado;
    }

    public function getSueldoBasico() {
        return $this->sueldoBasico;
    }

    public function getAsignacionFamiliar() {
        return $this->asignacionFamiliar;
    }

    private function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    private function setGrado($grado) {
        $this->grado = $grado;
    }

    private function setSueldoBasico($sueldoBasico) {
        $this->sueldoBasico = $sueldoBasico;
    }

    private function setAsignacionFamiliar($asignacionFamiliar) {
        $this->asignacionFamiliar = $asignacionFamiliar;
    }

    public function calcularSueldo(){
        return $this->getSueldoBasico()+$this->getAsignacionFamiliar();
    }

    
    
}

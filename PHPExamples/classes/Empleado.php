<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Empleado
 *
 * @author arcangel
 */
class Empleado {
    
    private $cuil;
    private $apellido;
    private $nombre;
    private $sueldoBasico;
    private $anioIngreso;
    
    
    public function __construct($p_cuil,$p_apellido,$p_nombre,$p_importe,$p_anio) {
        $this->setCuil($p_cuil);
        $this->setApellido($p_apellido);
        $this->setNombre($p_nombre);
        $this->setSueldoBasico($p_importe);
        $this->setAnioIngreso($p_anio);
    }
    
    public function getCuil() {
        return $this->cuil;
    }

    public function getApellido() {
        return $this->apellido;
    }

    public function getNombre() {
        return $this->nombre;
    }

    public function getSueldoBasico() {
        return $this->sueldoBasico;
    }

    public function getAnioIngreso() {
        return $this->anioIngreso;
    }

    private function setCuil($cuil) {
        $this->cuil = $cuil;
    }

    private function setApellido($apellido) {
        $this->apellido = $apellido;
    }

    private function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    private function setSueldoBasico($sueldoBasico) {
        $this->sueldoBasico = $sueldoBasico;
    }

    private function setAnioIngreso($anioIngreso) {
        $this->anioIngreso = $anioIngreso;
    }

    public function antiguedad(){
        return date('Y') - $this->getAnioIngreso();
    }
    
    private function descuento(){
        return ($this->getSueldoBasico()*0.2) + 12;
    }
    
    private function adicional(){
        
        if($this->antiguedad() < 2)
        {
            return $this->getSueldoBasico()*0.2;
        }
        elseif(($this->antiguedad() >= 2) && ($this->antiguedad() < 10))
        {
            return $this->getSueldoBasico()*0.4;
        }
        else
        {
            return $this->getSueldoBasico()*0.6;
        }
    }

    public function sueldoNeto(){
        return $this->getSueldoBasico()+$this->adicional()-$this->descuento();
    }
    
    public function nomYApe(){
        return $this->getNombre().' '.$this->getApellido();
    }
    
    public function apeYApe(){
        return $this->getApellido().' '.$this->getNombre();
    }
    
    public function mostrar(){
        echo 'Nombre y Apellido: <u>'.$this->nomYApe().'</u><br />';
        echo 'CUIL: <u>'.$this->getCuil().'</u> Antigüedad: <u>'.$this->antiguedad().'</u> años de servicio<br/>';
        echo 'Sueldo Neto: $<u>'.round($this->sueldoNeto(),2).'</u><br />';
    }
    
    public function mostrarLinea(){
        return '<strong>'.$this->getCuil().' '.$this->getApellido().', '.$this->getNombre().'.................... $ '.round($this->sueldoNeto(),2).'</strong>';
    }
    
}

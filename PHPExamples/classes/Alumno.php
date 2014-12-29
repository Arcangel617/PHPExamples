<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Alumno
 *
 * @author arcangel
 */
class Alumno {
    
    private $lu;
    private $nombre;
    private $apellido;
    private $nota1;
    private $nota2;
    
    public function __construct($p_lu, $p_nombre, $p_apellido) {
        $this->setLu($p_lu);
        $this->setNombre($p_nombre);
        $this->setApellido($p_apellido);
        $this->setNota1(0);
        $this->setNota2(0);
    }
    
    public function getLu() {
        return $this->lu;
    }

    public function getNombre() {
        return $this->nombre;
    }

    public function getApellido() {
        return $this->apellido;
    }

    public function getNota1() {
        return $this->nota1;
    }

    public function getNota2() {
        return $this->nota2;
    }

    public function setLu($lu) {
        $this->lu = $lu;
    }

    private function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    private function setApellido($apellido) {
        $this->apellido = $apellido;
    }

    public function setNota1($nota1) {
        $this->nota1 = $nota1;
    }

    public function setNota2($nota2) {
        $this->nota2 = $nota2;
    }

    private function aprueba(){
        if(($this->promedio() > 7) && ($this->getNota1() >= 6) && ($this->getNota2() >= 6)){
            return true;
        }else{
            return false;
        }
    }
    
    private function leyendaAprueba(){
        if($this->aprueba()){
            return 'APROBADO';
        }else{
            return 'DESAPROBADO';
        }
    }
    
    public function promedio(){
        return (($this->getNota1()+$this->getNota2())/2);
    }
    
    public function nomYApe(){
        return $this->getNombre().' '.$this->getApellido();
    }
    
    public function apeYNom(){
        return $this->getApellido().' '.$this->getNombre();
    }
    
    public function mostrar(){
        echo 'Nombre y Apellido: <u>'.$this->nomYApe().'</u><br />';
        echo 'LU: <u>'.$this->getLu().'</u> Notas: <u>'.$this->getNota1().'</u> - <u>'.$this->getNota2().'</u><br />';
        echo 'Promedio: <u>'.$this->promedio().'</u> - <u>'.$this->leyendaAprueba().'</u><br />';
    }
    
}

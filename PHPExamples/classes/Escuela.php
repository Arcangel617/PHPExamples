<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Escuela
 *
 * @author arcangel
 */
class Escuela {
    
    private $nombre;
    private $domicilio;
    private $director;
    
    public function __construct($p_nombre,$p_domicilio,$p_director) {
        $this->setNombre($p_nombre);
        $this->setDomicilio($p_domicilio);
        $this->setDirector($p_director);
    }


    public function getNombre() {
        return $this->nombre;
    }

    public function getDomicilio() {
        return $this->domicilio;
    }

    public function getDirector() {
        return $this->director;
    }

    private function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    private function setDomicilio($domicilio) {
        $this->domicilio = $domicilio;
    }

    private function setDirector($director) {
        $this->director = $director;
    }

    public function imprimirRecibo($p_docente){
        echo 'Escuela: '.$this->getNombre().' Domicilio: '.$this->getDomicilio().' Director: '.$this->getDirector().'<br />';
        echo '---------------------------------------------------------------------------------------------------------------------------------------<br />';
        echo 'Docente: '.$p_docente->getNombre().'<br />';
        echo 'Sueldo: ................................. $ '.$p_docente->calcularSueldo().'<br/>';
        echo 'Sueldo Básico: ..................... $ '.$p_docente->getSueldoBasico().'<br/>';
        echo 'Asignación familiar: ............ $ '.$p_docente->getAsignacionFamiliar().'<br/>';
    }
    
}

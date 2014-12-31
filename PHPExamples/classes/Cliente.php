<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Cliente
 *
 * @author arcangel
 */
class Cliente {
    
    private $nroDni;
    private $apellido;
    private $nombre;
    private $saldo;
    
    public function __construct($p_dni,$p_apellido,$p_nombre,$p_importe) {
        $this->setNroDni($p_dni);
        $this->setApellido($p_apellido);
        $this->setNombre($p_nombre);
        $this->setSaldo($p_importe);
    }
    
    public function getNroDni() {
        return $this->nroDni;
    }

    public function getApellido() {
        return $this->apellido;
    }

    public function getNombre() {
        return $this->nombre;
    }

    public function getSaldo() {
        return $this->saldo;
    }

    private function setNroDni($p_nroDni) {
        $this->nroDni = $p_nroDni;
    }

    private function setApellido($p_apellido) {
        $this->apellido = $p_apellido;
    }

    private function setNombre($p_nombre) {
        $this->nombre = $p_nombre;
    }

    private function setSaldo($p_saldo) {
        $this->saldo = $p_saldo;
    }
    
    public function mostrar(){
        echo '- Cliente -<br />';
        echo 'Nombre y Apellido: <u>'.$this->nomYApe().' ('.$this->getNroDni().')</u><br />';
        echo 'Saldo: $'.round($this->getSaldo(),2);
    }

    public function nuevoSaldo($p_importe){
        $this->setSaldo($p_importe);
        return $this->getSaldo();
    }
    
    public function agregaSaldo($p_importe){
        $this->setSaldo($this->getSaldo()+$p_importe);
        return $this->getSaldo();
    }
    
    public function apeYNom(){
        return $this->getApellido().' '.$this->getNombre();
    }
    
    public function nomYApe(){
        return $this->getNombre().' '.$this->getApellido();
    }
    
}

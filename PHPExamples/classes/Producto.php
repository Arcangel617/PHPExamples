<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Producto
 *
 * @author arcangel
 */
class Producto {
    
    private $codigo;
    private $rubro;
    private $descripcion;
    private $costo;
    private $stock;
    private $porcPtoRepo;
    private $existMinima;
    private $laboratorio;
    
    public function __construct($p_cod,$p_rubro,$p_desc,$p_costo,$p_lab) {
        $this->setCodigo($p_cod);
        $this->setRubro($p_rubro);
        $this->setDescripcion($p_desc);
        $this->setCosto($p_costo);
        $this->setLaboratorio($p_lab);
        $this->setStock(0);
    }
    
    public function getCodigo() {
        return $this->codigo;
    }

    public function getRubro() {
        return $this->rubro;
    }

    public function getDescripcion() {
        return $this->descripcion;
    }

    public function getCosto() {
        return $this->costo;
    }

    public function getStock() {
        return $this->stock;
    }

    public function getPorcPtoRepo() {
        return $this->porcPtoRepo;
    }

    public function getExistMinima() {
        return $this->existMinima;
    }

    public function getLaboratorio() {
        return $this->laboratorio;
    }


    private function setCodigo($codigo) {
        $this->codigo = $codigo;
    }

    private function setRubro($rubro) {
        $this->rubro = $rubro;
    }

    private function setDescripcion($descripcion) {
        $this->descripcion = $descripcion;
    }

    private function setCosto($costo) {
        $this->costo = $costo;
    }

    private function setStock($stock) {
        $this->stock = $stock;
    }

    private function setPorcPtoRepo($porcPtoRepo) {
        $this->porcPtoRepo = $porcPtoRepo;
    }

    private function setExistMinima($existMinima) {
        $this->existMinima = $existMinima;
    }
    
    private function setLaboratorio($laboratorio) {
        $this->laboratorio = $laboratorio;
    }

    public function mostrar(){
        $this->getLaboratorio()->mostrar();
        echo 'Rubro: <u>'.$this->getRubro().'</u><br />';
        echo 'Descripción: <u>'.$this->getDescripcion().'</u><br />';
        echo 'Precio Costo: <u>'.$this->getCosto().'</u><br />';
        echo 'Stock: <u>'.$this->getStock().'</u> - Stock Valorizado: $<u>'.$this->stockValorizado().'</u><br />';
    }
    
    public function ajuste($p_cantidad){
        $this->setStock($this->getStock()+$p_cantidad);
    }

    public function stockValorizado(){
        $stockValorizado = $this->getStock()*$this->getCosto();
        
        return $stockValorizado + ($stockValorizado*0.12);
    }
    
    public function precioLista(){
        return $this->getCosto()+($this->getCosto()*0.12);
    }
    
    public function precioContado(){
        return $this->precioLista()-($this->precioLista()*0.05);
    }
    
    public function mostrarLinea(){
        return '<strong>'.$this->getDescripcion().' '.round($this->precioLista(),2).' '.round($this->precioContado(),2).'</strong>';
    }
    
}

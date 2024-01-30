<?php

namespace App;

class Propiedad extends ActiveRecord {
    
    protected static $tabla = 'propiedades';
    protected static $columnasDB = ['id', 'titulo', 'precio', 'imagen', 'descripcion', 'habitaciones',
    'baños', 'estacionamientos', 'creado', 'vendedorId'];

    public $id;
    public $titulo;
    public $precio;
    public $imagen;
    public $descripcion;
    public $habitaciones;
    public $baños;
    public $estacionamientos;
    public $creado;
    public $vendedorId;
 
    public function __construct ($args = []) 
    {
        $this->id = $args['id'] ?? null;
        $this->titulo = $args['titulo'] ?? '';
        $this->precio = $args['precio'] ?? '';
        $this->imagen = $args['imagen'] ?? '';
        $this->descripcion = $args['descripcion'] ?? '';
        $this->habitaciones = $args['habitaciones'] ?? '';
        $this->baños = $args['baños'] ?? '';
        $this->estacionamientos = $args['estacionamientos'] ?? '';
        $this->creado = date('Y/m/d');
        $this->vendedorId = $args['vendedor'] ?? '';
    }

    public function validar() {

        if(!$this->titulo) {
            self::$errores[] = "Debes añadir un titulo";
        }
        if(!$this->precio) {
            self::$errores[] = "Debes añadir un precio";
        }
        if(!$this->imagen) {
            self::$errores[] = "Debes añadir una imagen de la propiedad";
        }
        if( strlen($this->descripcion) < 50 ) {
            self::$errores[] = "Debes añadir una descripcion";
        }
        if(!$this->habitaciones) {
            self::$errores[] = "Debes añadir habitaciones";
        }
        if(!$this->baños) {
            self::$errores[] = "Debes añadir baños";
        }
        if(!$this->estacionamientos) {
            self::$errores[] = "Debes añadir estacionamientos";
        }
        if(!$this->vendedorId) {
            self::$errores[] = "Debes añadir un vendedor";
        }
       
         
        return self::$errores;
    }
}
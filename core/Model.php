<?php
namespace app\core;

abstract class Model{

    public function cargarDatos($datos){
        foreach ($datos as $clave => $valor){
            if (property_exists($this, $clave)){
                $this->{$clave} = $valor;
            }
        }
    }
}
?>
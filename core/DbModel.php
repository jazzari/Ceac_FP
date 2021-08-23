<?php

namespace app\core;
use app\core\Model;
use app\models\Usuario;
use app\models\Aseguradora;
use app\models\Averia;

abstract class DbModel extends Model{
    public string $modelo = '';
    public Usuario $usuario;
    public Aseguradora $aseguradora;
    public Averia $averia;

    abstract public function atributos(): array;
    abstract public function clavePrimaria(): string;

    public function guardar(){
        $tableName = $this->tableName();
        $atributos = $this->atributos();
        $params = array_map(fn($attr) => ":$attr", $atributos);
        $consulta = self::preparar("INSERT INTO $tableName (".implode(',', $atributos).")
            VALUES(".implode(',', $params).")");
        foreach ($atributos as $atributo){
            $consulta->bindValue(":$atributo", $this->{$atributo});
        }
        $consulta->execute();
        return true;
    }

    public function findOne($where){
        $usuario = new Usuario();
        $tableName = $usuario->tableName();

        $sql = implode('AND ', array_map(
            function ($v, $k) { return sprintf("%s = '%s'", $k, $v); },
            $where,
            array_keys($where)
        ));
        
        $consulta = self::preparar("SELECT * FROM $tableName WHERE $sql");
        
        $consulta->execute(); 
        
        return $consulta->fetchObject(static::class);
    }

    public static function findAll($modelo){
        $consulta = Application::$app->db->pdo->prepare("SELECT * FROM $modelo");
        $consulta->execute();
        return $lista = $consulta->fetchAll();
    }
    

    public static function preparar($sql){
        return Application::$app->db->pdo->prepare($sql);
    }
}
?>
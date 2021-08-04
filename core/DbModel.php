<?php
namespace app\core;
use app\core\Model;

abstract class DbModel extends Model{
    abstract public function tableName(): string;

    abstract public function atributos(): array;

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

    public static function preparar($sql){
        return Application::$app->db->pdo->prepare($sql);
    }
}
?>
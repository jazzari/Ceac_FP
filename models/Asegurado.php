<?php
namespace app\models;
use app\core\DbModel;
use app\core\Application;

class Asegurado extends DbModel{
    public string $nombre = '';
    public string $direccion = '';
    public string $telefono = '';
    public string $domicilio = '';
    public string $aseguradora_id = '';

    public function tableName(): string{
        return  'asegurado';
    }

    public function clavePrimaria(): string{
        return 'asegurado_id';
    }

    public function atributos(): array{
        return ['nombre', 'direccion', 'telefono', 'domicilio', 'aseguradora_id'];
    }

    public function regAsegurado(){
        // comprueba que el email no exista en la DB
        $consulta = Application::$app->db->pdo->prepare("SELECT * FROM asegurado WHERE nombre='$this->nombre'");
  
        $consulta->execute();
        $campo = $consulta->fetchObject();
        if ($campo){
            echo '<div class="alert alert-warning alert-dismissible fade show" role="alert"">
                 Ya existe un Asegurado con ese nombre
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>';

        } else {
            // crea la cuenta en la DB
            return $this->guardar();
        }
    }

    public function listarAsegurados(){
        $lista = Asegurado::findAll('asegurado');
        return $lista;
    }

}
?>
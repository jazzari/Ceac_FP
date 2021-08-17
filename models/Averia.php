<?php
namespace app\models;
use app\core\DbModel;
use app\core\Application;

class Averia extends DbModel{
    public string $averia_id = '';
    public string $fecha = '';
    public string $aseguradora_id = '';
    public string $asegurado_id = '';
    public string $descripcion = '';
    

    public function tableName(): string{
        return  'averia';
    }

    public function clavePrimaria(): string{
        return 'averia_id';
    }

    public function atributos(): array{
        return ['averia_id', 'fecha', 'aseguradora_id', 'asegurado_id', 'descripcion'];
    }

    public function regAveria(){
        // comprueba que el email no exista en la DB
        $consulta = Application::$app->db->pdo->prepare("SELECT * FROM averia WHERE aseguradora_id='$this->aseguradora_id' AND asegurado_id='$this->asegurado_id'");
  
        $consulta->execute();
        $campo = $consulta->fetchObject();
        if ($campo){
            echo '<div class="alert alert-warning alert-dismissible fade show" role="alert"">
                 Ya hay registrada una Avería con ese asegurado y esa aseguradora
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>';

        } else {
            // crea la cuenta en la DB
            return $this->guardar();
        }
    }

    public function listarAverias(){
        $lista = Averia::findAll('averia');
        return $lista;
    }

}
?>
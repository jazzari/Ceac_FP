<?php
namespace app\models;
use app\core\DbModel;
use app\core\Application;

class Averia extends DbModel{
    public string $fecha = '';
    public string $asunto = '';
    public string $aseguradora_id = '';
    public string $asegurado_id = '';
    public string $usuario_id = '';
    public string $descripcion = '';
    public string $foto = '';
    

    public function tableName(): string{
        return  'averia';
    }

    public function clavePrimaria(): string{
        return 'averia_id';
    }

    public function atributos(): array{
        return ['asunto', 'fecha', 'aseguradora_id', 'asegurado_id', 'usuario_id', 'descripcion', 'foto'];
    }

    public function regAveria(){
        // comprueba que no exista una averia registrada con ese asegurado en la DB
        $consulta = Application::$app->db->pdo->prepare("SELECT * FROM averia WHERE aseguradora_id='$this->aseguradora_id' AND asegurado_id='$this->asegurado_id'");
  
        $consulta->execute();
        $campo = $consulta->fetchObject();
        if ($campo){
            echo '<div class="alert alert-warning alert-dismissible fade show" role="alert"">
                 Ya hay registrada una Avería con ese asegurado y esa aseguradora
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>';

        } else {
            // crea la averia en la DB
            return $this->guardar();
        }
    }

    public function listarAverias(){
        $lista = Averia::findAll('averia');
        return $lista;
    }

}
?>
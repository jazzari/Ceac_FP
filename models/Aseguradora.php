<?php
namespace app\models;
use app\core\DbModel;
use app\core\Application;

class Aseguradora extends DbModel{
    public string $nombre = '';
    public string $domicilio = '';
    public string $cif = '';
    public string $telefono = '';
    public string $correo = '';
    public string $contacto = '';

    public function tableName(): string{
        return  'aseguradora';
    }

    public function clavePrimaria(): string{
        return 'aseguradora_id';
    }

    public function atributos(): array{
        return ['nombre', 'domicilio', 'cif', 'telefono', 'correo', 'contacto'];
    }

    public function regAseguradora(){
        // comprueba que el email no exista en la DB
        $consulta = Application::$app->db->pdo->prepare("SELECT * FROM aseguradora WHERE correo='$this->correo'");
  
        $consulta->execute();
        $campo = $consulta->fetchObject();
        if ($campo){
            echo '<div class="alert alert-warning alert-dismissible fade show" role="alert"">
                 Ya existe una Aseguradora con ese correo
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>';

        } else {
            // crea la cuenta en la DB
            return $this->guardar();
        }
    }

    public function listarAseguradoras(){
        $lista = Aseguradora::findAll('aseguradora');
        return $lista;
    }

}
?>
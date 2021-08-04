<?php
namespace app\models;
use app\core\DbModel;
use app\core\Application;

class Usuario extends DbModel{
    const ADMIN_INACTIVO = 0;
    const ADMIN_ACTIVO = 1;

    public string $user = '';
    public string $nombre = '';
    public string $apellidos = '';
    public string $correo = '';
    public string $pass = '';
    public int $admin = self::ADMIN_INACTIVO;

    public function tableName(): string{
        return  'usuario';
    }

    public function registro(){
        // comprueba que el email no exista en la DB
        $consulta = Application::$app->db->pdo->prepare("SELECT * FROM usuario WHERE correo='$this->correo'");
        $consulta->execute();
        $campo = $consulta->fetchObject();
        if ($campo){
            echo "Ya existe una cuenta con ese correo";

        } else {
            // crea la cuenta en la DB
            $this->admin = self::ADMIN_INACTIVO;
            $this->pass = md5($this->pass);
            return $this->guardar();
        }
    }

    public function atributos(): array{
        return ['user', 'nombre', 'apellidos', 'correo', 'pass', 'admin'];
    }
}
?>
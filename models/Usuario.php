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

    public function clavePrimaria(): string{
        return 'usuario_id';
    }

    public function registro(){
        // comprueba que el email no exista en la DB
        $usuario = Usuario::findOne(['correo' => $this->correo]);
        if ($usuario){
            echo '<div class="alert alert-warning alert-dismissible fade show" role="alert"">
                 Ya existe una cuenta con ese correo
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>';

        } else {
            // crea la cuenta en la DB
            $this->admin = self::ADMIN_INACTIVO;
            $this->pass = password_hash($this->pass, PASSWORD_DEFAULT);
            return $this->guardar();
        }
    }

    public function atributos(): array{
        return ['user', 'nombre', 'apellidos', 'correo', 'pass', 'admin'];
    }

    public function listarUsuarios(){
        $lista = Usuario::findAll('usuario');
        return $lista;
    }

    
}
?>
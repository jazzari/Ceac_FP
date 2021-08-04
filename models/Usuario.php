<?php
namespace app\models;
use app\core\DbModel;

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
        $this->admin = self::ADMIN_INACTIVO;
        $this->pass = md5($this->pass);
        return $this->guardar();
    }

    public function atributos(): array{
        return ['user', 'nombre', 'apellidos', 'correo', 'pass', 'admin'];
    }
}
?>
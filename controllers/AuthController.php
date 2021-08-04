<?php
namespace app\controllers;
use app\core\Controller;
use app\core\Request;
use app\models\Usuario;

class AuthController extends Controller{

    public function login(){
        return $this->render('login');
    }

    public function registro(Request $request){
        $usuario = new Usuario();
        if ($request->isPost()){
            $usuario->cargarDatos($request->getContenido());
           
            if ($usuario ->registro()){
                return 'Success!';
            }

            return $this->render('registro', [
                'model' => $usuario
            ]);
        }
        return $this->render('registro', [
            'model' => $usuario
        ]);
    }
}
?>
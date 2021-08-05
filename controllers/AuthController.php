<?php
namespace app\controllers;
use app\core\Controller;
use app\core\Request;
use app\models\Usuario;
use app\models\Login;

class AuthController extends Controller{

    public function login(Request $request){
        $login = new Login();

        if ($request->isPost()){
            $login->cargarDatos($request->getContenido());
            if ($login ->login()){
                echo "<script type=\"text/javascript\">
                alert('Bienvenido!');
                window.location.href='/home';
                </script>";
                
                return;
            }
        }
        return $this->render('login');
    }

    public function registro(Request $request){
        $usuario = new Usuario();

        if ($request->isPost()){
            $usuario->cargarDatos($request->getContenido());
           
            if ($usuario ->registro()){
                echo "<script type=\"text/javascript\">
                alert('Gracias por registarse!');
                window.location.href='/home';
                </script>";
                // return 'Success!';
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
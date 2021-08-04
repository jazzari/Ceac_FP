<?php
namespace app\controllers;
use app\core\Controller;
use app\core\Request;
use app\models\RegistroModel;

class AuthController extends Controller{

    public function login(){
        return $this->render('login');
    }

    public function registro(Request $request){
        $registroModel = new RegistroModel();
        if ($request->isPost()){
            $registroModel->cargarDatos($request->getContenido());
        
            if ($registroModel ->registro()){
                return 'Success!';
            }

            return $this->render('registro', [
                'model' => $registroModel
            ]);
        }
        return $this->render('registro', [
            'model' => $registroModel
        ]);
    }
}
?>
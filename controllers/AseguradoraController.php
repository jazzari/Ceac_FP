<?php
namespace app\controllers;
use app\core\Controller;
use app\core\Application;
use app\core\Request;
use app\models\Aseguradora;
use app\core\middlewares\AuthMiddleware;

class AseguradoraController extends Controller{

    public function __construct(){
        // $this->registroMiddleware(new AuthMiddleware(['panelAdmin']));
    }

    public function regAseguradora(Request $request){
        $aseguradora = new Aseguradora();
        
        if ($request->isPost()){
            $aseguradora->cargarDatos($request->getContenido());
        
           
            if ($aseguradora ->regAseguradora()){
                echo "<script type=\"text/javascript\">
                alert('Se ha registrado la Aseguradora con éxito');
                window.location.href='/panelAdmin';
                </script>";
            }

            return $this->render('regAseguradora', [
                'model' => $aseguradora
            ]);
        }
        return $this->render('regAseguradora', [
            'model' => $aseguradora
        ]);
    }

    public function listarAseguradora(){
        $aseguradora = new Aseguradora();
        $listaAseg = $aseguradora->listarAseguradora();
        
        return $this->render('listarAseguradora', compact('listaAseg'));
    }

}
?>
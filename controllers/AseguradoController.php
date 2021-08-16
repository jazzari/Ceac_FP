<?php
namespace app\controllers;
use app\core\Controller;
use app\core\Application;
use app\core\Request;
use app\models\Asegurado;
use app\models\Aseguradora;
use app\core\middlewares\AuthMiddleware;

class AseguradoController extends Controller{

    public function __construct(){
        // $this->registroMiddleware(new AuthMiddleware(['panelAdmin']));
    }

    public function regAsegurado(Request $request){
        $asegurado = new Asegurado();
        $aseguradora = new Aseguradora();
        $listAseg = (array)$aseguradora->findAll('aseguradora');
        
        if ($request->isPost()){
            $asegurado->cargarDatos($request->getContenido());
        
           
            if ($asegurado ->regAsegurado()){
                echo "<script type=\"text/javascript\">
                alert('Se ha registrado el Asegurado con éxito');
                window.location.href='/panelAdmin';
                </script>";
            }

            return $this->render('regAsegurado', [
                'model' => $asegurado
            ]);
        }
        return $this->render('regAsegurado', compact('listAseg'));
    }

    public function listarAsegurados(){
        $asegurado = new Asegurado();
        $listaAsegurados = $asegurado->listarAsegurados();
        
        return $this->render('listarAsegurados', compact('listaAsegurados'));
    }

}
?>
<?php
namespace app\controllers;
use app\core\Controller;
use app\core\Application;
use app\core\Request;
use app\models\Asegurado;
use app\models\Aseguradora;
use app\models\Averia;
use app\core\middlewares\AuthMiddleware;

class AveriaController extends Controller{

    public function __construct(){
        // $this->registroMiddleware(new AuthMiddleware(['panelAdmin']));
    }

    public function regAveria(Request $request){
        $averia = new Averia();
        $aseguradora = new Aseguradora();
        $asegurado = new Asegurado();
        $listAseguradora = (array)$aseguradora->findAll('aseguradora');
        $listAsegurado = (array)$asegurado->findAll('asegurado');
        
        if ($request->isPost()){
            $averia->cargarDatos($request->getContenido());
        
           
            if ($averia ->regAveria()){
                echo "<script type=\"text/javascript\">
                alert('Se ha registrado la Avería con éxito');
                window.location.href='/panelAdmin';
                </script>";
            }

            return $this->render('regAveria', [
                'model' => $averia
            ]);
        }
        return $this->render('regAveria', compact('listAseguradora', 'listAsegurado'));
    }

    public function listarAverias(){
        $averia = new Averia();
        $asegurado = new Asegurado();
        $aseguradora = new Aseguradora();
        $listAveria = (array)$averia->findAll('averia');
        $listAseguradora = (array)$aseguradora->findAll('aseguradora');
        // $listAseg = $asegurado->getAsegurados(12);
//         echo '<pre>';
// var_dump($listAseg);
// echo '</pre>';
// exit;
        // $listaAsegurados = $asegurado->listarAsegurados();
        
        return $this->render('listarAveria', compact('listAseguradora', 'listAveria'));
    }

}
?>
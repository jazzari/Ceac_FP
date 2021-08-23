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
        // $listAseguradora = (array)$aseguradora->findAll('aseguradora');
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
        return $this->render('regAveria', compact('listAsegurado'));
    }

    public function listarAverias(){
        $aseguradoras = [];
        $asegurados = [];
        $averia = new Averia();
        $aseguradoObj = new Asegurado();
        $aseguradoraObj = new Aseguradora();
        $listAveria = (array)$averia->findAll('averia');
        foreach ($listAveria as $averia){
            $aseguradora = $averia['aseguradora_id'];
            $asegurado = $averia['asegurado_id'];
            array_push($aseguradoras, $aseguradora);
            array_push($asegurados, $asegurado);
        }
        $listAseg = implode(',', $aseguradoras);
        $listAsegur = implode(',', $asegurados);
        $listAseguradora = $aseguradoraObj->getAseguradoras($listAseg);
        $listAsegurados = $aseguradoObj->getAsegurados($listAsegur);
        
        return $this->render('listarAverias', compact('listAseguradora', 'listAveria', 'listAsegurados'));
    }

}
?>
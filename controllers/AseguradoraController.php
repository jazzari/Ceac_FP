<?php
namespace app\controllers;
use app\core\Controller;
use app\core\Application;
use app\core\Request;
use app\models\Aseguradora;

class AseguradoraController extends Controller{

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

    public function listarAseguradoras(){
        $aseguradora = new Aseguradora();
        $listaAseg = $aseguradora->listarAseguradoras();
        
        return $this->render('listarAseguradoras', compact('listaAseg'));
    }

}
?>
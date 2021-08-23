<?php
namespace app\controllers;
use app\core\Application;
use app\core\Request;
use app\core\Controller;


class PrincipalController extends Controller{

    public  function home(){
        $params = [
            'name' => "The SolucionesIntegrales"
        ];
        return $this->render('home', $params);
    }

    public  function contacto(){
        return $this->render('contacto');
    }

    public  function postContacto(Request $request){
        $contenido = $request->getContenido();
        echo "<script type=\"text/javascript\">
                alert('Gracias por contactarnos. Nos comunicaremos con usted en breve.');
                window.location.href='/home';
                </script>";
    }
}
?>
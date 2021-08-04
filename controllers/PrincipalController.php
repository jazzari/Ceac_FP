<?php
namespace app\controllers;
use app\core\Application;
use app\core\Controller;


class PrincipalController extends Controller{

    public  function home(){
        $params = [
            'name' => "The PHPMVC"
        ];
        return $this->render('home', $params);
    }

    public  function contacto(){
        return $this->render('contacto');
    }

    public  function postContacto(){
        return 'Handling submitted data';
    }
}
?>
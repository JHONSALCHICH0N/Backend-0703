<?php

namespace App\Controllers;

use CodeIgniter\RESTful\ResourceController;

class Facturas extends ResourceController
{



    public function __construct()
    {

    }

    public function fun1(){
        return $this -> genericResponse('Acceso metodo get');
    }
    
    public function fun2(){
        return $this -> genericResponse('Acceso metodo post');
        
    }

    
    private function genericResponse($data)
    {
        $this->response->setHeader('Access-Control-Allow-Origin', '*');
        $this->response->setHeader('Access-Control-Allow-Methods', 'GET, POST, PUT, DELETE');
        return $this->respond($data);
    }

}
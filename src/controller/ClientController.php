<?php

namespace App\Controller;


use App\Core\Abstract\AbstractController;
use App\Core\App;
use Symfony\Component\Yaml\Yaml;

class ClientController extends AbstractController{
  public function __construct()
  {
    parent::__construct();
  }


  //methode qui affiche le dashbord
  //methode qui creer un compte secondaire
  //methode qui changement le compte secondaire en principale
  //methode qui liste les comptes 
  //
  public function index(){
        
       
    //$instance = App::getdependency('database');
    //  var_dump($instance);
    //  die();
    $data = [];

    $this->renderHtml('client/dashbord');

  }
  public function store(){}
  public function edit(){}
  public function create(){}
  
}

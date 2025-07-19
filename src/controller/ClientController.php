<?php

namespace App\Controller;


use App\Core\Abstract\AbstractController;
use App\Core\App;
use App\Service\CompteService;
use Symfony\Component\Yaml\Yaml;

class ClientController extends AbstractController{

   private CompteService $compteService;

  public function __construct()
  {
    parent::__construct();
    $this->compteService=App::getDependency('compteService');
  }


  public function index(){
        $utilisateur=$this->session->get('utilisateur');
   

    $this->renderHtml('client/dashbord');

  }
  public function store(){}
  public function edit(){}
  public function create(){}
  
}

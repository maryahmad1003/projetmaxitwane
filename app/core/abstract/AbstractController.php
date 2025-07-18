<?php
namespace App\Core\Abstract;

use App as GlobalApp;
use App\Core\App;
use App\Core\Session;
use AppendIterator;

abstract class AbstractController{
  protected Session $session ;

  public function __construct()
  {
      $this->session= App::getDependency('session') ;
  }





  protected $layout = 'base';
  abstract  public function index();
  abstract public function store();
  abstract public function edit();
  abstract public function create();




  
  public function renderHtml(string $view,array $data=[]):void{
    ob_start();
    require_once __DIR__.'/../../../template/'.$view.'.html.php';
    $content = ob_get_clean();
    require_once __DIR__.'/../../../template/layout/'.$this->layout.'.layout.php';
  }
}


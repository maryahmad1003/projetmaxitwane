<?php
namespace App\Core\Middlwares;

use App\Core\Session;

class Auth{

    private Session $session;

    public function __invoke() {
           $this->session=Session::getInstance();


      if(!$this->session->isset('user')){
        
            header('location: /');
            exit;
      }
    }
}

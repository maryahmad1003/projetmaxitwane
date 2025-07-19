<?php
namespace App\Controller;
use App\Core\Abstract\AbstractController;
use App\Core\App;
use App\Service\SecurityService;
use App\Core\Validator;

class SecurityController extends AbstractController{


  private SecurityService $securityService;
  public function __construct(){
      parent::__construct();
      
      $this->layout = 'security';

      $this->securityService= App::getDependency('securityService') ;
      
       
      
  }

  public function index(){
    $this->renderHtml('security/login');
  }
  public function store(){

  }
  public function edit(){

  }public function save(){
    $this->renderHtml('security/succes');
           
  }
  public function create(){
          $this->renderHtml('security/registre');

  }
  public function login(){
    if($_SERVER['REQUEST_METHOD'] === 'POST'){
       $post= [
        'login'    => trim($_POST['login'] ?? ''),
        'password' => trim($_POST['password'] ?? '')
       ];
          Validator::validate($post, [
            'login'    => ['required', 'email'],
            'password' => ['required'],
          ]);

        
        
          if (Validator::isValid()) {

              extract($post);
              $user = $this->securityService->seConnecter($login,$password);
              if($user){
                ( $this->session->set('user', $user));
                
                ($this->session->get('user'));
               
                
                  header('location: /dashbord');
                  exit;
              }
              else {
                  Validator::addError('globalErreur', 'login ou mots de passe incorrect');
                  $this->session->set('errors', Validator::getErrors());
                  
                  header('location:/');
                  exit();
              }
           }

           
          $this->session->set('errors', Validator::getErrors());

          header('location:/');
          exit();

           
   }


    $this->renderHtml('security/login');

}
      public function logout(){
        if($_SERVER['REQUEST_METHOD']==='POST'){
              $this->session->destroy();
          header('Location: /');
          exit;
        }
             header('location:/dashbord');
             exit;
    }
}

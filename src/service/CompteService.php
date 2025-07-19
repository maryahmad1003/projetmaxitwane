<?php 
namespace App\Service;

use App\Core\App;
use App\Entity\Utilisateur;
use App\Repository\CompteRepository;
use Attribute;

class CompteService {

  private static ?CompteService $instance = null;

    private CompteRepository $compteRepository;
  
  public function __construct()
  {
      $this->compteRepository=App::getDependency('compteRepository') ;
    
  }


  public static function getInstance (): CompteService{
    if(self::$instance === null){
      self::$instance = new CompteService();
    }
    return self::$instance;
  }

  public function getCompteByUtulisateur($utilisateur){
               $this->compteRepository->findByUtilisateur($utilisateur);
  }
  }
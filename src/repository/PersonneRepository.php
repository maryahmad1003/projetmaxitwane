<?php  
namespace App\Repository;
use App\Core\Abstract\AbstractRepository;
use App\Entity\Utilisateur;

class PersonneRepository extends AbstractRepository{
  private static ?PersonneRepository $personneRepository = null;
    private function __construct()
    {
      parent::__construct();
    }
  public static function getInstance(){
    if(self::$personneRepository === null){
      self::$personneRepository = new PersonneRepository();
    }
    return self::$personneRepository;
  }

  public function findByLogin(string $login){
    $query = 'SELECT * from utilisateur where login = :login';
    $stmt = $this->pdo->prepare($query);
    $stmt->execute([':login'=>$login]);
    $row  = $stmt->fetch(\PDO::FETCH_ASSOC);
    return $row ? Utilisateur::toObject($row):null;

    if($data){
      $objectUtilisateur=Utilisateur::toObject($data);
      return $objectUtilisateur;
    }
   }


   public function selectAll(){

    }
        public function insert($entity){

        }
        public function update($entity){

        }
        public function delete(){

        }
}


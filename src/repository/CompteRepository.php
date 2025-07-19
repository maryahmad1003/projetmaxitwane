<?php
namespace App\Repository;

use App\Core\Abstract\AbstractRepository;
use PDO;
use PDOException;
use App\Entity\Compte;
use App\Entity\Utilisateur;

class CompteRepository extends AbstractRepository{

     
    private static ?CompteRepository $instance=null;

    private function __construct(){
         parent::__construct();
         $this->table='compte';
    }

    public static function getInstance(){
         if(self::$instance === null){
                self::$instance= new self();
         }
         return self::$instance;
    }

    public function selectAll(){

    }
        public function insert($entity){

        }
        public function update($entity){

        }
        public function delete(){

        }

    public function FindById($id){
     try{
                    $query= "SELECT * FROM compte WHERE utilisateur_id = :id";
                    $stmt=$this->pdo->prepare($query);
                    $stmt->bindParam(':id', $id, PDO::PARAM_INT);
                    $stmt->execute();
                    $data=$stmt->fetchAll(PDO::FETCH_ASSOC);
                    if($data){
                         $compte= Compte::toObject($data);
                         return $compte;
                    }

                    return null;



         } catch (PDOException $e) {
               error_log("Erreur dans findById: " . $e->getMessage());
               return null;
         }
         
    }

    public function findByUtilisateur(Utilisateur $utilisateur){
        $query= 'select * from '.$this->table." WHERE utilisateur_id= : utilisateur_id"; 
        $stmt=$this->pdo->prepare($query);
        $stmt->execute([
            'utilisateur_id' => $utilisateur ->getId()
        ]);
        $rows=$stmt->fetchAll(PDO::FETCH_ASSOC);
        return array_map(fn($compte)=>compte::toObject($compte),$rows);
    }

}
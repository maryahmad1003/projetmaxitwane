<?php 

namespace App\Core;

class Session {
  private static ?Session $instance = null;
  private function __construct()
  {
     if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }
  }
  public static function getInstance():?Session{
    if(self::$instance === null){
      self::$instance = new Session();
    }
    return self::$instance;

  }
  public function set(string $key, mixed $data){
         $_SESSION[$key] = $data;
    }

    public function get(string $key): mixed {
        return $_SESSION[$key] ?? null;
    }

    public function unset(string $key): void {
        unset($_SESSION[$key]);
    }

    public function isset(string $key): bool {
        return isset($_SESSION[$key]);
    }

    public function destroy(): void {
      if(session_status()===PHP_SESSION_ACTIVE){
        session_unset();
        session_destroy();
        self::$instance= null;
      }
      
}
}
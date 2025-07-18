<?php

use App\Core\Database;
use App\Core\Session;
use App\Repository\PersonneRepository;
use App\Service\SecurityService;

 $dependencies=[
   
    "core"=>[
        "session" => Session::class,
        "database" => Database::class,
    ],

    
    "service" =>[
        "securityService" => SecurityService::class,
    
    ],

    
    "repository" => [
        "personneRepository" => PersonneRepository::class,
    ],
    
];


 return $dependencies;
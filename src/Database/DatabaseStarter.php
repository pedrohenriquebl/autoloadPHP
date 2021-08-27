<?php

namespace Autoload\Database;

use Illuminate\Database\Capsule\Manager as DatabaseManager;


//Criando um classe que inicia uma conexão com o banco de dados a partir usando o Eloquent (gerenciador de bd) do laravel
class DatabaseStarter {


    public function startDatabase() {

        // Criando instancia do gerenciador de banco
        $databaseManager = new DatabaseManager();

        
        $databaseManager->addConnection([
            "driver" => $_ENV['DB_DRIVER'],
            "host" => $_ENV['DB_HOST'],
            "database" => $_ENV['DB_DATABASE'],
            "username" => $_ENV['DB_USER'],
            "password" => $_ENV['DB_PASS']
        ]);

        $databaseManager->setAsGlobal();
        $databaseManager->bootEloquent();

    }

    
}
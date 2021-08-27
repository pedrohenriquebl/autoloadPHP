<?php

//Usando o nosso auto loader
//require_once('autoload.php');


//usando o autoload gerado pelo composer
require_once('vendor/autoload.php');


//Inicilizando sistema de leitura de configurações - Arquivo .env
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();


$database = new Autoload\Database\DatabaseStarter();
$database->startDatabase();

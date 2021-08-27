<?php

// Inicializando o projeto através do nosso bootstrap
require_once('bootstrap.php');

//Chamando um classe para testar o nosso autoload
use Autoload\Controller\Index\View;
$class = new View();
echo $class->execute();
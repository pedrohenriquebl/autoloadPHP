<?php

//O nosso autoload manual

//Definindo a extensão que iremos utilizar. Nesse caso é a php
spl_autoload_extensions('.php');

//Chamando a função do autoload php e passando o nosso callback que recebe o nome da classe que está sendo chamada em nosso código
spl_autoload_register(function ($name) {
    //Definindo o nome do nosso prefixo namespace
    $prefix = 'Autoload\\';
    
    //Subtraindo o prefixo do nome classe para pegar apenas o caminho relativo do nosso arquivo
    $prefixSize = strlen($prefix);
    $name = substr($name, $prefixSize);

    //Substituindo as barras invertidas pelas barras de sepração de diretorio
    $name = str_replace('\\',DIRECTORY_SEPARATOR, $name);

    // Dando require nos nosso arquivos que estão na pasta src. a pasta src representa o base directory
    require __DIR__. DIRECTORY_SEPARATOR . 'src' . DIRECTORY_SEPARATOR . $name . '.php';
});
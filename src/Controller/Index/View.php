<?php 
namespace Autoload\Controller\Index;
use Autoload\Model\Fornecedor;

class View {

    
    
    public function execute()
    {
        $result = '
            <html>
                <body>';
        $fornecedores = Fornecedor::all();

        foreach ($fornecedores as $fornecedor) {
            $result = $result . '<h1> Nome do fornecedor:' . $fornecedor->nome . '</h1>';
            $result = $result . '<h1> Email do fornecedor:' . $fornecedor->email . '</h1>';

        }
        $result = $result . '
                </body>
            </hmlt>
        ';
        return $result;
    }
}
<?php
namespace src\controllers;

use \core\Controller;
use \src\models\Usuario;

class BuscaController extends Controller {
    
    public function busca($args) {
        $busca = filter_input(INPUT_GET, 'busca');

        if (empty($busca)) {
            $this->redirect('/');
        }

        $usuario = Usuario::select()
        ->where('nome' , 'like', $busca)
        ->orWhere('email', 'like', $busca)
        ->execute();

        $this->render('busca',[
            'users' => $usuario
        ]);
        
       
    }
}
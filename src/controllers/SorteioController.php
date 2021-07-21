<?php
namespace src\controllers;

use \core\Controller;
use \src\models\Usuario;
use ClanCats\Hydrahon\Query\Expression as Ex;

class SorteioController extends Controller {

    public function sorteio($args) {
            $usuario = Usuario::select()
            ->limit(2)
            ->orderBy([new Ex('rand()'), new Ex('rand()')])
            ->get();
            
            $this->render('sorteio', [
                'usuario' => $usuario
            ]);
    }

}
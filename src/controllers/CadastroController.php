<?php
namespace src\controllers;

use \core\Controller;
use \src\models\Usuario;

class CadastroController extends Controller {

    public function cadastro() {
       $this->render('cadastro');
    }

    public function cadAction() {
        $name = filter_input(INPUT_POST, 'name');
        $email = filter_input(INPUT_POST, 'email');

        if($name && $email) {
            $data = Usuario::select()->where('email', $email)->execute();

            if (count($data) === 0) {
                //insere
                Usuario::insert([
                    'nome'=> $name,
                    'email'=> $email
                ])->execute();
                //redirect para /
                $this->redirect('/');
            }
        }
        $this->render('/cadastro');
    }

    public function edit($args) {
        $usuario = Usuario::select()->find($args['id']);
        
        $this->render('edit', [
            'usuario'=> $usuario
        ]);
    }

    public function editAction($args) {
        $name = filter_input(INPUT_POST, 'name');
        $email = filter_input(INPUT_POST, 'email');

        if($name && $email) {

            Usuario::update()
                ->set('nome', $name)
                ->set('email', $email)
                ->where('id', $args['id'])
            ->execute();

            $this->redirect('/');

        }
        $this->redirect('/cadastro/'.$args['id'].'/editar');
    }

    public function del($args) {
        Usuario::delete()->where('id', $args['id'])->execute();
        $this->redirect('/');
    }

}
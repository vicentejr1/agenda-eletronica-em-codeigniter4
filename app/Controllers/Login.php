<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\LoginModel;
use CodeIgniter\HTTP\ResponseInterface;

class Login extends BaseController
{
    public function getIndex()
    {

        //echo view('templates/header');
        echo view('login/index');
    }


    public function postAutenticar()
    {
        $dados = $this->request
                        ->getVar();
        
        $login_model = new LoginModel();
        
        $login = $login_model
                        ->where('Usuario', $dados['Usuario'])
                        ->where('Senha', $dados['Senha'])
                        ->first();
        
        if(!empty($login)){

            // Criação do Array de Sessão
            $sessao = [
                'idUsuario'   => $login['LoginId'],   // Pega o ID que veio do banco
                'nomeUsuario' => $login['Usuario'], // Pega o Nome que veio do banco
                'isLogado'    => true
            ];

            // Criação da Sessão
            session()->set($sessao);

            return redirect()->to('/atividades/listar');
        }

        // Redireciona para a página de login com um alerta de erro
        return redirect()->to('/login?alert=errorLogin');
    }

    public function getSair()
    {
        // 1. Destrói toda a sessão do usuário atual
        session()->destroy();

        // 2. Redireciona o usuário para a tela inicial de login
        // Lembra daquele alerta de 'successLogout' que criamos antes? Vamos usá-lo aqui!
        return redirect()->to('/login?alert=successLogout');
    }


    public function postNovousuario() {
        $dados = $this->request
                        ->getVar();
        
        $login_model = new LoginModel();

        $login_model->insert($dados);

        return redirect()->to('/login?alert=successCadastro');
        
    }
}

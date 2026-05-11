<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\AtividadesModel;
use CodeIgniter\HTTP\ResponseInterface;

class Atividades extends BaseController
{
    public function getListar()
    {
        if (!session()->get('isLogado')) {
            return redirect()->to('/login');
        }

        $atividades_model = new AtividadesModel();

        $meuId = session()->get('idUsuario');

        $atividades = $atividades_model
                               ->where('LoginId', $meuId)
                               ->findAll();

        $data['atividades'] = $atividades;
      

        echo view('templates/header');
        echo view('atividades/listar', $data);
        echo view('templates/footer');
    }

    public function postCadastrar(){
        $dados = $this->request
                        ->getVar();

        $dados['LoginId'] = session()->get('idUsuario');

        $atividades_model = new AtividadesModel();

        $atividades_model->insert($dados);

        return redirect()->to('/atividades/listar?alert=successCreate');
    }

    public function getExcluir($AtividadeId)
    {

        $atividades_model = new AtividadesModel();

        $atividades_model
            ->where('AtividadeId', $AtividadeId)
            ->delete();


        return redirect()->to('/atividades/listar?alert=successDelete');
    }



    public function postEditar() {
        $dados = $this->request
                        ->getVar();

        $atividades_model = new AtividadesModel();

        $atividades_model
            ->where('AtividadeId', $dados['AtividadeId'])
            ->set($dados)
            ->update();

        return redirect()->to('/atividades/listar?alert=successUpdate');
    }

    public function getEventoscalendario(){
        // Pega o ID do usuário logado na sessão
        $meuId = session()->get('idUsuario');

        // Busca as atividades desse usuário no banco
        $atividadesModel = new AtividadesModel();
        $minhasAtividades = $atividadesModel->where('LoginId', $meuId)->findAll();

        $eventos = [];

        // Converte os dados do banco para o formato que o Calendário exige
        foreach ($minhasAtividades as $atividade) {
            $eventos[] = [
                'title' => $atividade['Nome'], 
                'start' => $atividade['DataInicio'], 
                'color' => '#0d6efd'
            ];
        }

        // Devolve os dados em formato JSON para o navegador ler
        return $this->response->setJSON($eventos);
    }

    public function getCalendario(){
        if (!session()->get('isLogado')) {
        return redirect()->to('/login');
        }

        echo view('templates/header');
        echo view('atividades/calendario');
        echo view('templates/footer');
    }
}



<div class="modal fade" id="modal-nova-atividade">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <form action="/atividades/cadastrar" method="post">
                <div class="modal-header">
                    <h4 class="modal-title">Nova Atividade</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">

                        <div class="col-2">
                            <div class="form-group">
                                <label for="">Nome</label>
                                <input type="text" class="form-control" name="Nome">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label for="">Descrição</label>
                                <input type="text" class="form-control" name="Descricao">
                            </div>
                        </div>
                        <div class="col-2">
                            <div class="form-group">
                                <label for="">Data de Início</label>
                                <input type="datetime-local" class="form-control" name="DataInicio">
                            </div>
                        </div>
                        <div class="col-2">
                            <div class="form-group">
                                <label for="">Prazo Final</label>
                                <input type="datetime-local" class="form-control" name="DataFim">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                    <button type="submit" class="btn btn-primary"><i class="fas fa-save"></i> Cadastrar</button>
                </div>
            </form>
        </div>
    </div>
</div>

<div class="modal fade" id="modal-editar-atividade">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <form action="/atividades/editar" method="post">
                <div class="modal-header">
                    <h4 class="modal-title">Status</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <input type="hidden" id="modal-editar-atividade-AtividadeId" name="AtividadeId">
                        <input type="hidden" id="modal-editar-atividade-Nome" name="Nome">
                        <input type="hidden" id="modal-editar-atividade-Descricao" name="Descricao">
                        <input type="hidden" id="modal-editar-atividade-DataInicio" name="DataInicio">
                        <input type="hidden" id="modal-editar-atividade-DataFim" name="DataFim">
                        <div class="col-12">
                            <div class="form-group">
                                <label for="">Status</label>
                                <select class="form-control" id="modal-editar-atividade-Status" name="Status">
                                    <option value="pendente">Pendente</option>
                                    <option value="concluido">Concluído</option>
                                    <option value="cancelado">Cancelado</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                    <button type="submit" class="btn btn-primary"><i class="fas fa-save"></i> Atualizar</button>
                </div>
            </form>
        </div>
    </div>
</div>


<?php /** @var array $atividades */ ?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Atividades</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Starter Page</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <button type="button" class="btn btn-info" data-toggle="modal" data-target="#modal-nova-atividade">
                                <i class="fas fa-plus-circle"></i> Nova Atividade
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <?php if (isset($_GET['alert']) && $_GET['alert'] == "successCreate") : ?>
                <div class="row">
                    <div class="col-12">
                        <div class="alert alert-success alert-dismissible">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                            <h5><i class="icon fas fa-check"></i> Sucesso!</h5>
                            Atividade cadastrada com sucesso!
                        </div>
                    </div>
                </div>
            <?php endif; ?>
            <?php if (isset($_GET['alert']) && $_GET['alert'] == "successUpdate") : ?>
                <div class="row">
                    <div class="col-12">
                        <div class="alert alert-success alert-dismissible">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                            <h5><i class="icon fas fa-check"></i> Sucesso!</h5>
                            Status atualizado com sucesso!
                        </div>
                    </div>
                </div>
            <?php endif; ?>
            <?php if (isset($_GET['alert']) && $_GET['alert'] == "successDelete") : ?>
                <div class="row">
                    <div class="col-12">
                        <div class="alert alert-success alert-dismissible">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                            <h5><i class="icon fas fa-check"></i> Deletado!</h5>
                            Atividade excluída com sucesso!
                        </div>
                    </div>
                </div>
            <?php endif; ?>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <table class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th>AtividadeId</th>
                                    <th>Nome</th>
                                    <th>Descricao</th>
                                    <th>DataInicio</th>
                                    <th>DataFim</th>
                                    <th>Status</th>
                                    <th>Ações</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($atividades as $ativ): ?>
                                    <tr>
                                        <td><?= $ativ['AtividadeId'] ?></td>
                                        <td><?= $ativ['Nome'] ?></td>
                                        <td><?= $ativ['Descricao'] ?></td>
                                        <td><?= $ativ['DataInicio'] ?></td>
                                        <td><?= $ativ['DataFim'] ?></td>
                                        <td><?= $ativ['Status'] ?></td>
                                        <td>
                                            <a href="/atividades/excluir/<?= $ativ['AtividadeId'] ?>" class="btn btn-danger"><i class="fas fa-trash-alt"></i></a>
                                            <button type="button" class="btn btn-warning" onclick="prepararDados(<?= $ativ['AtividadeId'] ?>, '<?= $ativ['Nome'] ?>', '<?= $ativ['Descricao'] ?>', '<?= $ativ['DataInicio'] ?>', '<?= $ativ['DataFim'] ?>', '<?= $ativ['Status'] ?>')"><i class="fas fa-edit"></i></button>
                                        </td>
                                    </tr>''
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</div>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->

<!-- Script Jquery recebe dados do Array para o Modal editar atividade -->
<script>
    function prepararDados(AtividadeId, Nome, Descricao, DataInicio, DataFim, Status) {
        document.getElementById('modal-editar-atividade-AtividadeId').value = AtividadeId;
        document.getElementById('modal-editar-atividade-Nome').value = Nome;
        document.getElementById('modal-editar-atividade-Descricao').value = Descricao;
        document.getElementById('modal-editar-atividade-DataInicio').value = DataInicio;
        document.getElementById('modal-editar-atividade-DataFim').value = DataFim;
        document.getElementById('modal-editar-atividade-Status').value = Status;

        $('#modal-editar-atividade').modal('show');
    }
</script>
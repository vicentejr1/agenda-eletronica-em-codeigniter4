<div class="modal fade" id="modal-nova-atividade">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <form action="/login/novousuario" method="post">
                <div class="modal-header">
                    <h4 class="modal-title">Novo Usuário</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-2">
                            <div class="form-group">
                                <label for="">Usuário</label>
                                <input type="text" class="form-control" name="Usuario">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label for="">Senha</label>
                                <input type="password" class="form-control" name="Senha">
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


<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>VAGGON RECIFE</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?= base_url('tema/plugins/fontawesome-free/css/all.min.css') ?>">
    <!-- icheck bootstrap -->
    <link rel="stylesheet" href="<?= base_url('tema/plugins/icheck-bootstrap/icheck-bootstrap.min.css') ?>">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?= base_url('tema/dist/css/adminlte.min.css') ?>">
</head>

<body class="hold-transition login-page">
    <div class="login-box">
        <!-- /.login-logo -->
        <div class="card card-outline card-primary">
            <div class="card-header text-center">
                <a href="../../index2.html" class="h1"><b>VAGGON</b> RECIFE</a>
            </div>
            <div class="card-body">
                <?php if (isset($_GET['alert']) && $_GET['alert'] == "errorLogin") : ?>
                    <p class="login-box-msg">Acesso Negado! Informe os dados corretamente.</p>
                <?php elseif (isset($_GET['alert']) && $_GET['alert'] == "successCadastro") : ?>
                    <div class="row">
                        <div class="col-12">
                            <div class="alert alert-success alert-dismissible">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                <h5><i class="icon fas fa-check"></i> Usuário Cadastrado!</h5>
                                Acesse sua conta para continuar
                            </div>
                        </div>
                    </div>
                <?php else : ?>
                    <p class="login-box-msg">Acesse sua conta para continuar</p>
                <?php endif; ?>

                <form action="/login/autenticar" method="post">
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="Digite seu usuário" name="Usuario">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-user"></span>
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input type="password" class="form-control" placeholder="Digite sua senha" name="Senha">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <button type="submit" class="btn btn-primary btn-block">ACESSE SUA CONTA</button>
                        </div>
                        <!-- /.col -->
                    </div>
                </form>
                <p class="mb-0">
                    <a href="register.html" class="text-center" data-toggle="modal" data-target="#modal-nova-atividade">Registra uma nova conta</a>
                </p>
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->
    </div>
    <!-- /.login-box -->

    <!-- jQuery -->
    <script src="<?= base_url('tema/plugins/jquery/jquery.min.js') ?>"></script>
    <!-- Bootstrap 4 -->
    <script src="<?= base_url('tema/plugins/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>
    <!-- AdminLTE App -->
    <script src="<?= base_url('tema/dist/js/adminlte.min.js') ?>"></script>
</body>

</html>
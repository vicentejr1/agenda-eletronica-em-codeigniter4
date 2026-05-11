<?php

/** @var array $login */ ?>
<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
        <img src="<?= base_url('tema/dist/img/vaggon.png') ?>" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">VAGGON RECIFE</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="<?= base_url('tema/dist/img/avatar5.png') ?>" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">
                    <?php if (session()->get('isLogado')) : ?>
                        <?= session()->get('nomeUsuario') ?>
                    <?php else : ?>
                        Convidado
                    <?php endif; ?>
                </a>
            </div>
        </div>


        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                <li class="nav-item">
                    <a href="/atividades/listar" class="nav-link">
                        <i class="nav-icon fas fa-th"></i>
                        <p>
                            Atividades
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/atividades/calendario" class="nav-link">
                        <i class="nav-icon fas fa-th"></i>
                        <p>
                            Calendário
                        </p>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
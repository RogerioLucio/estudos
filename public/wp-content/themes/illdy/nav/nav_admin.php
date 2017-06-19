<?php
session_start();
?>  
        <div id="throbber" style="display:none; min-height:120px;"></div>
        <div id="noty-holder"></div>
        <div id="wrapper">
            <!-- Navigation -->
            <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="../home-admin">
                        <img src="http://placehold.it/200x50&text=LOGO" alt="LOGO"">
                    </a>
                </div>
                <!-- Top Menu Items -->
                <ul class="nav navbar-right top-nav">
                    <li><a href="#" data-placement="bottom" data-toggle="tooltip" href="#" data-original-title="Stats"><i class="fa fa-bar-chart-o"></i>
                        </a>
                    </li>            
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Administrador <b class="fa fa-angle-down"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="#"><i class="fa fa-fw fa-user"></i> Edit Profile</a></li>
                            <li><a href="#"><i class="fa fa-fw fa-cog"></i> Change Password</a></li>
                            <li class="divider"></li>
                            <li><a href="#"><i class="fa fa-fw fa-power-off"></i> Logout</a></li>
                        </ul>
                    </li>
                </ul>
                <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
                <div class="collapse navbar-collapse navbar-ex1-collapse">
                    <ul class="nav navbar-nav side-nav">
                        <li>
                            <a href="#" data-toggle="collapse" data-target="#submenu-1"><i class="fa fa-fw fa-user-plus"></i>   VAGAS DE EMPREGO<i class="fa fa-fw fa-angle-down pull-right"></i></a>
                            <ul id="submenu-1" class="collapse">
                                <li><a href="../cadastrar-vagas"><i class="fa fa-angle-double-right"></i> Cadastrar Vagas</a></li>
                                <li><a href="../vagas-cadastradas"><i class="fa fa-angle-double-right"></i> Vagas Cadastradas</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#" data-toggle="collapse" data-target="#submenu-2"><i class="fa fa-fw fa-user-plus"></i>   CURSOS<i class="fa fa-fw fa-angle-down pull-right"></i></a>
                            <ul id="submenu-2" class="collapse">
                                <li><a href="../cadastrar-cursos"><i class="fa fa-angle-double-right"></i> CADASTRAR CURSOS</a></li>
                                <li><a href="../cursos-cadastrados"><i class="fa fa-angle-double-right"></i> CURSOS CADASTRADOS</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#" data-toggle="collapse" data-target="#submenu-6"><i class="fa fa-cog"></i>   CONFIGURAÇÕES <i class="fa fa-fw fa-angle-down pull-right"></i></a>
                            <ul id="submenu-6" class="collapse">
                                <li><a href="#"><i class="fa fa-angle-double-right"></i> Atualizar Cadastro</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <!-- /.navbar-collapse -->
            </nav>

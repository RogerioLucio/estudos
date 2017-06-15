
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
                    <a class="navbar-brand" href="http://cijulenlinea.ucr.ac.cr/dev-users/">
                        <img src="http://placehold.it/200x50&text=LOGO" alt="LOGO"">
                    </a>
                </div>
                <!-- Top Menu Items -->
                <ul class="nav navbar-right top-nav">
                    <li><a href="#" data-placement="bottom" data-toggle="tooltip" href="#" data-original-title="Stats"><i class="fa fa-bar-chart-o"></i>
                        </a>
                    </li>            
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Admin User <b class="fa fa-angle-down"></b></a>
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
                            <a href="#" data-toggle="collapse" data-target="#submenu-1"><i class="fa fa-fw fa-search"></i> CASA <i class="fa fa-fw fa-angle-down pull-right"></i></a>
                            <ul id="submenu-1" class="collapse">
                                <li><a href="#"><i class="fa fa-angle-double-right"></i> Buscar Vagas</a></li>
                                <li><a href="#"><i class="fa fa-angle-double-right"></i> Cadastrar Vagas</a></li>
                                <!--<li><a href="#"><i class="fa fa-angle-double-right"></i> SUBMENU 1.3</a></li>-->
                            </ul>
                        </li>
                        <li>
                            <a href="#" data-toggle="collapse" data-target="#submenu-2"><i class="fa fa-fw fa-star"></i>  EMPRESAS <i class="fa fa-fw fa-angle-down pull-right"></i></a>
                            <ul id="submenu-2" class="collapse">
                                <li><a href="<?php echo base_url('Acessos_Controller/Acessos_pagina?id=1')?>"><i class="fa fa-angle-double-right"></i> Cadastrar Empresa</a></li>
                                <li><a href="<?php echo base_url('Acessos_Controller/Acessos_pagina?id=2')?>"><i class="fa fa-angle-double-right"></i> Empresas Cadastradas</a></li>
                                <li><a href="#"><i class="fa fa-angle-double-right"></i> SUBMENU 2.3</a></li>
                            </ul>
                        </li>
                         <li>
                            <a href="#" data-toggle="collapse" data-target="#submenu-3"><i class="fa fa-fw fa-star"></i>  PARTICIPANTES <i class="fa fa-fw fa-angle-down pull-right"></i></a>
                            <ul id="submenu-3" class="collapse">
                                <li><a href="<?php echo base_url('Acessos_Controller/Acessos_pagina?id=1')?>"><i class="fa fa-angle-double-right"></i> Cadastrar Participante</a></li>
                                <li><a href="<?php echo base_url('Acessos_Controller/Acessos_pagina?id=3')?>"><i class="fa fa-angle-double-right"></i> Participantes Cadastrados</a></li>
                                <li><a href="#"><i class="fa fa-angle-double-right"></i> SUBMENU 2.3</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="investigaciones/favoritas"><i class="fa fa-fw fa-user-plus"></i>  MENU 3</a>
                        </li>
                        <li>
                            <a href="sugerencias"><i class="fa fa-fw fa-paper-plane-o"></i> MENU 4</a>
                        </li>
                         <li>
                            <a href="#" data-toggle="collapse" data-target="#submenu-5"><i class="fa fa-bar-chart"></i>  RELATÓRIOS <i class="fa fa-fw fa-angle-down pull-right"></i></a>
                            <ul id="submenu-5" class="collapse">
                                <li><a href="#"><i class="fa fa-angle-double-right"></i> USUÁRIOS </a></li>
                                <li><a href="#"><i class="fa fa-angle-double-right"></i> VAGAS </a></li>
                                <li><a href="#"><i class="fa fa-angle-double-right"></i> --</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#" data-toggle="collapse" data-target="#submenu-6"><i class="fa fa-cog"></i>   CONFIGURAÇÕES <i class="fa fa-fw fa-angle-down pull-right"></i></a>
                            <ul id="submenu-6" class="collapse">
                                <li><a href="#"><i class="fa fa-angle-double-right"></i> Acessos</a></li>
                                <li><a href="#"><i class="fa fa-angle-double-right"></i> Atualizar Cadastro</a></li>
                                <li><a href="#"><i class="fa fa-angle-double-right"></i> </a></li>
                            </ul>
                        </li>
                       
                        <li>
                            <a href="#" data-toggle="collapse" data-target="#submenu-7"><i class="fa fa-bullhorn"></i>   FALE CONOSCO <i class="fa fa-fw fa-angle-down pull-right"></i></a>
                            <ul id="submenu-7" class="collapse">
                                <li><a href="#"><i class="fa fa-angle-double-right"></i>  FAQ</a></li>
                                <li><a href="#"><i class="fa fa-angle-double-right"></i> SUPORTE</a></li>
                                <li><a href="#"><i class="fa fa-angle-double-right"></i> CONTATO</a></li>
                            </ul>
                        </li>

                    </ul>
                </div>
                <!-- /.navbar-collapse -->
            </nav>

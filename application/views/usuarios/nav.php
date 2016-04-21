<body>

    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-custom navbar-fixed-top">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="http://nomplus.dev/index.php/InUsuario/"><img src="<?= base_url()?>plantilla/img/borderless_plata.png" border="0" width="200" height="100"></a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <?php echo $this->session->userdata('name'); ?>
                    </li>
                    <li>
                        <a href="<?=base_url('index.php/usuarios/prueba2')?>">Usuarios</a>
                    </li>
                    <li>
                        <a href="<?=base_url('index.php/dominios/dominios')?>">Dominios</a>
                    </li>
                    <li>
                        <a href="<?=base_url('index.php/formulario/formulario')?>">Formatos</a>
                    </li>
                    <li><a href="<?=base_url('index.php/login/logout')?>">Salir</a></li>
                    
                    
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
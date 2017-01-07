<nav class="navbar navbar-default navbar-fixed-top navtrans animated slideInDown">
    <div class="container-fluid">
        <div class="navbar-header">
            <button aria-controls="navbar" aria-expanded="false" data-target="#navbar" data-toggle="collapse" class="navbar-toggle collapsed" type="button">
                <span class="sr-only">Wambo</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a href="<?php echo base_url()?>aplicacion" class="navbar-brand zoom">Wambo</a>
        </div>
        <div class="navbar-collapse collapse" id="navbar">
            <ul class="nav navbar-nav">
                <li class="li-nav nav-link-acercade"><a href="<?php echo base_url()."aplicacion/acercade"?>">Acerca de</a></li>
                <li class="li-nav nav-link-contacto "><a href="<?php echo base_url()."aplicacion/contacto"?>"><span class="glyphicon glyphicon-envelope rotate"></span> Contacto</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li class=" li-nav nav-link-registro animated infinite pulse"><a href="<?php echo base_url()?>aplicacion/registro"><span class="glyphicon glyphicon-edit rotate"></span> Registrate</a></li>
                <li class="li-nav nav-link-sesion animated infinite pulse"><a href="<?php echo base_url()?>aplicacion/sesion"><span class="glyphicon glyphicon-user rotate"></span> Iniciar Sesion</a></li>
            </ul>
        </div><!--/.nav-collapse -->
    </div><!--/.container-fluid -->
</nav>
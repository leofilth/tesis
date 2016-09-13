<nav class="navbar navbar-default">
    <div class="container-fluid">
        <div class="navbar-header">
            <button aria-controls="navbar" aria-expanded="false" data-target="#navbar" data-toggle="collapse" class="navbar-toggle collapsed" type="button">
                <span class="sr-only">Wambo</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a href="#" class="navbar-brand">Wambo</a>
        </div>
        <div class="navbar-collapse collapse" id="navbar">
            <ul class="nav navbar-nav">
                <li class="nav-link-ses li-nav"><a href="<?php echo base_url()."aplicacion/cuenta"?>">Tu cuenta</a></li>
                <li class="nav-link-reg li-nav"><a href="<?php echo base_url()."aplicacion/galeria"?>">Galería</a></li>
                <li class="nav-link-ses li-nav"><a href="<?php echo base_url()."aplicacion/lideres"?>">Lideres</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li class="dropdown nav-link-ses li-nav"><a class="dropdown-toggle" data-toggle="dropdown" href="#"><img height="32px"width="32px" src="<?php
                        if($datos->avatar_name=="user")
                        {
                            echo base_url()."public/images/user_avatar/user.jpg";
                        }
                        else
                        {
                            echo base_url()."public/images/user_avatar/".$datos->nick.".jpg";
                        }
                        ?>"  class="img-circle"><?php echo $datos->nick?><span class="caret"></span></a>
                    <ul class="dropdown-menu nav-link-ses">
                        <li><a href="<?php echo base_url()."aplicacion/modificaperfil"?>">Modificar Perfil</a></li>
                        <li><a href="<?php echo base_url()?>aplicacion/cerrarsesion">Cerrar Sesión</a></li>
                    </ul>
                </li>
            </ul>
        </div><!--/.nav-collapse -->
    </div><!--/.container-fluid -->
</nav>
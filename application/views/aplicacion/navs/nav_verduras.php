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
                <li class="nav-link-reg li-nav"><a href="#section1">Desafio</a></li>
                <li class="nav-link-ses li-nav"><a href="#section4">Tips</a></li>
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
                    <ul class="dropdown-menu nav-link-ses" style="width: auto;padding:10px;min-width: 300px;">
                        <li>
                            <div class="row" style="padding-bottom: 5px">
                                <div class="col-md-5">
                                    <img height="64px"width="64px" src="<?php
                                    if($datos->avatar_name=="user")
                                    {
                                        echo base_url()."public/images/user_avatar/user.jpg";
                                    }
                                    else
                                    {
                                        echo base_url()."public/images/user_avatar/".$datos->nick.".jpg";
                                    }
                                    ?>"  class="img-circle center-block">
                                </div>
                                <div class="col-md-7">
                                    <p class="text-center"><?php echo $datos->nombre?></p>
                                    <p class="text-center"><?php echo $datos->edad." años"?></p>
                                    <p class="text-center"><?php echo $datos->ciudad?></p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="row">
                                <div class="col-md-6 center-block text-center">
                                    <a class="btn btn-primary" href="<?php echo base_url()."aplicacion/modificaperfil"?>">Modificar Perfil</a>
                                </div>
                                <div class="col-md-6 center-block text-center">
                                    <a class="btn btn-primary" href="<?php echo base_url()?>aplicacion/cerrarsesion">Cerrar Sesión</a></li>
        </div>
    </div>
    </ul>
    </li>
    </ul>
    </div><!--/.nav-collapse -->
    </div><!--/.container-fluid -->
</nav>
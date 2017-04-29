<nav class="navbar navbar-default navtrans navbar-fixed-top animated slideInDown">
    <div class="container-fluid">
        <div class="navbar-header">
            <button aria-controls="navbar" aria-expanded="false" data-target="#navbar" data-toggle="collapse" class="navbar-toggle collapsed animated pulse infinite" type="button">
                <span class="sr-only">Wambo</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a href="#" class="navbar-brand">Wambo</a>
        </div>
        <div class="navbar-collapse collapse" id="navbar">
            <ul class="nav navbar-nav">
                <li class="nav-link-ayuda li-nav efecto"><a href="<?php echo base_url()."aplicacion/cuenta"?>">Volver</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li class="dropdown nav-link-cuenta li-nav">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <figure>
                            <img id="avatarNav" height="24" width="24" src="<?php
                            if($datos->avatar_name=="user")
                            {
                                if($datos->sexo=="masculino"){
                                    echo base_url()."public/images/user_avatar/user-mas.png";
                                }else{
                                    echo base_url()."public/images/user_avatar/user-fem.png";
                                }
                            }
                            else
                            {
                                echo base_url()."public/images/user_avatar/".$datos->avatar_name.".png";
                            }
                            ?>"  alt="avatar" class="img-circle">
                            <?php echo $datos->nick?><span class="caret"></span>
                        </figure>
                        </a>
                    <ul class="dropdown-menu nav-link-cuenta dropmenu animated rubberBand">
                        <li>
                            <div class="row" style="padding-bottom: 5px">
                                <div class="col-md-5">
                                    <figure>
                                        <img id="avatarNav2" height="64" width="64" src="<?php
                                        if($datos->avatar_name=="user")
                                        {
                                            if($datos->sexo=="masculino"){
                                                echo base_url()."public/images/user_avatar/user-mas.png";
                                            }else{
                                                echo base_url()."public/images/user_avatar/user-fem.png";
                                            }
                                        }
                                        else
                                        {
                                            echo base_url()."public/images/user_avatar/".$datos->avatar_name.".png";
                                        }
                                        ?>"  alt="avatar" class="img-circle center-block">
                                    </figure>
                                </div>
                                <div class="col-md-7">
                                    <p class="text-center puntos"><?php echo $puntaje->puntos." puntos"?></p>
                                    <p class="text-center"><?php echo $datos->edad." años"?></p>
                                    <p class="text-center"><?php echo $datos->ciudad?></p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="row">
                                <div class="col-md-6 center-block text-center">
                                    <a class="btn btn-warning" href="<?php echo base_url()."aplicacion/modificaperfil"?>">Modificar Perfil</a>
                                </div>
                                <div class="col-md-6 center-block text-center">
                                    <a class="btn btn-danger" href="<?php echo base_url()."aplicacion/cerrarsesion"?>">Cerrar Sesión</a>
                                </div>
                            </div>
                        </li>
                    </ul>
                </li>
            </ul>
        </div><!--/.nav-collapse -->
    </div><!--/.container-fluid -->
</nav>
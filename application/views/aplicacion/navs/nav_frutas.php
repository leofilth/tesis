<nav class="navbar navbar-default">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="<?php echo base_url()."aplicacion/cuenta"?>">Mi cuenta</a>
        </div>
        <div>
            <div class="collapse navbar-collapse" id="myNavbar">
                <ul class="nav navbar-nav">
                    <li class="nav-link-ses li-nav"><a href="#section2">Desafío Frutas</a></li>
                    <li class="nav-link-reg li-nav"><a href="#section4">Tips Saludables</a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#"><img height="32px"width="32px" src="<?php
                            if($datos->avatar_name=="user")
                            {
                                echo base_url()."public/images/user_avatar/user.jpg";
                            }
                            else
                            {
                                echo base_url()."public/images/user_avatar/".$datos->nick.".jpg";
                            }
                            ?>"  class="img-circle"> <?php echo $datos->nick?><span class="caret"></span></a>
                        <ul class="dropdown-menu nav-link-ses">
                            <li><a href="<?php echo base_url()?>aplicacion/cerrarsesion">Cerrar Sesión</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</nav>
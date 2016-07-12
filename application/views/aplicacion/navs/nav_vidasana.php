<nav class="navbar navbar-default" data-spy="affix" data-offset-top="197">
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
                    <li class="nav-link-ses li-nav"><a href="#section1">Frutos Poderosos</a></li>
                    <li class="nav-link-reg li-nav"><a href="#section2">Verduras Magicas</a></li>
                    <li class="nav-link-ses li-nav"><a href="#section3">Alimentos Geniales</a></li>
                    <li class="nav-link-reg li-nav"><a href="#section4">Tips Saludables</a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#"><img height="32px"width="32px" src="<?php
                            if($datos->avatar_name=="")
                            {
                                echo base_url()."public/images/user_avatar/user.jpg";
                            }
                            else if($datos->avatar_name=$datos->nick)
                            {
                                echo base_url()."public/images/user_avatar/".$datos->nick.".jpg";
                            }
                            ?>"  class="img-circle"> <?php echo $datos->nick?><span class="caret"></span></a>
                        <ul class="dropdown-menu nav-link-ses">
                            <li><a href="#">Modificar perfil</a></li>
                            <li><a href="<?php echo base_url()?>aplicacion/cerrarsesion">Cerrar Sesión</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</nav>
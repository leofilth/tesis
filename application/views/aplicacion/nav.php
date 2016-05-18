<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container-fluid">
        <div class="navbar-header">
            <button aria-controls="navbar" aria-expanded="false" data-target="#navbar" data-toggle="collapse" class="navbar-toggle collapsed" type="button">
                <span class="sr-only">Tesis</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a href="#" class="navbar-brand zoom">Tesis</a>
        </div>
        <div class="navbar-collapse collapse" id="navbar">
            <ul class="nav navbar-nav">
                <li class="li-nav nav-link-ses zoom"><a href="<?php echo base_url()?>">Inicio</a></li>
                <li class="li-nav nav-link-reg zoom"><a href="#">About</a></li>
                <li class="li-nav nav-link-ses zoom"><a href="#">Contact</a></li>
                <li class="dropdown">
                    <a aria-expanded="false" aria-haspopup="true" role="button" data-toggle="dropdown" class="dropdown-toggle" href="#">Dropdown <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="#">Action</a></li>
                        <li><a href="#">Another action</a></li>
                        <li><a href="#">Something else here</a></li>
                        <li class="divider" role="separator"></li>
                        <li class="dropdown-header">Nav header</li>
                        <li><a href="#">Separated link</a></li>
                        <li><a href="#">One more separated link</a></li>
                    </ul>
                </li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li class="li-nav nav-link-ses zoom"><a href="./">Default <span class="sr-only">(current)</span></a></li>
                <li class=" li-nav nav-link-reg zoom"><a href="<?php echo base_url()?>aplicacion/registro"><span class="glyphicon glyphicon-edit rotate icon-size"></span> Registrate</a></li>
                <li class="li-nav nav-link-ses zoom"><a href="<?php echo base_url()?>aplicacion/sesion"><span class="glyphicon glyphicon-user rotate icon-size"></span> Iniciar Sesion</a></li>

            </ul>
        </div><!--/.nav-collapse -->
    </div><!--/.container-fluid -->
</nav>
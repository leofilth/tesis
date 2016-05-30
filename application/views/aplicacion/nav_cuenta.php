<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container-fluid">
        <div class="navbar-header">
            <button aria-controls="navbar" aria-expanded="false" data-target="#navbar" data-toggle="collapse" class="navbar-toggle collapsed" type="button">
                <span class="sr-only">Tesis</span>
                <span class="sr-only">Tesis</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a href="#" class="navbar-brand">La Tesih</a>
        </div>
        <div class="navbar-collapse collapse" id="navbar">
            <ul class="nav navbar-nav">
                <li class="nav-link-ses li-nav zoom"><a href="<?php echo base_url()."aplicacion/juegos"?>">Juegos/minijuegos</a></li>
                <li class="dropdown nav-link-reg li-nav zoom">
                    <a data-toggle="dropdown" class="dropdown-toggle" href="<?php echo base_url()."aplicacion/aprender"?>">Aprender<span class="caret"></span></a>
                    <ul class="dropdown-menu navbar-nav">
                        <li class="nav-link-reg li-nav"><a href="<?php echo base_url()."aplicacion/agilidad"?>">Agilidad</a></li>
                        <li class="nav-link-ses li-nav"><a href="#">Fuerza</a></li>
                        <li class="nav-link-reg li-nav"><a href="#">Flexibilidad</a></li>
                        <li class="nav-link-ses li-nav"><a href="<?php echo base_url()."aplicacion/vida_sana"?>">Vida Sana </a></li>
                    </ul>
                </li>
                <li class="nav-link-ses li-nav zoom"><a href="<?php echo base_url()."aplicacion/animaciones"?>">Animaciones</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li class="nav-link-ses li-nav zoom"><a href="<?php echo base_url()."aplicacion/galeria"?>">Galeria</a></li>
                <li class="nav-link-reg li-nav zoom"><a href="../navbar-static-top/">Static top</a></li>
                <li class="nav-link-ses li-nav zoom"><a href="<?php echo base_url()?>aplicacion/cerrarsesion">Cerrar Sesion</a></li>
            </ul>
        </div><!--/.nav-collapse -->
    </div><!--/.container-fluid -->
</nav>
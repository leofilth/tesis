
    <!--<div class="container "style="padding-top: 100px;padding-bottom: 100px;">
    <div class="titulo2">Vida Sana</div>
        <div class="row">
            <div class="col-md-6">
                <div class="cuadradotarjeta1 zoom">
                    <div class="row">
                        <div class="col-md-4">
                            <img width="150" height="150" src="<?php echo base_url()."public/images/icons/448/grape_color.png"?>" class="img-circle fondoblanco rotate">
                        </div>
                        <div class="col-md-8">
                            <h4 class="titulo-tarjeta">TITULO</h4>
                            <p class="descp-tarjeta">Descripcion</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="cuadradotarjeta2 zoom">
                    <div class="row">
                        <div class="col-md-4">
                            <img width="150" height="150" class="img-circle fondoblanco rotate" src="<?php echo base_url()."public/images/icons/448/berry_color.png"?>">
                        </div>
                        <div class="col-md-8">
                            <h4 class="titulo-tarjeta">TITULO</h4>
                            <p class="descp-tarjeta">Descripcion</p>
                        </div>
                    </div>

                </div>

            </div>
        </div>
        <br>
        <br>
        <div class="row">
            <div class="col-md-6">
                <div class="cuadradotarjeta3 zoom">
                    <div class="row">
                        <div class="col-md-4">
                            <img width="150" height="150" src="<?php echo base_url()."public/images/icons/448/cheese_color.png"?>" class="img-circle fondoblanco rotate">
                        </div>
                        <div class="col-md-8">
                            <h4 class="titulo-tarjeta">TITULO</h4>
                            <p class="descp-tarjeta">Descripcion</p>
                        </div>
                    </div>

                </div>

            </div>
            <div class="col-md-6">
                <div class="cuadradotarjeta4 zoom">
                    <div class="row">
                        <div class="col-md-4">
                            <img width="150" height="150" class="img-circle fondoblanco rotate" src="<?php echo base_url()."public/images/icons/448/orange_color.png"?>">
                        </div>
                        <div class="col-md-8">
                            <h4 class="titulo-tarjeta">TITULO</h4>
                            <p class="descp-tarjeta">Descripcion</p>
                        </div>
                    </div>

                </div>

            </div>
        </div>
        <br>
        <br>
        <div class="row">
            <div class="col-md-6">
                <div class="cuadradotarjeta1 zoom">
                    <div class="row">
                        <div class="col-md-4">
                            <img width="150" height="150" src="<?php echo base_url()."public/images/icons/448/pineapple_color.png"?>" class="img-circle fondoblanco rotate">
                        </div>
                        <div class="col-md-8">
                            <h4 class="titulo-tarjeta">TITULO</h4>
                            <p class="descp-tarjeta">Descripcion</p>
                        </div>
                    </div>

                </div>

            </div>
            <div class="col-md-6">
                <div class="cuadradotarjeta2 zoom">

                    <div class="row">
                        <div class="col-md-4">
                            <img width="150" height="150" class="img-circle fondoblanco rotate" src="<?php echo base_url()."public/images/icons/448/strawberry_color.png"?>">
                        </div>
                        <div class="col-md-8">
                            <h4 class="titulo-tarjeta">TITULO</h4>
                            <p class="descp-tarjeta">Descripcion</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>-->
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
                        <li class="nav-link-ses li-nav zoom"><a href="#section1">Frutos Poderosos</a></li>
                        <li class="nav-link-reg li-nav zoom"><a href="#section2">Verduras Magicas</a></li>
                        <li class="nav-link-ses li-nav zoom"><a href="#section3">Alimentos Geniales</a></li>
                        <li class="nav-link-reg li-nav zoom"><a href="#section4">Tips Saludables</a></li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <li class="nav-link-ses li-nav zoom"><a href="<?php echo base_url()?>aplicacion/cerrarsesion"><span class="glyphicon glyphicon-log-out rotate"></span> Cerrar Sesion</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
<div class="container-fluid" style="background-color:#F44336;color:#fff;height:200px;">
    <h1>Bienvenido a Vida Saludable</h1>
    <h3>Aprenderas muchas cosas </h3>
    <p>Scroll this page to see how the navbar behaves with data-spy="affix" and data-spy="scrollspy".</p>
    <p>The navbar is attached to the top of the page after you have scrolled a specified amount of pixels, and the links in the navbar are automatically updated based on scroll position.</p>
</div>
    <!-- Modal -->
    <div class="modal fade" id="myModal" role="dialog" style="top: 10%">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 id="modal-title" class="modal-title titulo1">Modal Header</h4>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-4">
                            <img id="modalimg" width="150" height="150" class="fondoblanco zoom" src="<?php echo base_url()."public/images/icons/448/berry_color.png"?>">
                        </div>
                        <div class="col-md-8">
                            <p id="modal-body" class="titulo4">Some text in the modal.</p>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
<div id="section1" class="container-fluid">
    <div class="row">
        <div class="col-md-12">
                    <div class="titulo4">El poder de las frutas</div>
                    <div class="row">
                        <div class="col-md-7 col-sm-12 col-xs-12" style="padding-bottom: 10px;padding-top: 10px">
                            <?php
                            foreach($frutas as $fruta){
                                ?>
                                <div class="col-md-3 col-sm-3 col-xs-3" style="padding-bottom: 10px">
                                    <img style="cursor: pointer;width: 120px;height: 120px;" title="<?php echo $fruta->nombre?>" src="<?php echo base_url().$fruta->link?>" class="img-circle fondoblanco rotate center-block fruta" data-toggle="modal" data-target="#myModal">
                                    <p id="<?php echo $fruta->nombre?>" class="hidden"><?php echo $fruta->descripcion?></p>
                                </div>

                                <?php
                            }
                            ?>
                        </div>
                        <div class="col-md-5 col-sm-12 col-xs-12">
                            <div class="bubble verde">
                                <a title="gogo" href="#">
                                    <h2 id="explica">Elige una fruta</h2>
                                    <h3 id="descripcion">Te enseñare sobre ella</h3>
                                </a>
                            </div>
                            <img width="200" height="359" src="<?php echo base_url().'public/images/student1.png'?>" class="center-block">
                        </div>
                    </div>
        </div>
    </div>
</div>
<div id="section2" class="container-fluid">
    <h1>Section 2</h1>
    <div class="row">
        <div class="col-md-12">
            <div class="titulo4">Verduras Mágicas</div>
            <div class="row">
                <div class="col-md-7 col-sm-12 col-xs-12" style="padding-bottom: 10px;padding-top: 10px">
                    <?php
                    foreach($verduras as $verdura){
                        ?>
                        <div class="col-md-3 col-sm-3 col-xs-3" style="padding-bottom: 10px">
                            <img style="cursor: pointer;width: 120px;height: 120px;" title="<?php echo $verdura->nombre?>" src="<?php echo base_url().$verdura->link?>" class="img-circle fondoblanco rotate center-block verduras" data-toggle="modal" data-target="#myModal">
                            <p id="<?php echo $verdura->nombre?>" class="hidden"><?php echo $verdura->descripcion?></p>
                        </div>
                        <?php
                    }
                    ?>
                </div>
                <div class="col-md-5 col-sm-12 col-xs-12">
                    <div class="bubble verde">
                        <a title="gogo" href="#">
                            <h2 id="explica2">Elige una verdura</h2>
                            <h3 id="descripcion">Te enseñare sobre ella</h3>
                        </a>
                    </div>
                    <img width="200" height="359" src="<?php echo base_url().'public/images/student3.png'?>" class="center-block">
                </div>
            </div>
        </div>
    </div>
   </div>
    <div id="section3" class="container-fluid">
        <h1>Section 3</h1>
        <p>Try to scroll this section and look at the navigation bar while scrolling! Try to scroll this section and look at the navigation bar while scrolling!</p>
        <p>Try to scroll this section and look at the navigation bar while scrolling! Try to scroll this section and look at the navigation bar while scrolling!</p>
        <div class="col-md-6">
            <div class="cuadradotarjeta1 zoom">
                <div class="row">
                    <div class="col-md-4">
                        <img width="150" height="150" src="<?php echo base_url()."public/images/icons/448/grape_color.png"?>" class="img-circle fondoblanco rotate">
                    </div>
                    <div class="col-md-8">
                        <h4 class="titulo-tarjeta">TITULO</h4>
                        <p class="descp-tarjeta">Descripcion</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="section4" class="container-fluid">
        <h1>Section 4</h1>
        <p>Try to scroll this section and look at the navigation bar while scrolling! Try to scroll this section and look at the navigation bar while scrolling!</p>
        <p>Try to scroll this section and look at the navigation bar while scrolling! Try to scroll this section and look at the navigation bar while scrolling!</p>
    </div>
    <div id="section41" class="container-fluid">
        <h1>Section 4 Submenu 1</h1>
        <p>Try to scroll this section and look at the navigation bar while scrolling! Try to scroll this section and look at the navigation bar while scrolling!</p>
        <p>Try to scroll this section and look at the navigation bar while scrolling! Try to scroll this section and look at the navigation bar while scrolling!</p>
    </div>
    <div id="section42" class="container-fluid">
        <h1>Section 4 Submenu 2</h1>
        <p>Try to scroll this section and look at the navigation bar while scrolling! Try to scroll this section and look at the navigation bar while scrolling!</p>
        <p>Try to scroll this section and look at the navigation bar while scrolling! Try to scroll this section and look at the navigation bar while scrolling!</p>
</div>
<?php include "footer.php"?>


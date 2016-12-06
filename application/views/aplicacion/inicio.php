<!--Archivo que incluye el menu de navegación-->
<?php include "navs/nav.php" ?>
<div data-ride="carousel" class="carousel slide carousel-fade" id="myCarousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
        <li class="" data-slide-to="0" data-target="#myCarousel"></li>
        <li data-slide-to="1" data-target="#myCarousel" class="active"></li>
        <li data-slide-to="2" data-target="#myCarousel" class=""></li>
    </ol>
    <div role="listbox" class="carousel-inner">
        <div class="item">
            <img alt="First slide" src="<?php echo base_url()."public/images/fondo2.png"?>">
            <div class="container">
                <div class="carousel-caption">
                    <div class="cc-text">
                        <h1>¿En qué consiste?</h1>
                        <p>Wambo es una aplicación que te enseñará sobre la importancia de la educación física
                        y la vida saludable.</p>
                        <p>Tiene muchas cosas entretenidas, únete!.</p>
                        <p><a role="button" href="<?php echo base_url()."aplicacion/registro"?>" class="btn btn-lg btn-primary">Regístrate Ahora!</a></p>
                    </div>
                </div>
            </div>
        </div>
        <div class="item active">
            <img alt="Second slide" src="<?php echo base_url()."public/images/fondo.png"?>" class="second-slide">
            <div class="container">
                <div class="carousel-caption">
                    <div class="cc-text">
                        <h1>¿Qué aprenderás?</h1>
                        <p>Aprenderás sobre alimentación saludable y sus beneficios.</p>
                        <p>Aprenderás sobre la actividad física, la importancia de realizar deporte, consejos y mucho más.</p>
                        <p><a role="button" href="#explicativo" class="btn btn-lg btn-primary">Leer más</a></p>
                    </div>
                </div>
            </div>
        </div>
        <!--<div class="item">
            <img alt="Third slide" src="<?php echo base_url()."public/images/fondo3.jpg"?>" class="third-slide">
            <div class="container">
                <div class="carousel-caption">
                    <div class="cc-text">
                        <h1>Es gratis ! Solo registrate !</h1>
                        <p>Wambo es una aplicación totalmente gratuita, animate!.</p>
                        <p><a role="button" href="<?php echo base_url()."aplicacion/registro"?>" class="btn btn-lg btn-primary">Quiero registrarme</a></p>
                    </div>
                </div>
            </div>
        </div>-->
    </div>
    <a data-slide="prev" role="button" href="#myCarousel" class="left carousel-control">
        <span aria-hidden="true" class="glyphicon glyphicon-chevron-left"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a data-slide="next" role="button" href="#myCarousel" class="right carousel-control">
        <span aria-hidden="true" class="glyphicon glyphicon-chevron-right"></span>
        <span class="sr-only">Next</span>
    </a>
</div>
<div class="container-fluid bg-im">
    <div class="container">
        <div class="row">
            <div class="col-md-7 col-sm-7 col-xs-12 fondo-portada1">
                <h2 class="featurette-heading">Frutas Poderosas. <span class="text-muted">Todos su secretos al descubierto</span></h2>
                <p class="lead">¿Cuáles comer? ¿A qué hora? ¿Cuánto debo consumir?</p>
                <p class="lead">Esta y muchas más preguntas serán respondidas conmigo</p>
            </div>
            <div class="col-md-5 col-sm-5 col-xs-12">
                <figure>
                    <img height="400px" width="400px"style="border-radius: 5px" alt="portada1" class="img-responsive center-block" src="<?php echo base_url()."public/images/portada1.png"?>">
                </figure>
            </div>
        </div>
        <hr class="featurette-divider">
        <div class="row">
            <div class="col-md-7 col-sm-7 col-sm-push-5 col-md-push-5 fondo-portada2">
                <h2 class="featurette-heading">Oh yeah, it's that good. <span class="text-muted">See for yourself.</span></h2>
                <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
            </div>
            <div class="col-md-5 col-sm-5 col-sm-pull-7 col-md-pull-7">
                <figure>
                    <img height="400px" width="400px" style="border-radius: 5px" alt="portada2" class="img-responsive center-block" src="<?php echo base_url()."public/images/portada2.png"?>">
                </figure>
            </div>
        </div>
        <hr class="featurette-divider">
        <div class="row">
            <div class="col-md-7 col-sm-7 fondo-portada3">
                <h2 class="featurette-heading">¿Quieres ser más fuerte, más rapido?<span class="text-muted">Conmigo sabrás cómo !</span></h2>
                <p class="lead">Aprenderás la importancia del ejercicio y sus beneficios.</p>
            </div>
            <div class="col-md-5 col-sm-5">
                <figure>
                    <img height="400px" width="400px"style="border-radius: 5px" alt="portada3" class="img-responsive center-block" src="<?php echo base_url()."public/images/portada3.png"?>">
                </figure>
            </div>
        </div>
        <!--<hr class="featurette-divider">
        <div class="row">
            <div class="col-md-7 col-md-push-5 col-sm-7 col-sm-push-5 fondo-portada4">
                <h2 class="featurette-heading">First featurette heading. <span class="text-muted">It'll blow your mind.</span></h2>
                <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
            </div>
            <div class="col-md-5 col-md-pull-7 col-sm-5 col-sm-pull-7">
                <figure>
                    <img height="400px" width="400px"style="border-radius: 5px" alt="portada4" class="img-responsive center-block img-overlay" src="<?php echo base_url()."public/images/portada4.jpg"?>">
                </figure>
            </div>
        </div>
        <hr class="featurette-divider">-->
    </div>
</div>
<?php include "footer.php"?>
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
            <figure>
                <img alt="First slide" src="<?php echo base_url()."public/images/fondo2.png"?>">
            </figure>
            <div class="container">
                <div class="carousel-caption">
                    <div class="cc-text animated bounceInDown">
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
            <figure>
                <img alt="Second slide" src="<?php echo base_url()."public/images/fondo.png"?>" class="second-slide">
            </figure>
            <div class="container">
                <div class="carousel-caption">
                    <div class="cc-text animated bounceInUp">
                        <h1>¿Qué aprenderás?</h1>
                        <p>Aprenderás sobre alimentación saludable y sus beneficios.</p>
                        <p>Aprenderás sobre la actividad física, la importancia de realizar deporte, consejos y mucho más.</p>
                        <p><a id="leermas" role="button" href="#" class="animated infinite pulse btn btn-lg btn-primary">Leer más</a></p>
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
<section class="container-fluid bg-im">
    <div class="container" id="explicativo">
        <div class="row">
            <div class="col-md-7 col-sm-7 col-xs-12 fondo-portada1">
                <h2 class="featurette-heading">Frutas Poderosas. <span class="text-muted">Todos su secretos al descubierto</span></h2>
                <p class="lead">¿Cuáles comer? ¿A qué hora? ¿Cuánto debo consumir?</p>
                <p class="lead">Esta y muchas más preguntas serán respondidas conmigo</p>
            </div>
            <div class="col-md-5 col-sm-5 col-xs-12">
                <figure>
                    <img alt="portada1" class="img-responsive center-block img-portada img-circle" src="<?php echo base_url()."public/images/portada1m.png"?>">
                </figure>
            </div>
        </div>
        <hr class="featurette-divider">
        <div class="row">
            <div class="col-md-7 col-sm-7 col-sm-push-5 col-md-push-5 fondo-portada2">
                <h2 class="featurette-heading">Verduras Mágicas <span class="text-muted">Todo sobre ellas.</span></h2>
                <p class="lead">¿Cuáles comer? ¿A qué hora? ¿Cuánto debo consumir?</p>
                <p class="lead">Conmigo aprenderás sus beneficios y por que comerlas.</p>
            </div>
            <div class="col-md-5 col-sm-5 col-sm-pull-7 col-md-pull-7">
                <figure>
                    <img alt="portada2" class="img-responsive center-block img-portada img-circle" src="<?php echo base_url()."public/images/portada2m.png"?>">
                </figure>
            </div>
        </div>
        <hr class="featurette-divider">
        <div class="row">
            <div class="col-md-7 col-sm-7 fondo-portada3">
                <h2 class="featurette-heading">¿Quieres ser más fuerte, más rapido?<span class="text-muted">Conmigo sabrás cómo !</span></h2>
                <p class="lead">Conocerás muchos deportes y aprenderás la importancia del ejercicio y sus beneficios.</p>
            </div>
            <div class="col-md-5 col-sm-5">
                <figure>
                    <img alt="portada3" class="img-responsive center-block img-portada img-circle" src="<?php echo base_url()."public/images/portada3m.png"?>">
                </figure>
            </div>
        </div>
        <hr class="featurette-divider">
        <div class="row">
            <div class="col-md-7 col-md-push-5 col-sm-7 col-sm-push-5 fondo-portada4">
                <h2 class="featurette-heading">Obtén tu Diploma Wambo! <span class="text-muted">Completa los desafios y gana</span></h2>
                <p class="lead">Gana en Wambo y coloca tu diploma para que todos lo vean!</p>
            </div>
            <div class="col-md-5 col-md-pull-7 col-sm-5 col-sm-pull-7">
                <figure>
                    <img  alt="portada4" class="img-responsive center-block img-portada img-circle" src="<?php echo base_url()."public/images/portada7.png"?>">
                </figure>
            </div>
        </div>
        <hr class="featurette-divider">
        <div>
            <img class="ir-arriba animated infinite pulse center-block tamano" src="<?php echo base_url()."public/images/icons/up-arrow.png"?>">
        </div>
    </div>
</section>
<?php include "footer.php"?>
<script>
    $(document).ready(function() {
        $(".img-portada").on({
            mouseenter: function(){
                $(this).addClass("animated rubberBand");
            },
            mouseleave:function(){
                $(this).removeClass("animated rubberBand");
            }
        });
        $(".fondo-portada1").on({
            mouseenter: function(){
                $(this).addClass("animated pulse");
            },
            mouseleave:function(){
                $(this).removeClass("animated pulse");
            }
        });
        $(".fondo-portada2").on({
            mouseenter: function(){
                $(this).addClass("animated pulse");
            },
            mouseleave:function(){
                $(this).removeClass("animated pulse");
            }
        });
        $(".fondo-portada3").on({
            mouseenter: function(){
                $(this).addClass("animated pulse");
            },
            mouseleave:function(){
                $(this).removeClass("animated pulse");
            }
        });
        $(".fondo-portada4").on({
            mouseenter: function(){
                $(this).addClass("animated pulse");
            },
            mouseleave:function(){
                $(this).removeClass("animated pulse");
            }
        });
        $('#leermas').click(function(){
            $('body, html').animate({
                scrollTop: $('#explicativo').position().top}, 'slow');
        });
        $('.ir-arriba').click(function(){
            $('body, html').animate({
                scrollTop: '0px'
            },1000 );
        });
    });
</script>

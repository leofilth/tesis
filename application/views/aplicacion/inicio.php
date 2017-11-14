<!--Archivo que incluye el menu de navegación-->
<?php include "navs/nav.php" ?>
<div data-ride="carousel" class="carousel slide carousel-fade" id="myCarousel">
    <!-- Indicators -->
    <ol class="carousel-indicators hidden">
        <li class="" data-slide-to="0" data-target="#myCarousel"></li>
        <li data-slide-to="1" data-target="#myCarousel" class="active"></li>
        <li data-slide-to="2" data-target="#myCarousel" class=""></li>
    </ol>
    <div role="listbox" class="carousel-inner">
        <div class="item">
            <figure>
                <img alt="First slide" src="<?php echo base_url()."public/images/fondo2.jpg"?>">
            </figure>
            <div class="container">
                <div class="carousel-caption">
                    <div class="cc-text animated bounceInDown">
                        <h1>¿En qué consiste?</h1>
                        <p>Wambo es una aplicación que te enseñará sobre la importancia de la educación física
                        y la vida saludable.</p>
                        <p>Tiene muchas cosas entretenidas ¡Únete!</p>
                        <p><a role="button" href="<?php echo base_url()."aplicacion/registro"?>" class="animated infinite pulse btn-naranjo btn btn-lg btn-primary">¡Regístrate ahora!</a></p>
                    </div>
                </div>
            </div>
        </div>
        <div class="item active">
            <figure>
                <img alt="Second slide" src="<?php echo base_url()."public/images/fondo.jpg"?>" class="second-slide">
            </figure>
            <div class="container">
                <div class="carousel-caption">
                    <div class="cc-text animated bounceInUp">
                        <h1>¿Qué aprenderás?</h1>
                        <p>Conocerás sobre alimentación saludable y sus beneficios.</p>
                        <p>Recibirás información sobre actividad física, la importancia de realizar deporte, consejos y mucho más.</p>
                        <p><a id="leermas" role="button" href="#" class="animated infinite pulse btn-naranjo btn btn-lg btn-primary">Continuar</a></p>
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
                <h2 class="featurette-heading">¡Frutas y verduras poderosas! <span class="text-muted">Todos su secretos al descubierto</span></h2>
                <p class="lead">¿Cuáles comer? ¿A qué hora? ¿Cuánto debo consumir?</p>
                <p class="lead">Esto y mucho más encontrarás en Wambo</p>
            </div>
            <div class="col-md-5 col-sm-5 col-xs-12">
                <figure>
                    <img alt="portada1" class="img-responsive center-block img-portada img-circle" src="<?php echo base_url()."public/images/portadafrutaverdura.png"?>">
                </figure>
            </div>
        </div>
        <hr class="featurette-divider">
        <div class="row">
            <div class="col-md-7 col-sm-7 col-sm-push-5 col-md-push-5 fondo-portada2">
                <h2 class="featurette-heading">Cereales mágicos  <span class="text-muted">¡Todo sobre ellos!</span></h2>
                <p class="lead">¿Cuáles comer? ¿A qué hora? ¿Cuánto debo consumir?</p>
                <p class="lead">Conmigo aprenderás sus beneficios y por qué comerlos.</p>
            </div>
            <div class="col-md-5 col-sm-5 col-sm-pull-7 col-md-pull-7">
                <figure>
                    <img alt="portada2" class="img-responsive center-block img-portada img-circle" src="<?php echo base_url()."public/images/portadacereal.png"?>">
                </figure>
            </div>
        </div>
        <hr class="featurette-divider">
        <div class="row">
            <div class="col-md-7 col-sm-7 fondo-portada3">
                <h2 class="featurette-heading">¿Quieres ser más fuerte y más rápido? <span class="text-muted">¡Conmigo sabrás cómo!</span></h2>
                <p class="lead">Conocerás muchos deportes y aprenderás la importancia del ejercicio y sus beneficios.</p>
            </div>
            <div class="col-md-5 col-sm-5">
                <figure>
                    <img alt="portada3" class="img-responsive center-block img-portada img-circle" src="<?php echo base_url()."public/images/portadadeporte.png"?>">
                </figure>
            </div>
        </div>
        <hr class="featurette-divider">
        <div class="row">
            <div class="col-md-7 col-md-push-5 col-sm-7 col-sm-push-5 fondo-portada4">
                <h2 class="featurette-heading">¡Obtén tu diploma Wambo! <span class="text-muted">Completa los desafíos y gana</span></h2>
                <p class="lead">¡Termina Wambo y obtén tu diploma para que todos lo vean!</p>
            </div>
            <div class="col-md-5 col-md-pull-7 col-sm-5 col-sm-pull-7">
                <figure>
                    <img  alt="portada4" class="img-responsive center-block img-portada img-circle" src="<?php echo base_url()."public/images/portada7.png"?>">
                </figure>
            </div>
        </div>
        <hr class="featurette-divider">
        <div>
            <figure>
                <img alt="flechaTop" class="ir-arriba animated infinite pulse center-block tamano" src="<?php echo base_url()."public/images/icons/up-arrow.png"?>">
            </figure>
        </div>
    </div>
</section>
<?php include "footerinicio.php"?>
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
                $(this).addClass("animated pulse infinite");
            },
            mouseleave:function(){
                $(this).removeClass("animated pulse infinite");
            }
        });
        $(".fondo-portada2").on({
            mouseenter: function(){
                $(this).addClass("animated pulse infinite");
            },
            mouseleave:function(){
                $(this).removeClass("animated pulse infinite");
            }
        });
        $(".fondo-portada3").on({
            mouseenter: function(){
                $(this).addClass("animated pulse infinite");
            },
            mouseleave:function(){
                $(this).removeClass("animated pulse infinite");
            }
        });
        $(".fondo-portada4").on({
            mouseenter: function(){
                $(this).addClass("animated pulse infinite");
            },
            mouseleave:function(){
                $(this).removeClass("animated pulse infinite");
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

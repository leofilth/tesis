<!--Archivo que incluye el menu de navegación-->
<?php include "nav.php"?>
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
                        <p>Tiene muchas cosas entretenidas, unete!.</p>
                        <p><a role="button" href="#" class="btn btn-lg btn-primary">Sign up today</a></p>
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
                        <p>Aprenderás sobre alimentación, qué comer y qué no.</p>
                        <p>Aprenderás sobre la actividad física!, si quieres ser más fuerte, más rapido, más flexible!</p>
                        <p><a role="button" href="#" class="btn btn-lg btn-primary">Learn more</a></p>
                    </div>
                </div>
            </div>
        </div>
        <div class="item">
            <img alt="Third slide" src="<?php echo base_url()."public/images/fondo3.jpg"?>" class="third-slide">
            <div class="container">
                <div class="carousel-caption">
                    <div class="cc-text">
                        <h1>Es gratis ! Solo registrate !</h1>
                        <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                        <p><a role="button" href="#" class="btn btn-lg btn-primary">Browse gallery</a></p>
                    </div>
                </div>
            </div>
        </div>
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
<div class="container">
    <div class="row featurette">
        <div class="col-md-7">
            <h2 class="featurette-heading">First featurette heading. <span class="text-muted">It'll blow your mind.</span></h2>
            <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
        </div>
        <div class="col-md-5">
            <img alt="500x500" data-src="holder.js/500x500/auto" class="featurette-image img-responsive center-block" src="<?php echo base_url()."public/images/portada1.png"?>" data-holder-rendered="true">
        </div>
    </div>
    <hr class="featurette-divider">
    <div class="row featurette">
        <div class="col-md-7 col-md-push-5">
            <h2 class="featurette-heading">Oh yeah, it's that good. <span class="text-muted">See for yourself.</span></h2>
            <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
        </div>
        <div class="col-md-5 col-md-pull-7">
            <img alt="500x500" data-src="holder.js/500x500/auto" class="featurette-image img-responsive center-block" src="<?php echo base_url()."public/images/portada2.png"?>" data-holder-rendered="true">
        </div>
    </div>
    <hr class="featurette-divider">
    <div class="row featurette">
        <div class="col-md-7">
            <h2 class="featurette-heading">First featurette heading. <span class="text-muted">It'll blow your mind.</span></h2>
            <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
        </div>
        <div class="col-md-5">
            <img alt="500x500" data-src="holder.js/500x500/auto" class="featurette-image img-responsive center-block" src="<?php echo base_url()."public/images/portada3.png"?>" data-holder-rendered="true">
        </div>
    </div>
    <hr class="featurette-divider">
</div>
<?php include "footer.php"?>
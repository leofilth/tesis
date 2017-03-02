<?php include "navs/nav.php" ?>
<section class="container-fluid bg-im padingtop">
    <header class="titulo1 animated tada">Inicia tu sesión</header>
    <div class="row">
        <div class="col-md-5 col-sm-6 col-xs-12 col-md-offset-1 animated rubberBand">
            <?php $atributos=array('class'=>'form-group cuadradosombra','id'=>'form','name'=>'form');
            echo form_open(null,$atributos);//utulizar siempre null, recomendado?>
            <h1 class="titulo2">Ingresa tus datos</h1>
            <h4 class="okform"><?php if($this->session->flashdata('ControllerMessage')!='')
                {
                    echo " <span class='glyphicon glyphicon-ok'></span> ".$this->session->flashdata('ControllerMessage');
                }
                ?>
            </h4>
            <label class="control-label tituloform center-block">Nick</label>
            <input class="form-control" name="nick" type="text" placeholder="Tu Nick" required>
            <br>
            <label class="control-label tituloform">Contraseña</label>
            <input class="form-control" name="password" type="password" placeholder="Tu contraseña" required>
            <br>
            <br>
            <button type="submit" name="boton" id="boton" class="btn  btn-cf-submit titulo4 center-block zoom">
                <span class="glyphicon glyphicon-log-in"></span>  Iniciar Sesión
            </button>
            <div class="sesion">
                <p>¿Olvidaste tu contraseña? Restablecela <a href="<?php echo base_url()."aplicacion/restablecepassword"?>" title="recuperar contraseña">aquí</a></p>
            </div>
            <?php echo form_close(); ?>
        </div>
        <div class="col-md-4 col-sm-6 col-xs-12 col-md-offset-1 text-center animated bounceInUp">
            <div class="instruefecto animated infinite pulse">
                <div class="instruccion-morado">
                    <h4 id="titulo-tip" class="modal-title titulo-modal-tip">Vamos!</h4>
                    <h4 id="titulo-tip" class="modal-title titulo-modal-tip">Momento de aprender!</h4>
                </div>
                <div style="float: left;margin-left: 45%;clear: left">
                    <div class="triangulo-morado"></div>
                </div>
            </div>
            <figure>
                <img class="img-responsive center-block" alt="estudiante1"  src="<?php echo base_url().'public/images/modal/sesion2.png'?>">
            </figure>
            <!--<div class="bubble verde">
                <a title="gogo" href="#">
                    <h2>Vamos!</h2>
                    <h3>Momento de aprender</h3>
                </a>
            </div>
            <figure>
                <img class="img-responsive center-block" alt="iniciasesion" src="<?php echo base_url()."public/images/iniciar_sesion.png"?>">
            </figure>-->
        </div>
    </div>
</section>
<?php include "footerinicio.php"?>

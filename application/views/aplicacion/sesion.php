<?php include "navs/nav.php" ?>
<div class="container-fluid bg-im">
    <div class="titulo1">Inicia tu sesión</div>
    <div class="row">
        <div class="col-md-5 col-md-offset-1">
            <?php $atributos=array('role'=>'form','class'=>'form-group cuadradosombra','id'=>'form','name'=>'form');
            echo form_open(null,$atributos);//utulizar siempre null, recomendado?>
            <h1 class="titulo2">Ingresa tus datos</h1>
            <h4 style="color: orangered;font-family: 'finger paint'"><?php if($this->session->flashdata('ControllerMessage')!='')
                {
                    echo " <span class='glyphicon glyphicon-info-sign'></span> ".$this->session->flashdata('ControllerMessage');
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
        <div class="col-md-4 col-md-offset-1 text-center">
            <div class="bubble verde">
                <a title="gogo" href="#">
                    <h2>Vamos!</h2>
                    <h3>Momento de aprender</h3>
                </a>
            </div>
            <img class="img-responsive center-block" src="<?php echo base_url()."public/images/iniciar_sesion.png"?>">
        </div>
    </div>
</div>
<?php include "footer.php"?>

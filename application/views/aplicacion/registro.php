<?php include "nav.php"?>
<div class="container" xmlns="http://www.w3.org/1999/html">
    <div class="titulo1">Registro de usuarios</div>
    <div class="titulo2">Ingresa tus datos</div>
    <a class="btn btn-primary" href="<?php echo base_url()?>aplicacion">Volver Atrás</a>
    <?php $atributos=array('role'=>'form','class'=>'form-group','id'=>'form','name'=>'form');
    echo form_open_multipart(null,$atributos);//utilizar siempre null, recomendado
    ?>
    <br>
    <div class="row">
        <div class="col-md-6">
    <div class="row">
        <div class="col-md-12">
            <div class="form-group">
                <label class="control-label tituloform">Nombre: </label>
                <?php
                $value=set_value("nombre");
                $datos=array
                (
                    'name'=>'nombre',
                    'id'=>'nombre',
                    'class'=>'form-control',
                    'value'=>$value,
                    'placeholder'=>'Nombre y Apellido'
                );
                echo form_input($datos);
                ?>
                <label class="errorform"><?php echo form_error('nombre'); ?></label>

            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="form-group">
            <label class="control-label tituloform">Edad </label>
            <?php
            $value=set_value("edad");
            $datos=array
            (
                'name'=>'edad',
                'id'=>'edad',
                'class'=>'form-control',
                'value'=>$value,
                'placeholder'=>'Tu edad'
            );
            echo form_input($datos);
            ?>
            <label class="errorform"><?php echo form_error('edad'); ?></label>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="form-group">
            <label class="control-label tituloform">Ciudad </label>
            <?php
            $value=set_value("ciudad");
            $datos=array
            (
                'name'=>'ciudad',
                'id'=>'ciudad',
                'class'=>'form-control',
                'value'=>$value,
                'placeholder'=>'Ejemplo: Valdivia'
            );
            echo form_input($datos);
            ?>
            <label class="errorform"><?php echo form_error('ciudad'); ?></label>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="form-group">
                <label class="control-label tituloform">Nick </label>
                <?php
                $value=set_value("nick");
                $datos=array
                (
                    'name'=>'nick',
                    'id'=>'nick',
                    'class'=>'form-control',
                    'value'=>$value,
                    'placeholder'=>'Ejemplo: Terminator'
                );
                echo form_input($datos);
                ?>
                <label class="errorform"><?php echo form_error('nick'); ?></label>
            </div>
        </div>
        <div class="col-md-12">
            <div class="form-group">
                <label class="control-label tituloform">Contraseña </label>
                <?php
                $value=set_value("password");
                $datos=array
                (
                    'name'=>'password',
                    'id'=>'password',
                    'class'=>'form-control',
                    'value'=>$value,
                    'type'=>'password',
                    'placeholder'=>'Tu contraseña'
                );
                echo form_input($datos);
                ?>
                <label class="errorform"><?php echo form_error('password'); ?></label>
            </div>
        </div>
    </div>
        <div class="row">
            <div class="col-md-12">
                <button type="submit" name="boton" id="boton" class="btn  btn-md btn-cf-submit titulo4 center-block">
                    <span class="glyphicon glyphicon-save"></span> Registrame
                </button>
                <?php
                echo form_close();
                ?>
            </div>
        </div>
        </div>
        <div class="col-md-6">
            <div class="row">
                <div class="col-md-6">
                    <div class="bubble datm">
                        <a title="hola probando" href="#">
                            <h2>Soy un maestro</h2>
                            <h3>Eligeme.</h3>
                        </a>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="bubble rosado">
                        <a title="gogo" href="#">
                            <h2>Unete</h2>
                            <h3>Aprende conmigo</h3>
                        </a>
                    </div>
                </div>
            </div>
            <div class="row">
                <img class="img-responsive center-block" src="<?php echo base_url()?>public/images/imagenregistro.png">
            </div>
        </div>
    </div>
</div>
<div class="footer">
    <p>Page rendered in <strong>{elapsed_time}</strong> seconds. <?php echo  (ENVIRONMENT === 'development') ?  'CodeIgniter Version <strong>' . CI_VERSION . '</strong>' : '' ?></p>
    <p>Leonardo Concha Mella</p>
    <p>Copyright <?php echo date('y')?></p>
</div>
<div class="container" xmlns="http://www.w3.org/1999/html">
    <h1>Registro de usuarios</h1>
    <p>ñandú</p>
    <h3>Ingresa tus datos</h3>
    <a class="btn btn-primary" href="<?php echo base_url()?>aplicacion">Volver Atrás</a>
    <?php $atributos=array('role'=>'form','class'=>'form-group','id'=>'form','name'=>'form');
    echo form_open_multipart(null,$atributos);//utilizar siempre null, recomendado
    ?>
    <div class="row">
        <div class="col-md-5">
            <label class="control-label">Nombre: </label>
            <?php
            $value=set_value("nombre");
            $datos=array
            (
                'name'=>'nombre',
                'id'=>'nombre',
                'class'=>'form-control',
                'value'=>$value
            );
            echo form_input($datos);
            ?>
            <label><?php echo form_error('nombre'); ?></label>
        </div>
    </div>
    <div class="row">
        <div class="col-md-5">
            <label class="control-label">Edad: </label>
            <?php
            $value=set_value("edad");
            $datos=array
            (
                'name'=>'edad',
                'id'=>'edad',
                'class'=>'form-control',
                'value'=>$value
            );
            echo form_input($datos);
            ?>
            <label><?php echo form_error('edad'); ?></label>
        </div>
    </div>
    <div class="row">
        <div class="col-md-5">
            <label class="control-label">Ciudad: </label>
            <?php
            $value=set_value("ciudad");
            $datos=array
            (
                'name'=>'ciudad',
                'id'=>'ciudad',
                'class'=>'form-control',
                'value'=>$value
            );
            echo form_input($datos);
            ?>
            <label><?php echo form_error('ciudad'); ?></label>
        </div>
    </div>
    <div class="row">
        <div class="col-md-5">
            <label class="control-label">Nick: </label>
            <?php
            $value=set_value("nick");
            $datos=array
            (
                'name'=>'nick',
                'id'=>'nick',
                'class'=>'form-control',
                'value'=>$value
            );
            echo form_input($datos);
            ?>
            <label><?php echo form_error('nick'); ?></label>
        </div>
    </div>
    <div class="row">
        <div class="col-md-5">
            <label class="control-label">Contraseña: </label>
            <?php
            $value=set_value("password");
            $datos=array
            (
                'name'=>'password',
                'id'=>'password',
                'class'=>'form-control',
                'value'=>$value,
                'type'=>'password'
            );
            echo form_input($datos);
            ?>
            <label><?php echo form_error('password'); ?></label>
        </div>
    </div>
    <div class="row">
        <div class="col-md-5">
            <button type="submit" name="boton" id="boton" class="btn btn-primary btn-md">
                <span class="glyphicon glyphicon-save"></span> Registrame
            </button>

        </div>
    </div>
    <?php
    echo form_close();
    ?>
    <p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds. <?php echo  (ENVIRONMENT === 'development') ?  'CodeIgniter Version <strong>' . CI_VERSION . '</strong>' : '' ?></p>
</div>
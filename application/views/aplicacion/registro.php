<?php include "navs/nav.php" ?>
<div class="container-fluid bg-im" xmlns="http://www.w3.org/1999/html">
    <div class="titulo1">Registro de usuarios</div>
        <div class="row">
            <div class="col-md-5 col-md-offset-1">
                <?php $atributos=array('role'=>'form','class'=>'form-group cuadradosombra','id'=>'form','name'=>'form');
                echo form_open_multipart(null,$atributos);//utilizar siempre null, recomendado
                ?>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <h1 class="titulo2">Ingresa tus datos</h1>
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
                            <h4 style="color: orangered;font-family: 'finger paint'"><?php if($this->session->flashdata('ErrorNick')!='')
                                {
                                    echo " <span class='glyphicon glyphicon-info-sign'></span> ".$this->session->flashdata('ErrorNick');
                                }
                                ?>
                            </h4>
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
                        <button type="submit" name="boton" id="boton" class="btn  btn-md btn-cf-submit titulo4 center-block zoom">
                            <span class="glyphicon glyphicon-save"></span> Registrarme
                        </button>
                        <br>
                        <?php
                        echo form_close();
                        ?>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-md-offset-1">
                <div class="row">
                    <div class="col-md-6">
                        <div class="bubble rosado">
                            <a title="gogo" href="#">
                                <h2>Unete</h2>
                                <h3>Aprende conmigo</h3>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="bubble datm">
                            <a title="hola probando" href="#">
                                <h2>Soy un maestro</h2>
                                <h3>Eligeme.</h3>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <img class="img-responsive center-block" src="<?php echo base_url()?>public/images/iniciar_sesion.png">
                </div>
            </div>
        </div>
</div>
<?php include "footer.php"?>
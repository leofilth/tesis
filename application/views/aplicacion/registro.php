<?php include "navs/nav.php" ?>
<section class="container-fluid bg-im4 padingtop padingbot">
    <div class="container">
        <header class="titulo1 animated fadeInLeft">Regístrate</header>
        <div class="row">
            <div class="col-md-5 col-md-offset-1 col-sm-6  col-xs-12 animated fadeIn padingbot">
                <?php $atributos=array('class'=>'form-group borde cuadradosombra-sesion','id'=>'form','name'=>'form');
                echo form_open_multipart(null,$atributos);//utilizar siempre null, recomendado
                ?>
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="form-group">
                            <h1 class="titulo2 hidden">Ingresa tus datos</h1>
                            <label class="control-label tituloform">Nombre</label>
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
                    <div class="col-md-12 col-sm-12 col-xs-12">
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
                                'placeholder'=>'Tu edad',
                                'type'=>'number',
                                'min'=>'5'
                            );
                            echo form_input($datos);
                            ?>
                            <label class="errorform"><?php echo form_error('edad'); ?></label>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-xs-6">
                        <div class="form-group">
                            <input class="tituloform" type="radio" name="sexo" value="masculino"> <span class="tituloform">Masculino</span><br>
                            <label class="errorform"><?php echo form_error('sexo'); ?></label>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-xs-6">
                        <div class="form-group">
                            <input class="tituloform" type="radio" name="sexo" value="femenino"> <span class="tituloform">Femenino</span><br>
                            <label class="errorform"><?php echo form_error('sexo'); ?></label>
                        </div>
                    </div>
                    <div class="col-md-12 col-sm-12 col-xs-12">
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
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="form-group">
                            <h4 class="errorform"><?php if($this->session->flashdata('ErrorNick')!='')
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
                    <div class="col-md-12 col-sm-12 col-xs-12">
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
                        <button type="submit" name="boton" id="boton" class="btn  btn-md btn-cuest titulo4 center-block zoom">
                            <span class="glyphicon glyphicon-save"></span> Registrarme
                        </button>
                        <br>
                        <p class="obligatorio">*Todos los campos son obligatorios</p>
                    </div>
                </div>
                <?php
                echo form_close();
                ?>
            </div>
            <div class="col-md-4 col-md-offset-1  col-sm-6  hidden-xs text-center animated bounceInUp">
                <div class="instruefecto animated infinite pulse">
                    <div class="instruccion-naranjo">
                        <h4  class="modal-title titulo-modal-tip">
                            Únete
                        </h4>
                        <h4  class="modal-title titulo-modal-tip">
                            ¡Aprenderás muchas cosas!
                        </h4>
                    </div>
                    <div style="float: left;margin-left: 45%;clear: left">
                        <div class="triangulo-naranjo"></div>
                    </div>
                </div>
                <figure>
                    <img class="img-responsive center-block img-circle img-portada" alt="estudiante1"  height="300" width="300" src="<?php echo base_url().'public/images/modal/sesion22.png'?>">
                </figure>
            </div>
        </div>
    </div>
</section>
<?php include "footerinicio.php"?>
<script>
    $(document).ready(function() {
        $(".img-portada").on({
            mouseenter: function(){
                $(this).addClass("animated jello");
            },
            mouseleave:function(){
                $(this).removeClass("animated jello");
            }
        });
    });
</script>

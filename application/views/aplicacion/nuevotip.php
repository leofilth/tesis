<nav class="navbar navbar-default">
    <div class="container-fluid">
        <div class="navbar-header">
            <button aria-controls="navbar" aria-expanded="false" data-target="#navbar" data-toggle="collapse" class="navbar-toggle collapsed" type="button">
                <span class="sr-only">Wambo</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a href="#" class="navbar-brand">Wambo</a>
        </div>
        <div class="navbar-collapse collapse" id="navbar">
            <ul class="nav navbar-nav">
                <li class="nav-link-ses li-nav"><a href="<?php echo base_url()."aplicacion/cuentaAdmin"?>">Volver</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li class="dropdown nav-link-ses li-nav"><a class="dropdown-toggle" data-toggle="dropdown" href="#"><img height="32px"width="32px" src="<?php
                        if($datos->avatar_name=="")
                        {
                            echo base_url()."public/images/user_avatar/user.jpg";
                        }
                        else if($datos->avatar_name=$datos->nick)
                        {
                            echo base_url()."public/images/user_avatar/".$datos->nick.".jpg";
                        }
                        ?>"  class="img-circle"><?php echo $datos->nick?><span class="caret"></span></a>
                    <ul class="dropdown-menu nav-link-ses">
                        <li><a href="<?php echo base_url()?>aplicacion/cerrarsesion">Cerrar Sesión</a></li>
                        <li><a href="#">Page 1-2</a></li>
                    </ul>
                </li>
            </ul>
        </div><!--/.nav-collapse -->
    </div><!--/.container-fluid -->
</nav>
<div class="container-fluid">
    <div class="col-md-6 col-md-offset-3 cuadradosombra" id="tip">
        <h2>Nuevo Tip Saludable</h2>
        <?php if($this->session->flashdata('ControllerMessage')!=''){?>
            <div class="alert alert-success">
                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                <strong>Hecho </strong><?php
                echo $this->session->flashdata('ControllerMessage');
                ?>
            </div>
        <?php }?>
        <?php $atributos=array('role'=>'form','class'=>'form-group','id'=>'tip','name'=>'form');
        echo form_open_multipart(null,$atributos);//utilizar siempre null, recomendado
        ?>
        <label class="control-label tituloform center-block"> Descripción: </label><textarea class="form-control" rows="4" cols="50" name="descripcion"></textarea>
        <label class="errorform"><?php echo form_error('descripcion'); ?></label>
        <button name="boton" id="boton" type="submit" class="btn  btn-cf-submit titulo4 center-block zoom botonfoto">Guardar Tip</button>
        <?php
        echo form_close();
        ?>
    </div>
</div>

<div class="container bg-im">
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <?php $atributos=array('role'=>'form','class'=>'form-group','id'=>'form','name'=>'form');
            echo form_open(null,$atributos);//utulizar siempre null, recomendado?>
            <h1 class="titulo1">Ingresa tus datos</h1>
            <h3 style="color: orangered"><?php if($this->session->flashdata('ControllerMessage')!='')
                {
                    echo " <span class='glyphicon glyphicon-info-sign'></span> ".$this->session->flashdata('ControllerMessage');
                }
                ?>
            </h3>
            <label class="control-label tituloform center-block">Nick</label>
            <input class="form-control" name="nick" type="text" placeholder="Tu Nick">
            <label class="control-label tituloform">Contraseña</label>
            <input class="form-control" name="password" type="password" placeholder="Tu contraseña">
            <br>
            <button type="submit" name="boton" id="boton" class="btn  btn-cf-submit titulo4 center-block">
                Iniciar Sesión
            </button>
            <?php echo form_close(); ?>
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-md-5">
<?php $atributos=array('role'=>'form','class'=>'form-group','id'=>'form','name'=>'form');
echo form_open(null,$atributos);//utulizar siempre null, recomendado?>
<h3 style="color: orangered"><?php if($this->session->flashdata('ControllerMessage')!='')
    {
        echo " <span class='glyphicon glyphicon-info-sign'></span> ".$this->session->flashdata('ControllerMessage');
    }
    ?>
</h3>
    <label class="control-label">Nick: </label>
    <input class="form-control" name="nick" type="text">
    <label class="control-label">Contraseña: </label>
    <input class="form-control" name="password" type="password">
    <br>
    <button type="submit" name="boton" id="boton" class="btn btn-primary btn-md">
        Go!
    </button>
<?php echo form_close(); ?>
        </div>
    </div>
</div>

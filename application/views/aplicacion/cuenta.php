<?php include "nav_cuenta.php"?>
<div class="container-fluid"style="background-color: #3498db;padding-top: 100px;padding-bottom: 100px;">
    <div class="titulocuenta">Bienvenido <strong><?php echo $datos->nombre?></strong></div>
    <div class="container">
        <div class="row">
            <div class="col-md-4 cuadradosombra">
                <img width="200px" height="200px" class="img-circle center-block"
                     src="<?php
                     if($datos->avatar_name=="")
                     {
                         echo base_url()."public/images/user_avatar/user.jpg";
                     }
                     else if($datos->avatar_name=$datos->nick)
                     {
                         echo base_url()."public/images/user_avatar/".$datos->nick.".jpg";
                     }
                     ?>">
                        <?php $atributos=array('role'=>'form','class'=>'form-group','id'=>'miformulario','name'=>'form');
                        echo form_open_multipart(null,$atributos);//utilizar siempre null, recomendado
                        ?>
                        <input type="file" class="" name="archivo" id="file">
                        <button name="boton" id="boton" type="submit" class="btn btn-primary btn-md">Actualizar foto</button>
                        <?php
                        echo form_close();
                        ?>
                <h2 class="titulo2">Tus datos</h2>
                <p><label>Edad: </label><?php echo $datos->edad?></p>
                <p><label>Ciudad: </label><?php echo $datos->ciudad?></p>
                <p><label>Nick: </label><?php echo $datos->nick?></p>
                <p><label>Colegio: </label><!--<?php echo $datos->colegio?>--></p>
            </div>
            <div class="col-md-8">
                <div class="container-fluid">
                    <h2>Striped Progress Bars</h2>
                    <p>The .progress-bar-striped class adds stripes to the progress bars:</p>
                    <div class="progress">
                        <div class="progress-bar progress-bar-success progress-bar-striped active" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width:40%">
                            40% Complete (success)
                        </div>
                    </div>
                    <div class="progress">
                        <div class="progress-bar progress-bar-info progress-bar-striped active" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width:50%">
                            50% Complete (info)
                        </div>
                    </div>
                    <div class="progress">
                        <div class="progress-bar progress-bar-warning progress-bar-striped active" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width:60%">
                            60% Complete (warning)
                        </div>
                    </div>
                    <div class="progress">
                        <div class="progress-bar progress-bar-danger progress-bar-striped active" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width:70%">
                            <p>70% Complete (danger)</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
<?php include "footer.php"?>
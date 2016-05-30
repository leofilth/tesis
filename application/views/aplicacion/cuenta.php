<?php include "nav_cuenta.php"?>
<div class="container-fluid fondo-user"style="padding-top: 100px;padding-bottom: 100px;">
    <div class="titulocuenta">Bienvenido <strong><?php echo $datos->nombre?></strong></div>
    <!--<p><?php echo print_r($datos)?></p>-->
    <div class="row">
        <div class="col-md-7 cuadradosombra">
            <img width="200px" height="200px" class="img-circle zoom"
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

            <div class="row">
                <div class="col-md-4">
                    <?php $atributos=array('role'=>'form','class'=>'form-group','id'=>'miformulario','name'=>'form');
                    echo form_open_multipart(null,$atributos);//utilizar siempre null, recomendado
                    ?>
                        <input type="file" class="" name="archivo" id="file">
                        <button name="boton" id="boton" type="submit" class="btn btn-primary btn-md">Actualizar foto</button>
                    <?php
                    echo form_close();
                    ?>
                </div>
            </div>
            <h2 class="titulo2">Tus datos</h2>
            <p><label>Edad: </label><?php echo $datos->edad?></p>
            <p><label>Ciudad: </label><?php echo $datos->ciudad?></p>
            <p><label>Nick: </label><?php echo $datos->nick?></p>
            <p><label>Colegio: </label><!--<?php echo $datos->colegio?>--></p>
        </div>
        <div class="col-md-5">
            <h2>Progreso</h2>
        </div>
    </div>
</div>
<?php include "footer.php"?>
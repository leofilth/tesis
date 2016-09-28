<?php include "navs/nav_cuenta.php"?>
<section class="container-fluid bg-im3">
    <section class="container">
        <header class="titulo1 text-center">Modifica tu Perfil</header>
        <div class="row">
            <div class="col-md-6 col-md-offset-3 cuadradosombra">
                <img width="200px" height="200px"  class="img-circle center-block"
                     src="<?php
                     if($datos->avatar_name=="user")
                     {
                         echo base_url()."public/images/user_avatar/user.jpg";
                     }
                     else
                     {
                         echo base_url()."public/images/user_avatar/".$datos->nick.".jpg";
                     }
                     ?>">
                <?php $atributos=array('role'=>'form','class'=>'form-group','id'=>'miformulario','name'=>'form');
                echo form_open_multipart(null,$atributos);//utilizar siempre null, recomendado
                ?>
                <br>
                <div class="cuadradosombra">
                    <input type="file" class="center-block" name="archivo" id="file" required>
                    <br>
                    <button name="boton" id="boton" type="submit" class="btn btn-primary btn-md center-block">Actualizar foto</button>
                </div>
                <?php
                echo form_close();
                ?>
                <br>
                <br>
                <div id="listo">
                </div>
                <form class="form-horizontal cuadradosombra">
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-2">
                                <label class="control-label">Nombre:</label>
                            </div>
                            <div class="col-md-10">
                                <input class="form-control" id="nombre" type="text" value="<?php echo $datos->nombre?>" required/>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-2">
                                <label class="control-label">Ciudad:</label>
                            </div>
                            <div class="col-md-10">
                                <input class="form-control" id="ciudad" type="text" value="<?php echo $datos->ciudad?>" required/>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-2">
                                <label class="control-label">Edad:</label>
                            </div>
                            <div class="col-md-10">
                                <input class="form-control" id="edad" type="number" value="<?php echo $datos->edad?>" required/>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-2">
                                <label class="control-label">Nick:</label>
                            </div>
                            <div class="col-md-10">
                                <input style="cursor: not-allowed" class="form-control" id="nick" type="text" value="<?php echo $datos->nick?>" readonly/>
                            </div>
                        </div>
                    </div>
                </form>
                <br>
                <button id="guardar" class="btn btn-primary center-block">Guardar</button>
        </div>
    </section>
</section>
<?php include "footer.php"?>
<script>
    function modificaperfil(ruta,valor1,valor2,valor3,div){
        $.post(ruta,{valor1:valor1,valor2:valor2,valor3:valor3},function(resp)
        {
            $("#"+div+"").html(resp);
        });
    }
    $(document).ready(function(){
        $("#guardar").click(function(){
            var nombre=$("#nombre").val();
            var edad=$("#edad").val();
            var ciudad=$("#ciudad").val();
           // var nick=$("#nick").val();
            modificaperfil('<?php echo base_url()."aplicacion/actualizaperfil"?>',nombre,edad,ciudad,"listo");
        });
    });
    $(function () {
        $('#demo-form').parsley().on('field:validated', function() {
            var ok = $('.parsley-error').length === 0;
            $('.bs-callout-info').toggleClass('hidden', !ok);
            $('.bs-callout-warning').toggleClass('hidden', ok);
        })
            .on('form:submit', function() {
                return false; // Don't submit form for this demo
            });
    });
</script>

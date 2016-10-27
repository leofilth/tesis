<?php include "navs/nav_cuenta.php"?>
<section class="container-fluid bg-im3">
    <section class="container">
        <!-- Modal -->
        <div class="modal fade" id="modaltip" role="dialog">
            <div class="modal-dialog">
                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-body" style="background-color: #673AB7">
                        <div>
                            <div class="margen-modal">
                                <h4 id="titulo-tip" class="modal-title titulo-modal-tip">Selecciona tu Avatar</h4>
                                <div class="row">
                                <?php
                                if($datos->sexo == "masculino"){
                                    foreach($avatar_mas as $avatar){?>
                                        <div class="col-md-2 col-sm-2 col-xs-2">
                                            <img class="img-circle avatar" title="<?php echo $avatar->nombre?>" width="80px" height="80px" src="<?php echo base_url().$avatar->link?>">
                                        </div>
                                    <?php }?>
                                <?php }else{
                                foreach($avatar_fem as $avatar){
                                ?>
                                    <div class="col-md-2 col-sm-2 col-xs-2">
                                        <img class="img-circle avatar" title="<?php echo $avatar->nombre?>" width="80px" height="80px" src="<?php echo base_url().$avatar->link?>">
                                    </div>
                                <?php }}?>
                                </div>
                            </div>
                        </div>
                        <button id="guardaAvatar" type="button" class="btn btn-info" style="position:absolute;bottom:10px;right:10px;margin:0;padding:10px 10px;font-family: 'finger paint'"data-dismiss="modal">Guardar</button>
                    </div>
                </div>
            </div>
        </div>
        <header class="titulo1 text-center">Modifica tu Perfil</header>
        <div class="row">
            <div class="col-md-6 col-md-offset-3 cuadradosombra">
                <img id="avatar-user" width="200px" height="200px"  class="img-circle center-block fondoavatar"
                     src="<?php
                     if($datos->avatar_name=="user")
                     {
                         if($datos->sexo=="masculino"){
                             echo base_url()."public/images/user_avatar/user-mas.png";
                         }else{
                             echo base_url()."public/images/user_avatar/user-fem.png";
                         }
                     }
                     else
                     {
                         echo base_url()."public/images/user_avatar/".$datos->avatar_name.".png";
                     }
                     ?>">
                <br>
                <div class="cuadradosombra">
                    <button name="boton" id="muestramodal"  class="btn btn-primary btn-md center-block">Cambiar avatar</button>
                </div>
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
    $(document).ready(function(){
        var nombre,link;
        function guardaAvatar(ruta,valor){
            $.post(ruta,{valor:valor},function(resp){
                return resp;
            })
        }
        function modificaperfil(ruta,valor1,valor2,valor3,div){
            $.post(ruta,{valor1:valor1,valor2:valor2,valor3:valor3},function(resp)
            {
                $("#"+div+"").html(resp);
            });
        }
        $("#guardar").click(function(){
            var nombre=$("#nombre").val();
            var edad=$("#edad").val();
            var ciudad=$("#ciudad").val();
            modificaperfil('<?php echo base_url()."aplicacion/actualizaperfil"?>',nombre,edad,ciudad,"listo");
        });
        $(".avatar").click(function(){
            $(".avatar").removeClass("selecciona");
            nombre=$(this).attr("title");
            link=$(this).attr("src");
            $(this).addClass("selecciona");

        });
        $("#guardaAvatar").click(function(){
            $("#avatar-user").attr("src",link);
            $("#avatarNav").attr("src",link);
            $("#avatarNav2").attr("src",link);
            $(".avatar").removeClass("selecciona");
            guardaAvatar('<?php echo base_url()."aplicacion/guardaAvatar"?>',nombre);
        });
        $("#muestramodal").click(function () {
            $(".avatar").removeClass("selecciona");
            $("#modaltip").modal();
        });
    });
</script>

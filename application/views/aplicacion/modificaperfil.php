<?php include "navs/nav_modperfil.php"?>
<!-- Modal -->
<div class="modal animated tada" id="modaltip" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-body" style="background-color: #673AB7">
                <div>
                    <div class="margen-modal">
                        <h4 id="titulo-tip" class="modal-title titulo-modal-tip animated infinite pulse">Selecciona tu Avatar</h4>
                        <div class="row">
                            <?php
                            if($datos->sexo == "masculino"){
                                foreach($avatar_mas as $avatar){?>
                                    <div class="col-md-2 col-sm-2 col-xs-3">
                                        <figure>
                                            <img alt="avatar" class="img-circle avatar" title="<?php echo $avatar->nombre?>" width="80" height="80" src="<?php echo base_url().$avatar->link?>">
                                        </figure>
                                    </div>
                                <?php }?>
                            <?php }else{
                                foreach($avatar_fem as $avatar){
                                    ?>
                                    <div class="col-md-2 col-sm-2 col-xs-3">
                                        <figure>
                                            <img alt="avatar" class="img-circle avatar" title="<?php echo $avatar->nombre?>" width="80" height="80" src="<?php echo base_url().$avatar->link?>">
                                        </figure>
                                    </div>
                                <?php }}?>
                        </div>
                    </div>
                </div>
                <button id="guardaAvatar" type="button" class="btn btn-info animated infinite pulse" style="position:absolute;bottom:10px;right:10px;margin:0;padding:10px 10px;font-family: 'finger paint'" data-dismiss="modal">Guardar</button>
            </div>
        </div>
    </div>
</div>
<section class="container-fluid bg-im3 padingtop animated fadeInUp">
    <div class="container">
        <header class="titulo1 text-center">Modifica tu Perfil</header>
        <div class="row">
            <div class="col-md-6 col-md-offset-3 cuadradosombra">
                <figure>
                    <img alt="imagenUsuario" id="avatar-user" width="200" height="200"  class="img-circle center-block fondoavatar"
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
                </figure>
                <br>
                    <button name="boton" id="muestramodal"  class="btn btn-primary btn-md center-block animated infinite pulse">
                        Cambiar avatar
                    </button>
                <br>
                <br>
                <div id="listo">
                </div>
                <div class="col-md-8 col-md-offset-2">
                    <form class="form-horizontal">
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
                    <button id="guardar" class="btn btn-primary center-block">Guardar</button>
                </div>
        </div>
    </div>
        <br>
        <br>
    </div>
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
            $(".avatar").removeClass("selecciona");//quita el circulo amarillo de todos los avatar
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
        $("#avatar-user").on({
            mouseenter: function(){
                $(this).addClass(" animated rubberBand");
            },
            mouseleave:function(){
                $(this).removeClass("animated rubberBand");
            },
            click:function(){
                $(this).toggleClass("animated flip");
                //$(this).removeClass("swing");
            }
        });
    });
</script>

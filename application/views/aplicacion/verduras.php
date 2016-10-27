<?php include "navs/nav_verduras.php"?>
<?php include "modal/modal_verdura.php" ?>
<!-- Modal -->
<div class="modal fade" id="modaltip" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-body" style="background-color: #673AB7">
                <div class="tip-modal">
                    <div class="margen-modal">
                        <h4 id="titulo-tip" class="modal-title titulo-modal-tip">Modal Header</h4>
                        <p class="texto-modal-tip" id="descripcion-tip"></p>
                    </div>
                </div>
                <div class="triangulo"></div>
                <br>
                <img class="img-circle" width="20%" src="<?php echo base_url().'public/images/modal/student3.png'?>">
                <button type="button" class="btn btn-info" style="position:absolute;bottom:10px;right:10px;margin:0;padding:10px 10px;font-family: 'finger paint'"data-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid" id="section1">
    <div  class="container">
        <h1>Section 2</h1>
        <h2 class="titulo4">Verduras Mágicas</h2>
        <div class="row">
                <div class="row">
                    <div class="col-md-8 col-sm-8">
                        <div class="instruccion-morado">
                            <h4 id="titulo-tip" class="modal-title titulo-modal-tip">Intrucciones</h4>
                            <ol class="texto-modal-tip" id="descripcion-tip">
                                <li>Compra tu verdura</li>
                                <li>Haz click en ella</li>
                                <li>Aprende</li>
                            </ol>
                        </div>
                        <div style="float: left;margin-left: 50px;clear: left">
                            <div class="triangulo-morado"></div>
                        </div>
                        <img class="img-circle pull-left" width="20%" style="margin-top: 15px" src="<?php echo base_url().'public/images/modal/student3.png'?>">
                    </div>
                    <div class="col-md-4 col-sm-4">
                        <img width="150px" height="150px"  class="img-circle center-block fondoavatar"
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
                        <p class="text-center"><span class="puntaje-seccion puntos"><?php echo $puntaje->puntos?></span></p>
                    </div>
                </div>
            </div>
        </div>
    <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2" style="padding-bottom: 10px;padding-top: 10px">
                        <?php
                        if($misverduras!=null) {
                            $misverduras_limpio = $this->mis_funciones->limpiaTuVerdura($misverduras);
                            foreach ($verduras as $verdura) {
                                if (in_array($verdura->id, $misverduras_limpio)) {
                                    ?>
                                    <div class="col-md-2 col-sm-3 col-xs-3" style="padding-bottom: 10px">
                                        <img id="<?php echo $verdura->id ?>"
                                             title="<?php echo $verdura->nombre ?>"
                                             src="<?php echo base_url() . $verdura->link ?>"
                                             class="img-circle tamano fondofruta rotate center-block verdura borde"
                                             data-toggle="modal" data-target="#myModal">
                                    </div>
                                <?php } else {
                                    ?>
                                    <div class="col-md-2 col-sm-3 col-xs-3" style="padding-bottom: 10px">
                                        <img id="<?php echo $verdura->id ?>"
                                             title="<?php echo $verdura->nombre ?>"
                                             src="<?php echo base_url() . $verdura->link ?>"
                                             class="img-circle tamano fondofruta rotate center-block gris borde"
                                             data-toggle="" data-target="">
                                    </div>
                                <?php }
                            }
                        }
                        else{
                            foreach ($verduras as $verdura) {
                                ?>
                                <div class="col-md-2 col-sm-3 col-xs-3" style="padding-bottom: 10px">
                                    <img id="<?php echo $verdura->id ?>"
                                         title="<?php echo $verdura->nombre ?>"
                                         src="<?php echo base_url() . $verdura->link ?>"
                                         class="img-circle tamano fondofruta rotate center-block gris borde"
                                         data-toggle="" data-target="">
                                </div>
                            <?php }
                        }?>
                    </div>
                </div>
            </div>
</div>
<div class="container-fluid" id="section2">
    <div class="container">
        <h1>Desafío Verduras</h1>
        <div class="row">
            <div class="col-md-8 col-sm-8">
                <div class="instruccion-verde">
                    <h4 id="titulo-tip" class="modal-title titulo-modal-tip">Intrucciones</h4>
                    <ol class="texto-modal-tip" id="descripcion-tip">
                        <li>Responde y gana puntos</li>
                        <li>Canjea por tus verduras </li>
                        <li>Demuestra todo lo que sabes</li>
                    </ol>
                </div>
                <div style="float: left;margin-left: 50px;clear: left">
                    <div class="triangulo-verde"></div>
                </div>
                <img class="img-circle pull-left" width="20%" style="margin-top: 15px" src="<?php echo base_url().'public/images/modal/student3.png'?>">
            </div>
            <div class="col-md-4 col-sm-4">
                <img width="150px" height="150px"  class="img-circle center-block fondoavatar"
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
                <p class="text-center"><span class="puntaje-seccion puntos"><?php echo $puntaje->puntos?></span></p>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="row">
                <?php include "tests/testverdura.php"?>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid" id="tipsaludable">
    <div class="container">
        <h1>Tips saludables</h1>
        <div class="row">
            <div class="col-md-8">
                <div class="instruccion-naranjo">
                    <h4 id="titulo-tip" class="modal-title titulo-modal-tip">Instrucciones</h4>
                    <ol class="texto-modal-tip" id="descripcion-tip">
                        <li>Selecciona tu TIP y aprende un poco mas</li>
                        <li>Son gratis :D</li>
                        <li></li>
                    </ol>
                </div>
                <div style="float: left;margin-left: 50px;clear: left">
                    <div class="triangulo-naranjo"></div>
                </div>
                <img class="img-circle pull-left" width="20%" style="margin-top: 15px" src="<?php echo base_url().'public/images/modal/student3.png'?>">
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <?php
                $i=0;
                $colores=array("verde","rosado","celeste","naranjo","rojo");
                foreach ($tipsVerduras as $tipverdura){
                    ?>
                    <div class="col-md-3 col-xs-6 col-sm-4" style="height: 160px">
                        <div class="tip-<?php echo $colores[$i]?> tip zoom borde" title="<?php echo $tipverdura->nombre?>" data-toggle="modal" data-target="#modaltip">
                            <div><h1 class="titulo-tip"><?php echo $tipverdura->nombre?></h1></div><div><i class="glyphicon glyphicon-leaf hoja"></i></div>
                        </div>
                    </div>
                    <?php $i++;
                    if($i==5){$i=0;}}?>
            </div>
        </div>
    </div>
</div>
<?php include "footer.php"?>
<script>
    $(document).ready(function(){
        /**
         * Created by leon on 30-05-2016.
         */
        var puntos = <?php echo $puntaje->puntos?>;
        var verdura="Elige una Verdura";
        var desc="Te enseñare sobre ella";
        var titulo, titulo2;
        function guardaCuestTemp(ruta,valor){
            $.post(ruta,{valor:valor},function(resp){
                return resp;
            })
        }
        function guardaVerdura(ruta,valor){
            $.post(ruta,{valor:valor},function(resp){
                return resp;
            })
        }
        function guardaPuntaje(ruta,valor){
            $.post(ruta,{valor:valor},function(resp){
                return resp;
            })
        }
        function compra(){
            if(puntos <50){
                bootbox.alert({
                    size: "small",
                    title: "Puntos insuficientes",
                    message: "Consigue mas puntos…",
                    className: 'bb-alternate-modal',
                    callback: function(){ /* your callback code */ }
                })
            }
            else {
                var id = $(this).attr("id");
                var nombre = $(this).attr("title");
                bootbox.confirm({
                    size: 'small',
                    buttons: {
                        confirm: {
                            label: 'Si',
                            className: 'btn-success'
                        },
                        cancel: {
                            label: 'No',
                            className: 'btn-danger'
                        }
                    },
                    //mesaage:'<p class="text-center">Please wait while we do something...</p>',
                    message: "<p class='text-center'>Seguro quieres comprar?.<br><p>" + nombre + " por 50 puntos<br>" + "Tus puntos actuales son: " + puntos,
                    callback: function (result) {
                        if (result) {
                            puntos = puntos - 50;
                            $(".puntos").text(puntos);
                            $("#" + id + ".gris").off();
                            $("#" + id).removeClass("gris");//quita color gris de la imagen
                            $("#" + id).off("click", compra);//quita evento compra
                            guardaVerdura('<?php echo base_url()."aplicacion/guardaVerduraUsuario"?>', id);
                            guardaPuntaje('<?php echo base_url()."aplicacion/guardaPuntaje"?>', puntos);
                            //agrega clase verdura para ver en modal
                            $("#" + id).addClass("verdura");
                            $("#" + id + ".verdura").on("click", function () {
                                titulo = $(this).attr("title");
                                var link = $(this).attr("src");
                                var i;
                                for (i = 0; i < verduras.length; i++) {
                                    if (verduras[i].nombre == titulo) {
                                        $("#modal-descripcion").html(verduras[i].descripcion);
                                        $("#modal-title").text(titulo);
                                        $("#modalimg").attr("src", link);
                                        $("#modal-consumo").text(verduras[i].consumo);
                                        $("#modal-saludable").text(verduras[i].saludable);
                                        $("#modal-beneficios").html(verduras[i].beneficios);
                                        $("#modal-categoria").text(verduras[i].categoria);
                                    }
                                }

                            });
                            $("#" + id + ".verdura").on("mouseenter", function () {
                                var texto = $(this).attr("title");
                                $("#explica").text(texto);
                            });
                            $("#" + id + ".verdura").on("mouseleave", function () {
                                $("#explica").text(fruta);
                                $("#descripcion").text(desc);
                            });
                            $("#" + id).attr("data-toggle", "modal");
                            $("#" + id).attr("data-target", "#myModal");
                        }
                        else {
                            //bootbox.alert("tus puntos: " + puntos);
                        }
                    }
                });
            }
        }
        var verduras=<?php echo json_encode($verduras,JSON_PRETTY_PRINT)?>;//arreglo con todas las verduras
        var tips=<?php echo json_encode($tipsVerduras,JSON_PRETTY_PRINT)?>;//arreglo con todos los tipsVerduras
        $(".verdura").on({
            mouseenter:function(){
                var texto=$(this).attr("title");
                $("#explica").text(texto);
            },
            click:function(){
                titulo=$(this).attr("title");
                var link=$(this).attr("src");
                var i;
                for(i=0;i<verduras.length;i++){
                    if(verduras[i].nombre == titulo){
                        $("#modal-descripcion").html(verduras[i].descripcion);
                        $("#modal-title").text(titulo);
                        $("#modalimg").attr("src",link);
                        $("#modal-consumo").text(verduras[i].consumo);
                        $("#modal-saludable").text(verduras[i].saludable);
                        $("#modal-beneficios").html(verduras[i].beneficios);
                        $("#modal-categoria").text(verduras[i].categoria);
                    }
                }
            },
            mouseleave:function(){
                $("#explica").text(verdura);
                $("#descripcion").text(desc);
            }
        });
        $(".cuest").on({
            click:function(){
                var cuestionario=$(this).attr("id");
                guardaCuestTemp('<?php echo base_url()."aplicacion/guardaCuestTemp"?>',cuestionario);
            }
        });
        $(".tip").on({
            click:function(){
                var titulo=$(this).attr("title");
                var i;
                for(i=0;i<tips.length;i++){
                    if(tips[i].nombre == titulo){
                        $("#descripcion-tip").text(tips[i].descripcion);
                        $("#titulo-tip").text(titulo);
                    }
                }
            }
        });
        /*
         Compra una fruta
         */
        $(".gris").on({
            click:compra,
            mouseenter:function(){
                titulo2=$(this).attr("title");
                $("#explica").text(titulo2);
            },
            mouseleave:function(){
                $("#explica").text(verdura);
                $("#descripcion").text(desc);
            }
        });
        /*
         fin compra fruta
         */
    });
</script>

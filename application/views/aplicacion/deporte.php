<?php include "navs/nav_edufisica.php"?>
<div class="container-fluid" style="background-color:#F44336;color:#fff;height:200px;">
    <h1 class="titulo">Bienvenido a deporte</h1>
    <h3>Aprenderas muchas cosas </h3>
    <p>Scroll this page to see how the navbar behaves with data-spy="affix" and data-spy="scrollspy".</p>
    <p>The navbar is attached to the top of the page after you have scrolled a specified amount of pixels, and the links in the navbar are automatically updated based on scroll position.</p>
</div>
<?php include "modal/modal_deporte.php" ?>
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
                <img class="img-circle" width="20%" src="<?php echo base_url().'public/images/modal/student2.png'?>">
                <button type="button" class="btn btn-info" style="position:absolute;bottom:10px;right:10px;margin:0;padding:10px 10px;font-family: 'finger paint'"data-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid" id="section1">
    <div  class="container">
        <div class="row">
            <div class="col-md-12">
                <h1 class="titulo1">El poder del deporte</h1>
                <div class="titulo5">Aquí encontrarás mucha información disponible para que aprendas, y cuando estes listo
                    animate a superar el desafío Wambo Frutas!.</div>
                <div class="row">
                    <div class="col-md-7 col-sm-12 col-xs-12" style="padding-bottom: 10px;padding-top: 10px">
                        <?php
                        foreach($deportes as $deporte){
                            ?>
                            <div class="col-md-2 col-sm-3 col-xs-3" style="padding-bottom: 10px">
                                <img style="cursor: pointer;width: 64px;height: 64px;" title="<?php echo $deporte->nombre?>" src="<?php echo base_url().$deporte->link?>" class="img-circle fondofruta rotate center-block deporte borde" data-toggle="modal" data-target="#myModal">
                            </div>
                            <?php
                        }
                        ?>
                    </div>
                    <div class="col-md-5 col-sm-12 col-xs-12">
                        <div class="bubble verde">
                            <a  href="#section1">
                                <h2 id="explica">Elige un deporte</h2>
                                <h3 id="descripcion">Te enseñare sobre el</h3>
                            </a>
                        </div>
                        <img width="200" height="359" src="<?php echo base_url().'public/images/student2.png'?>" class="center-block">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid" id="section2">
    <div class="container">
        <h1>Desafío Deporte</h1>
        <div class="row">
            <div class="col-md-7">
                <div class="row">
                    <?php include "tests/testdeporte.php"?>
                </div>
                <div id="cuestionario">
                </div>
            </div>
            <div class="col-md-5">
                <div class="bubble verde">
                    <a  href="#section2">
                        <h2 id="explica">Anímate</h2>
                        <h3 id="descripcion">Demuestra todo lo que sabes</h3>
                    </a>
                </div>
                <img width="200" height="359" src="<?php echo base_url().'public/images/student2.png'?>" class="center-block">
            </div>
        </div>
    </div>
</div>
<div class="container-fluid" id="tipsaludable">
    <div class="container">
        <h1>Tips saludables</h1>
        <div class="row">
            <div class="col-md-12">
                <?php
                $i=0;
                $colores=array("verde","rosado","celeste","naranjo","rojo");
                foreach ($tipsDeportes as $tipdeporte){
                    ?>
                    <div class="col-md-3 col-xs-6 col-sm-4" style="height: 160px">
                        <div class="tip-<?php echo $colores[$i]?> tip zoom borde" title="<?php echo $tipdeporte->nombre?>" data-toggle="modal" data-target="#modaltip">
                            <div><h1 class="titulo-tip"><?php echo $tipdeporte->nombre?></h1></div><div><i class="glyphicon glyphicon-tint hoja"></i></div>
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
    /**
     * Created by leon on 30-05-2016.
     */
    function guardaCuestTemp(ruta,valor){
        $.post(ruta,{valor:valor},function(resp){
            return resp;
        })
    }
    var deporte="Elige un Deporte";
    var desc="Te enseñare sobre el";
    $(document).ready(function(){
        var deportes=<?php echo json_encode($deportes,JSON_PRETTY_PRINT)?>;//arreglo con todas las frutas
        var tips=<?php echo json_encode($tipsDeportes,JSON_PRETTY_PRINT)?>;//arreglo con todos los tipsFrutas
        $(".deporte").on({
            mouseenter:function(){
                var texto=$(this).attr("title");
                $("#explica").text(texto);
            },
            click:function(){
                var titulo=$(this).attr("title");
                var link=$(this).attr("src");
                var i;
                for(i=0;i<deportes.length;i++){
                    if(deportes[i].nombre == titulo){
                        $("#modal-descripcion").html(deportes[i].descripcion);
                        $("#modal-title").text(titulo);
                        $("#modalimg").attr("src",link);
                        $("#modal-frecuencia").text(deportes[i].frecuencia);
                        $("#modal-saludable").text(deportes[i].saludable);
                        $("#modal-beneficios").html(deportes[i].beneficios);
                        $("#modal-categoria").text(deportes[i].categoria);
                    }
                }
            },
            mouseleave:function(){
                $("#explica").text(deporte);
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
    });
</script>
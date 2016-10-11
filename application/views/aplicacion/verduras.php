<?php include "navs/nav_verduras.php"?>
<div class="container-fluid" style="background-color:#F44336;color:#fff;height:200px;">
    <h1>Bienvenido a Vida Saludable</h1>
    <h3>Aprenderas muchas cosas </h3>
    <p>Scroll this page to see how the navbar behaves with data-spy="affix" and data-spy="scrollspy".</p>
    <p>The navbar is attached to the top of the page after you have scrolled a specified amount of pixels, and the links in the navbar are automatically updated based on scroll position.</p>
</div>
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
<div class="container-fluid" id="section2">
    <div  class="container">
        <h1>Section 2</h1>
        <div class="row">
            <div class="col-md-12">
                <div class="titulo4">Verduras Mágicas</div>
                <div class="row">
                    <div class="col-md-7 col-sm-12 col-xs-12" style="padding-bottom: 10px;padding-top: 10px">
                        <?php
                        foreach($verduras as $verdura){
                            ?>
                            <div class="col-md-2 col-sm-3 col-xs-3" style="padding-bottom: 10px">
                                <img style="cursor: pointer;width: 64px;height: 64px;" title="<?php echo $verdura->nombre?>" src="<?php echo base_url().$verdura->link?>" class="borde img-circle fondoverdura rotate center-block verduras" data-toggle="modal" data-target="#myModal">
                            </div>
                            <?php
                        }
                        ?>
                    </div>
                    <div class="col-md-5 col-sm-12 col-xs-12">
                        <div class="bubble rosado">
                            <a title="gogo" href="#section2">
                                <h2 id="explica2">Elige una verdura</h2>
                                <h3 id="descripcion">Te enseñare sobre ella</h3>
                            </a>
                        </div>
                        <img width="200" height="359" src="<?php echo base_url().'public/images/student3.png'?>" class="center-block">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid" id="section1">
    <div class="container">
        <h1>Desafío Verduras</h1>
        <div class="row">
            <div class="col-md-7">
                <div class="row">
                <?php include "tests/testverdura.php"?>
                </div>
                <div id="cuestionario">
                </div>
            </div>
            <div class="col-md-5">
                <div class="bubble verde">
                    <a  href="#section1">
                        <h2 id="explica">Anímate</h2>
                        <h3 id="descripcion">Demuestra todo lo que sabes</h3>
                    </a>
                </div>
                <img width="200" height="359" src="<?php echo base_url().'public/images/student3.png'?>" class="center-block">
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
    /**
     * Created by leon on 30-05-2016.
     */
    function guardaCuestTemp(ruta,valor){
        $.post(ruta,{valor:valor},function(resp){
            return resp;
        })
    }
    var verdura="Elige una Verdura";
    var desc="Te enseñare sobre ella";
    $(document).ready(function(){
        var verduras=<?php echo json_encode($verduras,JSON_PRETTY_PRINT)?>;//arreglo con todas las verduras
        var tips=<?php echo json_encode($tipsVerduras,JSON_PRETTY_PRINT)?>;//arreglo con todos los tipsVerduras
        $(".verduras").on({
            mouseenter:function(){
                var texto=$(this).attr("title");
                $("#explica2").text(texto);
                //carga_ajax_verdura('<?php echo base_url()."aplicacion/respuesta_ajax_verdura"?>',texto,"aqui");
            },
            click:function(){
                var titulo=$(this).attr("title");
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
                $("#explica2").text(verdura);
                $("#descripcion").text(desc);
            }
        });

        $(".cuest").on({
            click:function(){
                var cuestionario=$(this).attr("id");
                console.log(cuestionario);
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

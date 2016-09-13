<?php include "navs/nav_alimentos.php"?>
<div class="container-fluid" style="background-color:#F44336;color:#fff;height:200px;">
    <h1>Bienvenido a Vida Saludable</h1>
    <h3>Aprenderas muchas cosas </h3>
    <p>Scroll this page to see how the navbar behaves with data-spy="affix" and data-spy="scrollspy".</p>
    <p>The navbar is attached to the top of the page after you have scrolled a specified amount of pixels, and the links in the navbar are automatically updated based on scroll position.</p>
</div>
<?php include "modal/modal.php"?>
<div class="container-fluid" id="section3">
    <div  class="container">
        <h1>Section 3</h1>
        <div class="row">
            <div class="col-md-12">
                <div class="titulo4">Alimentos</div>
                <div class="row">
                    <div class="col-md-7 col-sm-12 col-xs-12" style="padding-bottom: 10px;padding-top: 10px">
                        <?php
                        foreach($alimentos as $alimento){
                            ?>
                            <div class="col-md-2 col-sm-3 col-xs-3" style="padding-bottom: 10px">
                                <img style="cursor: pointer;width: 64px;height: 64px;" title="<?php echo $alimento->nombre?>" src="<?php echo base_url().$alimento->link?>" class="img-circle fondoalimento rotate center-block alimentos" data-toggle="modal" data-target="#myModal">
                            </div>
                            <?php
                        }
                        ?>
                    </div>
                    <div class="col-md-5 col-sm-12 col-xs-12">
                        <div class="bubble verde">
                            <a title="gogo" href="#">
                                <h2 id="explica3">Elige un Alimento</h2>
                                <h3 id="descripcion">Te enseñare sobre el</h3>
                            </a>
                        </div>
                        <img width="200" height="359" src="<?php echo base_url().'public/images/student4.png'?>" class="center-block">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid" id="section1">
    <div class="container">
        <h1>Desafío alimentos</h1>
        <div class="row">
            <div class="col-md-7">
                <div class="row">
                    <?php include "tests/testalimento.php"?>
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
                <img width="200" height="359" src="<?php echo base_url().'public/images/student4.png'?>" class="center-block">
            </div>
        </div>
    </div>
</div>
<div class="container-fluid" id="section2">
    <div class="container">
        <h1>Tips saludables</h1>
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
    var alimento="Elige un Alimento";
    var desc="Te enseñare sobre el";
    $(document).ready(function(){
        var alimentos=<?php echo json_encode($alimentos,JSON_PRETTY_PRINT)?>;//arreglo con todas los alimentos
        $(".alimentos").on({
            mouseenter:function(){
                var texto=$(this).attr("title");
                $("#explica3").text(texto);
               // carga_ajax_alimento('<?php echo base_url()."aplicacion/respuesta_ajax_alimento"?>',texto,"aqui");
            },
            click:function(){
                var titulo=$(this).attr("title");
                var link=$(this).attr("src");
                var i;
                for(i=0;i<alimentos.length;i++){
                    if(alimentos[i].nombre == titulo){
                        $("#modal-descripcion").html(alimentos[i].descripcion);
                        $("#modal-title").text(titulo);
                        $("#modalimg").attr("src",link);
                        $("#modal-consumo").text(alimentos[i].consumo);
                        $("#modal-saludable").text(alimentos[i].saludable);
                        $("#modal-beneficios").html(alimentos[i].beneficios);
                        $("#modal-categoria").text(alimentos[i].categoria);
                    }
                }
            },
            mouseleave:function(){
                $("#explica3").text(alimento);
                $("#descripcion").text(desc);
            }
        });
        $(".cuest").on({
            click:function(){
                var cuestionario=$(this).attr("id");
                console.log(cuestionario);
                guardaCuestTemp('<?php echo base_url()."aplicacion/guardaCuestTemp"?>',cuestionario);
                console.log("holi");
            }
        });
    });
</script>

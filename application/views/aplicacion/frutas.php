<?php include "navs/nav_frutas.php"?>
<div class="container-fluid" style="background-color:#F44336;color:#fff;height:200px;">
    <h1 class="titulo">Bienvenido a Vida Saludable</h1>
    <h3>Aprenderas muchas cosas </h3>
    <p>Scroll this page to see how the navbar behaves with data-spy="affix" and data-spy="scrollspy".</p>
    <p>The navbar is attached to the top of the page after you have scrolled a specified amount of pixels, and the links in the navbar are automatically updated based on scroll position.</p>
</div>
<?php include "modal/modal.php"?>
<div class="container-fluid" id="section1">
    <div  class="container">
        <div class="row">
            <div class="col-md-12">
                <h1 class="titulo1">El poder de las frutas</h1>
                <div class="titulo5">Aquí encontrarás mucha información disponible para que aprendas, y cuando estes listo
                animate a superar el desafío Wambo Frutas!.</div>
                <div class="row">
                    <div class="col-md-7 col-sm-12 col-xs-12" style="padding-bottom: 10px;padding-top: 10px">
                        <?php
                        foreach($frutas as $fruta){
                            ?>
                            <div class="col-md-2 col-sm-3 col-xs-3" style="padding-bottom: 10px">
                                <img style="cursor: pointer;width: 64px;height: 64px;" title="<?php echo $fruta->nombre?>" src="<?php echo base_url().$fruta->link?>" class="img-circle fondofruta rotate center-block fruta" data-toggle="modal" data-target="#myModal">
                            </div>
                            <?php
                        }
                        ?>
                    </div>
                    <div class="col-md-5 col-sm-12 col-xs-12">
                        <div class="bubble verde">
                            <a  href="#section1">
                                <h2 id="explica">Elige una fruta</h2>
                                <h3 id="descripcion">Te enseñare sobre ella</h3>
                            </a>
                        </div>
                        <img width="200" height="359" src="<?php echo base_url().'public/images/student1.png'?>" class="center-block">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid" id="section2">
    <div class="container">
        <h1>Desafio Frutas</h1>
        <div class="row">
            <div class="col-md-7">
                <div class="row">
                    <?php include "tests/testfruta.php"?>
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
                <img width="200" height="359" src="<?php echo base_url().'public/images/student1.png'?>" class="center-block">
            </div>
        </div>
    </div>
</div>
<div class="container-fluid" id="section4">
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
    var fruta="Elige una Fruta";
    var desc="Te enseñare sobre ella";
    $(document).ready(function(){
        var frutas=<?php echo json_encode($frutas,JSON_PRETTY_PRINT)?>;//arreglo con todas las frutas
        $(".fruta").on({
            mouseenter:function(){
                var texto=$(this).attr("title");
                $("#explica").text(texto);
               // carga_ajax_fruta('<?php echo base_url()."aplicacion/respuesta_ajax_fruta"?>',texto,"aqui");
            },
            click:function(){
                var titulo=$(this).attr("title");
                var link=$(this).attr("src");
                var i;
                for(i=0;i<frutas.length;i++){
                    if(frutas[i].nombre == titulo){
                        $("#modal-descripcion").html(frutas[i].descripcion);
                        $("#modal-title").text(titulo);
                        $("#modalimg").attr("src",link);
                        $("#modal-consumo").text(frutas[i].consumo);
                        $("#modal-saludable").text(frutas[i].saludable);
                        $("#modal-beneficios").html(frutas[i].beneficios);
                        $("#modal-categoria").text(frutas[i].categoria);
                    }
                }
            },
            mouseleave:function(){
                $("#explica").text(fruta);
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

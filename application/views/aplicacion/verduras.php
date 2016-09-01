<?php include "navs/nav_verduras.php"?>
<div class="container-fluid" style="background-color:#F44336;color:#fff;height:200px;">
    <h1>Bienvenido a Vida Saludable</h1>
    <h3>Aprenderas muchas cosas </h3>
    <p>Scroll this page to see how the navbar behaves with data-spy="affix" and data-spy="scrollspy".</p>
    <p>The navbar is attached to the top of the page after you have scrolled a specified amount of pixels, and the links in the navbar are automatically updated based on scroll position.</p>
</div>
<?php include "modal/modal.php"?>
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
                                <img style="cursor: pointer;width: 64px;height: 64px;" title="<?php echo $verdura->nombre?>" src="<?php echo base_url().$verdura->link?>" class="img-circle fondoblanco rotate center-block verduras" data-toggle="modal" data-target="#myModal">
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
<div id="aqui" class="hidden"></div>
<?php include "footer.php"?>
<script>
    /**
     * Created by leon on 30-05-2016.
     */
    var verdura="Elige una Verdura";
    var desc="Te enseñare sobre ella";
    /**
     * Funciones que llaman metodo AJAX
     * */
    function carga_ajax_verdura(ruta,valor1,div){
        $.post(ruta,{valor1:valor1},function(resp)
        {
            $("#"+div+"").html(resp);
        });
    }
    function cuestionarioVerdura(ruta,valor1,div){
        $.post(ruta,{valor1:valor1},function(resp)
        {
            $("#"+div+"").html(resp);
        });
    }
    /**
     * Fin
     * */
    $(document).ready(function(){
        $(".verduras").on({
            mouseenter:function(){
                var texto=$(this).attr("title");
                $("#explica2").text(texto);
                carga_ajax_verdura('<?php echo base_url()."aplicacion/respuesta_ajax_verdura"?>',texto,"aqui");
            },
            click:function(){
                var titulo=$(this).attr("title");
                var link=$(this).attr("src");
                var verduraconsumo=$("#ajaxconsumo").text();
                var verduracategoria=$("#ajaxcategoria").text();
                var verdurasaludable=$("#ajaxsaludable").text();
                var verdurabeneficios=$("#ajaxbeneficios").html();
                var verduradescripcion=$("#ajaxdescripcion").text();
                $("#modal-descripcion").text(verduradescripcion);
                $("#modal-title").text(titulo);
                $("#modalimg").attr("src",link);
                $("#modal-consumo").text(verduraconsumo);
                $("#modal-saludable").text(verdurasaludable);
                $("#modal-beneficios").html(verdurabeneficios);
                $("#modal-categoria").text(verduracategoria);
            },
            mouseleave:function(){
                $("#explica2").text(verdura);
                $("#descripcion").text(desc);
            }
        })
            /*$(".cuestionario").on({
                click:function(){
                    var texto=$(this).attr("name");
                    cuestionarioVerdura('<?php echo base_url()."aplicacion/cuestionarioVerdura"?>',texto,"cuestionario");
                }
            })*/
    });
</script>

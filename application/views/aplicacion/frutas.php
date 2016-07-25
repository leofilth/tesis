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
                <h1>Section 1</h1>
                <div class="titulo4">El poder de las frutas</div>
                <div class="row">
                    <div class="col-md-7 col-sm-12 col-xs-12" style="padding-bottom: 10px;padding-top: 10px">
                        <?php
                        foreach($frutas as $fruta){
                            ?>
                            <div class="col-md-2 col-sm-3 col-xs-3" style="padding-bottom: 10px">
                                <img style="cursor: pointer;width: 64px;height: 64px;" title="<?php echo $fruta->nombre?>" src="<?php echo base_url().$fruta->link?>" class="img-circle fondoblanco rotate center-block fruta" data-toggle="modal" data-target="#myModal">
                            </div>

                            <?php
                        }
                        ?>
                    </div>
                    <div class="col-md-5 col-sm-12 col-xs-12">
                        <div class="bubble verde">
                            <a title="gogo" href="#">
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
<?php include "footer.php"?>
<div id="aqui" class="hidden"></div>
<script>

    /**
     * Created by leon on 30-05-2016.
     */
    var fruta="Elige una Fruta";
    var desc="Te enseñare sobre ella";
    /**
     * Funciones que llaman metodo AJAX
     * */
    function carga_ajax_fruta(ruta,valor1,div){
        $.post(ruta,{valor1:valor1},function(resp)
        {
            $("#"+div+"").html(resp);
        });
    }
    /**
     * Fin
     * */
    $(document).ready(function(){
        $(".fruta").on({
            mouseenter:function(){
                var texto=$(this).attr("title");
                $("#explica").text(texto);
                carga_ajax_fruta('<?php echo base_url()."aplicacion/respuesta_ajax_fruta"?>',texto,"aqui");
            },
            click:function(){
                var titulo=$(this).attr("title");
                var link=$(this).attr("src");
                var frutaconsumo=$("#ajaxconsumo").text();
                var frutacategoria=$("#ajaxcategoria").text();
                var frutasaludable=$("#ajaxsaludable").text();
                var frutabeneficios=$("#ajaxbeneficios").html();
                var frutadescripcion=$("#ajaxdescripcion").text();
                $("#modal-descripcion").text(frutadescripcion);
                $("#modal-title").text(titulo);
                $("#modalimg").attr("src",link);
                $("#modal-consumo").text(frutaconsumo);
                $("#modal-saludable").text(frutasaludable);
                $("#modal-beneficios").html(frutabeneficios);
                $("#modal-categoria").text(frutacategoria);
            },
            mouseleave:function(){
                $("#explica").text(fruta);
                $("#descripcion").text(desc);
            }

        })

    });
</script>

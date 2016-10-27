<?php include "navs/nav_receta.php"?>
<div class="container-fluid" id="section1">
    <div class="container">
        <header class="titulo1">Eligue tu receta para comprar</header>
        <p id="puntaje">Tus puntos: <?php echo $puntaje->puntos?></p>
            <!--<div class="col-md-6 col-md-offset-6">
                <div class="instruccion-morado">
                    <h4 id="titulo-tip" class="modal-title titulo-modal-tip">Modal Header</h4>
                    <p class="texto-modal-tip" id="descripcion-tip"></p>
                </div>
                <div style="float: right;margin-right: 70px;clear: right">
                    <div class="triangulo-morado"></div>
                </div>
                <img class="img-circle pull-right" width="20%" style="margin-top: 10px" src="<?php echo base_url().'public/images/modal/student1.png'?>">
            </div>-->
            <div class="col-md-6" style="margin-left: 50px">
                <div class="instruccion-morado">
                    <h4 id="titulo-tip" class="modal-title titulo-modal-tip">Intrucciones</h4>
                    <ol class="texto-modal-tip" id="descripcion-tip">
                        <li>Compra tu receta</li>
                        <li>Haz click en ella</li>
                        <li>Cocina :0</li>
                    </ol>
                </div>
                <div style="float: left;margin-left: 50px;clear: left">
                    <div class="triangulo-morado"></div>
                </div>
                <img class="img-circle pull-left" width="20%" style="margin-top: 15px" src="<?php echo base_url().'public/images/modal/student3.png'?>">
            </div>

    </div>
    <div class="container">
        <ul class="nav nav-tabs">
            <li class="active"><a data-toggle="tab" href="#menu1">Platos generales</a></li>
            <li><a data-toggle="tab" href="#menu2">Sandwhiches</a></li>
            <li><a data-toggle="tab" href="#menu3">Jugos</a></li>
        </ul>
        <div class="tab-content">
            <div id="menu1" class="tab-pane fade in active">
        <div class="row">
        <?php
        //$recetaslimpio=$this->mis_funciones->limpiaCinco($recetas);
        if ($recetasUsuario != null) {
        $recetasUsuarioLimpio = $this->mis_funciones->limpiaSeis($recetasUsuario);
        foreach ($recetas as $receta) {
                if (in_array($receta->id, $recetasUsuarioLimpio)) {
                ?>
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <article style="margin: 20px">
                        <figure class="img-overlay borde">
                            <a id="<?php echo "linkreceta" . $receta->id ?>"
                               href='<?php echo base_url() . "aplicacion/tureceta" ?>'>
                                <img
                                    id="<?php echo $receta->id ?>" class="img-responsive receta"
                                    style="border-radius: 5px" title="<?php echo $receta->titulo ?>"
                                    src="<?php echo base_url() . $receta->foto ?>"/>
                            </a>
                            <header class="tituloreceta">
                                <h2><?php echo $receta->titulo ?></h2>
                            </header>
                        </figure>
                    </article>
                </div>
                <?php }
    else {
    ?>
        <div class="col-md-4 col-sm-6 col-xs-12">
            <article style="margin: 20px">
                <figure class="img-overlay borde">
                    <a id="<?php echo "linkreceta" . $receta->id ?>" href="#">
                        <img
                            id="<?php echo $receta->id ?>" class="img-responsive gris"
                            style="border-radius: 5px" title="<?php echo $receta->titulo ?>"
                            src="<?php echo base_url() . $receta->foto ?>"/>
                    </a>
                    <header class="tituloreceta">
                        <h2><?php echo $receta->titulo ?></h2>
                    </header>
                </figure>
            </article>
        </div>
        <?php
        }
     }
     }
    else {
    foreach ($recetas as $receta) {
        ?>
        <div class="col-md-4 col-sm-6 col-xs-12">
            <article style="margin: 20px">
                <figure class="img-overlay">
                    <a id="<?php echo "linkreceta" . $receta->id ?>" href="#"><img
                            id="<?php echo $receta->id ?>" class="img-responsive gris"
                            style="border-radius: 5px" title="<?php echo $receta->titulo ?>"
                            src="<?php echo base_url() . $receta->foto ?>">
                    </a>
                    <header class="tituloreceta">
                        <h2><?php echo $receta->titulo ?></h2>
                    </header>
                </figure>
            </article>
        </div>
        <?php }
    } ?>
        </div>
            </div>
        </div>
    </div>
</div>
<?php include "footer.php"?>
<script>
    var puntos = <?php echo $puntaje->puntos?>;
    var alimento="Compra tu receta";
    var desc="Rico y sano";
    /**
    funcion ajax, guarda la receta
     */
    function guardaReceta(ruta,valor){
        $.post(ruta,{valor:valor},function(resp){
            return resp;
        })
    }
    function guardaRecetaTemp(ruta,valor){
        $.post(ruta,{valor:valor},function(resp){
            return resp;
        })
    }
    /**
     * fin
     */
    function guardaPuntaje(ruta,valor){
        $.post(ruta,{valor:valor},function(resp){
            return resp;
        })
    }
    function compra(){
        var id = $(this).attr("id");
        bootbox.confirm({
            size: 'small',
            message: "Seguro quieres comprar?. Tus puntos actuales son: "+puntos,
            callback:function(result) {
                if (result) {
                    puntos = puntos - 50;
                    $("#puntaje").text(puntos);
                    $("#"+id).removeClass("gris");//quita color gris de la imagen
                    $("#"+id).off("click",compra);//quita evento compra
                    guardaReceta('<?php echo base_url()."aplicacion/guardaRecetaUsuario"?>',id);
                    guardaRecetaTemp('<?php echo base_url()."aplicacion/guardaRecetaTemp"?>',id);
                    guardaPuntaje('<?php echo base_url()."aplicacion/guardaPuntaje"?>',puntos);
                    $("#linkreceta"+id).attr("href",'<?php echo base_url()."aplicacion/tureceta"?>');//agrega link para ver receta
                }
                else {
                    //bootbox.alert("tus puntos: " + puntos);
                }
            }
        });
    }
    $(document).ready(function() {
        //clase gris pone imagen en gris...
        $(".gris").on({
        click:compra,
            mouseenter:function(){
                var texto=$(this).attr("title");
                $("#explica").text(texto);
            },
            mouseleave:function(){
                $("#explica").text(alimento);
                $("#descripcion").text(desc);
            }
        });
        //
        $(".receta").on({
            mouseenter:function(){
                var texto=$(this).attr("title");
                $("#explica").text(texto);
            },
            mouseleave:function(){
                $("#explica").text(alimento);
                $("#descripcion").text(desc);
            },
            click:function(){
                var id = $(this).attr("id");
                guardaRecetaTemp('<?php echo base_url()."aplicacion/guardaRecetaTemp"?>',id);
            }
        });
    });
</script>
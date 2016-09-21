<?php include "navs/nav_cuenta.php"?>
<div class="container-fluid" id="section2">
    <div class="container">
        <header class="titulo1">Eligue tu receta para comprar</header>
        <p id="puntaje">tu puntaje es : <?php echo $puntaje->puntos?></p>
        <div class="row">
            <div class="col-md-7">
                <div class="row">
                    <?php
                    //$recetaslimpio=$this->mis_funciones->limpiaCinco($recetas);
                    if($recetasUsuario!=null){
                        $recetasUsuarioLimpio=$this->mis_funciones->limpiaSeis($recetasUsuario);
                        foreach ($recetas as $receta){
                            if( in_array($receta->id,$recetasUsuarioLimpio)){?>
                                <div class="col-md-6">
                                    <a id="<?php echo "linkreceta".$receta->id?>" href="http://www.google.com"><img id="<?php echo $receta->id?>" class="img-responsive receta"  title="<?php echo $receta->titulo?>" src="<?php echo base_url().$receta->foto?>"></a>
                                </div>
                            <?php }
                            else{?>
                                <div class="col-md-6">
                                    <a id="<?php echo "linkreceta".$receta->id?>" href="#"><img id="<?php echo $receta->id?>" class="img-responsive gris"  src="<?php echo base_url().$receta->foto?>"></a>
                                </div>
                                <?php }?>
                        <?php }?>
                    <?php }else{
                        $i=0;
                        foreach ($recetas as $receta){?>
                            <div class="col-md-6">
                                <a id="<?php echo "linkreceta".$receta->id?>" href="#"><img id="<?php echo $receta->id?>" class="img-responsive gris"  src="<?php echo base_url().$receta->foto?>"></a>
                            </div>
                            <?php $i++;}?>
                    <?php }?>
                </div>
            </div>
            <div class="col-md-5">
                <div class="bubble verde">
                    <a  href="#section2">
                        <h2 id="explica">Compra tu receta</h2>
                        <h3 id="descripcion">Rico y sano</h3>
                    </a>
                </div>
                <img width="250" height="359" src="<?php echo base_url().'public/images/student6.png'?>" class="center-block">
            </div>
        </div>
    </div>
</div>
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
                    guardaPuntaje('<?php echo base_url()."aplicacion/guardaPuntaje"?>',puntos);
                    $("#linkreceta"+id).attr("href","http://www.google.com");//agrega link para ver receta
                }
                else {
                    //bootbox.alert("tus puntos: " + puntos);
                }
            }
        });
    }
    $(document).ready(function() {
        $(".gris").on({
        click:compra
        });
        $(".receta").on({
            mouseenter:function(){
                var texto=$(this).attr("title");
                $("#explica").text(texto);
            },
            mouseleave:function(){
                $("#explica").text(alimento);
                $("#descripcion").text(desc);
            }
        });
    });
</script>
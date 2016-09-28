<?php include "navs/nav_cuenta.php";?>
<div class="container-fluid bg-im3">
    <div class="container">
        <div class="row">
            <div class="col-md-5">
                <img width="350px" height="350px" src="<?php echo base_url().$recetafull->foto?>" class="img-responsive center-block" style="margin-top: 100px;border-radius: 5px">
            </div>
            <div class="col-md-7 cuadradosombra">
                <header class="titulo1" id="tituloreceta"></header>
                <article>
                    <header class="texto-modal">Descripcion</header>
                    <p id="descripcion"></p>
                </article>
                <article>
                    <header class="texto-modal">Ingredientes</header>
                        <p id="ingrediente"></p>
                </article>
                <article>
                    <header class="texto-modal">Preparación</header>
                    <p id="preparacion"></p>
                </article>
            </div>
        </div>
    </div>
</div>
<?php include "footer.php"?>
<script>
    $(document).ready(function() {
        var titulo =<?php echo json_encode($recetafull->titulo)?>;
        var ingredientes =<?php echo json_encode($recetafull->ingredientes,JSON_HEX_TAG)?>;
        var descripcion =<?php echo json_encode($recetafull->descripcion,JSON_HEX_TAG)?>;
        var preparacion =<?php echo json_encode($recetafull->preparacion,JSON_HEX_TAG)?>;
        $("#tituloreceta").text(titulo);
        $("#ingrediente").html(ingredientes);
        $("#descripcion").text(descripcion);
        $("#preparacion").text(preparacion);
    });
</script>

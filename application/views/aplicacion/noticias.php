<?php include "navs/nav_noticia.php" ?>
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
<section class="container-fluid padingtop bg-im3" id="tipsaludable">
    <div class="container">
        <header class="titulo1">Super Noticias</header>
        <div class="row">
            <div class="col-md-8">
                <div class="instruccion-naranjo">
                    <h4 id="titulo-tip" class="modal-title titulo-modal-tip">Intrucciones</h4>
                    <ol class="texto-modal-tip" id="descripcion-tip">
                        <li>Haz click en la noticia que te interese</li>
                        <li>Leela e informate</li>
                        <li>Comparte lo aprendido con tus amigos</li>
                    </ol>
                </div>
                <div style="float: left;margin-left: 50px;clear: left">
                    <div class="triangulo-naranjo"></div>
                </div>
                <img class="img-circle pull-left icon-inst"  style="margin-top: 15px" src="<?php echo base_url().'public/images/modal/student3.png'?>">
            </div>
        </div>
        <br>
        <br>
        <div class="row">
            <div class="col-md-12">
                <?php
                $i=0;
                $colores=array("verde","rosado","celeste","naranjo","rojo");
                foreach ($noticias as $noticia){
                    ?>
                    <div class="col-md-4 col-xs-12 col-sm-6">
                        <div class="tip-<?php echo $colores[$i]?> zoom borde noticia alturanoticia" title="<?php echo $noticia->titulo?>" data-toggle="modal" data-target="#modaltip">
                            <h3 class="titulo-tip text-center">
                                        <?php echo $noticia->titulo?>
                            </h3>
                            <img class="img-circle center-block" width="90px" height="90px" src="<?php echo base_url().$noticia->foto?>">
                        </div>
                    </div>
                    <?php $i++;
                    if($i==5){$i=0;}}?>
            </div>
        </div>
    </div>
</section>
<?php include "footer.php"?>
<script>
    $(document).ready(function() {
        var noticias=<?php echo json_encode($noticias,JSON_PRETTY_PRINT)?>;//arreglo con todos las noticias
        $(".noticia").on({
            click: function () {
                var titulo = $(this).attr("title");
                var i;
                for (i = 0; i < noticias.length; i++) {
                    if (noticias[i].titulo == titulo) {
                        $("#descripcion-tip").html(noticias[i].descripcion);
                        $("#titulo-tip").text(titulo);
                    }
                }
            }
        });
    });
</script>

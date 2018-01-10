<?php include "navs/nav_noticia.php" ?>
<!-- Modal -->
<div class="modal animated rubberBand" id="modaltip" role="dialog">
    <div class="modal-dialog modal-lg">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-body" style="background-color: #673AB7">
                <div class="tip-modal">
                    <div class="margen-modal">
                        <h4 id="titulo-tip" class="modal-title titulo-modal-tip">Modal Header</h4>
                        <div class="row">
                            <div class="col-md-9">
                                <p class="texto-modal-tip" id="descripcion-tip"></p>
                            </div>
                            <div class="col-md-3">
                                <figure>
                                    <img alt="imagen" id="fotonoticia" src="#" class="img-responsive center-block">
                                </figure>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="triangulo"></div>
                <br>
                <figure>
                    <img class="img-circle" style="width:20%" src="<?php echo base_url().'public/images/modal/student5.png'?>">
                </figure>
                <button type="button" class="btn btn-danger" style="position:absolute;bottom:10px;right:10px;margin:0;padding:10px 10px;font-family: 'finger paint'" data-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>
<section class="container-fluid padingtop bg-im3 animated fadeIn" id="tipsaludable">
    <div class="container">
        <header data-aos="flip-up" class="titulo1 animated tada">Super Noticias</header>
        <div class="row">
            <div class="col-md-8">
                <div data-aos="zoom-in" class="instruefecto">
                    <div class="instruccion-naranjo">
                        <h4 id="titulo-tip" class="modal-title titulo-modal-tip">Instrucciones</h4>
                        <ol class="texto-modal-tip" id="descripcion-tip">
                            <li>Haz click en la noticia que te interese</li>
                            <li>Infórmate</li>
                            <li>Comparte lo aprendido con tus amigos</li>
                        </ol>
                    </div>
                    <div style="float: left;margin-left: 50px;clear: left">
                        <div class="triangulo-naranjo"></div>
                    </div>
                </div>
                <figure data-aos="zoom-out">
                    <img alt="estudiante5" class="img-circle pull-left icon-inst"  style="margin-top: 15px" src="<?php echo base_url().'public/images/modal/student5.png'?>">
                </figure>
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
                    <div data-aos="zoom-in" class="col-md-4 col-xs-12 col-sm-6">
                        <div class="tip-<?php echo $colores[$i]?> zoom borde animated infinite pulse noticia alturanoticia" title="<?php echo $noticia->titulo?>" data-toggle="modal" data-target="#modaltip">
                            <h3 class="titulo-tip text-center">
                                        <?php echo $noticia->titulo?>
                            </h3>
                            <figure>
                                <img alt="<?php echo $noticia->titulo?>" class="img-circle center-block" width="90" height="90" src="<?php echo base_url().$noticia->foto?>">
                            </figure>
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
        AOS.init({
            easing: 'ease-in-out-sine'
        });
        var noticias=<?php echo json_encode($noticias,JSON_PRETTY_PRINT)?>;//arreglo con todos las noticias
        $(".noticia").on({
            click: function () {
                var titulo = $(this).attr("title");
                var link="<?php echo base_url()?>";
                var i;
                for (i = 0; i < noticias.length; i++) {
                    if (noticias[i].titulo == titulo) {
                        $("#descripcion-tip").html(noticias[i].descripcion);
                        $("#titulo-tip").text(titulo);
                        $("#fotonoticia").attr("src",link+noticias[i].foto);
                    }
                }
            }
        });
        $(".icon-inst").on({
            mouseenter: function(){
                $(this).addClass("animated jello");
            },
            mouseleave:function(){
                $(this).removeClass("animated jello");
            }
        });
        $(".instruefecto").on({
            mouseenter: function(){
                $(this).addClass("animated bounce");
            },
            mouseleave:function(){
                $(this).removeClass("animated bounce");
            }
        });
        $(".efecto").on({
            mouseenter: function(){
                $(this).addClass("animated jello");
            },
            mouseleave:function() {
                $(this).removeClass("animated jello");
            }
        });
    });
</script>

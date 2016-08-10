<?php include "navs/nav_cuenta.php"?>
<div class="container-fluid bg-im3"style="padding-bottom: 100px">
    <div class="container">
        <h1 class="titulo1">Aqui podras compartir tus actividades con la comunidad.</h1>
        <div class="row">
            <h3 class="text-center">Sube tu foto aquí</h3>
           <a href="#"><img style="width: 64px;height: 64px" class="center-block zoom" data-toggle="collapse" data-target="#subirfoto" src="<?php echo base_url()."public/images/upload.png"?>"></a>
            <div class="col-md-6 col-md-offset-3 cuadradosombra collapse" id="subirfoto">
        <?php $atributos=array('role'=>'form','class'=>'form-group','id'=>'mifoto','name'=>'form');
        echo form_open_multipart(null,$atributos);//utilizar siempre null, recomendado
        ?>
            <label class="control-label tituloform center-block">Elige tu foto</label><input type="file" class="" name="archivo" id="file">
            <label class="control-label tituloform center-block"> Descripción: </label><textarea class="form-control" rows="4" cols="50" name="descripcion"></textarea>
            <button name="boton" id="boton" type="submit" class="btn  btn-cf-submit titulo4 center-block zoom botonfoto">Sube tu foto !</button>
        <?php
        echo form_close();
        ?>
            </div>
        </div>
        <!-- Modal -->
        <div class="modal fade" id="myModal" role="dialog">
            <div class="modal-dialog">
                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 id="modal-title" class="modal-title titulo1"></h4>
                    </div>
                    <div class="modal-body">
                        <img style="height:100%;width:100%" id="modalimg" class="center-block" src="">
                    </div>
                </div>
            </div>
        </div>
        <div class="row albums-holder">
            <?php
            foreach($fotos as $foto){
                ?>
                <div class="col-md-4 gallery">
                    <figure class="img-overlay gal-img">
                    <a href="" data-toggle="modal" data-target="#myModal">
                    <img style="width: auto;height: auto" src="<?php echo base_url().$foto->link?>" class="img-responsive">
                    </a>
                    </figure>
                    <div class="cuadradosombra">
                        <h5 class="tituloform"><?php echo $foto->descripcion?></h5>
                        <p>Por: <b><?php echo $foto->dueño?></b></p>
                    </div>
                </div>
                <?php
            }
            ?>
        </div>
    </div>
</div>
<?php include "footer.php"?>
<script>
    $(document).ready(function(){
        $(".img-responsive").on({
            click:function() {
                var titulo = $(this).attr("title");
                var link = $(this).attr("src");
                //$("#modal-title").text(titulo);
                $("#modalimg").attr("src", link);
            }
        })
    });
</script>
<?php include "navs/nav_cuenta.php"?>
<div class="container-fluid bg-im3">
    <div class="container">
        <h2 class="titulo1">Comparte tus actividades</h2>
        <div class="row">
            <!--<a href="#"><img style="width: 64px;height: 64px" class="center-block zoom" data-toggle="collapse" data-target="#subirfoto" src="<?php echo base_url()."public/images/upload.png"?>"></a>
            --><div class="col-md-4 col-md-offset-4" id="subirfoto">
                    <button type="button" class="btn btn-info center-block" data-toggle="modal" data-target="#modal2">Sube tu foto aqui</button>
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
                        <h5 class="titulopiegaleria text-center" id="modal-descripcion"></h5>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal -->
        <div class="modal fade" id="modal2" role="dialog">
            <div class="modal-dialog">
                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 id="modal-title" class="modal-title titulo1">Sube tu foto</h4>
                    </div>
                    <div class="modal-body text-center">
                        <?php $atributos=array('role'=>'form','class'=>'form-group','id'=>'mifoto','name'=>'form');
                        echo form_open_multipart(null,$atributos);//utilizar siempre null, recomendado
                        ?>
                        <span class="help-block">Selecciona tu imagen</span>
                        <input class="center-block" type="file" name="archivo"  required>
                        <label class="errorform"><?php echo form_error('archivo'); ?></label>
                        <label class="control-label tituloform center-block"> Descripción: </label><textarea class="form-control" rows="4" cols="50" name="descripcion" required></textarea>
                        <label class="errorform"><?php echo form_error('descripcion'); ?></label>
                        <button name="boton" id="boton" type="submit" class="btn  btn-cf-submit titulo4 center-block zoom botonfoto">Guardar</button>
                        <?php
                        echo form_close();
                        ?>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-md-12">
                <?php
                foreach($fotos as $foto){?>
                    <div class="col-md-3 col-xs-6 col-sm-4 gallery altura">
                        <figure class="img-overlay cuadradosombra">
                            <a href="" data-toggle="modal" data-target="#myModal">
                                <img style="width: 100%;height: 100%" src="<?php echo base_url().$foto->link?>" class="img-responsive" id="<?php echo $foto->id?>">
                            </a>
                        </figure>
                        <div class="cuadradosombra">
                            <p>Por: <b><?php echo $foto->dueño?></b></p>
                        </div>
                    </div>
                <?php }?>
            </div>
        </div>
    </div>
</div>
<?php include "footer.php"?>
<script>
    $(document).ready(function() {
        var fotos=<?php echo json_encode($fotos,JSON_PRETTY_PRINT)?>;
        $(".img-responsive").on({
            click: function () {
                var id = $(this).attr("id");
                var link = $(this).attr("src");
                var i;
                for(i=0;i<fotos.length;i++){
                    if(fotos[i].id == id){
                        $("#modalimg").attr("src", link);
                        $("#modal-descripcion").text(fotos[i].descripcion);
                    }
                }
            }
        });
    })
</script>
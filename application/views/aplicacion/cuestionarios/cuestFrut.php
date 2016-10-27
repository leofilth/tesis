<div class="col-md-6" style="margin-left: 50px">
    <div class="instruccion-naranjo">
        <h4 id="titulo-tip" class="modal-title titulo-modal-tip">Intrucciones</h4>
        <ol class="texto-modal-tip" id="descripcion-tip">
            <li>Responde cada pregunta</li>
            <li>Revisa bien tu respuesta</li>
            <li>cuando estes listo revisa tus resultados</li>
        </ol>
    </div>
    <div style="float: left;margin-left: 50px;clear: left">
        <div class="triangulo-naranjo"></div>
    </div>
    <img class="img-circle pull-left" width="20%" style="margin-top: 15px" src="<?php echo base_url().'public/images/modal/student3.png'?>">
</div>
<div class="row">
    <div class="col-md-6 col-md-offset-3">
        <?php
        //para hacer name con nombre unico usando el id de la bd
        $num=1;
        foreach($preguntasFruta as $pregunta){
            ?>
            <li style="list-style: none"><p class="preg-cuest"><?php echo $num.".- ".$pregunta->pregunta?></p><p id="correcto<?php echo $num?>"></p>
                <ul style="list-style: none">
                    <li>
                        <div class="radio">
                            <label class="preg-cuest"><input name=<?php echo $pregunta->idpregunta.$num?> value="<?php echo $pregunta->respuesta1?>" type="radio"> <?php echo $pregunta->respuesta1?></label>
                        </div>
                    </li>
                    <li>
                        <div class="radio">
                            <label class="preg-cuest"><input name=<?php echo $pregunta->idpregunta.$num?> value="<?php echo $pregunta->respuesta2?>" type="radio"> <?php echo $pregunta->respuesta2?></label>
                        </div>
                    </li>
                    <li>
                        <div class="radio">
                            <label class="preg-cuest"><input name=<?php echo $pregunta->idpregunta.$num?> value="<?php echo $pregunta->respuesta3?>" type="radio"> <?php echo $pregunta->respuesta3?></label>
                        </div>
                    </li>
                </ul>
            </li>
            <?php
            $num++;
        }?>
        <p class="titulo3">Puntaje: <span id="puntaje"></span></p>
        <div class="row">
            <div class="col-md-12">
                <button  name="boton" id="verificacuestionario" class="btn  btn-info titulo4 center-block zoom">
                    Enviar Respuestas
                </button>
                <div class="col-md-12" id="guardar">
                </div>
            </div>
        </div>
    </div>
</div>
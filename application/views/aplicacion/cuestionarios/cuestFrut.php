<p id="noguardado">Puntaje no guardado</p>
<div class="row">
    <div class="col-md-6 col-md-offset-3">
        <?php
        //para hacer name con nombre unico usando el id de la bd
        $num=1;
        foreach($preguntasFruta as $pregunta){
            ?>
            <li><?php echo $pregunta->pregunta?><p id="correcto<?php echo $num?>"></p>
                <ul>
                    <li>
                        <div class="radio">
                            <label><input name=<?php echo $pregunta->idpregunta.$num?> value="<?php echo $pregunta->respuesta1?>" type="radio"> <?php echo $pregunta->respuesta1?></label>
                        </div>
                    </li>
                    <li>
                        <div class="radio">
                            <label><input name=<?php echo $pregunta->idpregunta.$num?> value="<?php echo $pregunta->respuesta2?>" type="radio"> <?php echo $pregunta->respuesta2?></label>
                        </div>
                    </li>
                    <li>
                        <div class="radio">
                            <label><input name=<?php echo $pregunta->idpregunta.$num?> value="<?php echo $pregunta->respuesta3?>" type="radio"> <?php echo $pregunta->respuesta3?></label>
                        </div>
                    </li>
                </ul>
            </li>
            <?php
            $num++;
        }?>
        <p>Puntaje:<span id="puntaje"></span></p>
        <div class="row">
            <div class="col-md-6">
                <div class="row">
                    <div class="col-md-6">
                        <button  name="boton" id="verificacuestionario" class="btn  btn-cf-submit titulo4 center-block zoom">
                            <span class="glyphicon glyphicon-log-in"></span>  Enviar Respuestas
                        </button>
                    </div>
                    <div class="col-md-6" id="guardar">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
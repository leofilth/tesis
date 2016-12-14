<div class="container">
    <div class="col-md-8 col-xs-12 col-sm-12">
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
        <img class="img-circle pull-left icon-inst" style="margin-top: 15px" src="<?php echo base_url().'public/images/modal/student2.png'?>">
    </div>
</div>
<div class="container cuadradosombracuest">
    <?php
    //para hacer name con nombre unico usando el id de la bd
    $num=1;
    foreach($preguntasDeporte as $pregunta){
        ?>
        <div class="row" style="margin-bottom: 15px">
            <div class="col-md-6 col-md-offset-1">
                <li style="list-style: none"><p class="preg-cuest"><?php echo "<span class='numerocuest'>".$num."</span>".".- ".$pregunta->pregunta?></p>
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
                <div id="monedas<?php echo $num?>"></div>
            </div>
            <div id="muestrarespuesta<?php echo $num?>" class="col-md-4 hidden">
                <div class="instruccion-morado">
                    <h4 id="correcto<?php echo $num?>" class="modal-title titulo-modal-tip">
                        esperando...
                    </h4>
                    <p id="feedback<?php echo $num?>"></p>
                </div>
                <div style="float: left;margin-left: 50px;clear: left">
                    <div class="triangulo-morado"></div>
                </div>
                <img class="img-circle pull-left" width="20%" style="margin-top: 15px" src="<?php echo base_url().'public/images/modal/student2.png'?>">
            </div>
        </div>
        <?php
        $num++;
    }?>
    <div class="container">
        <div class="titulo1">
            Puntaje: <span id="puntaje"></span>
            <img class="fondocoins" src="<?php echo base_url()."public/images/icons/coins.png"; ?>">
        </div>
        <br>
        <br>
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
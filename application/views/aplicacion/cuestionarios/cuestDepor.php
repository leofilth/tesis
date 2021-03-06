<div class="container">
    <div class="col-md-8 col-xs-12 col-sm-12">
        <div class="animated bounce">
            <div class="instruccion-naranjo">
                <h4  class="modal-title titulo-modal-tip">Instrucciones</h4>
                <ol class="texto-modal-tip">
                    <li>Responde cada pregunta</li>
                    <li>Revisa bien tu respuesta</li>
                    <li>Cuando estes listo revisa tus resultados</li>
                </ol>
            </div>
            <div style="float: left;margin-left: 50px;clear: left">
                <div class="triangulo-naranjo"></div>
            </div>
        </div>
        <figure>
            <img alt="estudiante2" class="img-circle pull-left icon-inst" style="margin-top: 15px" src="<?php echo base_url().'public/images/modal/student2.png'?>">
        </figure>
    </div>
</div>
<br>
<br>
<div class="container cuadradosombracuest">
    <?php
    //para hacer name con nombre unico usando el id de la bd
    $num=1;
    foreach($preguntasDeporte as $pregunta){
        ?>
        <div class="row" style="margin-bottom: 15px">
            <div class="col-md-6 col-md-offset-1">
                <p class="preg-cuest"><?php echo "<span class='numerocuest'>".$num."</span>".".- ".$pregunta->pregunta?></p>
                    <ul style="list-style: none">
                        <li>
                            <div class="radio">
                                <label class="preg-cuest"><input class="inputcuest" name=<?php echo $pregunta->idpregunta.$num?> value="<?php echo $pregunta->respuesta1?>" type="radio"> <?php echo $pregunta->respuesta1?></label>
                            </div>
                        </li>
                        <li>
                            <div class="radio">
                                <label class="preg-cuest"><input class="inputcuest" name=<?php echo $pregunta->idpregunta.$num?> value="<?php echo $pregunta->respuesta2?>" type="radio"> <?php echo $pregunta->respuesta2?></label>
                            </div>
                        </li>
                        <li>
                            <div class="radio">
                                <label class="preg-cuest"><input class="inputcuest" name=<?php echo $pregunta->idpregunta.$num?> value="<?php echo $pregunta->respuesta3?>" type="radio"> <?php echo $pregunta->respuesta3?></label>
                            </div>
                        </li>
                    </ul>
                <div id="monedas<?php echo $num?>"></div>
            </div>
            <div class="col-md-4">
                <div id="muestrarespuesta<?php echo $num?>" class="animated infinite pulse infocuest">
                    <div id="instruccion<?php echo $num?>" class="instruccion-morado">
                        <h4 id="correcto<?php echo $num?>" class="modal-title titulo-modal-tip">
                            Elige una opción
                        </h4>
                        <p id="feedback<?php echo $num?>" class="feedback"></p>
                    </div>
                    <div style="float: left;margin-left: 50px;clear: left">
                        <div id="flecha<?php echo $num?>" class="triangulo-morado"></div>
                    </div>
                </div>
                <figure>
                    <img alt="estudiante2" class="img-circle pull-left" style="width:20%;margin-top: 15px" src="<?php echo base_url().'public/images/modal/student2.png'?>">
                </figure>
            </div>
        </div>
        <?php
        $num++;
    }?>
    <div class="container">
        <div class="titulo1 hidden" id="puntajeCuest">
            Puntaje
            <figure>
                <span id="puntaje"></span> <img alt="monedas" class="fondocoins" src="<?php echo base_url()."public/images/icons/coins.png"; ?>">
            </figure>
        </div>
        <br>
        <br>
        <div class="row">
            <div class="col-md-12">
                <button  name="boton" id="verificacuestionario" class="btn  btn-cuest titulo4 center-block zoom">
                    Revisar Respuestas
                </button>
                <div class="col-md-6 col-md-offset-3" id="guardar">
                </div>
            </div>
        </div>
    </div>
</div>
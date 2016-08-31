<?php include "navs/nav_cuenta.php"?>
<div class="container-fluid bg-im3">
    <div class="container">
        <header class="titulo4 text-center">Bienvenido a Cuestionarios</header>
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <?php
                //para hacer name con nombre unico usando el id de la bd
                $num=1;
                foreach($preguntasVerdura as $pregunta){
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
                <button  name="boton" id="verificacuestionario" class="btn  btn-cf-submit titulo4 center-block zoom">
                    <span class="glyphicon glyphicon-log-in"></span>  Enviar Respuestas
                </button>
            </div>
        </div>
    </div>
</div>
<?php include "footer.php"?>
<script>
    /**
     * $('input[name=Choose]').attr('checked',false); //limpia el input
     */
    var texto="<?php echo $preguntasVerdura[0]->idpregunta?>";
    var preguntas=<?php echo json_encode($preguntasVerdura,JSON_PRETTY_PRINT)?>;//arreglo de preguntas desde base de datos
    $("#verificacuestionario").on({
        click:function(){
            var i;
            var j=0;
            var puntaje=0;//valor sera obtenido desde base de datos
            var cuestionario=preguntas[0].idpregunta;//obtengo el id del cuestionario seleccionado.
            for(i=1;i<preguntas.length+1;i++){
                //var aux='"'+(cuestionario+i).toString()+'"';
                var aux=cuestionario+i;
                /*Comprueba que se selecciona un input
                 * */
                if($('input:radio[name='+aux+']').is(':checked')) {
                    if($('input:radio[name='+aux+']:checked').val()==preguntas[j].respcorrecta){
                        //console.log(aux);
                        j++;
                        puntaje=puntaje+100;
                        $("#correcto"+i).text("correcto");
                        /*Posible feeedback al usuario, en la respuesta*/
                    }
                    else{
                        $("#correcto"+i).text("incorrecto");
                    }
                } else {
                    //alert("No está activado");
                    $("#correcto"+i).text("Seleccione una opción");
                }
            }
            $("#puntaje").text(puntaje);
            $('"#'+cuestionario+'"').removeClass("hidden");
        }
        /*
        agregar boton guardar o voler para guardar el puntaje y el cuestionario respondido
        actualizar en bd el cuestinoario respondido
        al voler a verduras marcar el cuestionario respondido , quitar link (u otra variante)
         */
    })
</script>

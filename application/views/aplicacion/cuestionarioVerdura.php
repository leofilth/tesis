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
<button  name="boton" id="verificacuestionario" class="btn  btn-cf-submit titulo4 center-block zoom">
    <span class="glyphicon glyphicon-log-in"></span>  Enviar Respuestas
</button>
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
                var cuestionario=preguntas[0].idpregunta;//obtengo el id del cuestionario seleccionado.
                for(i=1;i<preguntas.length+1;i++){
                    //var aux='"'+(cuestionario+i).toString()+'"';
                    var aux=cuestionario+i;
                    if($('input:radio[name='+aux+']:checked').val()==preguntas[j].respcorrecta){
                       //console.log(aux);
                        j++;
                        $("#correcto"+i).text("correcto");
                        /*Posible feeedback al usuario, en la respuesta*/
                    }
                    else{
                        $("#correcto"+i).text("incorrecto");
                    }
                }
            }
        })
</script>

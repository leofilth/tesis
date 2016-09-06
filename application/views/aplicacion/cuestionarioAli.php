<?php include "navs/nav_cuenta.php"?>
<div class="container-fluid bg-im3">
    <div class="container">
        <header class="titulo4 text-center">Bienvenido a Cuestionarios</header>
        <?php
        if($cuestRespondidos!=null){
        $cuestResp=$this->mis_funciones->limpiaCuatro($cuestRespondidos);
        if(in_array($cuestionario,$cuestResp)){?>
            <div class="row">
                <div class="col-md-6 col-md-offset-3">
                    <p>ya respondido</p>
                    <a id='volver' class='btn  btn-cf-submit titulo4 center-block zoom' href='<?php echo base_url().'aplicacion/verduras'?>'>Volver</a>
                </div>
            </div>
            <?php }}
        else {?>
        <p id="noguardado">Puntaje no guardado</p>
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <?php
                //para hacer name con nombre unico usando el id de la bd
                $num=1;
                foreach($preguntasAlimento as $pregunta){
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
                                <button  name="boton" id="guardarPuntos" class=" hidden btn  btn-cf-submit titulo4 center-block zoom">
                                    <span class="glyphicon glyphicon-log-in"></span>  Guardar mi puntaje
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php }?>
    </div>
</div>
<?php include "footer.php"?>
<script>
    /**
     * $('input[name=Choose]').attr('checked',false); //limpia el input
     */
    function guardaCuestionario(ruta,valor1){
        $.post(ruta,{valor1:valor1},function(resp)
        {
            return resp;
        });
    }
    function guardaPuntaje(ruta,valor){
        $.post(ruta,{valor:valor},function(resp){
            return resp;
        })
    }
    function guardaPuntajeLider(ruta,valor){
        $.post(ruta,{valor:valor},function(resp){
            return resp;
        })
    }
    var texto="<?php echo $preguntasAlimento[0]->idpregunta?>";
    var preguntas=<?php echo json_encode($preguntasAlimento,JSON_PRETTY_PRINT)?>;//arreglo de preguntas desde base de datos
    var puntosBD=<?php echo $puntaje->puntos?>;//puntos que posee el usuario
    var puntaje=0;//puntaje para este cuestionario
    var puntajeLider=<?php echo $puntajeLider->puntaje?>;//puntaje total guardado en BD,para ranking lideres
    $("#verificacuestionario").on({
        click:function(){
            var i;
            var j=0;
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
            //$('"#'+cuestionario+'"').removeClass("hidden");
            var cuestionario="<?php echo $cuestionario?>";
            guardaCuestionario('<?php echo base_url()."aplicacion/guardaCuestAli"?>',cuestionario);
            $("#guardar").append("<a id='volver' class='btn  hidden btn-cf-submit titulo4 center-block zoom' href='<?php echo base_url().'aplicacion/alimentos'?>'>Volver</a>");
            $("#verificacuestionario").addClass("hidden");
            var temp1=puntaje+puntosBD;
            var temp2=puntaje+puntajeLider;
            guardaPuntaje('<?php echo base_url()."aplicacion/guardaPuntaje"?>',temp1);
            guardaPuntajeLider('<?php echo base_url()."aplicacion/guardaPuntajeLider"?>',temp2);
            $("#noguardado").text("Puntaje Guardado!");
            temp1=0;
            temp2=0;
            //$("#guardarPuntos").addClass("hidden");
            $("#volver").removeClass("hidden");
            //$("#guardarPuntos").removeClass("hidden");
        }
    });

    /*$("#guardarPuntos").on({
        click: function () {
            var temp1=puntaje+puntosBD;
            var temp2=puntaje+puntajeLider;
            guardaPuntaje('<?php echo base_url()."aplicacion/guardaPuntaje"?>',temp1);
            guardaPuntajeLider('<?php echo base_url()."aplicacion/guardaPuntajeLider"?>',temp2);
            $("#noguardado").text("Puntaje Guardado!");
            temp1=0;
            temp2=0;
            $("#guardarPuntos").addClass("hidden");
            $("#volver").removeClass("hidden");
    }
    });*/
</script>

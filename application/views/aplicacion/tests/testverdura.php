<?php
$i=1;
$aux=$this->mis_funciones->limpia($cuestionarios);//aux contiene los cuestionarios: cuestionario1 cuestionario2 ... sin repetir
if($cuestRespondidos!=null) {
    $cuestResp = $this->mis_funciones->limpiaDos($cuestRespondidos);
    foreach ($aux as $cuestionario) {?>
        <?php if (in_array($cuestionario, $cuestResp)) { ?>
            <div class="col-md-6">
                <h3 class="titulo4 text-center">Desafío <?php echo $i ?></h3>
                <?php $numero = intval(preg_replace('/[^0-9]+/', '', $cuestionario), 10); ?><!--obtiene solo el o los numeros de la cadena-->

                    <figure>
                        <img
                            class="cuestionario center-block img-circle borde zoom tamano-cuest"
                            id="<?php echo $cuestionario ?>"
                            name="<?php echo $cuestionario ?>"
                            alt="<?php echo $cuestionario ?>"
                            src="<?php echo base_url() . "public/images/icons/test/testHecho.png" ?>"/>
                    </figure>

            </div>
        <?php }
        else { ?>
            <div class="col-md-6">
                <h3 class="titulo4 text-center">Desafío <?php echo $i ?></h3>
                <?php $numero = intval(preg_replace('/[^0-9]+/', '', $cuestionario), 10); ?><!--obtiene solo el o los numeros de la cadena-->
                <a href="<?php echo base_url() . "aplicacion/cuestionarioverd/".$numero?>">
                    <figure>
                        <img
                            class="cuestionario center-block zoom img-circle borde cuest tamano-cuest"
                            id="<?php echo $cuestionario ?>" name="<?php echo $cuestionario ?>"
                            alt="<?php echo $cuestionario ?>"
                            src="<?php echo base_url() . "public/images/icons/test/test.png" ?>"/>
                    </figure>
                </a>
            </div>
        <?php } ?>
        <?php
        $i++;
    }
}
else{?>
    <?php foreach($aux as $cuestionario) {?>
        <div class="col-md-6">
            <h3 class="titulo4 text-center">Desafío <?php echo $i ?></h3>
            <?php $numero = intval(preg_replace('/[^0-9]+/', '', $cuestionario), 10); ?><!--obtiene solo el o los numeros de la cadena-->
            <a href="<?php echo base_url() . "aplicacion/cuestionarioverd/".$numero?>">
                <figure>
                    <img
                        class="cuestionario center-block zoom img-circle borde cuest tamano-cuest"
                        id="<?php echo $cuestionario ?>" name="<?php echo $cuestionario ?>"
                        alt="<?php echo $cuestionario ?>"
                        src="<?php echo base_url() . "public/images/icons/test/test.png" ?>"/>
                </figure>
            </a>
        </div>
        <?php
        $i++;
    }?>
<?php }?>
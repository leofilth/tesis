<?php
$i=1;
$cuestionarioDisponible=$this->mis_funciones->limpiaCuestDisponibleDeporte($cuestionarioDisp);
if($cuestRespondidos!=null) {
    $limpio = $this->mis_funciones->limpiaSiete($cuestRespondidos);
    foreach ($cuestionarios as $cuestionario) {?>
        <?php if (in_array($cuestionario->idpregunta, $limpio)) { ?>
            <div class="col-md-3 col-sm-3 col-xs-4">
                <h3 class="titulo4 text-center"><?php echo $cuestionario->titulo_fk ?></h3>
                <?php //$numero = intval(preg_replace('/[^0-9]+/', '', $cuestionario), 10); ?><!--obtiene solo el o los numeros de la cadena-->
                    <figure>
                        <img
                            class="cuestionario center-block img-circle borde zoom tamano-cuest"
                            id="<?php echo $cuestionario->idpregunta ?>"
                            name="<?php echo $cuestionario->idpregunta ?>"
                            alt="<?php echo $cuestionario->idpregunta ?>"
                            src="<?php echo base_url() . "public/images/icons/test/testHecho.png" ?>"/>
                    </figure>

            </div>
        <?php }
        else {//gris sin link y disponibles
            if(in_array($cuestionario->idpregunta, $cuestionarioDisponible)){?>
                <div class="col-md-3 col-sm-3 col-xs-4">
                    <h3 class="titulo4 text-center"><?php echo $cuestionario->titulo_fk ?></h3>
                    <a href='<?php echo base_url()."aplicacion/cuestionariodep/".$cuestionario->idpregunta?>'
                        <figure>
                            <img
                                class="cuestionario center-block img-circle borde zoom cuest  tamano-cuest"
                                id="<?php echo $cuestionario->idpregunta ?>" name="<?php echo $cuestionario->idpregunta ?>"
                                alt="<?php echo $cuestionario->idpregunta ?>"
                                src="<?php echo base_url() . "public/images/icons/test/test.png" ?>"/>
                        </figure>
                    </a>
                </div>
                <?php }else{?>
                <div class="col-md-3 col-sm-3 col-xs-4">
                    <h3 class="titulo4 text-center"><?php echo $cuestionario->titulo_fk ?></h3>
                    <a id="<?php echo "link".$cuestionario->idpregunta ?>" href="#section2">
                        <figure>
                            <img
                                class="cuestionario center-block img-circle borde zoom cuest cuest-gris tamano-cuest"
                                id="<?php echo $cuestionario->idpregunta ?>" name="<?php echo $cuestionario->idpregunta ?>"
                                alt="<?php echo $cuestionario->idpregunta ?>"
                                src="<?php echo base_url() . "public/images/icons/test/test.png" ?>"/>
                        </figure>
                    </a>
                </div>
                <?php }?>
        <?php } ?>
        <?php
        $i++;
    }
}
else{//ningun cuestionario respondido?>
    <?php foreach($cuestionarios as $cuestionario) {
        if(in_array($cuestionario->idpregunta, $cuestionarioDisponible)){?>
        <div class="col-md-3 col-sm-3 col-xs-4">
            <h3 class="titulo4 text-center"><?php echo $cuestionario->titulo_fk ?></h3>
            <a href='<?php echo base_url()."aplicacion/cuestionariodep/".$cuestionario->idpregunta?>'
            <figure>
                <img
                    class="cuestionario center-block img-circle borde zoom cuest  tamano-cuest"
                    id="<?php echo $cuestionario->idpregunta ?>" name="<?php echo $cuestionario->idpregunta ?>"
                    alt="<?php echo $cuestionario->idpregunta ?>"
                    src="<?php echo base_url() . "public/images/icons/test/test.png" ?>"/>
            </figure>
            </a>
        </div>
    <?php }else{?>
        <div class="col-md-3 col-sm-3 col-xs-4">
            <h3 class="titulo4 text-center"><?php echo $cuestionario->titulo_fk ?></h3>
            <a id="<?php echo "link".$cuestionario->idpregunta ?>" href="#section2">
                <figure>
                    <img
                        class="cuestionario center-block img-circle borde zoom cuest cuest-gris tamano-cuest"
                        id="<?php echo $cuestionario->idpregunta ?>" name="<?php echo $cuestionario->idpregunta ?>"
                        alt="<?php echo $cuestionario->idpregunta ?>"
                        src="<?php echo base_url() . "public/images/icons/test/test.png" ?>"/>
                </figure>
            </a>
        </div>
    <?php }?>
        <?php $i++;
    }?>
<?php }?>
<?php
$i=1;
if($cuestionarioDisp!=null){
    $cuestionarioDisponible=$this->mis_funciones->limpiaCuestDisponibleDeporte($cuestionarioDisp);
}
if($cuestRespondidos!=null) {
    $cuestionariosRespondidos = $this->mis_funciones->limpiaSiete($cuestRespondidos);
    //cuestionarios contiene los nombres de los cuest y el titulo de cada cuest
    foreach ($cuestionarios as $cuestionario) {?>
        <?php if (in_array($cuestionario->idpregunta, $cuestionariosRespondidos)) { ?>
            <div class="col-md-2 col-sm-2 col-xs-3">
                <h3 class="titulo4 text-center"><?php echo $cuestionario->titulo ?></h3>
                <?php //$numero = intval(preg_replace('/[^0-9]+/', '', $cuestionario), 10); ?><!--obtiene solo el o los numeros de la cadena-->
                    <figure>
                        <img
                            class="cuestionario center-block img-circle borde zoom tamano-cuest"
                            id="<?php echo $cuestionario->idpregunta ?>"
                            alt="<?php echo $cuestionario->idpregunta ?>"
                            src="<?php echo base_url() . "public/images/icons/test/testHecho.png" ?>"/>
                    </figure>

            </div>
        <?php }
        else {//gris sin link y disponibles.
            if ($cuestionarioDisp == null) {
                    ?>
                    <div class="col-md-2 col-sm-2 col-xs-3">
                        <h3 class="titulo4 text-center"><?php echo $cuestionario->titulo ?></h3>
                        <a id="<?php echo "link" . $cuestionario->idpregunta ?>" href="#section2">
                            <figure>
                                <img
                                    class="cuestionario center-block img-circle borde zoom cuest cuest-gris tamano-cuest"
                                    id="<?php echo $cuestionario->idpregunta ?>"
                                    alt="<?php echo $cuestionario->idpregunta ?>"
                                    src="<?php echo base_url() . "public/images/icons/test/test.png" ?>"/>
                            </figure>
                        </a>
                    </div>

                <?php
            } else {//ya hay un cuestionario disponible
                if (in_array($cuestionario->idpregunta, $cuestionarioDisponible))
                //si esta en disponibles se pone en verde
                {
                    ?>
                    <div class="col-md-2 col-sm-2 col-xs-3">
                        <h3 class="titulo4 text-center"><?php echo $cuestionario->titulo ?></h3>
                        <a href='<?php echo base_url() . "aplicacion/cuestionariodep/" . $cuestionario->idpregunta ?>'>
                        <figure>
                            <img
                                class="cuestionario center-block img-circle borde zoom cuest  tamano-cuest"
                                id="<?php echo $cuestionario->idpregunta ?>"
                                alt="<?php echo $cuestionario->idpregunta ?>"
                                src="<?php echo base_url() . "public/images/icons/test/test.png" ?>"/>
                        </figure>
                        </a>
                    </div>
                <?php } else
                //se pone en gris
                {
                    ?>
                    <div class="col-md-2 col-sm-2 col-xs-3">
                        <h3 class="titulo4 text-center"><?php echo $cuestionario->titulo ?></h3>
                        <a id="<?php echo "link" . $cuestionario->idpregunta ?>" href="#section2">
                            <figure>
                                <img
                                    class="cuestionario center-block img-circle borde zoom cuest cuest-gris tamano-cuest"
                                    id="<?php echo $cuestionario->idpregunta ?>"
                                    alt="<?php echo $cuestionario->idpregunta ?>"
                                    src="<?php echo base_url() . "public/images/icons/test/test.png" ?>"/>
                            </figure>
                        </a>
                    </div>
                <?php } ?>
            <?php }
        }?>
        <?php
        $i++;
    }
}
else{//ningun cuestionario respondido?>
    <?php //si cuestionarioDisp esta vacio
    if($cuestionarioDisp ==null) {
        foreach ($cuestionarios as $cuestionario) {
            ?>
            <div class="col-md-2 col-sm-2 col-xs-3">
                <h3 class="titulo4 text-center"><?php echo $cuestionario->titulo ?></h3>
                <a id="<?php echo "link".$cuestionario->idpregunta ?>" href="#section2">
                    <figure>
                        <img
                            class="cuestionario center-block img-circle borde zoom cuest cuest-gris tamano-cuest"
                            id="<?php echo $cuestionario->idpregunta ?>"
                            alt="<?php echo $cuestionario->idpregunta ?>"
                            src="<?php echo base_url() . "public/images/icons/test/test.png" ?>"/>
                    </figure>
                </a>
            </div>

        <?php }
    }else {//ya hay un cuestionario disponible
    ?>
    <?php foreach($cuestionarios as $cuestionario) {
        if(in_array($cuestionario->idpregunta, $cuestionarioDisponible)){?>
        <div class="col-md-2 col-sm-2 col-xs-3">
            <h3 class="titulo4 text-center"><?php echo $cuestionario->titulo ?></h3>
            <a href='<?php echo base_url()."aplicacion/cuestionariodep/".$cuestionario->idpregunta?>'>
            <figure>
                <img
                    class="cuestionario center-block img-circle borde zoom cuest  tamano-cuest"
                    id="<?php echo $cuestionario->idpregunta ?>"
                    alt="<?php echo $cuestionario->idpregunta ?>"
                    src="<?php echo base_url() . "public/images/icons/test/test.png" ?>"/>
            </figure>
            </a>
        </div>
    <?php }else{?>
        <div class="col-md-2 col-sm-2 col-xs-3">
            <h3 class="titulo4 text-center"><?php echo $cuestionario->titulo ?></h3>
            <a id="<?php echo "link".$cuestionario->idpregunta ?>" href="#section2">
                <figure>
                    <img
                        class="cuestionario center-block img-circle borde zoom cuest cuest-gris tamano-cuest"
                        id="<?php echo $cuestionario->idpregunta ?>"
                        alt="<?php echo $cuestionario->idpregunta ?>"
                        src="<?php echo base_url() . "public/images/icons/test/test.png" ?>"/>
                </figure>
            </a>
        </div>
    <?php }
         $i++;
    }
 }
}
?>
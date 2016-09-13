<?php
$i=1;
$aux=$this->mis_funciones->limpia($cuestionarios);//aux contiene los cuestionarios: cuestionario1 cuestionario2 ... sin repetir

if($cuestRespondidos!=null) {
    $limpio = $this->mis_funciones->limpiaCuatro($cuestRespondidos);
    foreach ($aux as $cuestionario) {?>
        <?php if (in_array($cuestionario, $limpio)) { ?>
            <div class="col-md-6">
                <h3 class="titulo4 text-center">Test <?php echo $i ?></h3>

                <div id="<?php echo $cuestionario ?>"
                     class="nicdark_btn nicdark_bg_greydark white medium nicdark_radius nicdark_absolute_left">
                    HECHO <img style="width: 20px;height: 20px" src="<?php echo base_url()."public/images/icons/test/checked.png"?>"/>
                </div>
                <?php $numero = intval(preg_replace('/[^0-9]+/', '', $cuestionario), 10); ?><!--obtiene solo el o los numeros de la cadena-->
                <a href="#<?php echo $cuestionario ?>"><img style="height: 120px;width: 120px;cursor: pointer"
                                                            class="cuestionario center-block"
                                                            id="<?php echo $cuestionario ?>"
                                                            name="<?php echo $cuestionario ?>"
                                                            src="<?php echo base_url() . "public/images/icons/test/test.png" ?>"/></a>
            </div>
        <?php }
        else { ?>
            <div class="col-md-6">
                <h3 class="titulo4 text-center">Test <?php echo $i ?></h3>
                <?php $numero = intval(preg_replace('/[^0-9]+/', '', $cuestionario), 10); ?><!--obtiene solo el o los numeros de la cadena-->
                <a href="<?php echo base_url() . "aplicacion/cuestionarioali"?>"><img
                        style="height: 120px;width: 120px;cursor: pointer" class="cuestionario center-block rotate cuest"
                        id="<?php echo $cuestionario ?>" name="<?php echo $cuestionario ?>"
                        src="<?php echo base_url() . "public/images/icons/test/test.png" ?>"/></a>
            </div>
        <?php } ?>
        <?php
        $i++;
    }
}
else{?>
    <?php foreach($aux as $cuestionario) {?>
        <div class="col-md-6">
            <h3 class="titulo4 text-center">Test <?php echo $i ?></h3>
            <?php $numero = intval(preg_replace('/[^0-9]+/', '', $cuestionario), 10); ?><!--obtiene solo el o los numeros de la cadena-->
            <a href="<?php echo base_url() . "aplicacion/cuestionarioali"?>"><img
                    style="height: 120px;width: 120px;cursor: pointer" class="cuestionario center-block rotate cuest"
                    id="<?php echo $cuestionario ?>" name="<?php echo $cuestionario ?>"
                    src="<?php echo base_url() . "public/images/icons/test/test.png" ?>"/></a>
        </div>
        <?php
        $i++;
    }?>
<?php }?>
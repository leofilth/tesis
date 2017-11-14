<?php include "navs/nav_lideres.php"?>
<div class="container-fluid bg-lideres padingtop padingbot">
    <div class="container">
        <h1 class="text-center titulo1">Lideres de Wambo</h1>
        <div class="row">
            <div class="col-md-8 col-sm-8 col-xs-12">
                <div class="instruefecto">
                    <div class="instruccion-morado">
                        <h4 class="modal-title titulo-modal-tip">Bienvenido al Ranking Wambo, ¡esfuérzate por ser el número uno! </h4>
                    </div>
                    <div style="float: left;margin-left: 50px;clear: left">
                        <div class="triangulo-morado"></div>
                    </div>
                </div>
                <figure>
                    <img class="img-border pull-left icon-inst" alt="estudiante1" style="margin-top: 15px" src="<?php echo base_url().'public/images/modal/student1.png'?>">
                </figure>
            </div>
        </div>
        <br>
        <br>
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <table class="table tableshadow">
                    <thead class="thead">
                    <tr>
                        <th class="titulo-tabla">#Posición</th>
                        <th class="titulo-tabla">Nick</th>
                        <th class="titulo-tabla">Puntaje</th>
                    </tr>
                    </thead>
                    <tbody class="tbody">
                    <?php $numero=1;
                    $existe=false;
                    foreach($lideres as $lider){
                        if($lider->nick_fk==$datos->nick)
                        {$existe=true;
                            ?>
                            <!-- Inicio Estoy dentro del top 10 y me resalta la fila-->
                            <tr class="text-center posicion animated infinite pulse">
                                <td class=""><p class="tituloNickLider"><?php echo $numero;?></p></td>
                                <td class="tituloNickLider">
                                    <?php echo $lider->nick_fk?>
                                    <figure>
                                        <img width="64" height="64"  alt="imagenUsuario" class="img-circle center-block fondoavatar"
                                             src="<?php
                                             if($lider->avatar_name_fk=="user")
                                             {
                                                 if($lider->sexo=="masculino"){
                                                     echo base_url()."public/images/user_avatar/user-mas.png";
                                                 }else{
                                                     echo base_url()."public/images/user_avatar/user-fem.png";
                                                 }
                                             }
                                             else
                                             {
                                                 echo base_url()."public/images/user_avatar/".$lider->avatar_name_fk.".png";
                                             }
                                             ?>">
                                    </figure>
                                </td>
                                <td class="tituloNickLider"><?php echo $lider->puntaje?></td>
                            </tr>
                            <!-- Fin Estoy dentro del top 10 y me resalta la fila-->
                            <?php }else{?>
                            <tr class="text-center">
                                <td class=""><p class="tituloNickLider"><?php echo $numero;?></p></td>
                                <td class="tituloNickLider">
                                    <?php echo $lider->nick_fk?>
                                    <figure>
                                        <img width="64" height="64"  alt="imagenUsuario" class="img-circle center-block fondoavatar"
                                             src="<?php
                                             if($lider->avatar_name_fk=="user")
                                             {
                                                 if($lider->sexo=="masculino"){
                                                     echo base_url()."public/images/user_avatar/user-mas.png";
                                                 }else{
                                                     echo base_url()."public/images/user_avatar/user-fem.png";
                                                 }
                                             }
                                             else
                                             {
                                                 echo base_url()."public/images/user_avatar/".$lider->avatar_name_fk.".png";
                                             }
                                             ?>">
                                    </figure>
                                </td>
                                <td class="tituloNickLider"><?php echo $lider->puntaje?></td>
                            </tr>
                            <?php }?>
                    <?php $numero++;
                    if($numero==11){break;}}
                    ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <?php if($existe==false){
        $contador=0;
        foreach($lideres as $lider){
            $contador++;
            if($lider->nick_fk==$datos->nick){?>
                <!--Inicio Muestra posicion usuario fuera del top 10-->
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <table class="table tableshadow">
                    <tbody class="tbody">
                        <tr class="text-center posicion animated infinite pulse">
                            <td class=""><p class="tituloNickLider"><?php echo $contador;?></p></td>
                            <td class="tituloNickLider">
                                <?php echo $lider->nick_fk?>
                                <figure>
                                    <img width="64" height="64" alt="imagenUsuario" class="img-circle center-block fondoavatar"
                                         src="<?php
                                         if($lider->avatar_name_fk=="user")
                                         {
                                             if($lider->sexo=="masculino"){
                                                 echo base_url()."public/images/user_avatar/user-mas.png";
                                             }else{
                                                 echo base_url()."public/images/user_avatar/user-fem.png";
                                             }
                                         }
                                         else
                                         {
                                             echo base_url()."public/images/user_avatar/".$lider->avatar_name_fk.".png";
                                         }
                                         ?>">
                                </figure>
                            </td>
                            <td class="tituloNickLider"><?php echo $lider->puntaje?></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div><!--Termino Muestra posicion usuario fuera del top 10-->
                <?php break;
            }
        }
    }?>
</div>
<?php include "footer.php"?>
<script>
    $(document).ready(function() {
        $(".icon-inst").on({
            mouseenter: function () {
                $(this).addClass("animated jello");
            },
            mouseleave: function () {
                $(this).removeClass("animated jello");
            }
        });
        $(".instruefecto").on({
            mouseenter: function () {
                $(this).addClass("animated bounce");
            },
            mouseleave: function () {
                $(this).removeClass("animated bounce");
            }
        });
    });
</script>
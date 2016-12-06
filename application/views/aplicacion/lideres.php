<?php include "navs/nav_cuenta.php"?>
<div class="container-fluid bg-im3 padingtop">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <h1 class="text-center titulo1">Lideres de Wambo</h1>
                <table class="table tableshadow">
                    <thead class="thead">
                    <tr>
                        <th><h1>#Posición</h1></th>
                        <th><h1>Nick</h1></th>
                        <th><h1>Puntaje</h1></th>
                    </tr>
                    </thead>
                    <tbody class="tbody">
                    <?php $numero=1;foreach($lideres as $lider){?>
                        <tr class="text-center">
                            <td class=""><p class="tituloNickLider"><?php echo $numero;?></p></td>
                            <td class="tituloNickLider"><?php echo $lider->nick_fk?><img width="64px" height="64px"  class="img-circle center-block fondoavatar"
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
                            </td>
                            <td class="tituloNickLider"><?php echo $lider->puntaje?></td>
                        </tr>
                    <?php $numero++;
                    if($numero==11){break;}}?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<?php include "footer.php"?>

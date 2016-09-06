<?php include "navs/nav_cuenta.php"?>
<div class="container-fluid bg-im3">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <h1 class="text-center">Lideres de Wambo</h1>
                <table class="table">
                    <thead>
                    <tr>
                        <th class="text-center">Nick</th>
                        <th class="text-center">Puntaje</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php foreach($lideres as $lider){?>
                        <tr class="success text-center">
                            <td class="titulo4"><?php echo $lider->nick_fk?><img width="64px" height="64px"  class="img-circle center-block"
                                                                                 src="<?php
                                                                                 if($lider->avatar_name=="")
                                                                                 {
                                                                                     echo base_url()."public/images/user_avatar/user.jpg";
                                                                                 }
                                                                                 else if($lider->avatar_name==$lider->nick_fk)
                                                                                 {
                                                                                     echo base_url()."public/images/user_avatar/".$lider->nick_fk.".jpg";
                                                                                 }
                                                                                 ?>">
                            </td>
                            <td class="titulo4"><?php echo $lider->puntaje?></td>
                        </tr>
                    <?php }?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<?php include "footer.php"?>

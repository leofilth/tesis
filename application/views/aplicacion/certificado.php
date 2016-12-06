<?php include "navs/nav_cuenta.php" ?>
<div class="container-fluid bg-im3 padingtop"style="padding-bottom: 100px">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <img width="200px" height="200px"  class="img-circle center-block fondoavatar"
                     src="<?php
                     if($datos->avatar_name=="user")
                     {
                         if($datos->sexo=="masculino"){
                             echo base_url()."public/images/user_avatar/user-mas.png";
                         }else{
                             echo base_url()."public/images/user_avatar/user-fem.png";
                         }
                     }
                     else
                     {
                         echo base_url()."public/images/user_avatar/".$datos->avatar_name.".png";
                     }
                     ?>">
            </div>
            <div class="col-md-6">
                <?php if($datos->sexo == "masculino"){?>
                    <h1 class="titulo1">Bienvenido <?php echo $datos->nick?></h1>
                <?php }else{?>
                    <h1 class="titulo1">Bienvenida <?php echo $datos->nick?></h1>
                <?php }?>
            </div>
        </div>
    </div>
</div>
<?php include "footer.php"?>
<script>

</script>

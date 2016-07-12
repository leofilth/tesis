<?php include "nav_cuenta.php" ?>
    <div class="container "style="padding-top: 100px;padding-bottom: 100px;">
        <div id="section2" class="container-fluid">
            <h1>Section 2</h1>
            <div class="row">
                <div class="col-md-12">
                    <div class="titulo4">Verduras Mágicas</div>
                    <div class="row">
                        <div class="col-md-7 col-sm-12 col-xs-12" style="padding-bottom: 10px;padding-top: 10px">
                            <?php
                            foreach($verduras as $verdura){
                                ?>
                                <div class="col-md-3 col-sm-3 col-xs-3" style="padding-bottom: 10px">
                                    <img style="cursor: pointer;width: 120px;height: 120px;" title="<?php echo $verdura->nombre?>" src="<?php echo base_url().$verdura->link?>" class="img-circle fondoblanco rotate center-block verduras" data-toggle="modal" data-target="#myModal">
                                    <p id="<?php echo $verdura->nombre?>" class="hidden"><?php echo $verdura->descripcion?></p>
                                </div>
                                <?php
                            }
                            ?>
                        </div>
                        <div class="col-md-5 col-sm-12 col-xs-12">
                            <div class="bubble verde">
                                <a title="gogo" href="#">
                                    <h2 id="explica2">Elige una verdura</h2>
                                    <h3 id="descripcion">Te enseñare sobre ella</h3>
                                </a>
                            </div>
                            <img width="200" height="359" src="<?php echo base_url().'public/images/student2.png'?>" class="center-block">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php include "footer.php"?>
<nav class="navbar navbar-default">
    <div class="container-fluid">
        <div class="navbar-header">
            <button aria-controls="navbar" aria-expanded="false" data-target="#navbar" data-toggle="collapse" class="navbar-toggle collapsed" type="button">
                <span class="sr-only">Tesis</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a href="#" class="navbar-brand">La Tesih</a>
        </div>
        <div class="navbar-collapse collapse" id="navbar">
            <ul class="nav navbar-nav">
                <li class="active"><a href="#">Home</a></li>
                <li><a href="#">About</a></li>
                <li><a href="#">Contact</a></li>
                <li class="dropdown">
                    <a aria-expanded="false" aria-haspopup="true" role="button" data-toggle="dropdown" class="dropdown-toggle" href="#">Dropdown <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="#">Action</a></li>
                        <li><a href="#">Another action</a></li>
                        <li><a href="#">Something else here</a></li>
                        <li class="divider" role="separator"></li>
                        <li class="dropdown-header">Nav header</li>
                        <li><a href="#">Separated link</a></li>
                        <li><a href="#">One more separated link</a></li>
                    </ul>
                </li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li class="active"><a href="./">Default <span class="sr-only">(current)</span></a></li>
                <li><a href="../navbar-static-top/">Static top</a></li>
                <li><a style="background-color: #008AD1;color: white" href="<?php echo base_url()?>aplicacion/cerrarsesion">Cerrar Sesion</a></li>
            </ul>
        </div><!--/.nav-collapse -->
    </div><!--/.container-fluid -->
</nav>
<div class="container-fluid">
    <h1>Bienvenido <strong><?php echo $datos->nombre?></strong></h1>
    <p><?php echo print_r($datos)?></p>
    <div class="row">
        <div class="col-md-7">
            <img width="200px" height="200px" class="img-circle zoom"
                 src="<?php
                             if($datos->avatar_name=="")
                             {
                                 echo base_url()."public/images/user_avatar/user.jpg";
                             }
                             else if($datos->avatar_name=$datos->nick)
                             {
                                 echo base_url()."public/images/user_avatar/".$datos->nick.".jpg";
                             }
                        ?>">
            <?php $atributos=array('role'=>'form','class'=>'form-group','id'=>'miformulario','name'=>'form');
            echo form_open_multipart(null,$atributos);//utulizar siempre null, recomendado
            ?>
            <?php
            $datos=array
            (
                'name'=>'archivo',
                'id'=>'file',
                'type'=>'file',
                'class'=>'filestyle',
                'data-buttonName'=>"btn-primary"
            );
            echo form_input($datos);
            ?>
            <?php
            $datos=array
            (
                'name'=>'boton',
                'id'=>'boton',
                'type'=>'submit',
                'class'=>"btn btn-primary btn-md",
                'value'=>'Actualizar Foto'
            );
            echo form_submit($datos);
            ?>
            <?php
            echo form_close();
            ?>
            <h2>Tus datos</h2>
        </div>
        <div class="col-md-5">
            <h2>Progreso</h2>
        </div>
    </div>
</div>
<?php include "footer.php"?>